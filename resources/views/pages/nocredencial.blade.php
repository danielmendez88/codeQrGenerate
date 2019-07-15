@extends("theme.$theme.layoutregister")

@section('content')
<div class="register-box">
  <div class="register-logo">
    <img src="{{asset("assets/$theme/dist/img/logo.png")}}" width="320" height="120" alt="User Image">
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Detalle general de personal</p>

    <form method="post">
      <div class="form-group has-feedback">
        <div class="advertencia">
          <h1>¡ATENCIÓN!</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 justice">
          El personal asociado a ésta busqueda ya no se encuentra laborando para el Instituto de Capacitación y Vinculación Tecnológica del Estado de Chiapas.
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