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
    <form method="POST">
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
                                    <input class="form-control" id="idFechaCita" name="fechaCita"type="date" value="2011-08-19"
                                        id="example-date-input">
                                </div>
                            </div>
                        </div>
                        <!-- Hora inicial -->
                        <div class="col-12 col-sm-6 col-xl">
                            <div class="form-group row ">
                                <label for="example-time-input" class="col-2 col-form-label">Start time</label>
                                <div class="col-10">
                                    <input class="form-control" id="idHoracita" name="horaCita" type="time" value="13:45:00" >
                                </div>
                            </div>

                        </div>
                        <!-- Hora final -->
                        <div class="col-12 col-sm-6 col-xl">
                            <div class="form-group row ">
                                <label for="example-time-input" class="col-2 col-form-label">End Time</label>
                                <div class="col-10">
                                    <input class="form-control" type="time" id="idHorafincita" name="horaFinCita" value="13:45:00">
                                </div>
                            </div>
                        </div>
                        <!-- Tiempo de duracion -->
                        <div class="col-12 col-sm-6 col-xl">
                            <div class="form-group row ">
                                <label for="exampleSelect1" class="col-2 col-form-label">Time</label>
                                <div class="col-10">
                                    <select class="form-control" id="idDuracion" name="duracion">
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
                                    <select class="form-control" id="idTipoCita" name="tipoCita">
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
                    <div class="form-group ml-5 mr-5">
                        <div class="form-group row">
                            <label class="col-form-label">Folio</label>
                            <div class="col input-group mb-3">
                                <input class="form-control" id="noFolioinput" name="folioinput" placeholder="folio">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label">Paciente</label>
                            <div class="col input-group mb-3">
                                <input class="form-control" id="idPacienteCita" name="paciente" placeholder="paciente" disabled>
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal">Button</button>
                                </div>
                            </div>
                        </div>

                        <input class="form-control" type="hidden" id="id_paciente" name="paciente" placeholder="paciente">

                        <div class="form-group row">
                            <label class=" col-form-label">Medico</label>
                            <div class="col input-group mb-3">
                                <input type="text" class="form-control" id="NombreMedico" name="medico" disabled
                                    placeholder="medico" aria-label="Recipient's username"
                                    aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modalMedicoCitas">Button</button>
                                </div>
                            </div>
                        </div>
                    
                        <input type="hidden" class="form-control" id="idMedico" name="medico" placeholder="medico">


                        <div class="form-group row">
                            <label class=" col-form-label">Nombre paciente</label>
                            <div class="col input-group mb-3">
                                <input type="text" class="form-control" id="idNombre" name="nombre"
                                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class=" col-form-label">Descripcion</label>
                            <div class="col input-group mb-3">
                                <input type="text" class="form-control" id="IdDescripcion" name="descripcion"
                                    placeholder="descripcion" aria-label="Recipient's username"
                                    aria-describedby="basic-addon2">                          
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

                            <div class="row m-0 d-flex">
                                <div class="card col-12 col-xl-3 mt-3 mr-3 mb-3 ">
                                    <form class="card-body pb-2" action="{{route('citas.index')}}" method="get">
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
                                <button type="button" class="btn btn-primary col-12 col-xl-1 my-5 mr-auto ">Añadir
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


                         <!--   <div id="idTabla" class="table-responsive">
                                <table class="table table-striped table-hover" id="tblMain"> -->
                                    <div id="idTabla" class="table-responsive">
                                    <table class="table table-hover">
                                    <thead class="bg-primary">
                                        <tr>
                                            <th>#</th>
                                            <th>NOfolio</th>
                                            <th>Nombre</th>
                                            <th>Descripción</th>
                                            <th>Tipo Cita</th>
                                            <th>id_paciente</th>
                                            <th>id_Medico</th>
                                            <th>Fecha_cita</th>
                                            <th>HoraCita</th>
                                            <th>HoraFinCita</th>
                                            <th>Duracion</th>
                                            <th>Status</th>
                                            <th>Costo</th>
                                        </tr>
                                    </thead>
                                    @foreach ($citas as $cita)
                                    <tbody>
                                        <tr id="idtr" action="{{ $cita->idCita}}">
                                            <td id=" idCita" type="hidden" style="display:none;">
                                                {{ $cita->idCita}}</td>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $cita->noFolio }}</td>
                                            <td>{{ $cita->nombre }}</td>
                                            <td>{{ $cita->descripcion }}</td>
                                            <td>{{ $cita->tipoCita }}</td>
                                            <td>{{ $cita->id_paciente }}</td>
                                            <td>{{ $cita->id_medico }}</td>
                                            <td>{{ $cita->fecha_cita }}</td>
                                            <td>{{ $cita->horaCita }}</td>
                                            <td>{{ $cita->horaFinCita }}</td>
                                            <td>{{ $cita->duracion }}</td>
                                            <td>{{ $cita->status }}</td>
                                            <td>{{ $cita->costo }}</td>
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
            id_medico: jQuery('#idMedico').val(),    
            fecha_cita: jQuery('#idFechaCita').val(),
            horaCita: jQuery('#idHoracita').val(),
            horaFinCita: jQuery('#idHorafincita').val(),
            duracion: jQuery('#idDuracion').val(),
            status: 1,
            costo: 500,
            activo: 1,  
        };

        //verificar si se estan pasando los datos...
        console.log(formData); // ... yes

        //Mandar los datos al metodo store del controlador...
        var type = "POST";
        var ajaxurl = 'citas';
        $.ajax({
            type: type,
            url: ajaxurl,
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
        alert(id);
        alert(idPacientes);
        alert(idMedicos);


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
            $("#idMedico").val(data.id_medico);
            $("#idFechaCita").val(data.fecha_cita);
            $("#idHoracita").val(data.horaCita);
            $("#idHorafincita").val(data.horaFinCita);
            $("#idDuracion").val(data.duracion);        
            },
            
        });

    /*************************************************/
    //Obtener nombre apellido y apellidoM de pacientes

        //obtener la cita del id total en los inputs
        $.ajax({
            url: "api/pacientes/"+idPacientes,
            type: "GET",
            success: function(data) {
                //Mostrar registro en el crud
                console.log("PACIENTE ", data.apellido);           
                //se debe llamar el data igual que los campos de la BASE DE DATOS
               $("#idPacienteCita").val(data.nombre+" "+data.apellido+" "+data.apellidoM);     
            },
            
        });

     /*************************************************/
    //Obtener nombre apellido y apellidoM de medicos

        //obtener la cita del id total en los inputs
        $.ajax({
            url: "api/medicos/"+idMedicos,
            type: "GET",
            success: function(data) {
                //Mostrar registro en el crud
                console.log("PACIENTE ", data.apellido);           
                //se debe llamar el data igual que los campos de la BASE DE DATOS
               $("#NombreMedico").val(data.nombre+" "+data.apellido+" "+data.apellidoM);     
            },
            
        });

               //UPDATE

 $("#btn-update").click(function (e) {
 var formData2 = {
       noFolio: jQuery('#noFolioinput').val(),
       nombre: jQuery('#idNombre').val(),
       descripcion: jQuery('#IdDescripcion').val(), 
       tipoCita: jQuery('#idTipoCita').val(),
       id_paciente: jQuery('#id_paciente').val(),
       id_medico: jQuery('#idMedico').val(),    
       fecha_cita: jQuery('#idFechaCita').val(),
       horaCita: jQuery('#idHoracita').val(),
       horaFinCita: jQuery('#idHorafincita').val(),
       duracion: jQuery('#idDuracion').val(),
       status: 1,
       costo: 500,
       activo: 1,  
   };
        console.log(formData2);
        $.ajax({
        url: "citas/"+id,
        type: "PATCH",
        data: {
            _token: '{{csrf_token()}}',
            noFolio: jQuery('#noFolioinput').val(),
            nombre: jQuery('#idNombre').val(),
            descripcion: jQuery('#IdDescripcion').val(), 
            tipoCita: jQuery('#idTipoCita').val(),
            id_paciente: jQuery('#id_paciente').val(),
            id_medico: jQuery('#idMedico').val(),    
            fecha_cita: jQuery('#idFechaCita').val(),
            horaCita: jQuery('#idHoracita').val(),
            horaFinCita: jQuery('#idHorafincita').val(),
            duracion: jQuery('#idDuracion').val(),
            status: 1,
            costo: 500,
            activo: 1,  
        }, //name: name, email: email 
        success: function (data) {
        console.log(data);
        document.getElementById('noFolioinput').value = '';
        document.getElementById('idNombre').value = '';
        document.getElementById('IdDescripcion').value = '';
        document.getElementById('idTipoCita').value = '';
        document.getElementById('id_paciente').value = '';
        document.getElementById('idMedico').value = '';
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
        window.location = "/citas";
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
        var nombreMedico = $(this).find("td:nth-child(2)").text();
        var apellidoPMedico = $(this).find("td:nth-child(3)").text();
        var apellidoMedico = $(this).find("td:nth-child(4)").text();
        $('#id_medico').val(id2);
        $("#NombreMedico").val(nombreMedico+" "+apellidoPMedico+" "+apellidoMedico); 
    });

</script>
    <!-- partial:../../partials/_footer.html -->
    @endsection