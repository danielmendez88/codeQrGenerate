@extends("theme.$theme.layout")

@section('content')
<div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
	                <tr>
	                  <th># de Enlace</th>
	                  <th>Nombre</th>
	                  <th>Puesto</th>
	                  <th>Categoría</th>
	                  <th>Generado</th>
	                  <th>Generar Qr</th>
	                </tr>
                </thead>
                <tbody>
                	@foreach($personales as $personal)
	            	<tr>
	            		<td>{{$personal->numeroEnlace}}</td>
	            		<td>{{$personal->nombre}}</td>
	            		<td>{{$personal->puesto}}</td>
	            		<td>{{$personal->categoria}}</td>
	            		<td>
	            			@if($personal->generado == 1)
	            				<span class="label label-success">Si</span>
	            			@else
	            				<span class="label label-warning">No</span>
	            			@endif
	            		</td>
	            		<td><a href="{{route("personal.detail", ['id' => base64_encode($personal->numeroEnlace) ])}}"><i class="fa fa-qrcode" aria-hidden="true"></i>
Generar</a></td>
	            	</tr>
	            	@endforeach
                </tbody>
                <tfoot>
	                <tr>
	                  <th># de Enlace</th>
	                  <th>Nombre</th>
	                  <th>Puesto</th>
	                  <th>Categoría</th>
	                  <th>Generado</th>
	                  <th>Generar Qr</th>
	                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
</div>
<!-- /.row -->
@stop