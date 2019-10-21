@extends("theme.sufee.layout")

@section('title', 'Dar de baja de personal')

@section('breadcrumb', '/ Dar de Baja de Personal')

@section('content')

	@if (Session::has('success'))
        <div class="col-sm-12">
            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                <span class="badge badge-pill badge-success">Listo!</span> {{ Session::get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    @endif

	<div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Registro de Personal</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>N° Enlace</th>
                                        <th>Nombre</th>
                                        <th>Puesto</th>
                                        <th>Categoría</th>
                                        <th>Estatus</th>
                                        <th>Modificar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($person as $personal)
                                         <tr>
                                            <td>{{$personal->numeroEnlace}}</td>
                                            <td>{{$personal->nombre}} {{$personal->apaterno}} {{$personal->amaterno}}</td>
                                            <td>{{$personal->puesto}}</td>
                                            <td>{{$personal->categoria}}</td>
                                            <td>
                                                @if($personal->activo == 1)
                                                    <span class="label label-success">Activo</span>
                                                @else
                                                    <span class="label label-warning">No activo</span>
                                                @endif
                                            </td>
                                            <td>
                                            	<a href="{{route("down.personal", ['id' => \Crypt::encrypt($personal->numeroEnlace) ])}}"><i class="fa fa-eraser" aria-hidden="true"></i>
Baja</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->

@stop
