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
        <!----===============1. Campos de busqueda y añadir nueva cita FORM ==================--------->
        <!----------------------------------------------------------------------------------------------------------->
        <!-- Buscador y Boton Agregar Responsivo -->
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
                                <div class="col-auto">USUARIOS</div>
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
                                        <form class="card-body pb-2" action="{{ route('usuarios.index') }}" method="get">
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
                                    <a type="button" href="{{ url('usuarios/create') }}" id="añadir"
                                        class="btn btn-primary col-12 col-xl-1 my-5 mr-auto ">Añadir
                                        seleccionado</a>
                                    <!-- -->

                                    <!-- CRUD de botones -->
                                    <div class="row d-flex justify-content-end m-0 pr-5 border-0 ">
                                        <div class="btn-group border-0" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-primary my-5 p-3" id="agregar"
                                                data-toggle="modal" data-target="#altaModal">Altas</button>
                                            <button type="button" data-toggle="modal" data-target="#modificarModal"
                                                class="btn btn-success my-5">Modificacion</button>
                                            <button type="button" class="btn btn-danger my-5" data-toggle="modal"
                                                data-target="#eliminarModal">Eliminacion</button>
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

                                <div class="m-4">
                                    <input id="search" type="text" class="form-control form-control-lg" name="buscar"
                                        aria-label="Large" placeholder="Browser" aria-describedby="basic-addon2">
                                </div>

                                <!-- -->
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead class="bg-primary">
                                            <tr>
                                                <th>Id</th>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Apellido Materno</th>
                                                <th>direccion</th>
                                                <th>telefono</th>
                                                <th>email</th>
                                                <th>sexo</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($usuarios as $usuario)
                                                <tr id="idtr" action="{{ $usuario->id }}">
                                                    <td id=" idCita" type="hidden" style="display:none;">
                                                        {{ $usuario->id }}</td>
                                                    <td>{{ ++$i }}</td>
                                                    <td>{{ $usuario->name }}</td>
                                                    <td>{{ $usuario->apellido }}</td>
                                                    <td>{{ $usuario->apellidoM }}</td>
                                                    <td>{{ $usuario->direccion }}</td>
                                                    <td>{{ $usuario->telefono }}</td>
                                                    <td>{{ $usuario->email }}</td>
                                                    <td>{{ $usuario->sexo }}</td>
                                                    <td>
                                                        <a href="{{ url('usuarios/' . $usuario->id . '/edit') }}"
                                                            type="submit" class="btn btn-success">
                                                            Modificar
                                                        </a>
                                                        <form action="{{ url('usuarios/' . $usuario->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            {{ method_field('DELETE') }}
                                                            <input type="submit" class="btn btn-danger"
                                                                onclick="return confirm('quieres borrar?')"
                                                                value="   Borrar   ">
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row d-flex justify-content-end p-1">
                                    <div class="btn-group mr-2" role="group" aria-label="First group">
                                        {!! $usuarios->links() !!}
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
                            <!-- -->
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <h2>Laravel AJAX Autocomplete Demo</h2>
            <select class="autosearch form-control" name="autosearch"></select>
        </div>

        <div>
            <select id="cmbIdioma" style="width: 200px;">
                <option value="Spain" selected>Spain</option>
                <option value="United_Kingdom">United Kingdom</option>
            </select>
        </div>


        <script type="text/javascript">
            $('.autosearch').select2({
                placeholder: 'Select Books',
                ajax: {
                    url: 'buscar-usuarios-auto',
                    dataType: 'json',
                    delay: 220,
                    processResults: function(data) {
                        return {
                            results: $.map(data, function(data) {
                                return {
                                    text: $('<img src="dash-board/assets/images/usuarios/foto.png" >' +
                                        data.name),
                                    id: data.id
                                }
                            })
                        };
                    },
                    cache: true
                }
            });



            $("#cmbIdioma").select2({
                templateResult: function(idioma) {
                    var $span = $("<span><img src='https://www.free-country-flags.com/countries/" + idioma.id +
                        "/1/tiny/" + idioma.id + ".png'/> " + idioma.text + "</span>");
                    return $span;
                }
            });

        </script>
    @endsection
