<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->
        <div class="user-box text-center">
            <img src="../assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme"
                class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                    data-bs-toggle="dropdown">Geneva Kennedy</a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user me-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings me-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock me-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out me-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>
            <p class="text-muted">Admin Head</p>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Navigation</li>

                @if (Auth::user()->user_type == 'teacher')
                <li>
                    <a href="{{ route('teacher') }}" data-bs-toggle="collapse">
                        <i data-feather="airplay"></i>
                        <span> Dashboards </span>
                    </a>
                </li>
                @else
                <li>
                    <a href="{{ route('student') }}">
                        <i data-feather="airplay"></i>
                        <span> Dashboards </span>
                    </a>
                </li>
                @endif

                <li>
                    <a href="#sidebarEcommerce" data-bs-toggle="collapse">
                        <i data-feather="shopping-cart"></i>
                        <span> Course </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEcommerce">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('course.index') }}">View Course</a>
                            </li>
                            @if (Auth::user()->user_type == 'teacher')
                            <li>
                                <a href="{{ route('course.create') }}">Add Course</a>
                            </li>
                            @endif
                            <li>
                                <a href="{{ route('course.assign') }}">Course Assign Teacher</a>
                            </li>
                            @if (Auth::user()->user_type == 'teacher')
                            <li>
                                <a href="{{ route('course.assign-teacher') }}">Add Course Assign</a>
                            </li>
                            @endif
                            @if (auth()->user()->user_type == 'student')
                            <li>
                                <a href="{{ route('course.assign-index') }}">Course Assign View</a>
                            </li>
                            <li>
                                <a href="{{ route('course.assign-student') }}">Course Assign Add</a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </li>

                @if (Auth::user()->user_type == 'teacher')
                    <li>
                        <a href="#sidebarCrm" data-bs-toggle="collapse">
                            <i data-feather="users"></i>
                            <span> Ques Ans </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarCrm">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{ route('ques-ans.index') }}">View Ques Ans</a>
                                </li>
                                <li>
                                    <a href="{{ route('ques-ans.create') }}">Add Ques Ans</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#sidebarSend" data-bs-toggle="collapse">
                            <i data-feather="users"></i>
                            <span> Send Link </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarSend">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{ route('send-link.index') }}">View Send Link</a>
                                </li>
                                <li>
                                    <a href="{{ route('send-link.create') }}">Add Send Link</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @else
                    <li>
                        <a href="#sidebarSend" data-bs-toggle="collapse">
                            <i data-feather="users"></i>
                            <span> Send Link </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarSend">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{ route('send-link.student-index') }}">View Send Link</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endif


            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
