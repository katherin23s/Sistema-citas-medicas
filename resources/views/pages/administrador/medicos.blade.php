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

                        <div class="row m-1 ">
                            <div class="col">
                                <hr class="borde">
                            </div>
                            <div class="col-auto">MEDICOS</div>
                            <div class="col">
                                <hr class="borde">
                            </div>
                        </div>      

                        <div class="card-body pt-0">             
                                  <div class="container-fluid ">
                                    <div class="row">
                                        <div class="col col-1">
                                            <div class="row pb-2">
                                            <h4 class="card-title mb-0 mr-4 pt-2">Médicos</h4>
                                            <a href="" type="button" class="btn btn-primary" data-toggle="modal" data-target="#altaModal">Añadir
                                                seleccionado</a> </div>
                                          </div>
                                        <div class="col">
                                            <div class="input-group input-group-lg ">
                                                <input id="search" type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" placeholder="Escribe aquí." name="buscar">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-primary text-white" id="inputGroup-sizing-lg">Buscar</span>
                                                  </div>
                                              </div> 
                                        </div>
                                      </div>
                                    </div>
                            </div>


                       



                            <!-- -->
                        <div class="mx-4">
                            <div id="idTabla" class="table-responsive">
                                <table class="table table-striped table-hover" id="tblMain">
                                    <thead class="bg-primary">
                                        <tr>
                                            <th class="text-white">Cedula</th>
                                            <th class="text-white">Nombre</th>
                                            <th class="text-white">Apellido</th>
                                            <th class="text-white">Apellido M.</th>
                                            <th class="text-white">Direccion</th>
                                            <th class="text-white">Teléfono</th>
                                            <th class="text-white">Edad</th>
                                            <th class="text-white">Email</th>
                                            <th class="text-white">registro</th>
                                            <th class="text-white">Especializacion</th>
                                            <th class="text-white">Consultorio</th>
                                            <th class="text-white">Horario</th>
                                            <th class="text-white">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody id="medicos-list" name="medicos-list">
                                        @foreach ($medicos as $medico)
                                        @include('pages.modales.medicoUpdate ')
                                        @include('pages.administrador.delete')
                                        @endforeach
                                   </tbody>
                                </table>
                            </div>
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
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});



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
 
        $('#cedula2'+id).val(data.cedula),
        $('#nombre2'+id).val(data.nombre),
        $('#apellido_paterno2'+id).val(data.apellido),
        $('#apellido_materno2'+id).val(data.apellidoM),
        $('#direccion2'+id).val(data.direccion),
        $('#telefono2'+id).val(data.telefono),
        $('#edad2'+id).val(data.edad),
        $('#email2'+id).val(data.email),
        $('#sexo2'+id).val(data.sexo),
        $('#fechaNacimiento2'+id).val(data.fechaNacimiento),
        $('#fechaRegistro2'+id).val(data.registro),
        $('#especializacion2'+id).val(data.id_especializacion),
        $('#consultorio2'+id).val(data.id_consultorio),
        $('#horario2'+id).val(data.id_horario),
        $('#status2'+id).val(data.status),
        $('#activo2'+id).val(data.activo)      

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
console.log(valorid);
 var formData2 = {
        cedula: jQuery('#cedula2'+valorid).val(),
        nombre: jQuery('#nombre2'+valorid).val(),
        apellido: jQuery('#apellido_paterno2'+valorid).val(),
        apellidoM: jQuery('#apellido_materno2'+valorid).val(),
        direccion: jQuery('#direccion2'+valorid).val(),
        telefono: jQuery('#telefono2'+valorid).val(),
        edad: jQuery('#edad2'+valorid).val(),
        email: jQuery('#email2'+valorid).val(),
        sexo: jQuery('#sexo2'+valorid).val(),
        fechaNacimiento: jQuery('#fechaNacimiento2'+valorid).val(),
        registro: jQuery('#fechaRegistro2'+valorid).val(),
        id_especializacion: jQuery('#especializacion2'+valorid).val(),
        id_consultorio: jQuery('#consultorio2'+valorid).val(),
        id_horario: jQuery('#horario2'+valorid).val(),
        status: jQuery('#status2'+valorid).val(),
        activo: jQuery('#activo2'+valorid).val(),  
   };
        console.log(formData2);


        $.ajax({
        url: "medicos/"+valorid,
        type: "PATCH",
        data: {
            _token: '{{csrf_token()}}', 
        cedula: jQuery('#cedula2'+valorid).val(),
        nombre: jQuery('#nombre2'+valorid).val(),
        apellido: jQuery('#apellido_paterno2'+valorid).val(),
        apellidoM: jQuery('#apellido_materno2'+valorid).val(),
        direccion: jQuery('#direccion2'+valorid).val(),
        telefono: jQuery('#telefono2'+valorid).val(),
        edad: jQuery('#edad2'+valorid).val(),
        email: jQuery('#email2'+valorid).val(),
        sexo: jQuery('#sexo2'+valorid).val(),
        fechaNacimiento: jQuery('#fechaNacimiento2'+valorid).val(),
        registro: jQuery('#fechaRegistro2'+valorid).val(),
        id_especializacion: jQuery('#especializacion2'+valorid).val(),
        id_consultorio: jQuery('#consultorio2'+valorid).val(),
        id_horario: jQuery('#horario2'+valorid).val(),
        status: jQuery('#status2'+valorid).val(),
        activo: jQuery('#activo2'+valorid).val(),
          
        }, //name: name, email: email 
        success: function (data) {
        console.log(data+"si funcionooo");   
        },
        error: function (data) {
            console.log(data+"no funcionoo");
        }
        });
} 

/*********************************************/
//Select Dropdown 
$(document).ready(function(){

fetch_customer_data();

function fetch_customer_data(query = '')
{
 $.ajax({
  url:"{{ route('busqueda.medicos.tabla') }}",
  method:'GET',
  data:{query:query},
  dataType:'json',
  success:function(data)
  {
   $('tbody').html(data.table_data);
   $('#total_records').text(data.total_data);
  }
 })
}

$(document).on('keyup', '#search', function(){
 var query = $(this).val();
 fetch_customer_data(query);
});
});
    </script>
    @endsection

