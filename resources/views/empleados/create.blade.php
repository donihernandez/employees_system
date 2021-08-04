@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Oops!</strong> Se encontraron los siguientes errores.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card border-primary mb-3">
                    <div class="card-header">
                        Dar de alta a usuario
                    </div>
                    <div class="card-body">
                        <form action="{{ route('empleados.store') }}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="apellidos">Apellidos</label>
                                    <input type="text" class="form-control" id="apellidos" placeholder="apellidos" name="apellidos" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="direccion">Dirección</label>
                                <input type="text" class="form-control" id="direccion" placeholder="Calle Santander Avenida ..." name="direccion" required>
                            </div>
                            <div class="form-group">
                                <label for="localidad">Localidad</label>
                                <input type="text" class="form-control" id="localidad" placeholder="Localidad..." name="localidad" required>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label for="provincia">Provincia</label>
                                    <select id="provincia" class="form-control" name="provincia_id" required>
                                        <option selected>Elegir...</option>
                                        @foreach($provincias as $provincia)
                                            <option value="{{ $provincia->id }}">{{ $provincia->provincia }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="codigo_postal">Código Postal</label>
                                    <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="documento">Tipo de Documentos</label>
                                    <select id="documento" class="form-control" name="documento_id" required>
                                        <option selected>Elegir...</option>
                                        @foreach($documentos as $documento)
                                            <option value="{{ $documento->id }}">{{ $documento->tipo_documento }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="nodocumento">No. Documento</label>
                                    <input type="text" class="form-control" id="nodocumento" placeholder="Número del documento" name="no_documento" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Crear</button>
                            <a href="{{ route('empleados.index') }}" class="btn btn-secondary">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
