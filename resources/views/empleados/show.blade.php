@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card border-primary mb-3">
                    <div class="card-header font-weight-bold">
                        <h2> {{ $empleado->nombre }} {{ $empleado->apellidos }}</h2>
                    </div>
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-4">
                                <h3>Dirección: </h3>
                                <p>{{ $empleado->direccion }}</p>
                            </div>
                            <div class="col-4">
                                <h3>Localidad: </h3>
                                <p>{{ $empleado->localidad }}</p>
                            </div>
                            <div class="col-4">
                                <h3>Provincia: </h3>
                                <p>{{ $empleado->provincia->provincia }}</p>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-6">
                                <h3>Tipo de Documento: </h3>
                                <p>{{ $empleado->documento->tipo_documento }}</p>
                            </div>
                            @if($empleado->documento->desc_documento != '')
                                <div class="col-6">
                                    <h3>Descripción del Documento: </h3>
                                    <p>{{ $empleado->documento->desc_documento }}</p>
                                </div>
                            @endif
                        </div>
                        <div class="row mb-4">
                            <div class="col-6">
                                <h3>Número de Documento: </h3>
                                <p>{{ $empleado->no_documento }}</p>
                            </div>
                            <div class="col-6">
                                <h3>Código Postal: </h3>
                                <p>{{ $empleado->codigo_postal }}</p>
                            </div>
                        </div>

                        <a href="{{ route('empleados.index') }}" class="btn btn-secondary">Atrás</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
