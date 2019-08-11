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
    <li class="nav-item {{ Route::currentRouteName() == 'admin.index' ? 'active' : null }}">
        <a class="nav-link" href="{{ route('admin.index') }}">
            <i class="fas fa-home"></i>
            <span>Home</span></a>
    </li>
{{--@if(auth()->user()->role_id == 1)--}}
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    @if(auth()->user()->role_id == 1)
    <li class="nav-item {{ Route::currentRouteName() == 'admin.employee.index'|| Route::currentRouteName() == 'admin.users.index' ||
    Route::currentRouteName() == 'admin.employee.create' || Route::currentRouteName() == 'admin.employee.edit' ||
    Route::currentRouteName() == 'admin.users.create' || Route::currentRouteName() == 'admin.users.edit' ||
    Route::currentRouteName() == 'admin.users.search' || Route::currentRouteName() == 'admin.employee.search' ? 'active' : null }} ">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseone" aria-expanded="true"
           aria-controls="collapseone">
            <i class="fas fa-users"></i>
            <span>ข้อมูลสมาชิก</span>
        </a>
        <div id="collapseone" class="collapse {{ Route::currentRouteName() == 'admin.employee.index' || Route::currentRouteName() == 'admin.users.index'||
          Route::currentRouteName() == 'admin.employee.create' || Route::currentRouteName() == 'admin.employee.edit' ||
          Route::currentRouteName() == 'admin.users.create' || Route::currentRouteName() == 'admin.users.edit' ||
          Route::currentRouteName() == 'admin.users.search' || Route::currentRouteName() == 'admin.employee.search' ? 'show' : null  }}"
             aria-labelledby="headingone" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded ">
                {{--<h6 class="collapse-header">Custom Components:</h6>--}}
                <a class="collapse-item fas fa-user-tie {{ Route::currentRouteName() == 'admin.employee.index' || Route::currentRouteName() == 'admin.employee.create' ||
                 Route::currentRouteName() == 'admin.employee.edit' || Route::currentRouteName() == 'admin.employee.search' ? 'active' : null  }}" href="{{ route('admin.employee.index') }}">  ข้อมูลพนักงาน</a>
                <a class="collapse-item fas fa-user {{ Route::currentRouteName() == 'admin.users.index' || Route::currentRouteName() == 'admin.users.create' ||
                 Route::currentRouteName() == 'admin.users.edit' || Route::currentRouteName() == 'admin.users.search' ? 'active' : null  }}" href="{{ route('admin.users.index') }}">  ข้อมูลสมาชิก</a>
            </div>
        </div>
    </li>
    @endif

    @if(auth()->user()->role_id == 1 || auth()->user()->role_id == 2)
    <li class="nav-item {{ Route::currentRouteName() == 'admin.clothes.index' || Route::currentRouteName() == 'admin.clothes.create' ||
      Route::currentRouteName() == 'admin.clothes.edit' || Route::currentRouteName() == 'admin.clothes.search'? 'active' : null }}">
        <a class="nav-link" href=" {{ route('admin.clothes.index') }}" data-toggle="collapse show" data-target="#collapsetwo" aria-expanded="true"
           aria-controls="collapseTwo">
            <i class="fas fa-dumpster"></i>
            <span>กลุ่มเสื้อผ้า</span>
{{--            <a href="{{ route('admin.clothes.index') }}"></a>--}}
        </a>
        {{--<div id="collapsetwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">--}}
            {{--<div class="bg-white py-2 collapse-inner rounded">--}}
                {{--<a class="collapse-item" href="#">ประเภทเสื้อ</a>--}}
                {{--<a class="collapse-item" href="{{ route('admin.users.index') }}">Index</a>--}}
                {{--<a class="collapse-item" href="{{ route('admin.users.create') }}">Create</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    </li>
    @endif

    @if(auth()->user()->role_id == 1 || auth()->user()->role_id == 2)
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsethree" aria-expanded="true"
           aria-controls="collapsethree">
            <i class="fas fa-calendar-alt"></i>
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
    @endif

    @if(auth()->user()->role_id == 1 )
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsefour" aria-expanded="true"
           aria-controls="collapsefour">
            <i class="fas fa-file-alt"></i>
            <span>รายงานการใช้บริการ</span>
        </a>
        <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">รายงานการใช้บริการรายวัน</a>
                <a class="collapse-item" href="#">รายงานการใช้บริการรายเดือน</a>
            </div>
        </div>
    </li>
    @endif

    @if(auth()->user()->role_id == 1 || auth()->user()->role_id == 2)
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsefive" aria-expanded="true"
           aria-controls="collapsefive">
            <i class="fas fa-bell"></i>
            <span>การแจ้งเตือน</span>
        </a>
        {{--<div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionSidebar">--}}
            {{--<div class="bg-white py-2 collapse-inner rounded">--}}
                {{--<a class="collapse-item" href="#">แจ้งเตือนจากลูกค้า</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    </li>
    @endif
    
</ul>