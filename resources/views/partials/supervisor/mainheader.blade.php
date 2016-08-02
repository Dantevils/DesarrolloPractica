<header class="main-header">
    <a href="{{ url('/home') }}" class="logo">
        <span class="logo-mini"><b>CGB</b></span>
        <span class="logo-lg"><b>Constructora GB</b></span>
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                        <span class="hidden-xs">{{Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header">
                            <img src="/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                            <p>{{Auth::user()->name}}</p>
                        </li>
                        <li class="user-footer">
                            <div class="pull-right">
                                <a href="{{url('/auth/logout') }}" class="btn btn-default btn-flat">Salir</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>