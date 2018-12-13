<header class="app-header"><a class="app-header__logo" href="index.html">Grandcereals</a>
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">
        <li class="app-search">
            <input class="app-search__input" type="search" placeholder="Search">
            <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!--Notification Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
            <ul class="app-notification dropdown-menu dropdown-menu-right">
                <li  class="app-notification__title">You have {{count(auth::user()->unreadNotifications)}} unread notification.</li>

                <div class="app-notification__content">
                    @foreach( auth::user()->unreadNotifications as $notification)
                    <li onclick="markAsRead()"><a class="app-notification__item" href="{{route('users.show', $notification->data['user']['name'])}}"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                            <div>

                                    @include('layouts.notification.'.snake_case(class_basename($notification->type)))


                            </div>
                            @endforeach

                        </a></li>
        </li>
                </div>
                @if(count(auth::user()->unreadNotifications) > 0 )
                <li class="app-notification__footer"><a href="{{route('Read')}}">Mark All Notifications As Read.</a></li>
                    @endif
            </ul>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
            <ul class="dropdown-menu settings-menu dropdown-menu-right">
                <li><a class="dropdown-item" href=""><i class="fa fa-cog fa-lg"></i> Settings</a></li>
                <li><a class="dropdown-item" href=""><i class="fa fa-user fa-lg"></i> Profile</a></li>
                <li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out fa-lg"></i> Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</header>



