@extends('indexDashboard')
@section('consultorios')
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
        <h3 class="col-auto minimum-setup" id="minimum-setup">Consulting Room</h3>
        <div class="col">
            <hr class="borde">
        </div>
    </div>



    <!----===============1. Campos de busqueda y añadir nueva cita FORM ==================--------->

    <div class="row ml-2 ">
        <h4 id="minimum-setup">Consulting Information</h4>
        <div class="container-fluid p-0">

            <!-- paciente y medico nombre -->
            <div class="m-0 px-5">




                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="exampleInputEmail1" class="col-form-label">No Consultorio</label>
                            <div class="col input-group mb-3">
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <!-- Tiempo de duracion -->
                        <div class="">
                            <div class="form-group row">
                                <label for="exampleSelect1" class="col-form-label">Status</label>
                                <div class="col input-group mb-3">
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
                        <x-crud />

                    </div>
                </div>


            </div>
        </div>

    </div>
    @endsection