@extends('indexDashboard')

@section('medicos')


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


    <div class="container">
         <!-- Modal para alta -->
         <div class="modal fade" id="altaModal" tabindex="-1" role="dialog" aria-labelledby="altaModal" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel">Basic Modal</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form id="myFormAlta" name="myFormAlta" class="form-horizontal" novalidate="">
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

                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group row">
                                        <label for="exampleInputEmail1" class="col-form-label">Cedula</label>
                                        <div class="col input-group mb-3">
                                            <input type="email" class="form-control" id="cedula" name="cedula"
                                                aria-describedby="emailHelp" placeholder="Enter email">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group row">
                                        <label for="exampleInputEmail1" class="col-form-label">Nombre</label>
                                        <div class="col input-group mb-3">
                                            <input type="email" class="form-control" id="nombre" name="nombre"
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
                                            <input type="email" class="form-control" id="apellido_paterno" name="apellido_paterno"
                                                aria-describedby="emailHelp" placeholder="Enter email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group row">
                                        <label for="exampleInputEmail1" class="col-form-label">Apellido Materno</label>
                                        <div class="col input-group mb-3">
                                            <input type="email" class="form-control" id="apellido_materno" name="apellido_materno"
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
                                            <input type="email" class="form-control" id="direccion" name="direccion"
                                                aria-describedby="emailHelp" placeholder="Enter email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group row">
                                        <label for="exampleInputEmail1" class="col-form-label">Teléfono</label>
                                        <div class="col input-group mb-3">
                                            <input type="email" class="form-control" id="telefono" name="telefono"
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
                                            <input type="email" class="form-control" id="edad" name="edad"
                                                aria-describedby="emailHelp" placeholder="Enter email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group row">
                                        <label for="exampleInputEmail1" class="col-form-label">Email</label>
                                        <div class="col input-group mb-3">
                                            <input type="email" class="form-control" id="email" name="email"
                                                aria-describedby="emailHelp" placeholder="Enter email">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-form-label" >Registro</label>
                                        <div class="col input-group mb-3">
                                            <input class="form-control" type="date" id="fechaNacimiento" name="fechaNacimiento">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group row">
                                        <label for="exampleInputEmail1" class="col-form-label">Edad</label>
                                        <div class="col input-group mb-3">
                                            <input type="email" class="form-control" id="sexo" name="sexo"
                                                aria-describedby="emailHelp" placeholder="Enter email">
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
                                            <input class="form-control" type="date" id="fechaRegistro" name="fechaRegistro">
                                        </div>
                                    </div>
                                </div>
                           
              
                                <!-- Tiempo de duracion -->
                                <div class="col-12 col-sm-6">
                                    <div class="form-group row">
                                        <label for="exampleInputEmail1" class="col-form-label">especializacion</label>
                                        <div class="col input-group mb-3">
                                            <input type="email" class="form-control" id="especializacion" name="especializacion"
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
                                                <input type="email" class="form-control" id="consultorio" name="consultorio"
                                                    aria-describedby="emailHelp" placeholder="Enter status">
                                            </div>
                                        </div>
                                    </div>
                                
                                 
                                        <!-- Tiempo de duracion -->
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group row">
                                                <label for="exampleInputEmail1" class="col-form-label">Horario</label>
                                                <div class="col input-group mb-3">
                                                    <input type="email" class="form-control" id="horario" name="horario"
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
                                        <input type="email" class="form-control" id="status" name="status"
                                            aria-describedby="emailHelp" placeholder="Enter status">
                                    </div>
                                </div>
                            </div>
                               <!-- Tiempo de duracion -->
                               <div class="col-12 col-sm-6">
                                <div class="form-group row">
                                    <label for="exampleInputEmail1" class="col-form-label">Activo</label>
                                    <div class="col input-group mb-3">
                                        <input type="email" class="form-control" id="activo" name="activo"
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
                  <button id="btn-save" type="button" class="btn btn-primary" value="add">Save changes</button>
                  <input type="hidden" id="medico_id" name="medico_id" value="0">
                </div>
              </div>
            </div>
          </div>
        </div> 
        
      

<!--------------------------------------------- Modal eliminar --------------------------------------->

<!-- Modal medico eliminar -->
<div class="modal fade" id="eliminarModal" tabindex="-1" role="dialog" aria-labelledby="eliminarModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Eliminar medico</h4>
            <form action="medicos" method="post" id="deleteForm">
                {{ csrf_field()}}
                {{method_field('DELETE')}}
                <div class="modal-body">
                    <input type="hidden" name="_method" id="idMedico" value="DELETE">
                    <p class="text-center">
                    Are you sure you want to delete this?
                    </p>
                </div>
    
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-danger">Eliminar</button>
        </div>
    </form>
      </div>
    </div>
  </div>



<!----------------------------------------------------------------------------------------------------------->

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
                            <div class="col-auto">MEDICOS</div>
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
                                    <form class="card-body pb-2" action="{{route('medicos.index')}}" method="get">
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
                                <button type="button" id="añadir" class="btn btn-primary col-12 col-xl-1 my-5 mr-auto ">Añadir
                                    seleccionado</button>
                                <!-- -->

                                <!-- CRUD de botones -->
                                <div class="row d-flex justify-content-end m-0 pr-5 border-0 ">
                                    <div class="btn-group border-0" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-primary my-5 p-3" id="agregar" data-toggle="modal" data-target="#altaModal">Altas</button>
                                        <button type="button" data-toggle="modal" data-target="#modificarModal" class="btn btn-success my-5">Modificacion</button>
                                        <button type="button" class="btn btn-danger my-5" data-toggle="modal" data-target="#eliminarModal">Eliminacion</button>
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
                            <div id="idTabla" class="table-responsive">
                                <table class="table table-striped table-hover" id="tblMain">
                                    <thead class="bg-primary">
                                        <tr>
                                            <th>Cedula</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Apellido M.</th>
                                            <th>Direccion</th>
                                            <th>Teléfono</th>
                                            <th>Edad</th>
                                            <th>Email</th>
                                            <th>registro</th>
                                            <th>Especializacion</th>
                                            <th>Consultorio</th>
                                            <th>Horario</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    @foreach ($medicos as $medico)
                                    <tbody id="medicos-list" name="medicos-list">
                                        <tr id="medicos{{$medico->idMedico}}" action="{{ $medico->idMedicos}}">
                                            <td id=" idCita" type="hidden" style="display:none;">
                                                {{ $medico->idMedicos}}</td>                                         
                                            <td>{{ $medico->cedula }}</td>
                                            <td>{{ $medico->nombre }}</td>
                                            <td>{{ $medico->apellido }}</td>
                                            <td>{{ $medico->apellidoM }}</td>
                                            <td>{{ $medico->direccion }}</td>
                                            <td>{{ $medico->telefono }}</td>
                                            <td>{{ $medico->edad }}</td>
                                            <td>{{ $medico->email }}</td>
                                            <td>{{ $medico->registro }}</td>
                                            <td>{{ $medico->id_especializacion }}</td>
                                            <td>{{ $medico->id_consultorio }}</td>
                                            <td>{{ $medico->id_horario }}</td>  
                                            <td>
                                                <button id="{{ $medico->idMedicos}}" data-id="{{ $medico->idMedicos}}" onclick="goDoSomething(this);" type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-update-{{$medico->idMedicos}}" action="{{ $medico->idMedicos}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                  </svg>
                                                </button>

                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{$medico->idMedicos}}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
                                                        <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                                                      </svg>    
                                                </button></td> 
                                            @include('pages.modales.medicoUpdate')
                                            @include('pages.administrador.delete')
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                            <div class="row d-flex justify-content-end p-1">
                                <div class="btn-group mr-2" role="group" aria-label="First group">
                                    {!! $medicos->links() !!}
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
                            <div class="col">
                                <hr class="borde">
                            </div>
                        </div>

                        <!-- -->
                        <!-- ======= Costos ===== -->
                        <div class="form-group row m-0 p-0">
                            <label for="exampleInputEmail1" class=" col-form-label pl-4 pr-5">Servicio</label>
                            <div class="col input-group mb-3">
                                <input type="text" class="form-control" placeholder="Recipient's username"
                                    aria-label="Recipient's username" aria-describedby="basic-addon2">

                            </div>
                        </div>


                        <div class="d-flex">
                            <div class="mr-auto p-2">

                                <div class="form-group row mb-0">
                                    <label for="exampleInputEmail1" class="col-form-label ml-4 pl-1">Medico</label>
                                    <div class="col input-group mb-3">
                                        <input type="text" class="form-control"  placeholder="Recipient's username"
                                            aria-label="Recipient's username" aria-describedby="basic-addon2">

                                    </div>
                                </div>
                            </div>
                            <div class="p-2">
                                <div class="form-group row">
                                    <label for="exampleSelect1" class=" col-form-label">Tipo
                                        Cita</label>
                                    <div class="col">
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
                        <!-- -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<script>
  //  jQuery(document).ready(function($){

//----- Open model CREATE -----//
    jQuery('#agregar').click(function () {
    jQuery('#btn-save').val("add");
    jQuery('#myFormAlta').trigger("reset");
    jQuery('#altaModal').modal('show');
});

// CREATE
$("#btn-save").click(function (e) {
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
    e.preventDefault();



    var formData = {
        cedula: jQuery('#cedula').val(),
        nombre: jQuery('#nombre').val(),
        apellido: jQuery('#apellido_paterno').val(),
        apellidoM: jQuery('#apellido_materno').val(),
        direccion: jQuery('#direccion').val(),
        telefono: jQuery('#telefono').val(),
        edad: jQuery('#edad').val(),
        email: jQuery('#email').val(),
        sexo: jQuery('#sexo').val(),
        fechaNacimiento: jQuery('#fechaNacimiento').val(),
        registro: jQuery('#fechaRegistro').val(),
        id_especializacion: jQuery('#especializacion').val(),
        id_consultorio: jQuery('#consultorio').val(),
        id_horario: jQuery('#horario').val(),
        status: jQuery('#status').val(),
        activo: jQuery('#activo').val(),
     
    };
    console.log(formData);

    var state = jQuery('#btn-save').val();
    var medico_id = jQuery('#medico_id').val();
    
    $.ajax({
        type: "POST",
        url: 'medicos',
        data: formData,
        dataType: 'json',
        success: function (data) {                                    
            console.log(data);
        },
        error: function (data) {
            console.log(data);
        }
    });
});


/*
function editTodo(ideditar) {
return alert(ideditar);
}



*/
//obtener el atributo id al dar click con jquery
//mandar el valor de la funcion dentro
//PARA MANDAR LA INFORMACION AL FORMULARIO AL HACER CLICK EN MODIFICAR BOTON DE LA TABLA
function goDoSomething(d){

var id =d.getAttribute("data-id");
        //obtener la cita del id total
        $.ajax({
            url: "medicos/"+id+"/edit",
            type: "GET",
            data: {
                _token: '{{csrf_token()}}',
                id: id
            },
            success: function(data) {
            //Mostrar registro en el crud
            console.log(data);           
    //se debe llamar el data igual que los campos de la BASE DE DATOS
 
        $('#cedula2').val(data.cedula),
        $('#nombre2').val(data.nombre),
        $('#apellido_paterno2').val(data.apellido),
        $('#apellido_materno2').val(data.apellidoM),
        $('#direccion2').val(data.direccion),
        $('#telefono2').val(data.telefono),
        $('#edad2').val(data.edad),
        $('#email2').val(data.email),
        $('#sexo2').val(data.sexo),
        $('#fechaNacimiento2').val(data.fechaNacimiento),
        $('#fechaRegistro2').val(data.registro),
        $('#especializacion2').val(data.id_especializacion),
        $('#consultorio2').val(data.id_consultorio),
        $('#horario2').val(data.id_horario),
        $('#status2').val(data.status),
        $('#activo2').val(data.activo)      

    }
        });
} 

//se investigo como obtener el valor del data-id
//y como poner dos funciones en un mismo onclick
//porque jquery no obtiene id dinamicos
//y porque no se pueden tener dos funciones al mismo tiempo
//En realidad solo ocupo tener el id del boton salvar


//MODIFICAR MÉDICO
function modificar(clicked_id2) {
   // alert(clicked_id2.getAttribute("data-id"));
var valorid = clicked_id2.getAttribute("data-id");

 var formData2 = {
        cedula: jQuery('#cedula2').val(),
        nombre: jQuery('#nombre2').val(),
        apellido: jQuery('#apellido_paterno2').val(),
        apellidoM: jQuery('#apellido_materno2').val(),
        direccion: jQuery('#direccion2').val(),
        telefono: jQuery('#telefono2').val(),
        edad: jQuery('#edad2').val(),
        email: jQuery('#email2').val(),
        sexo: jQuery('#sexo2').val(),
        fechaNacimiento: jQuery('#fechaNacimiento2').val(),
        registro: jQuery('#fechaRegistro2').val(),
        id_especializacion: jQuery('#especializacion2').val(),
        id_consultorio: jQuery('#consultorio2').val(),
        id_horario: jQuery('#horario2').val(),
        status: jQuery('#status2').val(),
        activo: jQuery('#activo2').val(),  
   };
        console.log(formData2);
        $.ajax({
        url: "medicos/"+valorid,
        type: "PATCH",
        data: {
            _token: '{{csrf_token()}}',
        cedula: jQuery('#cedula2').val(),
        nombre: jQuery('#nombre2').val(),
        apellido: jQuery('#apellido_paterno2').val(),
        apellidoM: jQuery('#apellido_materno2').val(),
        direccion: jQuery('#direccion2').val(),
        telefono: jQuery('#telefono2').val(),
        edad: jQuery('#edad2').val(),
        email: jQuery('#email2').val(),
        sexo: jQuery('#sexo2').val(),
        fechaNacimiento: jQuery('#fechaNacimiento2').val(),
        registro: jQuery('#fechaRegistro2').val(),
        id_especializacion: jQuery('#especializacion2').val(),
        id_consultorio: jQuery('#consultorio2').val(),
        id_horario: jQuery('#horario2').val(),
        status: jQuery('#status2').val(),
        activo: jQuery('#activo2').val(),   
        }, //name: name, email: email 
        success: function (data) {
        console.log(data+"si funcionooo");   
        },
        error: function (data) {
            console.log(data+"no funcionoo");
        }
        });
} 

    </script>
    @endsection

