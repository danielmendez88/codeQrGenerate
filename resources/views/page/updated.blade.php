@extends("theme.sufee.layout")

@section('title', 'Editar personal')

@section('breadcrumb', '/ Personal / Modificar')

@section('content')

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-6">
                    <form action="{{ url('/administrador/add-personal') }}" method="POST">
                    @method('PATCH')
        			@csrf
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Modificar Personal</strong>
                            </div>
                            <div class="card-body">
                                <!--credit card-->
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3 class="text-center">Personal</h3>
                                    </div>
                                    <hr>
                                        <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">Número de Enlace</label>
                                            <input id="nenlace" name="nenlace" type="number" class="form-control" aria-required="true" value="{{ $personalDetails->numeroEnlace }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">Nombre</label>
                                            <input id="nombre" name="nombre" type="text" class="form-control" aria-required="true" value="{{ $personalDetails->nombre }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">Apellido Paterno</label>
                                            <input id="apaterno" name="apaterno" type="text" class="form-control" aria-required="true" value="{{ $personalDetails->apaterno }}">
                                        </div>
                                        <!--apellido materno-->
                                        <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">Apellido Materno</label>
                                            <input id="amaterno" name="amaterno" type="text" class="form-control" aria-required="true" value="{{ $personalDetails->amaterno }}">
                                        </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Modificar Personal</strong>
                            </div> 
                            <div class="card-body">
                                <div class="card-body">
                                    <!--puesto-->
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Puesto</label>
                                        <input id="puesto" name="puesto" type="text" class="form-control" aria-required="true" value="{{ $personalDetails->puesto }}">
                                    </div>
                                    <!--categoria-->
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Categoría</label>
                                        <input id="categoria" name="categoria" type="text" class="form-control" aria-required="true" value="{{ $personalDetails->categoria }}">
                                    </div>
                                    <!--organo administrativo-->
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Área de adscripción</label>
                                        <select name="organo_id" class="form-control">
                                        	<option value="">Seleccione una Opción</option>
                                        	@foreach ($organoAdmin as $key => $value)
						                    	<option value="{{ $key }}" {{ ( $key == $personalDetails->organo_id) ? 'selected' : '' }}>
						                    		{{ $value }}
						                    	</option>
						                    @endforeach
                                        </select>
                                    </div>
                                    <!--area de adscripcion-->
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Organo Administrativo</label>
                                        <select name="adscripcion_id" class="form-control">
                                        	<option value="">Selecciona una opción</option>
                                        	@foreach ($areaAdscrip as $key => $value)
						                    	<option value="{{ $key }}" {{ ( $key == $personalDetails->adscripcion_id) ? 'selected' : '' }}>
						                    		{{ $value }}
						                    	</option>
						                    @endforeach
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-sm">
                                        <i class="fa fa-upload"></i> Modificar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
@stop