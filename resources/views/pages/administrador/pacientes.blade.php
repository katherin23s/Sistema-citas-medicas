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

    <!-- Buscador y Boton Agregar Responsivo -->

    <div class="row m-0 d-flex">
        <div class="card col-12 col-xl-3 mt-3 mr-3 mb-3 ">
            <form class="card-body pb-2" action="{{route('pacientes.index')}}" method="get">
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
        <button action="{{route('pacientes.index')}}" type="button" class="btn btn-primary col-12 col-xl-1 my-5 mr-auto ">Añadir
            seleccionado</button>
        <!-- -->

        <!-- CRUD de botones -->
        <div class="row d-flex justify-content-end m-0 pr-5 border-0 ">
            <div class="btn-group border-0" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-secondary my-5 p-3">Left</button>
                <button type="button" class="btn btn-secondary my-5">Middle</button>
                <button type="button" class="btn btn-secondary my-5">Right</button>
                <button type="button" class="btn btn-secondary my-5">Right</button>
            </div>
        </div>
        <!-- -->
        <div class="form-group col-2 mt-4 p-0">
            <label for="exampleFormControlSelect1">Show</label>
            <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>

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
                    <th>activos</th>
                </tr>
            </thead>
            @foreach ($pacientes as $paciente)
            <tbody>
                <tr id="idtr" action="{{ $paciente->idPaciente}}">
                    <td id=" idCita" type="hidden" style="display:none;">
                        {{ $paciente->idPaciente}}</td>
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
                        <button id="{{ $paciente->idMedicos}}" action="" type="button" class="btn btn-success" data-toggle="modal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                          </svg>
                        </button>

                        <button type="button" class="btn btn-danger" action=""data-toggle="modal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
                                <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                              </svg>    
                        </button></td> 
                </tr>
            </tbody>
            @endforeach
       
        </table>
    </div>
    <div class="row d-flex justify-content-end p-1">
        <div class="btn-group mr-2" role="group" aria-label="First group">
            <button type="button" class="btn btn-secondary">1</button>
            <button type="button" class="btn btn-secondary">2</button>
            <button type="button" class="btn btn-secondary">3</button>
            <button type="button" class="btn btn-secondary">4</button>
        </div>
    </div>
</div>   
                    </div>
                </div>


            </div>
        </div>

    </div>
    @endsection