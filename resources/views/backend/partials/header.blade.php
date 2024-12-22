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
                <div class="btn-group">
                    <button class="dropdown-toggle user" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img width="35px" class="img-fluid rounded-circle" src="{{asset('assets/backend/vendor/img/avata/ashik.jpeg')}}"" alt="img" width="40"> <span class="mx-2">Md. Ashik</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right profile_link">
                        <div class="pro_body">
                            <p>welcome</p>
                            <ul>
                                <li><a href="#">
                                        <i class="fas fa-user text-success"></i> <span class="mx-2">My Profile</span>
                                    </a></li>
                                <li><a href="#">
                                        <i class="fas fa-cogs text-primary"></i> <span class="mx-2">Setting</span>
                                    </a></li>
                                <hr class="m-0">
                                <li><a href="#">
                                        <i class="fas fa-sign-out-alt text-danger"></i> <span class="mx-2">Logout</span>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
