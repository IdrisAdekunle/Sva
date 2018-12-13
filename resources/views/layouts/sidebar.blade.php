<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src='{!! Html::image('user image/' .auth()->user()->image, 'image', ['class' => 'image']) !!}' alt="">
        <div>
            <p class="app-sidebar__user-name">{{Auth::user()->name}}</p>
            <p class="app-sidebar__user-designation">{{Auth::user()->roles()->pluck('name')->implode(' ')}}</p>
        </div>
    </div>
    <ul class="app-menu">
        <li><a class="app-menu__item active" href="{{url('/dashboard')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">User Management</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{url('/users/create')}}"><i class="icon fa fa-user"></i> Create New User </a></li>
                <li><a class="treeview-item" href="{{route('users.index')}}"><i class="icon fa fa-users"></i> Users</a></li>
                <li><a class="treeview-item" href="{{route('reset')}}"><i class="icon fa fa-key"></i> Reset Password</a></li>
            </ul>
        </li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-shield"></i><span class="app-menu__label">Roles</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{route('roles.create')}}"><i class="icon fa fa-user-plus"></i> Add Role</a></li>
                <li><a class="treeview-item" href="{{route('roles.index')}}"><i class="icon fa fa-shield"></i> Roles</a></li>
            </ul>
        </li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-key"></i><span class="app-menu__label">Permissions</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{route('permission.create')}}"><i class="icon fa fa-user-plus"></i> Add Permission</a></li>
                <li><a class="treeview-item" href="{{route('permission.index')}}"><i class="icon fa fa-key"></i> Permissions</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-cubes"></i><span class="app-menu__label">Shift</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{route('shift.create')}}"><i class="icon fa fa-cube"></i> Add shift</a></li>
                <li><a class="treeview-item" href="{{route('shift.index')}}"><i class="icon fa fa-cubes"></i> Shifts</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-institution"></i><span class="app-menu__label">Department</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{route('departments.create')}}"><i class="icon fa fa-plus"></i> Add department</a></li>
                <li><a class="treeview-item" href="{{url('/departments')}}"><i class="icon fa fa-institution"></i> Departments</a></li>
            </ul>
        </li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Staff</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{route('staff.create')}}"><i class="icon fa fa-user-plus"></i> Add Staff</a></li>
                <li><a class="treeview-item" href="{{route('staff.index')}}"><i class="icon fa fa-users"></i> All Staff</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-calendar"></i><span class="app-menu__label">Schedule Shift</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{url('/date')}}"><i class="icon fa fa-calendar-check-o"></i> Create New Month Dates</a></li>
                <li><a class="treeview-item" href="{{url('/ShiftSchedule')}}"><i class="icon fa fa-calendar-o"></i>Create Schedules</a>
                </li> <li><a class="treeview-item" href="{{url('/ShiftSchedule/ChangeStaffSchedule')}}"><i class="icon fa fa-calendar-minus-o"></i>Change staff schedule</a></li>
            </ul>
        </li>

        <li><a class="app-menu__item" href="{{url('/view')}}"><i class="app-menu__icon fa fa-eye"></i><span class="app-menu__label">View Staff Shift</span></a></li>
        <li><a class="app-menu__item" href="{{route('logs.index')}}"><i class="app-menu__icon fa fa-bar-chart"></i><span class="app-menu__label">Logs</span></a></li>

    </ul>
</aside>
