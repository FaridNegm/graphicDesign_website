<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{url('dashboard')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{url('dashboard')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                {{-- Settings Links --}}

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-cog"></i>
                        <p>
                            Settings
                            <i class="fa fa-angle-right right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('all-settings')}}" class="nav-link">
                                <i class="fa fa-dot-circle-o nav-icon"></i>
                                <p>All Settings</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Users Links --}}

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                            Users
                            <i class="fa fa-angle-right right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('users/all-user')}}" class="nav-link">
                                <i class="fa fa-dot-circle-o nav-icon"></i>
                                <p>All Users</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('users/add-new-user')}}" class="nav-link">
                                <i class="fa fa-dot-circle-o nav-icon"></i>
                                <p>Add New User</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Works Links --}}

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-briefcase"></i>
                        <p>
                            My Works
                            <i class="fa fa-angle-right right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('all-works')}}" class="nav-link">
                                <i class="fa fa-dot-circle-o nav-icon"></i>
                                <p>All Works</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('add-new-work')}}" class="nav-link">
                                <i class="fa fa-dot-circle-o nav-icon"></i>
                                <p>Add New Work</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Services Links --}}

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-angellist"></i>
                        <p>
                            My Services
                            <i class="fa fa-angle-right right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('all-services')}}" class="nav-link">
                                <i class="fa fa-dot-circle-o nav-icon"></i>
                                <p>All Services</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('add-new-service')}}" class="nav-link">
                                <i class="fa fa-dot-circle-o nav-icon"></i>
                                <p>Add New Service</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Testmonials Links --}}

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-quote-left"></i>
                        <p>
                            Testmonials
                            <i class="fa fa-angle-right right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('all-testmonials')}}" class="nav-link">
                                <i class="fa fa-dot-circle-o nav-icon"></i>
                                <p>All Testmonials</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('add-new-testmonial')}}" class="nav-link">
                                <i class="fa fa-dot-circle-o nav-icon"></i>
                                <p>Add New Testmonial</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
