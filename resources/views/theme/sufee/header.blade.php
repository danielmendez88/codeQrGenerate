<header id="header" class="header">

    <div class="header-menu">

        <div class="col-sm-7">
            <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
            <div class="header-left">

                <div class="dropdown for-notification">
                    Usuario de la Sesión: {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}
                </div>

            </div>
        </div>

        <div class="col-sm-5">
            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle" src="../../img/user.png" alt="User Avatar">
                </a>

                <div class="user-menu dropdown-menu">
                    <a class="nav-link" href="#"><i class="fa fa-user"></i> Mi Perfil</a>

                    <a class="nav-link" href="#"><i class="fa fa-cog"></i> Configuraciones </a>

                    <a class="nav-link" href="{{ url('/personal/logout') }}"><i class="fa fa-power-off"></i> Salir</a>
                </div>
            </div>

        </div>
    </div>

</header>
