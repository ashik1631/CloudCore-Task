<div id="sideNavs" class="sideBar_wrapper sideBar_close">
    <!-- sideBar close -->
    <button id="sideBarClose" type="button" class="sideBar_close_btn float-right">x</button>
    <!-- sideBar nav-->
    <nav class="sideBar_nav">
        <!-- sideBar logo -->
        <a class="logo d-block text-center" href="#">CloudCore-Task</a>
        <!-- sideBar content -->
        <ul class="navbar-nav">
            <!-- sideBar item -->
            <li class="nav-item">
                <a class="nav-link {{ Route::is('user.UserProfile.index') ? 'active' : '' }}" href="{{ route('user.UserProfile.index') }}"><i
                        class="fa fa-fw fa-rocket text-warning"></i>
                    <span class="mx-2">User Profile</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('user.task.index') ? 'active' : '' }}" href="{{ route('user.task.index') }}"><i
                        class="fa fa-fw fa-rocket text-warning"></i>
                    <span class="mx-2">Task</span></a>
            </li>
        </ul>
    </nav>
</div>
<i class="fa-solid fa-sliders"></i>
