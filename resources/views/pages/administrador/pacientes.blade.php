@extends('indexDashboard')
@section('pacientes')
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

                            <!---------- Division lineal de busqueda y agregar nuevas citas -------->
                            <!---------- Division lineal de busqueda y agregar nuevas citas -------->

                            <div class="row m-1 ">
                                <div class="col">
                                    <hr class="borde">
                                </div>
                            </div>

                            <!-- -->

                            <div class="card-body pt-0">
                                <div class="d-flex justify-content-between">
                                    <h4 class="card-title mb-0">Citas</h4>
                                    <a href="#"><small>Citas</small></a>
                                </div>


                                <div>
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

                                <!-- Buscador y Boton Agregar Responsivo -->

                                <div class="row m-0 d-flex">
                                    <div class="card col-12 col-xl-3 mt-3 mr-3 mb-3 ">
                                        <form class="card-body pb-2" action="{{ route('pacientes.index') }}" method="get">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="buscar" placeholder="Browser"
                                                    aria-label="Browser" aria-describedby="basic-addon2">
                                                <div class="input-group-append d-flex justify-content-end">
                                                    <button class="btn btn-outline-primary" type="button">Buscar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Agregar Seleccionado -->
                                    <a href="{{ url('pacientes/create') }}" type="button"
                                        class="btn btn-primary col-12 col-xl-1 my-5 mr-auto ">Añadir
                                        seleccionado</a>
                                    <!-- -->

                                    <form action="{{ route('pacientes.index') }}" method="GET" role="search">

                                        <div class="input-group">
                                            <span class="input-group-btn mr-5 mt-1">
                                                <button class="btn btn-info" type="submit" title="Search projects">
                                                    <span class="fas fa-search"></span>
                                                </button>
                                            </span>

                                            <!-- -->
                                            <div class="form-group col-2 mt-4 p-0">
                                                Fecha Date
                                                <input class="form-control" id="FechaRegistro" name="FechaRegistro"
                                                    type="date">
                                            </div>

                                            <div class="form-group col-2 mt-4 p-0">
                                                <label for="exampleFormControlSelect1">Status</label>
                                                <select class="form-control form-control-lg" id="estado" name="estado">
                                                    <option value="1">Activo</option>
                                                    <option value="0">Inactivo</option>
                                                </select>
                                            </div>

                                            <a href="{{ route('pacientes.index') }}" class=" mt-1">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-danger" type="button" title="Refresh page">
                                                        <span class="fas fa-sync-alt"></span>
                                                    </button>
                                                </span>
                                            </a>
                                        </div>
                                    </form>
                                </div>


                                <!-- -->


                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead class="bg-primary">
                                            <tr>
                                                <th>Id</th>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Apellido Materno</th>
                                                <th>direccion</th>
                                                <th>registro</th>
                                                <th>telefono</th>
                                                <th>edad</th>
                                                <th>emai</th>
                                                <th>sexo</th>
                                                <th>fechaNacimiento</th>
                                                <th>status</th>
                                                <th>activo</th>
                                                <th>acciones</th>
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
                                                        <a href="{{ url('pacientes/' . $paciente->idPaciente . '/edit') }}"
                                                            type="submit" class="btn btn-success">
                                                            Modificar
                                                        </a>
                                                        <form action="{{ url('pacientes/' . $paciente->idPaciente) }}"
                                                            method="POST">
                                                            @csrf
                                                            {{ method_field('DELETE') }}
                                                            <input type="submit" class="btn btn-danger"
                                                                onclick="return confirm('quieres borrar?')"
                                                                value="   Borrar   ">
                                                        </form>
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
    @endsection
