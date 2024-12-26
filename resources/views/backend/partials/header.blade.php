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
                    <div class="btn-group bg-danger">
                        <button class="fw-bold"> <a href="{{ route('user.UserProfile.index') }}"><i
                                    class="fa fa-fw fa-user text-warning"></i>
                                <span class="mx-2">Login / Register-Fast</span></a></button>
                    </div>
                @endguest
                @if (auth()->check())
                    <div class="btn-group">
                        <button class="dropdown-toggle user" type="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <span class="mx-2"><img src="{{ asset(auth()->user()->image ) }}" width="30" style="border-radius: 100px;" alt="photo"></span>
                            <span>Name:</span></span><span class="mx-2">{{ auth()->user()->name }}</span><br>
                            <span>Mail:</span><span
                                class="mx-2">{{ auth()->user()->email }}</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right profile_link bg-danger">
                            <div class="pro_body">
                                </ul>
                                <li><a href="{{ route('logout') }}"> <span
                                            class="mx-2">Logout</span>
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
