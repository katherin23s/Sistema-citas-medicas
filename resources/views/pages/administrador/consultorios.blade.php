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
            <h3 class="col-auto minimum-setup" id="minimum-setup">Consulting Room</h3>
            <div class="col">
                <hr class="borde">
            </div>
        </div>



        <!----===============1. Campos de busqueda y añadir nueva cita FORM ==================--------->

        <div class="row ml-2 ">
            <h4 id="minimum-setup">Consulting Information</h4>
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

                    <!-- Data table -->

                    <!--                 <div class="hero-callout">
                                                                                                                        <div id="example_wrapper" class="dataTables_wrapper">

                                                                                                                            <table id="example" class="display nowrap dataTable dtr-inline collapsed" style="width: 100%;"
                                                                                                                                role="grid" aria-describedby="example_info">
                                                                                                                                <thead>
                                                                                                                                    <tr role="row">
                                                                                                                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1"
                                                                                                                                            colspan="1" style="width: 119px;" aria-sort="ascending"
                                                                                                                                            aria-label="Name: activate to sort column descending">Name</th>
                                                                                                                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                                                                                                                            style="width: 190px;" aria-label="Position: activate to sort column ascending">
                                                                                                                                            Position</th>
                                                                                                                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                                                                                                                            style="width: 88px;" aria-label="Office: activate to sort column ascending">
                                                                                                                                            Office</th>
                                                                                                                                        <th class="dt-body-right sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                                                                                                            colspan="1" style="width: 34px;"
                                                                                                                                            aria-label="Age: activate to sort column ascending">Age</th>
                                                                                                                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                                                                                                                            style="width: 79px;" aria-label="Start date: activate to sort column ascending">
                                                                                                                                            Start date</th>
                                                                                                                                        <th class="dt-body-right sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                                                                                                            colspan="1" style="width: 0px; display: none;"
                                                                                                                                            aria-label="Salary: activate to sort column ascending">Salary</th>
                                                                                                                                    </tr>
                                                                                                                                </thead>
                                                                                                                                <tbody>
                                                                                                                                    <tr class="odd">
                                                                                                                                        <td tabindex="0" class="sorting_1">Airi Satou</td>
                                                                                                                                        <td>Accountant</td>
                                                                                                                                        <td>Tokyo</td>
                                                                                                                                        <td class=" dt-body-right">33</td>
                                                                                                                                        <td>2008/11/28</td>
                                                                                                                                        <td class=" dt-body-right" style="display: none;">$162,700</td>
                                                                                                                                    </tr>
                                                                                                                                    <tr class="even">
                                                                                                                                        <td class="sorting_1" tabindex="0">Angelica Ramos</td>
                                                                                                                                        <td>Chief Executive Officer (CEO)</td>
                                                                                                                                        <td>London</td>
                                                                                                                                        <td class=" dt-body-right">47</td>
                                                                                                                                        <td>2009/10/09</td>
                                                                                                                                        <td class=" dt-body-right" style="display: none;">$1,200,000</td>
                                                                                                                                    </tr>
                                                                                                                                    <tr class="odd">
                                                                                                                                        <td tabindex="0" class="sorting_1">Ashton Cox</td>
                                                                                                                                        <td>Junior Technical Author</td>
                                                                                                                                        <td>San Francisco</td>
                                                                                                                                        <td class=" dt-body-right">66</td>
                                                                                                                                        <td>2009/01/12</td>
                                                                                                                                        <td class=" dt-body-right" style="display: none;">$86,000</td>
                                                                                                                                    </tr>
                                                                                                                                    <tr class="even">
                                                                                                                                        <td class="sorting_1" tabindex="0">Bradley Greer</td>
                                                                                                                                        <td>Software Engineer</td>
                                                                                                                                        <td>London</td>
                                                                                                                                        <td class=" dt-body-right">41</td>
                                                                                                                                        <td>2012/10/13</td>
                                                                                                                                        <td class=" dt-body-right" style="display: none;">$132,000</td>
                                                                                                                                    </tr>
                                                                                                                                    <tr class="odd">
                                                                                                                                        <td class="sorting_1" tabindex="0">Brenden Wagner</td>
                                                                                                                                        <td>Software Engineer</td>
                                                                                                                                        <td>San Francisco</td>
                                                                                                                                        <td class=" dt-body-right">28</td>
                                                                                                                                        <td>2011/06/07</td>
                                                                                                                                        <td class=" dt-body-right" style="display: none;">$206,850</td>
                                                                                                                                    </tr>
                                                                                                                                    <tr class="even">
                                                                                                                                        <td tabindex="0" class="sorting_1">Brielle Williamson</td>
                                                                                                                                        <td>Integration Specialist</td>
                                                                                                                                        <td>New York</td>
                                                                                                                                        <td class=" dt-body-right">61</td>
                                                                                                                                        <td>2012/12/02</td>
                                                                                                                                        <td class=" dt-body-right" style="display: none;">$372,000</td>
                                                                                                                                    </tr>
                                                                                                                                    <tr class="odd">
                                                                                                                                        <td class="sorting_1" tabindex="0">Bruno Nash</td>
                                                                                                                                        <td>Software Engineer</td>
                                                                                                                                        <td>London</td>
                                                                                                                                        <td class=" dt-body-right">38</td>
                                                                                                                                        <td>2011/05/03</td>
                                                                                                                                        <td class=" dt-body-right" style="display: none;">$163,500</td>
                                                                                                                                    </tr>
                                                                                                                                    <tr class="even">
                                                                                                                                        <td class="sorting_1" tabindex="0">Caesar Vance</td>
                                                                                                                                        <td>Pre-Sales Support</td>
                                                                                                                                        <td>New York</td>
                                                                                                                                        <td class=" dt-body-right">21</td>
                                                                                                                                        <td>2011/12/12</td>
                                                                                                                                        <td class=" dt-body-right" style="display: none;">$106,450</td>
                                                                                                                                    </tr>
                                                                                                                                    <tr class="odd">
                                                                                                                                        <td class="sorting_1" tabindex="0">Cara Stevens</td>
                                                                                                                                        <td>Sales Assistant</td>
                                                                                                                                        <td>New York</td>
                                                                                                                                        <td class=" dt-body-right">46</td>
                                                                                                                                        <td>2011/12/06</td>
                                                                                                                                        <td class=" dt-body-right" style="display: none;">$145,600</td>
                                                                                                                                    </tr>
                                                                                                                                    <tr class="even">
                                                                                                                                        <td tabindex="0" class="sorting_1">Cedric Kelly</td>
                                                                                                                                        <td>Senior Javascript Developer</td>
                                                                                                                                        <td>Edinburgh</td>
                                                                                                                                        <td class=" dt-body-right">22</td>
                                                                                                                                        <td>2012/03/29</td>
                                                                                                                                        <td class=" dt-body-right" style="display: none;">$433,060</td>
                                                                                                                                    </tr>
                                                                                                                                </tbody>
                                                                                                                                <tfoot>
                                                                                                                                    <tr>
                                                                                                                                        <th rowspan="1" colspan="1">Name</th>
                                                                                                                                        <th rowspan="1" colspan="1">Position</th>
                                                                                                                                        <th rowspan="1" colspan="1">Office</th>
                                                                                                                                        <th class="dt-body-right" rowspan="1" colspan="1">Age</th>
                                                                                                                                        <th rowspan="1" colspan="1">Start date</th>
                                                                                                                                        <th class="dt-body-right" rowspan="1" colspan="1" style="display: none;">Salary</th>
                                                                                                                                    </tr>
                                                                                                                                </tfoot>
                                                                                                                            </table>

                                                                                                                        </div> -->

                    <!-- cierre data table -->


                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group row">
                                <label for="exampleInputEmail1" class="col-form-label">No Consultorio</label>
                                <div class="col input-group mb-3">
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter email">

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <!-- Tiempo de duracion -->
                            <div class="">
                                <div class="form-group row">
                                    <label for="exampleSelect1" class="col-form-label">Status</label>
                                    <div class="col input-group mb-3">
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
                    </div>

                </div>
            </div>
        </div>
        <!-- -->

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
                ]
            })


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
