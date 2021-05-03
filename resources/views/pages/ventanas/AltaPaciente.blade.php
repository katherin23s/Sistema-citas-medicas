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

        <div class="row ml-2">
            <h4 id="minimum-setup">Patients Information</h4>
            <div class="container-fluid p-0">
                <form action="{{ url('/pacientes') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- paciente y medico nombre -->
                    <div class="m-0 px-5">

                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group row">
                                    <label for="exampleInputEmail1" class="col-form-label">Nombre</label>
                                    <div class="col input-group mb-3">
                                        <input class="form-control" id="nombre" name="nombre">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group row">
                                    <label for="exampleInputEmail1" class="col-form-label">Apellido Parterno</label>
                                    <div class="col input-group mb-3">
                                        <input class="form-control" id="apellido" name="apellido">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6">
                                <div class="form-group row">
                                    <label for="exampleInputEmail1" class="col-form-label">Apellido Materno</label>
                                    <div class="col input-group mb-3">
                                        <input class="form-control" id="apellidoM" name="apellidoM">

                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group row">
                                    <label for="exampleInputEmail1" class="col-form-label">Direccion</label>
                                    <div class="col input-group mb-3">
                                        <input class="form-control" id="direccion" name="direccion">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6">
                                <!-- Fecha -->
                                <div class="">
                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-form-label">Registro</label>
                                        <div class="col input-group mb-3">
                                            <input class="form-control" type="date" id="registro" name="registro">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group row">
                                    <label for="exampleInputEmail1" class="col-form-label">Teléfono</label>
                                    <div class="col input-group mb-3">
                                        <input class="form-control" id="telefono" name="telefono">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6">
                                <div class="form-group row">
                                    <label for="exampleInputEmail1" class="col-form-label">Edad</label>
                                    <div class="col input-group mb-3">
                                        <input class="form-control" id="edad" name="edad">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group row">
                                    <label for="exampleInputEmail1" class="col-form-label">Email</label>
                                    <div class="col input-group mb-3">
                                        <input class="form-control" id="email" name="email">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6">
                                <div class="form-group row">
                                    <label for="exampleInputEmail1" class="col-form-label pr-4">Sexo </label>
                                    <div class="col input-group mb-3">
                                        <input class="form-control" id="sexo" name="sexo">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <!-- Fecha -->
                                <div class="">
                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-form-label">Date</label>
                                        <div class="col input-group mb-3">
                                            <input class="form-control" type="date" id="fechaNacimiento"
                                                name="fechaNacimiento">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <!-- Tiempo de duracion -->
                                <div class="">
                                    <div class="form-group row">
                                        <label for="exampleSelect1" class="col-form-label">Status</label>
                                        <div class="col input-group mb-3">
                                            <input class="form-control" type="status" id="status" name="status">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12 col-sm-12">
                                <!-- Tiempo de duracion -->
                                <div class="">
                                    <div class="form-group row">
                                        <label for="exampleSelect1" class="col-form-label">Activo</label>
                                        <div class="col input-group mb-3">
                                            <select class="form-control" id="activo" name="activo">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="submit" id="Enviar">
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

@endsection
