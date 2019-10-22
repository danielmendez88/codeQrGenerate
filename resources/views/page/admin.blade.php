@extends("theme.sufee.layout")

@section('title', 'Administrador de Contenido')

@section('content')

    <div class="col-xl-3 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <a href="/administrador/registro-personal">
                        <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                        <div class="stat-content dib">
                            <div class="stat-text">Trabajadores</div>
                            <div class="stat-digit">{{ $personalCount }}</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-user text-success border-success"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">Alta</div>
                        <div class="stat-digit">{{ $personalAltaCount }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-user text-danger border-danger"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">Bajas</div>
                        <div class="stat-digit">{{ $personalBajaCount }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <a href="{{ route('downlist') }}" data-toggle="tooltip" title="Historico Personal Baja">
                        <div class="stat-icon dib"><i class="ti-vector text-warning border-warning"></i></div>
                        <div class="stat-content dib">
                            <div class="stat-text">Historico P.</div>
                            <div class="stat-digit">Baja</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

@stop
