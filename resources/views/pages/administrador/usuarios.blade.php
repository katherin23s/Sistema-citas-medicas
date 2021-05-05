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
                        <div class="card p-4">

                            <!---------- Division lineal de busqueda y agregar nuevas citas -------->
                            <!-- Agregar Seleccionado -->

                            <h2 class="text-center">Usuarios</h2>
                            <div class="row mb-2 mx-3 p-0">
                                <a type="button" href="{{ url('usuarios/create') }}" id="añadir"
                                    class="btn btn-primary col-12 col-xl-1 mr-auto text-left">Añadir seleccionado</a>
                            </div>

                            <!-- -->
                            <div class="container-fluid">
                                <select class="autosearch form-control pr-1" name="autosearch"
                                    id="js-example-templating"></select>
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

    </div>
    </div>
    <script type="text/javascript">
        let ruta = "dash-board/assets/images/usuarios/foto.png";
        $('.autosearch').select2({
            placeholder: 'Usuarios',
            templateResult: formatState,
            closeOnSelect: false,
            ajax: {
                url: 'buscar-usuarios-auto',
                dataType: 'json',
                delay: 220,
                processResults: function(data) {
                    return {
                        results: $.map(data, function(data) {
                            return {
                                text: data.name + " " + data.apellido + " " + data.apellidoM,
                                id: data.id,
                            }
                        })
                    };
                },
                //   templateResult: formatData,
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
                " " + state.text + ' </span></div>  <div class="col-auto"> <a href="usuarios/' + state.id +
                '/edit" type="submit" class="btn btn-success">Modificar' +
                '</a>  <a href="usuarios/' + state.id +
                '/edit" type="submit" id="btn-delete" class="btn btn-danger">Eliminar </a> </div></div>' +
                '<form action = "usuarios/' + state.id +
                '" method = "POST" > @csrf {{ method_field('DELETE') }} <input type = "submit" class = "btn btn-danger"' +
                'onclick = "return confirm("quieres borrar")" value = "   Borrar   " > </form>'
            );
            return $state;
        };
        /*************************************************************************/

    </script>
@endsection
