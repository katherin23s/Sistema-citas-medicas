@extends('indexDashboard')

@section('content')

    <!-- partial -->
    <div class="main-panel">




        <!----===============RECETA MEDICA FORMS ==================--------->
        <div class="container-fluid bg-success mb-5">
            ...
        </div>
        <div class="px-3 ">
            <div class="row p-0 m-0">
                <div class="col-12 col-sm-6">
                    <div class="form-group row p-0 m-0">
                        <label for="exampleInputEmail1" class="col-form-label">Doctor</label>
                        <div class="col input-group mb-3">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Enter email">

                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <!-- Fecha -->
                    <div class="">
                        <div class="form-group row">
                            <label for="example-date-input" class="col-form-label">Date</label>
                            <div class="col input-group mb-3">
                                <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                .borde {
                    margin-top: 1rem;
                    margin-bottom: 1rem;
                    border: 0;
                    border-top: 0.5px solid;
                    color: #1977cc;

                }

            </style>

            <div class="row p-0 m-0">
                <div class="col-6">
                    <h4 class="col-auto minimum-setup" id="minimum-setup"> <i class="fa fa-user"></i> Patients
                    </h4>
                </div>

                <div class="col-6">
                    <h4 class="col-auto minimum-setup" id="minimum-setup"> <i class="fa fa-leaf"></i> Treatments
                    </h4>
                </div>
            </div>

            <div class="row m-1">
                <div class="col-6">
                    <hr class="borde">
                </div>


                <div class="col-6">
                    <hr class="borde">
                </div>
            </div>

            <div class="row  p-0 m-0">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3">
                    <div class="form-group row p-0">
                        <label for="exampleInputEmail1" class="col-form-label">Id Paciente</label>
                        <div class="col input-group mb-3">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Enter email">

                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3">
                    <div class="form-group row">
                        <label for="exampleInputEmail1" class="col-form-label">Nombre</label>
                        <div class="col input-group mb-3">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Enter email">

                        </div>
                    </div>
                </div>


                <div class="col-12 col-sm-6">
                    <!-- Tiempo de duracion -->
                    <div class="">
                        <div class="form-group row  p-0 m-0">
                            <label for="exampleSelect1" class="col-form-label">Tipo Cita</label>
                            <div class="col input-group mb-3 p-0">
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

            <div class="row  p-0 m-0">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3">
                    <div class="form-group row">
                        <label for="exampleInputEmail1" class="col-form-label">Apellido Parterno</label>
                        <div class="col input-group mb-3">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Enter email">
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3">
                    <!-- Fecha -->
                    <div class="">
                        <div class="form-group row">
                            <label for="example-date-input" class="col-form-label">Bidth Date</label>
                            <div class="col input-group mb-3">
                                <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-sm-6">
                    <!-- Tiempo de duracion -->
                    <div class="">
                        <div class="form-group row">
                            <label for="exampleSelect1" class="col-form-label">Tratamiento</label>
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


            <div class="row  p-0 m-0">
                <div class="col-12 col-sm-6">
                    <!-- Fecha -->
                    <div class="">
                        <div class="form-group row">
                            <label for="example-date-input" class="col-form-label">Bidth Date</label>
                            <div class="col input-group mb-3">
                                <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-sm-6">
                    <!-- Fecha -->
                    <div class="">
                        <div class="form-group row">
                            <label for="example-date-input" class="col-form-label">Observaciones</label>
                            <div class="col input-group mb-3">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="d-flex">
                <div class="mr-auto p-2">
                    <h4> <i class="fa fa-thermometer-4 "></i> Receta
                </div>
                </h4>

                <div class="p-2"><button>Guardar</button></div>
            </div>


            <hr class="p-1">

            <!--========================================== RECETA MEDICA =================================== -->


            <div class="container border border-success p-5">
                <form id="myfrm">
                    <style>
                        .borde {
                            margin-top: 1rem;
                            margin-bottom: 1rem;
                            border: 0;
                            border-top: 0.5px solid;
                            color: #000;

                        }

                    </style>

                    <div class="container bg-success">
                        <p class="d-flex justify-content-center"> RECETA </p>
                    </div>
                    <div class="row p-0 m-0">
                        <div class="col-6">
                            <h4 class="col-auto minimum-setup" id="minimum-setup"> <i class="fa fa-user"></i>
                                Doctors
                            </h4>
                        </div>

                    </div>

                    <div class="row m-1">
                        <div class="col-12">
                            <hr class="borde">
                        </div>
                    </div>

                    <!-- Form de la receta medica -->

                    <div class="px-3">
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group row">
                                    <label for="exampleInputEmail1" class="col-form-label"> <b> Nombre Doctor:
                                        </b></label>
                                    <div class="col input-group mb-3">
                                        <input type="email" class="form-control border-left-0 border-top-0 border-right-0"
                                            id="exampleInputEmail1" aria-describedby="emailHelp"
                                            placeholder="Enter name doctor">

                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6">
                                <!-- Fecha -->
                                <div class="">
                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-form-label">Date</label>
                                        <div class="col input-group mb-3">
                                            <input class="form-control border-left-0 border-top-0 border-right-0"
                                                type="date" value="2011-08-19" id="example-date-input">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- -->

                    <div class="row m-1">
                        <div class="col-12">
                            <hr class="borde">
                        </div>
                    </div>


                    <!-- Pacientes -->
                    <div class="row p-0 m-0">
                        <div class="col-6">
                            <h4 class="col-auto minimum-setup" id="minimum-setup"> <i class="fa fa-user"></i>
                                Patients
                            </h4>
                        </div>
                    </div>


                    <div class="px-3">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group row">
                                    <label for="exampleInputEmail1" class="col-form-label"> <b> Nombre Paciente:
                                        </b></label>
                                    <div class="col input-group mb-3">
                                        <input type="email" class="form-control border-left-0 border-top-0 border-right-0"
                                            id="exampleInputEmail1" aria-describedby="emailHelp"
                                            placeholder="Enter name doctor">

                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <!-- Fecha -->
                                <div class="">
                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-form-label">Fecha
                                            Nacimiento</label>
                                        <div class="col input-group mb-3">
                                            <input class="form-control border-left-0 border-top-0 border-right-0"
                                                type="date" value="2011-08-19" id="example-date-input">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <!-- Fecha -->
                                <div class="">
                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-form-label">Fecha
                                            Cita</label>
                                        <div class="col input-group mb-3">
                                            <input class="form-control border-left-0 border-top-0 border-right-0"
                                                type="date" value="2011-08-19" id="example-date-input">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Diagnostico -->

                    <div class="row m-1">
                        <div class="col-12">
                            <hr class="borde">
                        </div>
                    </div>

                    <div class="row p-0 m-0">
                        <div class="col-6">
                            <h4 class="col-auto minimum-setup" id="minimum-setup"> <i class="fa fa-user"></i>
                                Diagnostic
                            </h4>
                        </div>
                    </div>


                    <div class="px-3">
                        <div class="row">
                            <div class="col-12">
                                <!-- Fecha -->
                                <div class="">
                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-form-label">Sintomas</label>
                                        <div class="col input-group mb-3">
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <!-- Fecha -->
                                <div class="">
                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-form-label">Medicina</label>
                                        <div class="col input-group mb-3">
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <!-- Tiempo de duracion -->
                                <div class="">
                                    <div class="form-group row">
                                        <label for="exampleSelect1" class="col-form-label">Tratamiento</label>
                                        <div class="col input-group mb-3 border-left-0 border-top-0 border-right-0">
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

                            <div class="col-12">
                                <!-- Fecha -->
                                <div class="">
                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-form-label">Observaciones</label>
                                        <div class="col input-group mb-3">
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button onclick="myPrint('myfrm')" value="print">Imprimir Receta</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    @endsection

    @push('jsreceta')
        <script>
            function myPrint(myfrm) {
                var printdata = document.getElementById(myfrm);
                newwin = window.open("");
                newwin.document.write(printdata.outerHTML);
                newwin.print();
                newwin.close();
            }

        </script>
    @endpush
