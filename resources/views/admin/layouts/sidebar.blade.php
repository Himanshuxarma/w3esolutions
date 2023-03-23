<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="javascript:voild(0);" class="brand-link">
        <img src="/assets/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">W3esolutions</span>
    </a>


    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/assets/admin/dist/img/singh.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="javascript:volid(0);" class="d-block">Singh</a>
            </div>
        </div>


        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>


        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item menu-open">
                    <a href="{{url('/admin/dashboard')}}" class="nav-link  @yield('dashboard_select')">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/admin/users')}}" class="nav-link @yield('users_select')">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/admin/page')}}" class="nav-link @yield('page_select')">
                        <i class=" nav-icon fas fa-book"></i>
                        <p>
                            Page
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/admin/banners')}}" class="nav-link @yield('banner_select')">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Banner Manager
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/admin/category')}}" class="nav-link @yield('category_select')">
                        <i class="nav-icon fa fa-list-alt"></i>
                        <p>
                            Category
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/admin/projects')}}" class="nav-link @yield('project_select')">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Projects
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/admin/enquiries')}}" class="nav-link @yield('contact_select')">
                        <i class="nav-icon fa fa-address-book"></i>
                        <p>
                            Contact Enquiry
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/admin/testimonial')}}" class="nav-link @yield('testimonial_select')">
                        <i class="nav-icon fa fa-quote-left"></i>
                        <p>
                            Testimonial
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/admin/employees')}}" class="nav-link @yield('employees_select')">
                        <i class="nav-icon fa fa-quote-left"></i>
                        <p>
                        Employee
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/admin/techstacks')}}" class="nav-link @yield('techstacks_select')">
                        <i class="nav-icon fa fa-quote-left"></i>
                        <p>
                            Tech Stacks
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/admin/domains')}}" class="nav-link @yield('domains_select')">
                        <i class="nav-icon fa fa-quote-left"></i>
                        <p>
                             Domains
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/admin/service')}}" class="nav-link @yield('service_select')">
                        <i class="nav-icon fa fa-wrench"></i>
                        <p>
                            Service Manager
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/admin/setting')}}" class="nav-link @yield('setting_select')">
                        <i class="nav-icon fa fa-cog"></i>
                        <p>
                            Settings
                        </p>
                    </a>
                </li>

            </ul>
        </nav>

    </div>

</aside>
