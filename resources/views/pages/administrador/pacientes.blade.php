@extends('indexDashboard')
@section('content')
    <div class="main-panel">
        <!----------------------------------------- CONTENIDO  -------------------------------------------------->

        <style>
            .borde {
                margin-top: 1rem;
                margin-bottom: 1rem;
                border: 0;
                border-top: 0.5px solid;
                color: #1977cc;

            }

        </style>
        <div class="row m-1 ">
            <div class="col">
                <hr class="borde">
            </div>
            <h3 class="col-auto minimum-setup" id="minimum-setup">Patients</h3>
            <div class="col">
                <hr class="borde">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 grid-margin p-4">
                        <div class="card">
                            <div class="card-body pt-0">
                                <!-- Buscador y Boton Agregar Responsivo -->

                                <div class="row m-0 d-flex">
                                    <!-- Agregar Seleccionado -->
                                    <a href="{{ url('pacientes/create') }}" type="button"
                                        class="btn btn-primary col-12 col-xl-1 mr-auto my-4 pt-3">Añadir
                                        seleccionado</a>
                                    <!-- -->

                                    <form action="{{ route('pacientes.index') }}" method="GET" role="search">

                                        <div class="input-group">
                                            <span class="input-group-btn mt-4 mr-4 d-flex justify-content-center">
                                                <button class="btn btn-info my-4" type="submit" title="Search projects">
                                                    <span class="fas fa-search"></span>
                                                </button>
                                            </span>
                                            <!-- -->
                                            <div class="form-group col mt-4 p-0">
                                                Fecha Date
                                                <input class="form-control" id="FechaRegistro" name="FechaRegistro"
                                                    type="date">
                                            </div>

                                            <div class="form-group col mt-4 p-0">
                                                <label for="exampleFormControlSelect1">Status</label>
                                                <select class="form-control form-control-lg" id="estado" name="estado">
                                                    <option value="1">Activo</option>
                                                    <option value="0">Inactivo</option>
                                                </select>
                                            </div>

                                            <a href="{{ route('pacientes.index') }}" class=" mt-4">
                                                <span class="input-group-btn my-4">
                                                    <button class="btn btn-danger d-flex justify-content-center my-4"
                                                        type="button" title="Refresh page">
                                                        <span class="fas fa-sync-alt"></span>
                                                    </button>
                                                </span>
                                            </a>
                                        </div>
                                    </form>
                                </div>

                                <div class="mb-3">
                                    <div class="mx-auto pull-right">
                                        <div class="">
                                            <form action="{{ route('pacientes.index') }}" method="GET" role="search">

                                                <div class="input-group">
                                                    <span class="input-group-btn mr-5 mt-1">
                                                        <button class="btn btn-info" type="submit" title="Search projects">
                                                            <span class="fas fa-search"></span>
                                                        </button>
                                                    </span>
                                                    <input type="text" class="form-control mr-2" name="term"
                                                        placeholder="Search projects" id="term">
                                                    <a href="{{ route('pacientes.index') }}" class=" mt-1">
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-danger" type="button"
                                                                title="Refresh page">
                                                                <span class="fas fa-sync-alt"></span>
                                                            </button>
                                                        </span>
                                                    </a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- -->


                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead class="bg-primary">
                                            <tr>
                                                <th class="text-white">Id</th>
                                                <th class="text-white">Nombre</th>
                                                <th class="text-white">Apellido</th>
                                                <th class="text-white">Apellido Materno</th>
                                                <th class="text-white">direccion</th>
                                                <th class="text-white">registro</th>
                                                <th class="text-white">telefono</th>
                                                <th class="text-white">edad</th>
                                                <th class="text-white">emai</th>
                                                <th class="text-white">sexo</th>
                                                <th class="text-white">fechaNacimiento</th>
                                                <th class="text-white">status</th>
                                                <th class="text-white">activo</th>
                                                <th class="text-white">acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pacientes as $paciente)

                                                <tr id="idtr" action="{{ $paciente->idPaciente }}">
                                                    <td id=" idCita" type="hidden" style="display:none;">
                                                        {{ $paciente->idPaciente }}</td>
                                                    <td>{{ ++$i }}</td>
                                                    <td>{{ $paciente->nombre }}</td>
                                                    <td>{{ $paciente->apellido }}</td>
                                                    <td>{{ $paciente->apellidoM }}</td>
                                                    <td>{{ $paciente->direccion }}</td>
                                                    <td>{{ $paciente->registro }}</td>
                                                    <td>{{ $paciente->telefono }}</td>
                                                    <td>{{ $paciente->edad }}</td>
                                                    <td>{{ $paciente->email }}</td>
                                                    <td>{{ $paciente->sexo }}</td>
                                                    <td>{{ $paciente->fechaNacimiento }}</td>
                                                    <td>{{ $paciente->status }}</td>
                                                    <td>{{ $paciente->activo }}</td>
                                                    <td>
                                                        <div class="row">

                                                            <a href="{{ url('pacientes/' . $paciente->idPaciente . '/edit') }}"
                                                                type="submit" class="btn btn-success">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor" class="bi bi-pencil"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                                                </svg>
                                                            </a>


                                                            <form
                                                                action="{{ url('pacientes/' . $paciente->idPaciente) }}"
                                                                method="POST">
                                                                @csrf
                                                                {{ method_field('DELETE') }}
                                                                <div class="input-container">
                                                                    <button type="submit" class="btn btn-danger"
                                                                        onclick="return confirm('quieres borrar?')" value>
                                                                        <i class=" fa fa-ban text-white"
                                                                            aria-hidden="true"></i>
                                                                    </button>
                                                                </div>
                                                            </form>

                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-end p-1">
            <div class="btn-group mr-2" role="group" aria-label="First group">
                {!! $pacientes->links() !!}
            </div>
        </div>
    </div>
    </div>
@endsection
