<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.index') }}">
            <i class="fas fa-home"></i>
            <span>Home</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item ">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseone" aria-expanded="true"
           aria-controls="collapseone">
            <i class="fas fa-users"></i>
            <span>ข้อมูลสมาชิก</span>
        </a>
        <div id="collapseone" class="collapse" aria-labelledby="headingone" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded ">
                {{--<h6 class="collapse-header">Custom Components:</h6>--}}
                <a class="collapse-item fas fa-user-tie" href="{{ route('admin.employee.index') }}">  ข้อมูลพนักงาน</a>
                <a class="collapse-item fas fa-user" href="{{ route('admin.users.index') }}">  ข้อมูลสมาชิก</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="true"
           aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>กลุ่มเสื้อผ้า</span>
            {{--<a href="{{ route('admin') }}"></a>--}}
        </a>
        {{--<div id="collapsetwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">--}}
            {{--<div class="bg-white py-2 collapse-inner rounded">--}}
                {{--<a class="collapse-item" href="#">ประเภทเสื้อ</a>--}}
                {{--<a class="collapse-item" href="{{ route('admin.users.index') }}">Index</a>--}}
                {{--<a class="collapse-item" href="{{ route('admin.users.create') }}">Create</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsethree" aria-expanded="true"
           aria-controls="collapsethree">
            <i class="fas fa-fw fa-cog"></i>
            <span>บริการลูกค้า</span>
        </a>
        <div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">รายการใช้บริการของลูกค้า</a>
                {{--<a class="collapse-item" href="{{ route('admin.users.index') }}">Index</a>--}}
                {{--<a class="collapse-item" href="{{ route('admin.users.create') }}">Create</a>--}}
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsefour" aria-expanded="true"
           aria-controls="collapsefour">
            <i class="fas fa-fw fa-cog"></i>
            <span>รายงานการใช้บริการ</span>
        </a>
        <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">รายงานการใช้บริการรายวัน</a>
                <a class="collapse-item" href="#">รายงานการใช้บริการรายเดือน</a>
                {{--<a class="collapse-item" href="{{ route('admin.users.index') }}">Index</a>--}}
                {{--<a class="collapse-item" href="{{ route('admin.users.create') }}">Create</a>--}}
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsefive" aria-expanded="true"
           aria-controls="collapsefive">
            <i class="fas fa-fw fa-cog"></i>
            <span>การแจ้งเตือน</span>
        </a>
        {{--<div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionSidebar">--}}
            {{--<div class="bg-white py-2 collapse-inner rounded">--}}
                {{--<a class="collapse-item" href="#">แจ้งเตือนจากลูกค้า</a>--}}
                {{--<a class="collapse-item" href="{{ route('admin.users.index') }}">Index</a>--}}
                {{--<a class="collapse-item" href="{{ route('admin.users.create') }}">Create</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    </li>

    {{--<!-- Nav Item - Utilities Collapse Menu -->--}}
    {{--<li class="nav-item">--}}
        {{--<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"--}}
           {{--aria-expanded="true" aria-controls="collapseUtilities">--}}
            {{--<i class="fas fa-fw fa-wrench"></i>--}}
            {{--<span>Utilities</span>--}}
        {{--</a>--}}
        {{--<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">--}}
            {{--<div class="bg-white py-2 collapse-inner rounded">--}}
                {{--<h6 class="collapse-header">Custom Utilities:</h6>--}}
                {{--<a class="collapse-item" href="utilities-color.html">Colors</a>--}}
                {{--<a class="collapse-item" href="utilities-border.html">Borders</a>--}}
                {{--<a class="collapse-item" href="utilities-animation.html">Animations</a>--}}
                {{--<a class="collapse-item" href="utilities-other.html">Other</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</li>--}}

    <!-- Divider -->
    {{--<hr class="sidebar-divider">--}}

    {{--<!-- Heading -->--}}
    {{--<div class="sidebar-heading">--}}
        {{--Addons--}}
    {{--</div>--}}

    <!-- Nav Item - Pages Collapse Menu -->
{{--<li class="nav-item">--}}
{{--<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">--}}
{{--<i class="fas fa-fw fa-folder"></i>--}}
{{--<span>Pages</span>--}}
{{--</a>--}}
{{--<div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">--}}
{{--<div class="bg-white py-2 collapse-inner rounded">--}}
{{--<h6 class="collapse-header">Login Screens:</h6>--}}
{{--<a class="collapse-item" href="login.html">Login</a>--}}
{{--<a class="collapse-item" href="register.html">Register</a>--}}
{{--<a class="collapse-item" href="forgot-password.html">Forgot Password</a>--}}
{{--<div class="collapse-divider"></div>--}}
{{--<h6 class="collapse-header">Other Pages:</h6>--}}
{{--<a class="collapse-item" href="404.html">404 Page</a>--}}
{{--<a class="collapse-item" href="blank.html">Blank Page</a>--}}
{{--</div>--}}
{{--</div>--}}
{{--</li>--}}

<!-- Nav Item - Charts -->
    {{--<li class="nav-item">--}}
        {{--<a class="nav-link" href="charts.html">--}}
            {{--<i class="fas fa-fw fa-chart-area"></i>--}}
            {{--<span>Charts</span></a>--}}
    {{--</li>--}}

    {{--<!-- Nav Item - Tables -->--}}
    {{--<li class="nav-item">--}}
        {{--<a class="nav-link" href="tables.html">--}}
            {{--<i class="fas fa-fw fa-table"></i>--}}
            {{--<span>Tables</span></a>--}}
    {{--</li>--}}

    {{--<!-- Divider -->--}}
    {{--<hr class="sidebar-divider d-none d-md-block">--}}

    {{--<!-- Sidebar Toggler (Sidebar) -->--}}
    {{--<div class="text-center d-none d-md-inline">--}}
        {{--<button class="rounded-circle border-0" id="sidebarToggle"></button>--}}
    {{--</div>--}}

</ul>