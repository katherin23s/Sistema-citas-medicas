@extends('indexDashboard')
@section('content')
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
            <h3 class="col-auto minimum-setup" id="minimum-setup">Consultorios</h3>
            <div class="col">
                <hr class="borde">
            </div>
        </div>


        @include('pages.modales.consultorioAlta')
        <!----===============1. Campos de busqueda y añadir nueva cita FORM ==================--------->

        <div class="row ml-2 ">
            <h4 class="ml-4 pl-4">Consultorios Informacion</h4>
            <!-- Agregar Seleccionado -->
            <button type="button" id="añadir" class="btn btn-primary " id="agregar" data-toggle="modal"
                data-target="#altaModal">Añadir
                seleccionado</button>

            <div class="container-fluid p-0">
                <!-- paciente y medico nombre -->
                <div class="m-0 px-5">


                    <table id="example" class="display">
                        <thead>
                            <tr>
                                <th>idConsultorio</th>
                                <th>noConsultorio</th>
                                <th>status</th>
                                <th>Activo</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>

    @foreach ($consultorios as $consultorio)
        @include('pages.modales.consultorioUpdate')
        @include('pages.modales.consultorioDelete')
    @endforeach

    <script>
        $('#example').DataTable({
            "serverSide": true,
            "ajax": "{{ url('consultorios-registros') }}",
            "columns": [{
                    data: 'idConsultorio'
                },
                {
                    data: 'noConsultorio'
                },
                {
                    data: 'status'
                },
                {
                    data: 'activo'
                },
                {
                    data: 'action'
                },

            ]
        })

        function botones() {
            return '<button>...</button>';
        }


        /*     $(document).ready(function() {
                                                                            $('#table_id').DataTable();
                                                                        });*/

        var table = $('#example').DataTable();




        /*    $(document).ready(function() {
                $('#example')
                    .addClass('nowrap')
                    .dataTable({
                        responsive: true,
                        columnDefs: [{
                            targets: [-1, -3],
                            className: 'dt-body-right'
                        }]
                    });
            });*/

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
                noConsultorio: jQuery('#noConsultorio').val(),
                status: jQuery('#status').val(),
                activo: jQuery('#activo').val(),
            };

            console.log(formData);

            var state = jQuery('#btn-save').val();
            var medico_id = jQuery('#medico_id').val();

            $.ajax({
                type: "POST",
                url: 'consultorios',
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
                noConsultorio: jQuery('#noConsultorio' + valorid).val(),
                status: jQuery('#status' + valorid).val(),
                activo: jQuery('#activo' + valorid).val(),
            };
            console.log(formData2);
            $.ajax({
                url: "consultorios/" + valorid,
                type: "PATCH",
                data: {
                    _token: '{{ csrf_token() }}',
                    noConsultorio: jQuery('#noConsultorio' + valorid).val(),
                    status: jQuery('#status' + valorid).val(),
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
