<div class="nav_wrapper fixed-top">
    <!-- fixed navbar -->
    <nav class="navbar py-3">
        <!-- content area -->
        <div class="container-fluid">
            <!-- sideBar open button -->
            <button id="sideBarOpen" type="button" class="collapse_btn">
                <i class="fas fa-bars"></i>
            </button>
            <!-- navbar right content -->
            <div class="right_content text-right">
                <!-- user profile link-->
                @guest
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('user.UserProfile.index') ? 'active' : '' }}" href="{{ route('user.UserProfile.index') }}"><i
                            class="fa fa-fw fa-rocket text-warning"></i>
                        <span class="mx-2">Login Fast</span></a>
                </li>
                @endguest
                @if (auth()->check())
                <div class="btn-group">
                    <button class="dropdown-toggle user" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="img-fluid rounded-circle" src="{{asset(auth()->user()->image)}}" alt="">
                        <span class="mx-2">{{auth()->user()->name}}</span><br><span class="mx-2">{{auth()->user()->email}}</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right profile_link">

                        <div class="pro_body">
                        </ul>
                                <hr class="m-0">
                                <li><a href="{{ route('logout') }}">
                                        <i class="fas fa-sign-out-alt text-danger"></i> <span class="mx-2">Logout</span>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </nav>
</div>
