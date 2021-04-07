@extends('indexDashboard')
@section('citas')


<!-- partial -->
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
        <h3 class="col-auto minimum-setup" id="minimum-setup">Dates</h3>
        <div class="col">
            <hr class="borde">
        </div>
    </div>



    <!----===============1. Campos de busqueda y añadir nueva cita FORM ==================--------->

    <div class="row ml-2 ">
        <h4 id="minimum-setup">Choice Date</h4>
        <div class="container-fluid p-0">

            <div class="row m-l-0 m-0 pr-4">
                <!-- Fecha -->
                <div class="col-12 col-sm-6 col-xl">
                    <div class="form-group row ml-2">
                        <label for="example-date-input" class="col-2 col-form-label">Date</label>
                        <div class="col-10">
                            <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                        </div>
                    </div>
                </div>
                <!-- Hora inicial -->
                <div class="col-12 col-sm-6 col-xl">
                    <div class="form-group row ">
                        <label for="example-time-input" class="col-2 col-form-label">Start time</label>
                        <div class="col-10">
                            <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                        </div>
                    </div>

                </div>
                <!-- Hora final -->
                <div class="col-12 col-sm-6 col-xl">
                    <div class="form-group row ">
                        <label for="example-time-input" class="col-2 col-form-label">End Time</label>
                        <div class="col-10">
                            <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                        </div>
                    </div>
                </div>
                <!-- Tiempo de duracion -->
                <div class="col-12 col-sm-6 col-xl">
                    <div class="form-group row ">
                        <label for="exampleSelect1" class="col-2 col-form-label">Time</label>
                        <div class="col-10">
                            <select class="form-control" id="exampleSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- Tipo de Cita -->
                <div class="col-12 col-sm-12 col-xl">
                    <div class="form-group row">
                        <label for="exampleSelect1" class="col-2 col-form-label">Tipo Cita</label>
                        <div class="col-10">
                            <select class="form-control" id="exampleSelect1">
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
            <!-- paciente y medico nombre -->
            <div class="m-0 px-5">
                <div class="form-group row">
                    <label for="exampleInputEmail1" class="col-form-label">Paciente</label>
                    <div class="col input-group mb-3">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter email">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button">Button</button>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleInputEmail1" class=" col-form-label">Medico</label>
                    <div class="col input-group mb-3">
                        <input type="text" class="form-control" placeholder="Recipient's username"
                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button">Button</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- -->



    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12 grid-margin p-4">
                    <div class="card">

                        <!---------- Division lineal de busqueda y agregar nuevas citas -------->

                        <x-crud :citas="$citas" :i="$i" />

                        <!---------- /Division lineal de busqueda y agregar nuevas citas -------->

                        <style>
                        .borde {
                            margin-top: 1rem;
                            margin-bottom: 1rem;
                            border: 0;
                            border-top: 1px solid;
                            color: #1977cc;

                        }
                        </style>

                        <div class="row m-1 ">
                            <div class="col">
                                <hr class="borde">
                            </div>
                            <div class="col-auto">OR</div>
                            <div class="col">
                                <hr class="borde">
                            </div>
                        </div>

                        <!-- -->
                        <!-- ======= Costos ===== -->
                        <div class="form-group row m-0 p-0">
                            <label for="exampleInputEmail1" class=" col-form-label pl-4 pr-5">Servicio</label>
                            <div class="col input-group mb-3">
                                <input type="text" class="form-control" placeholder="Recipient's username"
                                    aria-label="Recipient's username" aria-describedby="basic-addon2">

                            </div>
                        </div>


                        <div class="d-flex">
                            <div class="mr-auto p-2">

                                <div class="form-group row mb-0">
                                    <label for="exampleInputEmail1" class="col-form-label ml-4 pl-1">Medico</label>
                                    <div class="col input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Recipient's username"
                                            aria-label="Recipient's username" aria-describedby="basic-addon2">

                                    </div>
                                </div>
                            </div>
                            <div class="p-2">
                                <div class="form-group row">
                                    <label for="exampleSelect1" class=" col-form-label">Tipo
                                        Cita</label>
                                    <div class="col">
                                        <select class="form-control" id="exampleSelect1">
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
                        <!-- -->

                        <div class="row d-flex justify-content-end p-1">
                            <div class=" mr-2" role="group" aria-label="First group">
                                <button type="button" class="btn btn-primary">Anular</button>
                                <button type="button" class="btn btn-primary">Marcar como
                                    confirmada</button>
                                <button type="button" class="btn btn-success">Pagar</button>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>
    <div class="content-wrapper"> </div>
    <!-- partial:../../partials/_footer.html -->
    @endsection