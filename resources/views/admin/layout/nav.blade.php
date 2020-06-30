<!-- Navbar -->
<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">

    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav {{session('locale')=='ar' ? 'mr-auto' : 'ml-auto'}}">
        <li class="nav-item dropdown">
            <a class="nav-link" href="{{session('locale')=='ar' ? route('admin.changeLang', 'en') : route('admin.changeLang', 'ar')}}">
                <i class="fa fa-language"></i>
                <span class="badge badge-info navbar-badge">{{session('locale')=='ar' ? 'en' : 'ar'}}</span>
            </a>
        </li>
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fa fa-user-secret"></i>
                {{--                <span class="badge badge-danger navbar-badge">3</span>--}}
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="{{asset('admin/img/logo.jpeg')}}" alt="User Avatar" class="img-size-50 ml-3 img-circle">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                {{auth()->user()->name}}
                                <span class="float-left text-sm text-danger"><i class="fa fa-star"></i></span>
                            </h3>
                            {{--                            <p class="text-sm"></p>--}}
                            {{--                            <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i></p>--}}
                        </div>
                    </div>
                    <!-- Message End -->
                </a>

                <div class="dropdown-divider"></div>
                <form action="{{route('admin.logout')}}" method="post">
                    @csrf
                    <button class="dropdown-item dropdown-footer" type="submit"><i class="fa fa-sign-in"></i> تسجيل الخروج</button>
                </form>
            </div>
        </li>

        {{--        <li class="nav-item">--}}
        {{--            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i--}}
        {{--                        class="fa fa-th-large"></i></a>--}}
        {{--        </li>--}}
    </ul>
</nav>
<!-- /.navbar -->