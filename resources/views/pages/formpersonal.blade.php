@extends("theme.$theme.layout")

<!--contenidos-->
@section('content')

	<div class="row">
		@if ($errors->any())
	      <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	              <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	      </div><br />
	    @endif
        <!-- left column -->
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Formulario de Personal</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="">
            	@method('PATCH')
        		@csrf
              <div class="box-body">
              	<div class="row">
              		<div class="col-xs-6">
              			<div class="form-group">
		                  <label for="numeroenlace">Número de Enlace</label>
		                  <input type="number" class="form-control" name="numeroEnlace" id="numeroenlace" value="{{ $personalDetails->numeroEnlace }}" placeholder="Número de Enlace">
		                </div>
              		</div>
              		<!--col-->
              		<div class="col-xs-6">
              			<div class="form-group">
		                  <label for="puesto">Puesto</label>
		                  <input type="text" class="form-control" id="puesto" name="puesto" value="{{ $personalDetails->puesto }}" placeholder="Puesto">
		                </div>
              		</div>
              	</div>
              	<!--row-->
              	<div class="row">
              		<div class="col-xs-6">
              			<div class="form-group">
		                  <label>Organo Administrativo</label>
		                  <select class="form-control" name="organo_id">
		                    <option>Selecciona una Opción</option>
		                    @foreach ($organoAdmin as $key => $value)
		                    	<option value="{{ $key }}" {{ ( $key == $personalDetails->organo_id) ? 'selected' : '' }}>
		                    		{{ $value }}
		                    	</option>
		                    @endforeach
		                  </select>
		                </div>
              		</div>
              		<div class="col-xs-6">
              			<div class="form-group">
		                  <label>Área de Adscripción</label>
		                  <select class="form-control" name="adscripcion_id">
		                    <option>Selecciona una opción</option>
		                    @foreach ($areaAdscrip as $key => $value)
		                    	<option value="{{ $key }}" {{ ( $key == $personalDetails->adscripcion_id) ? 'selected' : '' }}>
		                    		{{ $value }}
		                    	</option>
		                    @endforeach
		                  </select>
		                </div>
              		</div>
              	</div>
              	<!--row-->
              	<div class="row">
              		<div class="col-xs-6">
              			<div class="form-group">
		                  <label for="nombre">Nombre</label>
		                  <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $personalDetails->nombre }}" placeholder="Nombre">
		                </div>
              		</div>
              		<div class="col-xs-6">
              			<div class="form-group">
		                  <label for="apaterno">Apellido Paterno</label>
		                  <input type="text" class="form-control" id="apaterno" placeholder="A. Paterno">
		                </div>
              		</div>
              	</div>
              	<!--row-->
              	<div class="row">
              		<div class="col-xs-6">
              			<div class="form-group">
		                  <label for="amaterno">Apellido Materno</label>
		                  <input type="text" class="form-control" id="amaterno" placeholder="A. Materno">
		                </div>
              		</div>
              		<div class="col-xs-6">
              			<div class="form-group">
		                  <label for="categoria">Categoria</label>
		                  <input type="text" class="form-control" id="categoria" name="categoria" value="{{ $personalDetails->categoria }}" placeholder="A. Paterno">
		                </div>
              		</div>
              	</div>
              	<!--row-->
              	<div class="row">
              		<div class="col-xs-6">
              			<div class="form-group">
		                  <label for="exampleInputFile">Fotografía</label>
		                  <input type="file" id="exampleInputFile">

		                  <p class="help-block">Permitidos Formatos jpg.</p>
		                </div>
              		</div>
              	</div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Actualizar</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
    </div>
    <!-- /.row -->

@stop