<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TaskController extends Controller
{
    public function index()
    {
        $task = Task::get();
        return view('backend.Task.index', compact('task'));
    }
    public function create()
    {
        return view('backend.task.create');
    }
    public function store(Request $request)
    {

        $request->validate([

            'title' => 'required',
            'link' => 'nullable|url',
            'status' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg',
        ]);

        try {
            //one line requist
            $data = $request->all();

            //image upload...
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $photoName = time() . '.' . $extension;
            $file->move(public_path('uploads/Task/'), $photoName);
            $data['image'] = 'uploads/task/' . $photoName;
            //image uploadend

            Task::create($data);
            //Message....

            Session::flash('type', 'success');
            Session::flash('message', 'success');


            return redirect()->route('user.task.index');
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function edit($id)
    {
        $task = Task::findOrFail($id);
        return view('backend.Task.edit', compact('task'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([

            'title' => 'required',
            'link' => 'nullable|url',
            'status' => 'required',
            'image' => 'nullable|mimes:png,jpg,jpeg',
        ]);
        //multiline requist
        $task = Task::findOrFail($id);
        $task->title = $request->title;
        $task->link = $request->link;
        $task->status = $request->status;
        $file = $request->file('image');
        if (!empty($file)) {
            unlink(public_path($task->image));
            $extension = $file->getClientOriginalExtension();
            $photoName = time() . '.' . $extension;
            $file->move(public_path('uploads/task/'), $photoName);
            $task->image = 'uploads/task/' . $photoName;
        }
        $task->update();
        Session::flash('type', 'success');
        Session::flash('message', 'success');
        return redirect()->route('user.task.index');

        /*in one line code forupdate;
Task::findOrFail($id)->update($request->all());
*/
    }
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        unlink(public_path($task->image));
        $task->delete();
        Session::flash('message', 'data delete success');
        return redirect()->back();
    }
}
