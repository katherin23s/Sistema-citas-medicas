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

    .fa-ban {
      color: red;
    }

    .fa-clock {
      color: orange;
    }

    .fa-hourglass-end {
      color:#2196f3;
    }

   .fa-check{
      color: #19d895;
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

<div class="row d-flex justify-content-center">
    <div id="advertencia" class="alert alert-warning alert-dismissible fade show container-lg m-0 text-center center-block" role="alert" style="display:none">
        <strong>Advertencia! </strong> You should check in on some of those fields below. 
        <button id="buttonAdvertencia" type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span id="cross" aria-hidden="true">&times;</span>
        </button>
      </div>
</div>

<div class="card m-3 bg-light" >
    
 

    <!----===============1. Campos de busqueda y añadir nueva cita FORM ==================--------->
    <form method="POST" class="mt-2">
        @csrf
        <div class="row ml-2 ">
            <h4 id="minimum-setup">Choice Date</h4>
            <div class="container-fluid p-0">
                <div class="form-group">
                    <div class="row m-l-0 m-0 pr-4">
                        <!-- Fecha -->
                        <div class="col-12 col-sm-6 col-xl">
                            <div class="form-group row ml-2">
                                <label class="col-2 col-form-label" name="fecha">Date</label>
                                <div class="col-10">
                                    <input class="form-control" id="idFechaCita" name="fechaCita"type="date" value="{{ old('fechaCita') }}" require>
                                </div>
                            </div>
                        </div>
                        <!-- Hora inicial -->
                        <div class="col-12 col-sm-6 col-xl">
                            <div class="form-group row ">
                                <label for="example-time-input" class="col-2 col-form-label">Start time</label>
                                <div class="col-10">
                                    <input class="form-control" id="idHoracita" name="horaCita" type="time" value="{{ old('horaCita') }}" require>
                                </div>
                            </div>

                        </div>
                        <!-- Hora final -->
                        <div class="col-12 col-sm-6 col-xl">
                            <div class="form-group row ">
                                <label for="example-time-input" class="col-2 col-form-label">End Time</label>
                                <div class="col-10">
                                    <input class="form-control" type="time" id="idHorafincita" name="horaFinCita" value="{{ old('horaFinCita') }}" require>
                                </div>
                            </div>
                        </div>
                        <!-- Tiempo de duracion -->
                        <div class="col-12 col-sm-6 col-xl">
                            <div class="form-group row ">
                                <label for="exampleSelect1" class="col-2 col-form-label">Time</label>
                                <div class="col-10">
                                    <select class="form-control" id="idDuracion" name="duracion" value="{{ old('duracion') }}" require>
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
                                    <select class="form-control" id="idTipoCita" name="tipoCita" value="{{ old('tipoCita') }}" require>
                                        <option>Cirujias</option>
                                        <option>Tratamientos</option>
                                        <option>Consulta</option>

                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- paciente y medico nombre -->
                    <div class="form-group ml-5 mr-5">
                        <div class="form-group row">
                            <label class="col-form-label">Folio</label>
                            <div class="col input-group mb-3">
                                <input class="form-control" id="noFolioinput" name="folioinput" placeholder="folio" value="{{ old('folioinput') }}" require>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label">Paciente</label>
                            <div class="col input-group mb-3">
                                <input class="form-control" id="idPacienteCita" name="paciente" placeholder="paciente" value="{{ old('paciente')}}" disabled require>
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modalPacientes">Button</button>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" class="form-control"  id="id_paciente" name="paciente" placeholder="paciente" value="{{ old('paciente')}}">

                        <div class="form-group row">
                            <label class=" col-form-label">Medico</label>
                            <div class="col input-group mb-3">
                                <input type="text" class="form-control" id="NombreMedico" name="medico" disabled
                                    placeholder="medico" aria-label="Recipient's username"
                                    aria-describedby="basic-addon2" value="{{ old('medico')}}" require>
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modalMedicoCitas">Button</button>
                                </div>
                            </div>
                        </div>
                    
                        <input type="hidden" class="form-control" id="id_medico" name="medico" placeholder="medico" value="{{ old('medico')}}">


                        <div class="form-group row">
                            <label class=" col-form-label">Titulo receta</label>
                            <div class="col input-group mb-3">
                                <input type="text" class="form-control" id="idNombre" name="nombre"
                                    aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{ old('nombre')}}" require>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class=" col-form-label">Descripcion</label>
                            <div class="col input-group mb-3">
                                <input type="text" class="form-control" id="IdDescripcion" name="descripcion"
                                    placeholder="descripcion" aria-label="Recipient's username"
                                    aria-describedby="basic-addon2" value="{{ old('descripcion')}}" require>                          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


    @include('pages.modales.citasSelectPacientes')
    @include('pages.modales.medicosSelect')
    @include('pages.modales.citasPay')
    <!-- -->
    <div class="form-group d-flex justify-content-end px-4">
        <button id="btn-save" type="button" class="btn btn-outline-primary">Guardar</button>
        <button id="btn-update" type="button" class="btn btn-outline-secondary">Editar</button>
        <button type="button" id="btn-search"class="btn btn-outline-success">Buscar</button>
        <button type="button" id="btn-delete" class="btn btn-outline-danger">Danger</button>
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
                            <div class="col-auto">OR</div>
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
                        <form  action="{{route('citas.index')}}" method="GET">
                            <div class="row m-0 d-flex">
                                <div class="card col-12 col-xl-3 mt-3 mr-3 mb-3 ">
                                  
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="buscar" placeholder="Browser"
                                                aria-label="Browser" aria-describedby="basic-addon2">
                                            <div class="input-group-append d-flex justify-content-end">
                                                <button class="btn btn-outline-primary" type="button">Buscar</button>
                                            </div>
                                        </div>
                                </div>
                                <!-- Agregar Seleccionado -->
                                <button type="button" class="btn btn-primary col-12 col-xl-1 my-5 mr-auto " onclick="window.location='{{ route('citas.index') }}'">Mostrar todo </button>
                                <!-- -->
                              
                                  <!-- -->
                                  <div class="form-group col-2 mt-4 p-0 mr-4">
                                    <label for="exampleFormControlSelect1">Fecha inicio</label>
                                    <input class="form-control" id="idFechaCita" name="fechaCitaInicio" type="date" value="2013-01-08" require>
                                
                                </div>
                                    <!-- -->
                                    <div class="form-group col-2 mt-4 p-0 mr-4">
                                        <label for="exampleFormControlSelect1">Fecha final</label>
                                        <input class="form-control" id="idFechaCita2" name="fechaCitaFinal" type="date" value="2022-01-08" require>
                                    </div>
                                
                                <!-- -->
                                <div class="form-group col-2 mt-4 p-0 mr-4">
                                    <label for="exampleFormControlSelect1" >Estado</label>
                                    <select class="form-control form-control-lg" id="idEstado" name="selecEstado" onchange='saveValue(this);'>
                                        <option value="0">Cancelado</option>
                                        <option value="1">pendiente</option>
                                        <option value="2">proceso</option>
                                        <option value="3">Finalizado</option>
                                    </select>
                                </div>
                                    <input type="hidden" name="estadoCita" id="estadoCita">
                                <div class="form-group mt-4">
                                    <label for="exampleFormControlSelect1">Buscar</label>
                                <button type="submit" class="btn btn-primary form-control">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                      </svg>
                                </button>
                            </div>
                            </div>
                        </form>
                
                            <!-- -->


                         <!--   <div id="idTabla" class="table-responsive">
                                <table class="table table-striped table-hover" id="tblMain"> -->
                              <div id="idTabla" class="table-responsive">
                                 <table class="table table-hover">
                                    <thead class="bg-primary">
                                        <tr>
                                            <th>#</th>
                                            <th class="text-white">NOfolio</th>
                                            <th class="text-white">Nombre</th>
                                            <th class="text-white">Descripción</th>
                                            <th class="text-white">Tipo Cita</th>
                                            <th class="text-white" type="hidden" style="display:none;">id_paciente</th>
                                            <th class="text-white" type="hidden" style="display:none;">id_Medico</th>
                                            <th class="text-white">Fecha_cita</th>
                                            <th class="text-white">HoraCita</th>
                                            <th class="text-white">HoraFinCita</th>
                                            <th class="text-white">Duracion</th>
                                            <th class="text-white">Status</th>
                                            <th class="text-white">Costo</th>
                                            <th class="text-white">Estado</th>
                                        </tr>
                                    </thead>
                                    @foreach ($citas as $cita)
                                    <tbody>
                                        <tr id="idtr" action="{{ $cita->idCita}}">
                                            <td id="idCita" type="hidden" style="display:none;">
                                                {{ $cita->idCita}}</td>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $cita->noFolio }}</td>
                                            <td>{{ $cita->paciente->nombre }}</td>
                                            <td>{{ $cita->medico->nombre }}</td>
                                            <td>{{ $cita->tipoCita }}</td>
                                            <td type="hidden" style="display:none;">{{ $cita->id_paciente }}</td>
                                            <td type="hidden" style="display:none;">{{ $cita->id_medico }}</td>
                                            <td>{{ $cita->fecha_cita }}</td>
                                            <td>{{ $cita->horaCita }}</td>
                                            <td>{{ $cita->horaFinCita }}</td>
                                            <td>{{ $cita->duracion }}</td>
                                            <td>{{ $cita->status }}</td>
                                            <td>{{ $cita->costo }}</td>
                                            <td><i class="{{ $cita->statusIcon }}"></i></td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                            <div class="row d-flex justify-content-end p-1">
                                <div class="btn-group mr-2" role="group" aria-label="First group">
                                    {!! $citas->links() !!}
                                </div>
                            </div>
                        </div>

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
                        </div>

                        <!-- -->
                        <!-- ======= Costos ===== -->
                        <div class="d-flex">
                            <div class="mr-auto p-2">

                                <div class="form-group row mb-0">
                                    <label for="exampleInputEmail1" class="col-form-label ml-4 pl-1">Precio</label>
                                    <div class="col input-group mb-3">
                                        <input type="text" class="form-control"  placeholder="Recipient's username"
                                            aria-label="Recipient's username" aria-describedby="basic-addon2">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- -->

                        <div class="row d-flex justify-content-end p-1">
                            <div class=" mr-2" role="group" aria-label="First group">
                                <button id="btn-cancelar" type="button" class="btn btn-primary">Anular</button>
                                <button id="btn-pendiente" type="button" class="btn btn-primary">Pendiente</button>
                                <button id="btn-pagar" data-toggle="modal" data-target="#pagar-cita" type="button" class="btn btn-success">Pagar</button>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>

    
<div class="content-wrapper"> </div>
<script>
 document.getElementById('btn-update').disabled=true;
 document.getElementById('btn-delete').disabled=true;
 

  // CREATE
  $("#btn-save").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        //EL nombre de la izquierda debe ser igual al de la base de datos
        var formData = {
            noFolio: jQuery('#noFolioinput').val(),
            nombre: jQuery('#idNombre').val(),
            descripcion: jQuery('#IdDescripcion').val(), 
            tipoCita: jQuery('#idTipoCita').val(),
            id_paciente: jQuery('#id_paciente').val(),
            id_medico: jQuery('#id_medico').val(),    
            fecha_cita: jQuery('#idFechaCita').val(),
            horaCita: jQuery('#idHoracita').val(),
            horaFinCita: jQuery('#idHorafincita').val(),
            duracion: jQuery('#idDuracion').val(),
            status: 1,
            costo: 0,
            activo: 1,  
        };


    //Obtener valor de formulario
    let advertencia = document.getElementById("advertencia");
    let fechaCita = jQuery('#idFechaCita').val()
    let Horacita = jQuery('#idHoracita').val()
    let horaFinCita = jQuery('#idHorafincita').val()
    let duracion = jQuery('#idDuracion').val()
    let tipoCita = jQuery('#tipoCita').val()
    let folioinput = jQuery('#noFolioinput').val()
    let paciente = jQuery('#idPacienteCita').val()
    let NombreMedico = jQuery('#NombreMedico').val()
    let titulo = jQuery('#idNombre').val()
    let descripcion = jQuery('#IdDescripcion').val()



    //Validar campos vacios
  

     //Validar el color del campo si esta vacio
     if(folioinput === ""){
     jQuery('#noFolioinput').addClass("border border-warning");
     } 
     if(fechaCita === ""){
     jQuery('#idFechaCita').addClass("border border-warning");}

     if(Horacita === ""){
     jQuery('#idHoracita').addClass("border border-warning");}

     if(horaFinCita === ""){
     jQuery('#idHorafincita').addClass("border border-warning");}

     if(duracion === ""){
     jQuery('#idDuracion').addClass("border border-warning");}

     if(tipoCita === ""){
     jQuery('#tipoCita').addClass("border border-warning");}

     if(paciente === ""){
     jQuery('#idPacienteCita').addClass("border border-warning");}
     
     if(NombreMedico === ""){
     jQuery('#NombreMedico').addClass("border border-warning");}

     if(titulo === ""){
     jQuery('#idNombre').addClass("border border-warning");}

     if(descripcion === ""){
     jQuery('#IdDescripcion').addClass("border border-warning");}

     if(folioinput === "" || fechaCita === "" || Horacita === "" || horaFinCita === "" || duracion === "" || tipoCita === "" || paciente === "" || NombreMedico === "" || titulo === "" || descripcion === ""){
        document.getElementById('advertencia').style.display='';
       document.getElementById('buttonAdvertencia').style.display='';
       document.getElementById('cross').style.display=''; 
     }else{
       

        var validarFolio = {
            noFolio: jQuery('#noFolioinput').val()}
            
        var type = "GET";
        var ajaxurl = 'validar-duplicacion';
        $.ajax({
            type: type,
            url: ajaxurl,
            data: validarFolio,
            dataType: 'json',
            success: function (data) {
                    if(data == false){
                        //creame el registro
                        $.ajax({
                            type: "POST",
                            url: 'citas',
                            data: formData,
                            dataType: 'json',
                            success: function (data) {
                            console.log(data);
                            window.location = "/citas";
                            },
                            error: function (data) {
                                console.log(data);
                            }
                        });
                    
                    }else{
                        console.log(data);
                        console.log("hay registro");
                        //advertencia
                        document.getElementById('advertencia').style.display='';
                        document.getElementById('buttonAdvertencia').style.display='';
                        document.getElementById('buttonAdvertencia').innerHTML = "Duplicacion!";
                    // document.getElementById('cross').style.display='';

                        jQuery('#noFolioinput').addClass("border border-warning");
                    }
            //window.location = "/citas";
            },
            error: function (data) {
                console.log(data);
            }
        });

     }

   
    });



//CRUD Y SELECCION DE LA TABLA CITAS EN EL FORMULARIO
    $("#idTabla tbody tr").click(function() {
        document.getElementById('btn-update').disabled=false;   
        document.getElementById('btn-delete').disabled=false;
        
        document.getElementById('btn-save').disabled=true;   
        document.getElementById('btn-search').disabled=true;

        var id1 = $(this).find("td:first-child").text();
        var id = parseInt(id1);
        var idPacientes = $(this).find("td:nth-child(7)").text();
        var idMedicos = $(this).find("td:nth-child(8)").text();
   
        //obtener la cita del id total en los inputs
        $.ajax({
            url: "citas/"+id+"/edit",
            type: "GET",
            data: {
                _token: '{{csrf_token()}}',
                id: id
            },
            success: function(data) {
            //Mostrar registro en el crud
            console.log(data);           
    //se debe llamar el data igual que los campos de la BASE DE DATOS
            $("#idCita").val(data.idCita);
            $("#noFolioinput").val(data.noFolio);
            $("#idNombre").val(data.nombre);
            $("#IdDescripcion").val(data.descripcion);
            $("#idTipoCita").val(data.tipoCita);
            $("#id_paciente").val(data.id_paciente);
            $("#id_medico").val(data.id_medico);
            $("#idFechaCita").val(data.fecha_cita);
            $("#idHoracita").val(data.horaCita);
            $("#idHorafincita").val(data.horaFinCita);
            $("#idDuracion").val(data.duracion);  
            $("#idPacienteCita").val(data.paciente.nombre+" "+data.paciente.apellido+" "+data.paciente.apellidoM);   
            $("#NombreMedico").val(data.medico.nombre+" "+data.medico.apellido+" "+data.medico.apellidoM);           
            },
            
        });

    /*************************************************/
    //Obtener nombre apellido y apellidoM de pacientes

        //obtener la cita del id total en los inputs
        /*$.ajax({
            url: "api/pacientes/"+idPacientes,
            type: "GET",
            success: function(data) {
                //Mostrar registro en el crud
                console.log("PACIENTE ", data.apellido);           
                //se debe llamar el data igual que los campos de la BASE DE DATOS
               $("#idPacienteCita").val(data.nombre+" "+data.apellido+" "+data.apellidoM);     
            },
            
        });*/

     /*************************************************/
    //Obtener nombre apellido y apellidoM de medicos

        //obtener la cita del id total en los inputs
     /*   $.ajax({
            url: "api/medicos/"+idMedicos,
            type: "GET",
            success: function(data) {
                //Mostrar registro en el crud
                console.log("PACIENTE ", data.apellido);           
                //se debe llamar el data igual que los campos de la BASE DE DATOS
               $("#NombreMedico").val(data.nombre+" "+data.apellido+" "+data.apellidoM);     
            },
            
        });*/

               //UPDATE

 $("#btn-update").click(function (e) {
 var formData2 = {
       noFolio: jQuery('#noFolioinput').val(),
       nombre: jQuery('#idNombre').val(),
       descripcion: jQuery('#IdDescripcion').val(), 
       tipoCita: jQuery('#idTipoCita').val(),
       id_paciente: jQuery('#id_paciente').val(),
       id_medico: jQuery('#id_medico').val(),    
       fecha_cita: jQuery('#idFechaCita').val(),
       horaCita: jQuery('#idHoracita').val(),
       horaFinCita: jQuery('#idHorafincita').val(),
       duracion: jQuery('#idDuracion').val(),
       status: 1,
       costo: 0,
       activo: 1,  
   };
        console.log(formData2);
        $.ajax({
        url: "citas/"+id,
        type: "PATCH",
        data: {
            _token: '{{csrf_token()}}',
            nombre: jQuery('#idNombre').val(),
            descripcion: jQuery('#IdDescripcion').val(), 
            tipoCita: jQuery('#idTipoCita').val(),
            id_paciente: jQuery('#id_paciente').val(),
            id_medico: jQuery('#id_medico').val(),    
            fecha_cita: jQuery('#idFechaCita').val(),
            horaCita: jQuery('#idHoracita').val(),
            horaFinCita: jQuery('#idHorafincita').val(),
            duracion: jQuery('#idDuracion').val(),
            status: 1,
            costo: 0,
            activo: 1,  
        }, //name: name, email: email 
        success: function (data) {
        console.log(data);
        document.getElementById('idNombre').value = '';
        document.getElementById('IdDescripcion').value = '';
        document.getElementById('idTipoCita').value = '';
        document.getElementById('id_paciente').value = '';
        document.getElementById('id_medico').value = '';
        document.getElementById('idFechaCita').value = '';
        document.getElementById('idHoracita').value = '';
        document.getElementById('idHorafincita').value = '';
        document.getElementById('idDuracion').value = '';

     
        window.location = "/citas";
            
        },
        });
}); 

//DELETE
$("#btn-delete").click(function (e) {
    document.getElementById('btn-delete').disabled=true;
     var url = "citas";
     var dltUrl = url+"/"+id;
     $.ajax({
         url: dltUrl,
         type: "DELETE",
         cache: false,
         data:{
             _token:'{{ csrf_token() }}'
         },
         success: function(dataResult){
            window.location = "/citas";
             var dataResult = JSON.parse(dataResult);
             if(dataResult.statusCode==200){
                 $ele.fadeOut().remove();
             }
            
         }
     });
 });

 $("#btn-cancelar").click(function (e) {
    //cambiar la clase del boton
     console.log("cancelar");
     $(this).addClass("bg-danger border border-danger");
    //Se cambia el estado de la cita a cancelado.

     $.ajax({
        url: "citas-cancelar/"+id,
        type: "PATCH",
        data: {
            _token: '{{csrf_token()}}',
            status: 1,
            activo: 0,  
        }, //name: name, email: email 
        success: function (data) {
        console.log(data);
      //  window.location = "/citas";
        },
        });
    });



    $("#btn-pendiente").click(function (e) {
    //cambiar la clase del boton
     console.log("pendiente");
     $(this).addClass("bg-success border border-success");
    //Se cambia el estado de la cita a cancelado.

     $.ajax({
        url: "citas-pendiente/"+id,
        type: "PATCH",
        data: {
            _token: '{{csrf_token()}}',
            status: 2,
            activo: 1,  
        }, //name: name, email: email 
        success: function (data) {
        console.log(data);
        window.location = "/citas";
        },
        });
    });


    $("#btn-pagar-modal").click(function (e) {
    //cambiar la clase del boton
     console.log("pagar");
     $(this).addClass("bg-success border border-success");
    //Se cambia el estado de la cita a pagado.
    //Toma el valor de input pagar
    var pago = $("#pagar-citas-input").val();
    console.log(pago);

    $.ajax({
        url: "cita-pagada/"+id,
        type: "PATCH",
        data: {
            _token: '{{csrf_token()}}',
            costo: pago,
            status: 3,
            activo: 1,  
        }, //name: name, email: email 
        success: function (data) {
        console.log(data);
        window.location = "/citas";
        },
        });
    });
});


/*************************************************/
/*Al seleccionar un renglón de la tabla pacientes traer el valor al input pacientes en texto*/

$("#idTablaPacienteCita tbody tr").click(function() {
        var id1 = $(this).find("td:first-child").text();
        var id = parseInt(id1);
        var nombre = $(this).find("td:nth-child(2)").text();
        var apellidoP = $(this).find("td:nth-child(3)").text();
        var apellidoM = $(this).find("td:nth-child(4)").text();
        $('#id_paciente').val(id);
        $("#idPacienteCita").val(nombre+" "+apellidoP+" "+apellidoM); 
    });

/*************************************************/
/*Al seleccionar un renglón de la tabla medicos traer el valor al input medicos en texto*/

$("#idTablaMedicoCita tbody tr").click(function() {
        var id = $(this).find("td:first-child").text();
        var id2 = parseInt(id);
        alert(id2)
        var nombreMedico = $(this).find("td:nth-child(2)").text();
        var apellidoPMedico = $(this).find("td:nth-child(3)").text();
        var apellidoMedico = $(this).find("td:nth-child(4)").text();
        $('#id_medico').val(id2);
        $("#NombreMedico").val(nombreMedico+" "+apellidoPMedico+" "+apellidoMedico); 
    });

/*************************************************/
//Obtener valor del estado
$('#idEstado').on('change', function() {
  var value = $(this).val();
  $('#estadoCita').val(value);
});


</script>
    <!-- partial:../../partials/_footer.html -->
    @endsection