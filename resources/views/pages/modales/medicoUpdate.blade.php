<div class="container">
    <!-- Modal para alta -->
    <div class="modal fade" id="modal-update-{{$medico->idMedicos}}" tabindex="-1" role="dialog" aria-labelledby="altaModal" aria-hidden="true" style="z-index: 1999;">
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
                        <input id="idModalHorario" type="hidden" value="{{$medico->idMedicos}}">
                       <form id="myFormAlta" name="myFormAlta" class="form-horizontal" novalidate="">
                            <div class="row d-flex justify-content-center">
                                <div id="advertencia" class="alert alert-warning alert-dismissible fade show container-lg m-0 text-center center-block" role="alert" style="display:none">
                                    <strong>Advertencia! </strong> You should check in on some of those fields below. 
                                    <button id="buttonAdvertencia" type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span id="cross" aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                            </div>
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
                                                <input type="text" class="form-control border border-primary" id="cedula2{{$medico->idMedicos}}" name="cedula" placeholder="Cédula" aria-label="Cédula" aria-describedby="basic-addon1" required="true">
                                            </div>
            
                                            
                                            <div class="row">
                                                    <!-- input nombre -->
                                                <div class="col">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend bg-primary">
                                                    <span class="input-group-text text-white" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control border border-primary" id="nombre2{{$medico->idMedicos}}" name="nombre2" placeholder="Nombre" aria-label="nombre" aria-describedby="basic-addon1" required="true">
                                                </div>
                                            </div>
                                                <!-- input apellido -->
                                            <div class="col">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend bg-primary">
                                                    <span class="input-group-text text-white" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control border border-primary" id="apellido_paterno2{{$medico->idMedicos}}" name="apellido_paterno" placeholder="Apellido Paterno" aria-label="Apellido Paterno" aria-describedby="basic-addon1" required="true">
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
                                                <input type="text" class="form-control border border-primary" id="apellido_materno2{{$medico->idMedicos}}" name="apellido_materno" placeholder="Apellido Materno" aria-label="Apellido Materno" aria-describedby="basic-addon1" required="true">
                                            </div>
                                        </div>
                                            <!-- input Edad -->
                                        <div class="col">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend bg-primary">
                                                <span class="input-group-text text-white" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span></span>
                                                </div>
                                                <input type="text" class="form-control border border-primary" id="edad2{{$medico->idMedicos}}" placeholder="Edad" aria-label="Edad" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
            
                                <div class="row">
                                    <!-- input sexo -->
                                    <div class="col">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend bg-primary">
                                            <span class="input-group-text text-white" id="basic-addon1">Sexo</span></span>
                                            </div>
                                            <select class="form-control border border-primary"  id="sexo2{{$medico->idMedicos}}" name="sexo" value="Sexo" required="true">                          
                                                <option>Mujer</option>
                                                <option>Hombre</option>
                                                </select>
                                        </div>
             
                                    </div>
                                        <!-- Fecha Nacimiento -->
                                    <div class="col">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend bg-primary">
                                            <span class="input-group-text text-white" id="basic-addon1"><i class="fa fa-birthday-cake" aria-hidden="true"></i></span>
                                            </div>
                                            <input type="date" class="form-control border border-primary" id="fechaNacimiento2{{$medico->idMedicos}}" name="fechaNacimiento2" placeholder="Fecha Nacimiento" aria-label="Fecha Nacimiento" aria-describedby="basic-addon1" required="true">
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
                                                <input type="text" class="form-control border border-primary" id="direccion2{{$medico->idMedicos}}" name="direccion" placeholder="Direccion" aria-label="Direccion" aria-describedby="basic-addon1">
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
                                            <input type="text" class="form-control border border-primary" id="telefono2{{$medico->idMedicos}}" name="telefono" placeholder="Teléfono" aria-label="Teléfono" aria-describedby="basic-addon1" required="true">
                                        </div>
                                    </div>
                                <!-- input Email -->
                                    <div class="col">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend bg-primary">
                                            <span class="input-group-text text-white" id="basic-addon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                            </div>
                                            <input type="email" class="form-control border border-primary" id="email2{{$medico->idMedicos}}" name="email" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" required="true">
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
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend bg-primary">
                                                <span class="input-group-text text-white" id="basic-addon1">Especialización</span></span>
                                                </div>
                                                <select class="form-control border border-primary" id="especializacionSelect" name="especializacion">
                                                
                                                        @foreach ($especializaciones as $especializacion)
                                                  <option value="{{ $especializacion->idEspecializacion }}">
                                                        {{ $especializacion->nombreEspecializacion }}
                                                   </option>
                                                         @endforeach
                                                    </select>    
                                            </div>
                                        </div>
                                            <!-- Fecha Consultorio -->
                                            <div class="col">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend bg-primary text-white">
                                                    <span class="input-group-text text-white" id="basic-addon1">Consultorio</span></span>
                                                    </div>
                                                        <select class="form-control border border-primary" id="consultorioSelect" name="consultorio">
                                                            @foreach ($consultorios as $consultorio)
                                                           <option value="{{ $consultorio->idConsultorio }}">{{ $consultorio->noConsultorio }}</option>
                                                            @endforeach
                                                        </select>
                                                </div>
                                            </div>
                                       </div>
            
                                        <div class="row mt-4">
                                            <!-- input Horario -->
                                            <div class="col">
                                                <div class="input-group bg-primary">
                                                    <div class="input-group-prepend bg-success" data-toggle="modal" data-target="#modalHorario2">
                                                        <span class="input-group-text text-white" id=""><i class="fa fa-clock" aria-hidden="true"></i></span>
                                                    </div>
                                                        <input id="horaEntrada2{{$medico->idMedicos}}" type="time" class="form-control border border-primary">
                                                        <input id="horaSalida2{{$medico->idMedicos}}" type="time" class="form-control border border-primary">
                                                 </div>
                                            </div>
                                            <input type="hidden" id="horarioID2{{$medico->idMedicos}}" class="form-control border border-primary" id="horario2{{$medico->idMedicos}}" name="horario">
                                                <!-- Fecha Registro -->
                                            <div class="col">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend bg-primary">
                                                    <span class="input-group-text text-white" id="basic-addon1"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                    </div>
                                                    <input type="date" class="form-control border border-primary" id="fechaRegistro2{{$medico->idMedicos}}" name="fechaRegistro" placeholder="Fecha Nacimiento" aria-label="Fecha Nacimiento"  value ="@php echo date("Y-m-d"); @endphp" aria-describedby="basic-addon1" required="true">         
                                                </div>
                                            </div>
                                        </div>
                                 </div>
                               </div>
                             </div>
                         </form>
                    </div>
                    <!-- -->   
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="btn-update{{ $medico->idMedicos}}" data-id="{{ $medico->idMedicos}}" onclick="modificar(this)">Save changes</button>
                      </div>
                </div>
           </div>
    </div>
</div>
<script>
    //Obtener valor id Horario al dar click a registro de "horarios"
 $("#idTablaHorario2 tbody tr").click(function() {
   //obtener el primer valor de la celda
   var idHoraCell = $(this).find("td:first-child").text();
   var horaEntrada = $(this).find("td:nth-child(3)").text();
   var horaSalida = $(this).find("td:nth-child(4)").text();
   var idModalHorarios =  $('#idModalHorario').val(); 
   console.log(idModalHorarios);
   console.log('click en el renglon');
   $('#horarioID2'+idModalHorarios).val(idHoraCell);
   $("#horaEntrada2"+idModalHorarios).val(horaEntrada); 
   $("#horaSalida2"+idModalHorarios).val(horaSalida); 
   console.log(idHoraCell+idModalHorarios);
   console.log(horaEntrada+idModalHorarios);
   console.log(horaSalida+idModalHorarios);
});
</script>

