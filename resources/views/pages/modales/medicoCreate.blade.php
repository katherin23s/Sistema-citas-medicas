<div class="container">
    <!-- Modal para alta -->
    <div class="modal fade" id="altaModal" tabindex="-1" role="dialog" aria-labelledby="altaModal" aria-hidden="true">
       <div class="modal-dialog modal-lg modal-dialog-centered">
         <div class="modal-content">
           <div class="modal-header bg-primary">
             <h4 class="modal-title text-white" id="myModalLabel"> 
                <i class="fa fa-user-md mr-4" aria-hidden="true"></i> Nuevo Médico</h4>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <div class="modal-body">
               <form id="myFormAlta" name="myFormAlta" class="form-horizontal" novalidate="">
               <!----===============1. Campos de busqueda y añadir nueva cita FORM ==================--------->
                    <div class="row ml-2 ">
                        <div class="row" style="color:#32C4FF">
                        <h4 id="minimum-setup">Doctors Information</h4>
                        </div>
                        <div class="container-fluid p-0">
                            
                            <div class="m-4">
                                <!-- input cedula -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend bg-primary">
                                    <span class="input-group-text text-white" id="basic-addon1"> <i class="fa fa-address-book" aria-hidden="true"></i> </span>
                                    </div>
                                    <input type="text" class="form-control border border-primary" id="cedula" name="cedula" placeholder="Cédula" aria-label="Cédula" aria-describedby="basic-addon1">
                                </div>

                                
                                <div class="row">
                                        <!-- input nombre -->
                                    <div class="col">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend bg-primary">
                                        <span class="input-group-text text-white" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                                        </div>
                                        <input type="text" class="form-control border border-primary" id="nombre" name="nombre" placeholder="Nombre" aria-label="nombre" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                    <!-- input apellido -->
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend bg-primary">
                                        <span class="input-group-text text-white" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                                        </div>
                                        <input type="text" class="form-control border border-primary" id="apellido_paterno" name="apellido_paterno" placeholder="Apellido Paterno" aria-label="Apellido Paterno" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- input Apellido Marterno -->
                                <div class="col">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend bg-primary">
                                    <span class="input-group-text text-white" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                                    </div>
                                    <input type="text" class="form-control border border-primary" id="apellido_materno" name="apellido_materno" placeholder="Apellido Materno" aria-label="Apellido Materno" aria-describedby="basic-addon1">
                                </div>
                            </div>
                                <!-- input Edad -->
                            <div class="col">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend bg-primary">
                                    <span class="input-group-text text-white" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span></span>
                                    </div>
                                    <input type="text" class="form-control border border-primary" id="edad" name="edad" placeholder="Edad" aria-label="Edad" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>

                    <div class="row">
                        <!-- input sexo -->
                        <div class="col">
                        <select class="form-control border border-primary" id="sexo" name="sexo">
                            <option>Mujer</option>
                            <option>Hombre</option>
                            </select>
                        </div>
                            <!-- Fecha Nacimiento -->
                        <div class="col">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend bg-primary">
                                <span class="input-group-text text-white" id="basic-addon1"><i class="fa fa-birthday-cake" aria-hidden="true"></i></span>
                                </div>
                                <input type="date" class="form-control border border-primary" id="fechaNacimiento" name="fechaNacimiento" placeholder="Fecha Nacimiento" aria-label="Fecha Nacimiento" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>



                    <div class="card text-white text-center p-2 my-4" style="background:#32c4ff;">
                                <!-- Información de contácto -->
                                <h4 id="minimum-setup">Contact Information</h4>
                    </div>

                
                        <div class="row">          
                            <!-- input Dirección -->
                            <div class="col">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend bg-primary">
                                    <span class="input-group-text text-white" id="basic-addon1"><i class="fa fa-id-card" aria-hidden="true"></i></span>
                                    </div>
                                    <input type="text" class="form-control border border-primary" id="direccion" name="direccion" placeholder="Direccion" aria-label="Direccion" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- input Teléfono -->
                            <div class="col">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend bg-primary">
                                <span class="input-group-text text-white" id="basic-addon1"><i class="fa fa-phone-square" aria-hidden="true"></i></span>
                                </div>
                                <input type="text" class="form-control border border-primary" id="telefono" name="telefono" placeholder="Teléfono" aria-label="Teléfono" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    <!-- input Email -->
                        <div class="col">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend bg-primary">
                                <span class="input-group-text text-white" id="basic-addon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                </div>
                                <input type="email" class="form-control border border-primary" id="email" name="email" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                            </div>
                            </div>
                        </div>



                        <div class="card text-white text-center p-2 my-4" style="background:#32c4ff;">
                        <!-- Información médica -->
                            <h4 id="minimum-setup">Medic Information</h4>
                        </div>

            
                        <div class="row">
                            <!-- input Especialización -->
                            <div class="col">
                            <select class="form-control border border-primary" id="especializacion" name="especializacion">
                                <option>1</option>
                                <option>2</option>
                                </select>
                            </div>
                                <!-- Fecha Consultorio -->
                                <div class="col">
                                    <select class="form-control border border-primary" id="consultorio" name="consultorio">
                                        <option>1</option>
                                        <option>2</option>
                                        </select>
                                    </div>
                                </div>

                        <div class="row mt-4">
                            <!-- input Horario -->
                            <div class="col">
                                <div class="input-group bg-primary">
                                    <div class="input-group-prepend bg-primary">
                                        <span class="input-group-text text-white"" id=""><i class="fa fa-clock" aria-hidden="true"></i></span>
                                    </div>
                                    <input type="time" class="form-control border border-primary">
                                    <input type="time" class="form-control border border-primary">
                                    </div>
                            </div>
                            <input class="form-control border border-primary"  id="horario" name="horario" value="1">
                                <!-- Fecha Registro -->
                            <div class="col">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend bg-primary">
                                    <span class="input-group-text text-white" id="basic-addon1"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                    </div>
                                    <input type="date" class="form-control border border-primary" id="fechaRegistro" name="fechaRegistro" placeholder="Fecha Nacimiento" aria-label="Fecha Nacimiento" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>
                        </div>
                    </div>
                    <!-- -->   
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button id="btn-save" type="button" class="btn btn-primary" value="add">Save changes</button>
                        <input type="hidden" id="medico_id" name="medico_id" value="0">
                      </div>
           </form>
       </div>
         </div>
       </div>
     </div>