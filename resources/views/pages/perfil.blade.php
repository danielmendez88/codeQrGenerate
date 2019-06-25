@extends("theme.$theme.layout")

@section('content')
<div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">

              <h3 class="profile-username text-center">{{ $nombre }}</h3>

              <p class="text-muted text-center">Software Engineer</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Número de Enlace</b> <a class="pull-right">{{ $enlace }}</a>
                </li>
                <li class="list-group-item">
                  <b>Categoría</b> <a class="pull-right">{{ $categoria }}</a>
                </li>
                <li class="list-group-item">
                  <b>Puesto</b> <a class="pull-right">{{ $puesto }}</a>
                </li>
                <li class="list-group-item">
                	@if($generado == 1)
                		<b>Generado</b>
                	@else
                		<b>Generado</b>
                	@endif
                </li>
              </ul>

              <a href="{{route("index")}}" class="btn btn-warning btn-block"><i class="fa fa-undo" aria-hidden="true"> <b>Regresar</b></i></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Código</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">

                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                        <span class="username">
                          @if($activo == 1)
                          	<a href="#"><span class="label label-success">Activo</span></a>
                          @else
                          	<a href="#"><span class="label label-danger">Inactivo</span></a>
                          @endif
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    	<span class="description">Generado con Motor Laravel</span>
                  </div>
                  <!-- /.user-block -->
                  <div class="row margin-bottom">
                    <!-- /.col -->
                    <div class="col-sm-6">
                      <div class="row">
                        <div class="col-sm-6">
                          <img class="img-responsive" src="data:image/png;base64, {!! base64_encode($codigo) !!} ">
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->

                  <ul class="list-inline">
                    <li>
                    	<a href="data:image/png;base64, {!! base64_encode($codigo) !!} " download="enlace_{{$numeroEnlace}}"><i class="fa fa-download"></i> Descargar Imagen de Código</a>
                    </li>
                  </ul>
                </div>
                <!-- /.post -->
              </div>

            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
</div>
<!-- /.row -->
@stop