<div class="app-menu">

    <!-- Brand Logo -->
    <div class="logo-box">
        <!-- Brand Logo Light -->
        <a href="index.html" class="logo-light">
            {{-- <img src="assets/images/logo-light.png" alt="logo" class="logo-lg">
            <img src="assets/images/logo-sm.png" alt="small logo" class="logo-sm"> --}}
            <h2>SAMS</h2>
        </a>

        <!-- Brand Logo Dark -->
        <a href="index.html" class="logo-dark">
            {{-- <img src="assets/images/logo-dark.png" alt="dark logo" class="logo-lg">
            <img src="assets/images/logo-sm.png" alt="small logo" class="logo-sm"> --}}
            <h2>SAMS</h2>
        </a>
    </div>

    <!-- menu-left -->
    <div class="scrollbar">

        <!-- User box -->
        <div class="user-box text-center">
            <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="javascript: void(0);" class="dropdown-toggle h5 mb-1 d-block" data-bs-toggle="dropdown">Geneva Kennedy</a>
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
            <p class="text-muted mb-0">Admin Head</p>
        </div>

        <!--- Menu -->
        <ul class="menu">

            <li class="menu-title">Navigation</li>

            <li class="menu-item">
                <a href="#menuDashboards" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i data-feather="airplay"></i></span>
                    <span class="menu-text"> Dashboards </span>
                    <span class="badge bg-success rounded-pill ms-auto">4</span>
                </a>
                <div class="collapse" id="menuDashboards">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="index.html" class="menu-link">
                                <span class="menu-text">Dashboard 1</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="dashboard-2.html" class="menu-link">
                                <span class="menu-text">Dashboard 2</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="dashboard-3.html" class="menu-link">
                                <span class="menu-text">Dashboard 3</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="dashboard-4.html" class="menu-link">
                                <span class="menu-text">Dashboard 4</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="menu-title">Manage</li>
     

            {{-- Student --}}
            <li class="menu-item">
                <a href="#menuEcommerce" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i data-feather="users"></i></span>
                    <span class="menu-text"> Manage Student </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuEcommerce">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="{{route('student.signup')}}" class="menu-link">
                                <span class="menu-text">Add Student</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('admin.students.index')}}" class="menu-link">
                                <span class="menu-text">View All Student</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>


            {{-- teacher --}}
            <li class="menu-item">
                <a href="#menuCrm" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i data-feather="users"></i></span>
                    <span class="menu-text">Manage Teacher</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuCrm">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="crm-dashboard.html" class="menu-link">
                                <span class="menu-text">Add Teacher</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="crm-contacts.html" class="menu-link">
                                <span class="menu-text">View Teacher</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>


            {{-- Attendance Management --}}
            <li class="menu-item">
                <a href="#menuTickets" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i data-feather="users"></i></span>
                    <span class="menu-text">Manage Attendance</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuTickets">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="crm-dashboard.html" class="menu-link">
                                <span class="menu-text">Mark Attendance</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="crm-contacts.html" class="menu-link">
                                <span class="menu-text">View Attendance</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>


            {{-- Program --}}
            <li class="menu-item">
                <a href="#menuEmail" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i data-feather="users"></i></span>
                    <span class="menu-text">Manage Program</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuEmail">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="crm-dashboard.html" class="menu-link">
                                <span class="menu-text">Add Program</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="crm-contacts.html" class="menu-link">
                                <span class="menu-text">View Program</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>


            {{-- Subject --}}
            <li class="menu-item">
                <a href="#menuBaseui" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i data-feather="users"></i></span>
                    <span class="menu-text">Manage Subject</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuBaseui">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="crm-dashboard.html" class="menu-link">
                                <span class="menu-text">Add Subject</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="crm-contacts.html" class="menu-link">
                                <span class="menu-text">View Subject</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
           

            {{-- For Tech Infomation, Updation and News  --}}
            <li class="menu-item">
                <a href="apps-social-feed.html" class="menu-link">
                    <span class="menu-icon"><i data-feather="rss"></i></span>
                    <span class="menu-text"> Social Feed </span>
                    <span class="badge bg-pink ms-auto">Hot</span>
                </a>
            </li>

            {{-- Companies for Placement and InternShip --}}
            <li class="menu-item">
                <a href="apps-companies.html" class="menu-link">
                    <span class="menu-icon"><i data-feather="activity"></i></span>
                    <span class="menu-text"> Companies </span>
                </a>
            </li>

            {{-- Student Best Projects --}}
            <li class="menu-item">
                <a href="#menuProjects" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i data-feather="briefcase"></i></span>
                    <span class="menu-text"> Projects </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuProjects">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="project-list.html" class="menu-link">
                                <span class="menu-text">List</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="project-detail.html" class="menu-link">
                                <span class="menu-text">Detail</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="project-create.html" class="menu-link">
                                <span class="menu-text">Create Project</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="menu-item">
                <a href="#menuTasks" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i data-feather="clipboard"></i></span>
                    <span class="menu-text"> Tasks </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuTasks">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="task-list.html" class="menu-link">
                                <span class="menu-text">List</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="task-details.html" class="menu-link">
                                <span class="menu-text">Details</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="task-kanban-board.html" class="menu-link">
                                <span class="menu-text">Kanban Board</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="menu-item">
                <a href="#menuContacts" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i data-feather="book"></i></span>
                    <span class="menu-text"> Contacts </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuContacts">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="contacts-list.html" class="menu-link">
                                <span class="menu-text">Members List</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="contacts-profile.html" class="menu-link">
                                <span class="menu-text">Profile</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
          

            <li class="menu-item">
                <a href="#menuForms" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i data-feather="bookmark"></i></span>
                    <span class="menu-text"> Forms </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuForms">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="forms-elements.html" class="menu-link">
                                <span class="menu-text">General Elements</span>
                            </a>
                        </li>
                       
                    </ul>
                </div>
            </li>
        </ul>
        <!--- End Menu -->
        <div class="clearfix"></div>
    </div>
</div>