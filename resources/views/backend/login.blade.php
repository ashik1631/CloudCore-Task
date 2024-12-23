@extends('layouts.backend')
@section('content')
<div>
    <nav aria-label="breadcrumb" class="mt-3">
        <!-- container area start -->
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-primary" href="{{ route('user.task.index') }}">Go-Task-Page</a></li>
                <li class="breadcrumb-item active" aria-current="page">After-Login-Here</li>
            </ol>
        </div>
        <!-- container area end -->
    </nav>
</div>
<!-- breadcrumb area end -->

<!-- login area start -->
<section>
    <!-- container area start -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card login_form p-4 shadow">
                    <h3>Login to your account</h3>
                    @include('layouts.message')

                    <form action="{{ url('/logins') }}" method="POST">
                        @csrf
                        <div class="input-group login mb-4">
                            <span class="input-group-text text-muted" id="inputGroup-sizing-default1"><i
                                    class="las la-envelope la-2x"></i></span>
                            <input type="text" name="email" required class="form-control form-control-lg rounded-0"
                                aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default2"
                                placeholder="user@gmail.com">
                                <span class="input-group-text text-muted" id="inputGroup-sizing-default3"><i
                                    class="las la-eye-slash la-2x"></i></span>
                        </div>
                        <div class="input-group login mb-3">
                            <span class="input-group-text text-muted" id="inputGroup-sizing-default2"><i
                                    class="las la-lock la-2x"></i></span>
                            <input type="password" name="password" required class="form-control form-control-lg border-end-0"
                                aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default1"
                                placeholder="Password">
                            <span class="input-group-text text-muted" id="inputGroup-sizing-default3"><i
                                    class="las la-eye-slash la-2x"></i></span>
                        </div>
                        <div class="input-group login mb-3">
                            <span class="input-group-text text-muted" id="inputGroup-sizing-default3"><i
                                class="las la-eye-slash la-2x"></i></span>
                            <input type="file" name="image" class="form-control" placeholder="select your User-image">
                            <span class="input-group-text text-muted" id="inputGroup-sizing-default3"><i
                                class="las la-eye-slash la-2x"></i></span>
                        </div>
                        <div class="d-flex justify-content-between mb-4 rem__for">
                            <div class="form-check d-flex align-items-center">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label ms-2" for="flexCheckDefault">
                                    Remember me
                                </label>
                            </div>
                            <a class="text-primary" href="#">Forget Password?</a>
                        </div>
                        <div class="submit__btn mb-5">
                            <button type="submit" class="btn btn-lg btn-primary shadow">LOGIN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- container area end -->
</section>
@endsection
