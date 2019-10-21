<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="/administrador/"><img src="../../img/logo.png" alt="Logo"></a>
            <a class="navbar-brand hidden" href="/administrador/"><img src="../../img/logo.png" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="/administrador"> <i class="menu-icon fa fa-dashboard"></i>Tablero</a>
                </li>
                <h3 class="menu-title">Menú</h3><!-- /.menu-title -->
                <li>
                    <a href="/administrador/add-personal"> <i class="menu-icon fa fa-laptop"></i>Agregar Nuevo</a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Modificaciones</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-th"></i><a href="/administrador/update-personal">Editar Personal</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{ route("administador-down-personal") }}">Baja de Personal</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{ route("downlist") }}">Personal dado de baja</a></li>
                    </ul>
                </li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
