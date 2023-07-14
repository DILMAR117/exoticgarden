@extends('layouts.app')

@section('template_title')
    {{ $puesto->name ?? 'Show Puesto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Información</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('puestos.index') }}"> Regresar a la tabla</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $puesto->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $puesto->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Puesto:</strong>
                            {{ $puesto->puesto }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $puesto->telefono }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
