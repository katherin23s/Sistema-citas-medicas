
    <!----===============1. Campos de busqueda y añadir nueva cita FORM ==================--------->

    <div class="row ml-2 ">
        <h4 id="minimum-setup">Patients Information</h4>
        <div class="container-fluid p-0">
<form action="{{url('pacientes/'.$paciente->idPaciente)}}" method="POST" enctype="multipart/form-data">
    @csrf 
    {{ method_field('PATCH')}}     
    <!-- paciente y medico nombre -->
            <div class="m-0 px-5">

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="exampleInputEmail1" class="col-form-label">Nombre</label>
                            <div class="col input-group mb-3">
                                <input class="form-control" id="nombre" name="nombre" value="{{ $paciente->nombre }}">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="exampleInputEmail1" class="col-form-label">Apellido Parterno</label>
                            <div class="col input-group mb-3">
                                <input class="form-control" id="apellido" name="apellido" value="{{ $paciente->apellido }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="exampleInputEmail1" class="col-form-label">Apellido Materno</label>
                            <div class="col input-group mb-3">
                                <input class="form-control" id="apellidoM" name="apellidoM" value="{{ $paciente->apellidoM }}">

                            </div>
                        </div>
                    </div>
                </div>


                
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="exampleInputEmail1" class="col-form-label">Direccion</label>
                            <div class="col input-group mb-3">
                                <input class="form-control" id="direccion" name="direccion" value="{{ $paciente->direccion }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6">
                        <!-- Fecha -->
                        <div class="">
                            <div class="form-group row">
                                <label for="example-date-input" class="col-form-label">Registro</label>
                                <div class="col input-group mb-3">
                                    <input class="form-control" type="date" id="registro" name="registro" value="{{$paciente->registro}}">
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
                                <input class="form-control" id="telefono" name="telefono" value="{{$paciente->telefono}}">
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="exampleInputEmail1" class="col-form-label">Edad</label>
                            <div class="col input-group mb-3">
                                <input class="form-control" id="edad" name="edad" value="{{ $paciente->edad }}">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="exampleInputEmail1" class="col-form-label">Email</label>
                            <div class="col input-group mb-3">
                                <input class="form-control" id="email" name="email" value="{{ $paciente->email }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="exampleInputEmail1" class="col-form-label pr-4">Sexo </label>
                            <div class="col input-group mb-3">
                                <input class="form-control" id="sexo" name="sexo" value="{{ $paciente->sexo }}">
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
                                    <input class="form-control" type="date" id="fechaNacimiento" name="fechaNacimiento" value="{{ $paciente->fechaNacimiento }}">
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
                                    <input class="form-control" type="status" id="status"  name="status" value="{{ $paciente->status }}">
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
                                    <select class="form-control" id="activo" name="activo" value="{{ $paciente->activo }}">
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
    <!-- -->