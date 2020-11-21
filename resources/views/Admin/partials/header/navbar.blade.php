 <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="block m-t-xs font-bold">Taieb rekik</span>Admin
                            </a>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                    <li class="active">
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Users</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{ route('user.index')}}">List Users</a></li>
                            <li><a href="graph_flot.html">Blocked list users</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-list"></i> <span class="nav-label">Category</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{ route('category.create')}}">Create Category</a></li>
                            <li><a href="{{ route('subcategory.create')}}">Create Sub-category</a></li>
                            <li><a href="{{ route('category.index')}}">list categories</a></li>
                            <li><a href="{{ route('subcategory.index')}}">list Sub-categories</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-gavel"></i> <span class="nav-label">Offerts</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{ route('user.index')}}">List offerts</a></li>
                            <li><a href="{{ route('user.index')}}">Pending Offerts<span class="label label-info float-right">62</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-sign-out"></i> <span class="nav-label">Logout</span></a>
                    </li>
                </ul>

            </div>
        </nav>
