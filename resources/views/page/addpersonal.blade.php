@extends("theme.sufee.layout")

@section('title', 'Agregar Nuevo Personal')

@section('breadcrumb', '/ agregar personal')

@section('content')

    <div class="col-sm-12">
        <div class="alert  alert-info alert-dismissible fade show" role="alert">
            <span class="badge badge-pill badge-info">Información</span> El formulario de captura para agregar personal nuevo.
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-6">
                    <form action="{{ url('/administrador/add-personal') }}" method="POST">
                    @csrf
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Agregar Nuevo</strong>
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
                                            <input id="nenlace" name="nenlace" type="number" class="form-control" aria-required="true">
                                            @if ($errors->has('nenlace'))
                                                <span class="text-danger">{{ $errors->first('nenlace') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">Nombre</label>
                                            <input id="nombre" name="nombre" type="text" class="form-control" aria-required="true">
                                            @if ($errors->has('nombre'))
                                                <span class="text-danger">{{ $errors->first('nombre') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">Apellido Paterno</label>
                                            <input id="apaterno" name="apaterno" type="text" class="form-control" aria-required="true">
                                            @if ($errors->has('apaterno'))
                                                <span class="text-danger">{{ $errors->first('apaterno') }}</span>
                                            @endif
                                        </div>
                                        <!--apellido materno-->
                                        <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">Apellido Materno</label>
                                            <input id="amaterno" name="amaterno" type="text" class="form-control" aria-required="true">
                                            @if ($errors->has('amaterno'))
                                                <span class="text-danger">{{ $errors->first('amaterno') }}</span>
                                            @endif
                                        </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Agregar Nuevo</strong>
                            </div> 
                            <div class="card-body">
                                <div class="card-body">
                                    <!--puesto-->
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Puesto</label>
                                        <input id="puesto" name="puesto" type="text" class="form-control" aria-required="true">
                                        @if ($errors->has('puesto'))
                                            <span class="text-danger">{{ $errors->first('puesto') }}</span>
                                        @endif
                                    </div>
                                    <!--categoria-->
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Categoría</label>
                                        <input id="categoria" name="categoria" type="text" class="form-control" aria-required="true">
                                        @if ($errors->has('categoria'))
                                            <span class="text-danger">{{ $errors->first('categoria') }}</span>
                                        @endif
                                    </div>
                                    <!--organo administrativo-->
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Área de adscripción</label>
                                        <select name="organoid" id="organoid" class="form-control">
                                            <option value="">Seleccionar área de adscripción</option>
                                            @foreach ($organo as $organoadmin)
                                                <option value="{{ $organoadmin->id }}">
                                                    {{ $organoadmin->organo }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('organoid'))
                                            <span class="text-danger">{{ $errors->first('organoid') }}</span>
                                        @endif
                                    </div>
                                    <!--area de adscripcion-->
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Organo Administrativo</label>
                                        <select name="adscripcionid" id="adscripcionid" class="form-control">
                                            <option value="">Seleccionar Organo administrativo</option>
                                            @foreach ($area as $areaads)
                                                <option value="{{ $areaads->id }}">
                                                    {{ $areaads->area }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('adscripcionid'))
                                            <span class="text-danger">{{ $errors->first('adscripcionid') }}</span>
                                        @endif
                                    </div>
                                    <button type="submit" class="btn btn-success btn-sm">
                                        <i class="fa fa-paper-plane"></i> Agregar
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