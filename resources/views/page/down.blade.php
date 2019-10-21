@extends("theme.sufee.layout")

@section('title', 'Personal dado de baja')

@section('breadcrumb', '/ Personal en baja')

@section('content')
    <!--Content-->
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
                                        <th>Fecha de Baja</th>
                                        <th>Modificar Estatus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($downPersonal as $downlist)
                                         <tr>
                                            <td>{{$downlist->numeroEnlace}}</td>
                                            <td>{{$downlist->nombre}} {{$downlist->apaterno}} {{$downlist->amaterno}}</td>
                                            <td>{{$downlist->puesto}}</td>
                                            <td data-toggle="tooltip" data-placement="top" title="{{ Carbon\Carbon::parse($downlist->updated_at)->format('l jS \\of F Y h:i:s A') }}">{{ Carbon\Carbon::parse($downlist->updated_at)->diffForHumans() }}</td>
                                            <td>
                                                <a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-tasks" aria-hidden="true"></i>
                                                Activar</a>
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
    <!--End Content-->


    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Activar Estado del Personal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ¿Desea Modificar el Estado del personal?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Activar</button>
            </div>
            </div>
        </div>
    </div>
@stop
