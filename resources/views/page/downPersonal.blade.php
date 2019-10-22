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
                                            	<a href="#" data-toggle="modal" data-linknumber="{{ \Crypt::encrypt($personal->numeroEnlace) }}" data-target="#modalCenter"><i class="fa fa-eraser" aria-hidden="true"></i>
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


    <div class="modal fade" id="modalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Activar Estado del Personal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('down.personal')}}" method="post">
                @csrf
                <div class="modal-body">
                    ¿Desea Modificar el Estado del personal para darle de baja?
                    <input type="hidden" name="link_number_down" id="link_number_down" value="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Baja</button>
                </div>
            </form>
            </div>
        </div>
    </div>

@stop
