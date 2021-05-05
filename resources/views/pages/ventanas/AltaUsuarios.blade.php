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
            <h3 class="col-auto minimum-setup text-primary" id="minimum-setup">Usuarios</h3>
            <div class="col">
                <hr class="borde">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 grid-margin p-4">
                        <!-- Buscador y Boton Agregar Responsivo -->
                        <div class="bg-primary text-center text-white m-0 p-0">
                            Usuarios Information
                        </div>
                        <div class="card">
                            <div class="card-body pt-0">
                                <!-- FORMULARIO-->

                                <!----===============1. Campos de busqueda y añadir nueva cita FORM ==================--------->
                                <h4 id="minimum-setup" class="text-primary">Usuarios Information</h4>
                                <form action="{{ url('/usuarios') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <!-- paciente y medico nombre -->
                                    <div class="m-0 px-5">

                                        <div class="row">
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group row">
                                                    <label for="exampleInputEmail1" class="col-form-label">Nombre</label>
                                                    <div class="col input-group mb-3">
                                                        <input class="form-control border-0" style="background:#f7f7f7"
                                                            type="text" id="name" name="name" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-6">
                                                <div class="form-group row">
                                                    <label for="exampleInputEmail1" class="col-form-label">Teléfono</label>
                                                    <div class="col input-group mb-3">
                                                        <input class="form-control border-0" id="telefono" name="telefono"
                                                            style="background:#f7f7f7">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group row">
                                                    <label for="exampleInputEmail1" class="col-form-label">Apellido
                                                        Parterno</label>
                                                    <div class="col input-group mb-3">
                                                        <input class="form-control border-0" type="text" id="apellido"
                                                            name="apellido" style="background:#f7f7f7" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-6">
                                                <div class="form-group row">
                                                    <label for="exampleInputEmail1" class="col-form-label">Email</label>
                                                    <div class="col input-group mb-3">
                                                        <input class="form-control border-0" type="email" id="email"
                                                            name="email" style="background:#f7f7f7" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="row">
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group row">
                                                    <label for="exampleInputEmail1" class="col-form-label">Apellido
                                                        Materno</label>
                                                    <div class="col input-group mb-3">
                                                        <input class="form-control border-0" type="text" id="apellidoM"
                                                            name="apellidoM" style="background:#f7f7f7" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group row">
                                                    <label for="exampleInputEmail1" class="col-form-label">Direccion</label>
                                                    <div class="col input-group mb-3">
                                                        <input class="form-control border-0" id="direccion" name="direccion"
                                                            style="background:#f7f7f7">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group row">
                                                    <label for="exampleSelect1" class="col-form-label">Sexo</label>
                                                    <div class="col input-group mb-3">
                                                        <select class="form-control border-0" id="sexo" name="sexo"
                                                            style="background:#f7f7f7">
                                                            <option>Mujer</option>
                                                            <option>Hombre</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fecha -->
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group row">
                                                    <label for="example-date-input" class="col-form-label">Password</label>
                                                    <div class="col input-group mb-3">
                                                        <input class="form-control border-0" style="background:#f7f7f7"
                                                            id="password" name="password">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <input type="submit" id="Enviar">
                                    </div>
                                </form>
                            </div>
                            <!-- FIN FORMULARIO -->
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
