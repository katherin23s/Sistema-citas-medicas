<div class="container">
    <!------------------------------------- Modal para modificar ------------------------------------------->
    <div class="modal fade" id="modal-update-{{$medico->idMedicos}}" tabindex="-1" role="dialog" aria-labelledby="modificarModal" aria-hidden="true">
       <div class="modal-dialog modal-lg modal-dialog-centered">
         <div class="modal-content">
           <div class="modal-header">
             <h4 class="modal-title" id="myModalLabel">Basic Modal {{$medico->idMedicos}}</h4>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
        <div class="modal-body">

            <form id="myFormModificar" name="myFormModificar" class="form-horizontal" novalidate="">
            <!----===============1. Campos de busqueda y añadir nueva cita FORM ==================--------->
            
           <div class="row ml-2 ">
            <h4 id="minimum-setup">Doctors Information</h4>
            <div class="container-fluid p-0">
                <div class="row m-1 ">
                    <div class="col">
                        <hr class="borde">
                    </div>
                    <h3 class="col-auto minimum-setup" id="minimum-setup">Doctors</h3>
                    <div class="col">
                        <hr class="borde">
                    </div>
                </div>

                <!-- paciente y medico nombre -->
                <div class="m-0 px-5">
                    <input id="idmedicoculto" type="hidden" class="form-control" id="oculto" name="cedula">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group row">
                                <label for="exampleInputEmail1" class="col-form-label">Cedula</label>
                                <div class="col input-group mb-3">
                                    <input type="email" class="form-control" id="cedula2{{$medico->idMedicos}}" name="cedula"
                                        aria-describedby="emailHelp" placeholder="Enter email" >

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group row">
                                <label for="exampleInputEmail1" class="col-form-label">Nombre</label>
                                <div class="col input-group mb-3">
                                    <input type="email" class="form-control" id="nombre2{{$medico->idMedicos}}" name="nombre"
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
                                    <input type="email" class="form-control" id="apellido_paterno2{{$medico->idMedicos}}" name="apellido_paterno"
                                        aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group row">
                                <label for="exampleInputEmail1" class="col-form-label">Apellido Materno</label>
                                <div class="col input-group mb-3">
                                    <input type="email" class="form-control" id="apellido_materno2{{$medico->idMedicos}}" name="apellido_materno"
                                        aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group row">
                                <label for="exampleInputEmail1" class="col-form-label">Direccion</label>
                                <div class="col input-group mb-3">
                                    <input type="email" class="form-control" id="direccion2{{$medico->idMedicos}}" name="direccion"
                                        aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group row">
                                <label for="exampleInputEmail1" class="col-form-label">Teléfono</label>
                                <div class="col input-group mb-3">
                                    <input type="email" class="form-control" id="telefono2{{$medico->idMedicos}}" name="telefono"
                                        aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group row">
                                <label for="exampleInputEmail1" class="col-form-label">Edad</label>
                                <div class="col input-group mb-3">
                                    <input type="email" class="form-control" id="edad2{{$medico->idMedicos}}" name="edad"
                                        aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group row">
                                <label for="exampleInputEmail1" class="col-form-label">Email</label>
                                <div class="col input-group mb-3">
                                    <input type="email" class="form-control" id="email2{{$medico->idMedicos}}" name="email"
                                        aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <!-- Fecha -->
                            <div class="">
                                <div class="form-group row">
                                    <label for="example-date-input" class="col-form-label">Fecha Nacimiento</label>
                                    <div class="col input-group mb-3">
                                        <input class="form-control" type="date" id="fechaNacimiento2{{$medico->idMedicos}}" name="fechaNacimiento2">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <!-- Fecha -->
                            <div class="">
                                <div class="form-group row">
                                    <label for="example-date-input" class="col-form-label">Sexo</label>
                                    <div class="col input-group mb-3">
                                        <input class="form-control" id="sexo2{{$medico->idMedicos}}" name="sexo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">                              
                        <!-- Fecha -->
                        <div class="col-12 col-sm-6">
                            <div class="form-group row">
                                <label for="example-date-input" class="col-form-label" >Registro</label>
                                <div class="col input-group mb-3">
                                    <input class="form-control" type="date" id="fechaRegistro2{{$medico->idMedicos}}" name="fechaRegistro">
                                </div>
                            </div>
                        </div>
                   
      
                        <!-- Tiempo de duracion -->
                        <div class="col-12 col-sm-6">
                            <div class="form-group row">
                                <label for="exampleInputEmail1" class="col-form-label">especializacion</label>
                                <div class="col input-group mb-3">
                                    <input type="email" class="form-control" id="especializacion2{{$medico->idMedicos}}" name="especializacion"
                                        aria-describedby="emailHelp" placeholder="Enter status">
                                </div>
                            </div>
                        </div>                         
                    </div>

                    <div class="row">
                       
                            <!-- Tiempo de duracion -->
                            <div class="col-12 col-sm-6">
                                <div class="form-group row">
                                    <label for="exampleInputEmail1" class="col-form-label">Consultorio</label>
                                    <div class="col input-group mb-3">
                                        <input type="email" class="form-control" id="consultorio2{{$medico->idMedicos}}" name="consultorio"
                                            aria-describedby="emailHelp" placeholder="Enter status">
                                    </div>
                                </div>
                            </div>
                        
                         
                                <!-- Tiempo de duracion -->
                                <div class="col-12 col-sm-6">
                                    <div class="form-group row">
                                        <label for="exampleInputEmail1" class="col-form-label">Horario</label>
                                        <div class="col input-group mb-3">
                                            <input type="email" class="form-control" id="horario2{{$medico->idMedicos}}" name="horario"
                                                aria-describedby="emailHelp" placeholder="Enter status">
                                        </div>
                                    </div>
                                </div>
                                                                                              
                        </div>

                <div class="row">
                    <!-- Tiempo de duracion -->
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="exampleInputEmail1" class="col-form-label">Status</label>
                            <div class="col input-group mb-3">
                                <input type="email" class="form-control" id="status2{{$medico->idMedicos}}" name="status"
                                    aria-describedby="emailHelp" placeholder="Enter status">
                            </div>
                        </div>
                    </div>
                       <!-- Tiempo de duracion -->
                       <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="exampleInputEmail1" class="col-form-label">Activo</label>
                            <div class="col input-group mb-3">
                                <input type="email" class="form-control" id="activo2{{$medico->idMedicos}}" name="activo"
                                    aria-describedby="emailHelp" placeholder="Enter status">
                            </div>
                        </div>
                    </div>

                </div>
                <!-- cierre -->
            </div>
            </div>
        </div>
        <!-- -->
          
        </form>
    </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             <button type="button" class="btn btn-primary" id="btn-update{{ $medico->idMedicos}}" data-id="{{ $medico->idMedicos}}" onclick="modificar(this)">Save changes</button>
           </div>
         </div>
       </div>
     </div>
</div> 
