@extends('indexDashboard')
@section('content')
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
            <!-- Agregar Seleccionado -->
            <div class="col">
                <hr class="borde">
            </div>
            <h3 class="col-auto minimum-setup" id="minimum-setup">Specialization</h3>
            <div class="col">
                <hr class="borde">
            </div>
        </div>


        <div class="mt-5">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <h2 class="mr-4">Especializaciones</h2> <button type="button" id="añadir" class="btn btn-primary"
                        id="agregar" data-toggle="modal" data-target="#altaModal">Añadir
                        seleccionado</button>
                </div>
                <select class="autosearch form-control" name="autosearch"></select>
            </div>
        </div>


        <!----===============1. Campos de busqueda y añadir nueva cita FORM ==================--------->


        @include('pages.modales.especializacionAlta')
        <!----------------------------------------------------------------------------------------------------------->
        <!---------- Division lineal de busqueda y agregar nuevas citas -------->
        @foreach ($especializaciones as $especializacion)
            @include('pages.modales.especializacionUpdate')
            @include('pages.modales.especializacionDelete')
        @endforeach



    </div>
    </div>

    </div>
    </div>

    <script type="text/javascript">
        $('.autosearch').select2({
            placeholder: 'Especialización',
            templateResult: formatState,
            closeOnSelect: false,
            ajax: {
                url: 'buscar/especializacion/auto',
                dataType: 'json',
                delay: 220,
                processResults: function(data) {
                    return {
                        results: $.map(data, function(data) {
                            return {
                                text: data.nombreEspecializacion,
                                id: data.idEspecializacion
                            }
                        })
                    };
                },
                cache: true
            }
        });

        /******************************************************************************************************/

        function formatState(state) {
            if (!state.id) {
                return state.text;
            }
            var $state = $(
                '<div class="row m-0 p-0 font-weight-light"> <div class="col-auto mr-auto"> <span><img src="dash-board/assets/images/usuarios/foto.png" class="img-flag" width="50" height="50"/>' +
                " " + state.text + ' </span></div>  ' +
                ' <button id = "' + state.id + '" data-id = "' + state.id +
                '" type = "button" class = "btn btn-success" data-toggle = "modal" data-target = "#modal-update-especializacion-' +
                state.id + '" action = "' + state.id + '"> Modificar</button> ' +
                ' <button type="button" class="btn btn-danger" data-toggle="modal" data-target = "#modal-delete-especializacion-' +
                state.id + '" >Eliminar</button>'
            );
            return $state;
        };
        /*************************************************************************/

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
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            e.preventDefault();



            var formData = {
                nombreEspecializacion: jQuery('#nombreEspecializacion').val(),
                descripcion: jQuery('#descripcion').val(),
                activo: jQuery('#activo').val(),
            };

            console.log(formData);

            var state = jQuery('#btn-save').val();
            var medico_id = jQuery('#medico_id').val();

            $.ajax({
                type: "POST",
                url: 'especializacion',
                data: formData,
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                },
                error: function(data) {
                    console.log(data);
                }
            });
        });


        //MODIFICAR MÉDICO
        function modificar(clicked_id2) {

            var valorid = clicked_id2.getAttribute("data-id");
            console.log(valorid);
            var formData2 = {
                nombreEspecializacion: jQuery('#nombreEspecializacion' + valorid).val(),
                descripcion: jQuery('#descripcion' + valorid).val(),
                activo: jQuery('#activo' + valorid).val(),
            };
            console.log(formData2);

            $.ajax({
                url: "especializacion/" + valorid,
                type: "PATCH",
                data: {
                    _token: '{{ csrf_token() }}',
                    nombreEspecializacion: jQuery('#nombreEspecializacion' + valorid).val(),
                    descripcion: jQuery('#descripcion' + valorid).val(),
                    activo: jQuery('#activo' + valorid).val(),

                }, //name: name, email: email 
                success: function(data) {
                    console.log(data + "si funcionooo");
                },
                error: function(data) {
                    console.log(data + "no funcionoo");
                }
            });
        }

    </script>
@endsection
