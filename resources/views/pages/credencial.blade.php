@extends("theme.$theme.layoutregister")

@section('content')
<div class="register-box">
  <div class="register-logo">
    <img src="{{asset("assets/$theme/dist/img/logo.png")}}" width="320" height="120" alt="User Image">
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Detalle general de personal</p>

    <form action="../../index.html" method="post">
      <div class="form-group has-feedback">
        <h5>{{ $nombre }}</h5>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <h5>Categoría: {{ $categoria }}</h5>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <h5>Puesto: {{ $puesto }}</h5>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <h5>Número Enlace: {{ $numeroEnlace }}</h5>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <h5>O. Administrativo: {{ $orgAdmin }}</h5>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <h5>A. de Adscripción: {{ $areaAdscipcion }}</h5>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-4">
            <label>Estatus:</label>
        </div>
        <!-- /.col -->
        <div class="col-xs-8">
          <div class="credencialActivo">
            Activo
          </div>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- Puede Seguirnos en -</p>
      <a href="https://www.facebook.com/Icatech-Chiapas-475079282568212/" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i>
        Facebook</a>
    </div>
  </div>
  <!-- /.form-box -->
</div>
@endsection