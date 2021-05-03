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
        @include('pages.modales.medicoCreate')
        @include('pages.modales.medicoHorario')

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
                                                <a href="" type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#altaModal">Añadir
                                                    seleccionado</a>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group input-group-lg ">
                                                <input id="search" type="text" class="form-control" aria-label="Large"
                                                    aria-describedby="inputGroup-sizing-sm" placeholder="Escribe aquí."
                                                    name="buscar">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-primary text-white"
                                                        id="inputGroup-sizing-lg">Buscar</span>
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


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-end p-1">
                                <div class="btn-group mr-2" role="group" aria-label="First group">

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
        @foreach ($medicos as $medico)
            @include('pages.modales.medicoUpdate')
            @include('pages.administrador.delete')
            @include('pages.modales.medicoHorario2')
        @endforeach

        @push('js')
            <script>
                //  jQuery(document).ready(function($){

                //----- Open model CREATE -----//
                jQuery('#agregar').click(function() {
                    jQuery('#btn-save').val("add");
                    jQuery('#myFormAlta').trigger("reset");
                    jQuery('#altaModal').modal('show');
                });



                // CREATE
                $("#btn-save").click(function(e) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });


                    //Obtener valor de formulario
                    let cedula = jQuery('#cedula').val();
                    let nombre = jQuery('#nombre').val()
                    let apellido_paterno = jQuery('#apellido_paterno').val()
                    let apellido_materno = jQuery('#apellido_materno').val()
                    let edad = jQuery('#edad').val()
                    let sexo = jQuery('#sexo').val()
                    let fechaNacimiento = jQuery('#fechaNacimiento').val()
                    let telefono = jQuery('#telefono').val()
                    let email = jQuery('#email').val()

                    //Validar campos vacios 

                    //Validar el color del campo si esta vacio
                    if (cedula === "") {
                        jQuery('#cedula').removeClass("border border-primary");
                        jQuery('#cedula').addClass("border border-warning");
                    }
                    if (nombre === "") {
                        jQuery('#nombre').removeClass("border border-primary");
                        jQuery('#nombre').addClass("border border-warning");
                    }

                    if (apellido_paterno === "") {
                        jQuery('#apellido_paterno').removeClass("border border-primary");
                        jQuery('#apellido_paterno').addClass("border border-warning");
                    }

                    if (apellido_materno === "") {
                        jQuery('#apellido_materno').removeClass("border border-primary");
                        jQuery('#apellido_materno').addClass("border border-warning");
                    }

                    if (edad === "") {
                        jQuery('#edad').removeClass("border border-primary");
                        jQuery('#edad').addClass("border border-warning");
                    }

                    if (sexo === "") {
                        jQuery('#sexo').removeClass("border border-primary");
                        jQuery('#sexo').addClass("border border-warning");
                    }

                    if (fechaNacimiento === "") {
                        jQuery('#fechaNacimiento').removeClass("border border-primary");
                        jQuery('#fechaNacimiento').addClass("border border-warning");
                    }

                    if (telefono === "") {
                        jQuery('#telefono').removeClass("border border-primary");
                        jQuery('#telefono').addClass("border border-warning");
                    }

                    if (email === "") {
                        jQuery('#email').removeClass("border border-primary");
                        jQuery('#email').addClass("border border-warning");
                    }



                    if (cedula === "" || nombre === "" || apellido_paterno === "" || apellido_materno === "" || edad ===
                        "" || sexo === "" || fechaNacimiento === "" || telefono === "" || email === "") {
                        document.getElementById('advertencia').style.display = '';
                        document.getElementById('buttonAdvertencia').style.display = '';
                        document.getElementById('cross').style.display = '';
                    } else {

                        /******************************************/

                        var valor1;
                        var valor2;

                        //Obtener valor del "especialización"
                        $('#especializacionSelect').on('change', function() {
                            var valueEspe = $(this).val();
                        });

                        //Obtener valor del "consultorio"
                        $('#consultorioSelect').on('change', function() {
                            var valueConsul = $(this).val();
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
                            id_especializacion: jQuery('#especializacionSelect').val(),
                            id_consultorio: jQuery('#consultorioSelect').val(),
                            id_horario: jQuery('#horarioID').val(),
                            status: 1,
                            activo: 1,
                        };
                        var validarCedula = {
                            cedula: jQuery('#cedula').val()
                        }

                        $.ajax({
                            type: 'GET',
                            url: 'validar-duplicacion-medicos',
                            data: validarCedula,
                            dataType: 'json',
                            success: function(data) {
                                if (data == false) {
                                    //creame el registro
                                    $.ajax({
                                        type: "POST",
                                        url: 'medicos',
                                        data: formData,
                                        dataType: 'json',
                                        success: function(data) {
                                            console.log(data);
                                        },
                                        error: function(data) {
                                            console.log(data);
                                        }
                                    });
                                } else {
                                    console.log(data);
                                    console.log("hay registro");
                                    //advertencia
                                    document.getElementById('advertencia').style.display = '';
                                    document.getElementById('buttonAdvertencia').style.display = '';
                                    document.getElementById('buttonAdvertencia').innerHTML = "Duplicacion!";
                                    // document.getElementById('cross').style.display='';
                                    jQuery('#noFolioinput').addClass("border border-warning");
                                }
                                //window.location = "/citas";
                            },
                            error: function(data) {
                                console.log(data);
                            }
                        });

                    }
                });


                /*
                function editTodo(ideditar) {
                return alert(ideditar);
                }



                */
                //obtener el atributo id al dar click con jquery
                //mandar el valor de la funcion dentro
                //PARA MANDAR LA INFORMACION AL FORMULARIO AL HACER CLICK EN MODIFICAR BOTON DE LA TABLA
                function goDoSomething(d) {
                    var id = d.getAttribute("data-id");
                    //obtener la cita del id total
                    $.ajax({
                        url: "medicos/" + id + "/edit",
                        type: "GET",
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: id
                        },
                        success: function(data) {
                            //Mostrar registro en el crud
                            console.log(data);
                            //se debe llamar el data igual que los campos de la BASE DE DATOS

                            $('#cedula2' + id).val(data.cedula),
                                $('#nombre2' + id).val(data.nombre),
                                $('#apellido_paterno2' + id).val(data.apellido),
                                $('#apellido_materno2' + id).val(data.apellidoM),
                                $('#direccion2' + id).val(data.direccion),
                                $('#telefono2' + id).val(data.telefono),
                                $('#edad2' + id).val(data.edad),
                                $('#email2' + id).val(data.email),
                                $('#sexo2' + id).val(data.sexo),
                                $('#fechaNacimiento2' + id).val(data.fechaNacimiento),
                                $('#fechaRegistro2' + id).val(data.registro),
                                $('#especializacion2' + id).val(data.id_especializacion),
                                $('#consultorio2' + id).val(data.id_consultorio),
                                $('#horario2' + id).val(data.id_horario),
                                $('#status2' + id).val(data.status),
                                $('#activo2' + id).val(data.activo)

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
                        cedula: jQuery('#cedula2' + valorid).val(),
                        nombre: jQuery('#nombre2' + valorid).val(),
                        apellido: jQuery('#apellido_paterno2' + valorid).val(),
                        apellidoM: jQuery('#apellido_materno2' + valorid).val(),
                        direccion: jQuery('#direccion2' + valorid).val(),
                        telefono: jQuery('#telefono2' + valorid).val(),
                        edad: jQuery('#edad2' + valorid).val(),
                        email: jQuery('#email2' + valorid).val(),
                        sexo: jQuery('#sexo2' + valorid).val(),
                        fechaNacimiento: jQuery('#fechaNacimiento2' + valorid).val(),
                        registro: jQuery('#fechaRegistro2' + valorid).val(),
                        id_especializacion: jQuery('#especializacion2' + valorid).val(),
                        id_consultorio: jQuery('#consultorio2' + valorid).val(),
                        id_horario: jQuery('#horario2' + valorid).val(),
                        status: jQuery('#status2' + valorid).val(),
                        activo: jQuery('#activo2' + valorid).val(),
                    };
                    console.log(formData2);


                    $.ajax({
                        url: "medicos/" + valorid,
                        type: "PATCH",
                        data: {
                            _token: '{{ csrf_token() }}',
                            cedula: jQuery('#cedula2' + valorid).val(),
                            nombre: jQuery('#nombre2' + valorid).val(),
                            apellido: jQuery('#apellido_paterno2' + valorid).val(),
                            apellidoM: jQuery('#apellido_materno2' + valorid).val(),
                            direccion: jQuery('#direccion2' + valorid).val(),
                            telefono: jQuery('#telefono2' + valorid).val(),
                            edad: jQuery('#edad2' + valorid).val(),
                            email: jQuery('#email2' + valorid).val(),
                            sexo: jQuery('#sexo2' + valorid).val(),
                            fechaNacimiento: jQuery('#fechaNacimiento2' + valorid).val(),
                            registro: jQuery('#fechaRegistro2' + valorid).val(),
                            id_especializacion: jQuery('#especializacion2' + valorid).val(),
                            id_consultorio: jQuery('#consultorio2' + valorid).val(),
                            id_horario: jQuery('#horario2' + valorid).val(),
                            status: jQuery('#status2' + valorid).val(),
                            activo: jQuery('#activo2' + valorid).val(),

                        }, //name: name, email: email 
                        success: function(data) {
                            console.log(data + "si funcionooo");
                        },
                        error: function(data) {
                            console.log(data + "no funcionoo");
                        }
                    });
                }



                /*********************************************/
                //Select Dropdown 
                $(document).ready(function() {

                    fetch_customer_data();

                    function fetch_customer_data(query = '') {
                        $.ajax({
                            url: "{{ route('busqueda.medicos.tabla') }}",
                            method: 'GET',
                            data: {
                                query: query
                            },
                            dataType: 'json',
                            success: function(data) {
                                $('#medicos-list').html(data.table_data);
                                $('#total_records').text(data.total_data);
                            }
                        })
                    }

                    $(document).on('keyup', '#search', function() {
                        var query = $(this).val();
                        fetch_customer_data(query);
                    });
                });

            </script>
        @endpush

    @endsection
