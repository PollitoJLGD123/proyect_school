@extends('layout.layout')

@section('contenido')

<div class="container mt-2">
    <h2 class="mb-4 text-center" style="color: skyblue;">Editar Datos Docente</h2>

    <div class="row">
        <div class="col-md-6 ">
            <div class="card shadow-sm">
                <div class="card-header text-white text-center" style="background-color: cyan;">
                    <h5>Formulario de Edición</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('profes.update',['profe'=>$profesor->id_profesor]) }}" method="POST" style="width: 100%;">
                        @csrf
                        @method('PUT')
                        <div class="form-group my-3">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" class="form-control" value="{{ $profesor->nombre }}" required>
                        </div>

                        <div class="form-group my-3">
                            <label for="apellido">Apellido</label>
                            <input type="text" name="apellido" class="form-control" value="{{ $profesor->apellido  }}" required>
                        </div>

                        <div class="form-group my-3">
                            <label for="dni">DNI</label>
                            <input type="text" name="dni" class="form-control" value="{{ $profesor->dni  }}" required>
                        </div>

                        <div class="form-group my-3">
                            <label for="telefono">Telefono</label>
                            <input type="text" name="telefono" class="form-control" value="{{ $profesor->telefono  }}" required>
                        </div>

                        <div class="form-group my-3">
                            <label for="direccion">Dirección</label>
                            <input type="text" name="direccion" class="form-control" value="{{ $profesor->direccion  }}" required>
                        </div>

                        <div class="form-group my-3">
                            <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                            <input type="date" name="fecha_nacimiento" class="form-control" value="{{ $profesor->fecha_nacimiento  }}" required>
                        </div>

                        <div class="form-group my-3">
                            <label for="fecha_ingreso">Fecha de Ingreso</label>
                            <input type="date" name="fecha_ingreso" class="form-control" value="{{ $profesor->fecha_ingreso  }}" required>
                        </div>

                        <div class="form-group my-3">
                            <label for="area_academica">Departamento Académico</label>
                            <select name="area_academica" class="form-control" id="area_academica" required>
                                <option value="">Selecciona un Grado</option>
                                @foreach($areas as $area)
                                    <option value="{{ $area->id_area_academica }}" {{ $area->id_area_academica == $profesor->id_area_academica ? 'selected' : '' }}> {{ $area->nombre_area }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group my-3 d-flex gap-3">
                            <button type="submit" class="btn btn-primary btn-block">Actualizar</button>
                            <a href="{{ route('profes.index') }}" class="btn btn-secondary btn-block">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('assets/img/profesores.png') }}" class="img-fluid rounded-circle shadow img-fluid" style="object-fit: cover; width: 250px; height: 250px;" alt="Descripción de la imagen">
        </div>
    </div>
</div>

@endsection
