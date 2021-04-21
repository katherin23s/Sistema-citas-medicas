@extends('indexDashboard')
@section('usuarios')
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
        <h3 class="col-auto minimum-setup" id="minimum-setup">Users</h3>
        <div class="col">
            <hr class="borde">
        </div>
    </div>



    <!----===============1. Campos de busqueda y añadir nueva cita FORM ==================--------->

    <div class="row ml-2 ">
        <h4 id="minimum-setup">Users Information</h4>
        <div class="container-fluid p-0">

            <!-- paciente y medico nombre -->
            <div class="m-0 px-5">

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="exampleInputEmail1" class="col-form-label">Id Usuario</label>
                            <div class="col input-group mb-3">
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="exampleInputEmail1" class="col-form-label">Nombre</label>
                            <div class="col input-group mb-3">
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="exampleInputEmail1" class="col-form-label">Apellido Parterno</label>
                            <div class="col input-group mb-3">
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="exampleInputEmail1" class="col-form-label pr-4">Sexo </label>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="">Option 1
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="">Option 2
                                </label>
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
                                    <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
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

                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="bg-primary">
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Apellido Materno</th>
                                        <th>direccion</th>
                                        <th>telefono</th>
                                        <th>email</th>
                                        <th>sexo</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                @foreach ($usuarios as $usuario)
                                <tbody>
                                    <tr id="idtr" action="{{ $usuario->id}}">
                                        <td id=" idCita" type="hidden" style="display:none;">
                                            {{ $usuario->id}}</td>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $usuario->name }}</td>
                                        <td>{{ $usuario->apellido }}</td>
                                        <td>{{ $usuario->apellidoM }}</td>
                                        <td>{{ $usuario->direccion }}</td>
                                        <td>{{ $usuario->telefono }}</td>
                                        <td>{{ $usuario->email }}</td>
                                        <td>{{ $usuario->sexo }}</td>
                                        <td>
                                        <a href="{{url('pacientes/'.$usuario->id.'/edit')}}" type="submit" class="btn btn-success">
                                        Modificar
                                        </a>
                                        <form action="{{url('pacientes/'.$usuario->id)}}" method="POST">
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <input type="submit" class="btn btn-danger" onclick="return confirm('quieres borrar?')" value="   Borrar   ">
                                        </form>
                                        </td> 
                                    </tr>
                                </tbody>
                                @endforeach
                           
                            </table>
                        </div> 

                    </div>
                </div>


            </div>
        </div>

    </div>
    @endsection