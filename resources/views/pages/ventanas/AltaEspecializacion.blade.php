
    <!----===============1. Campos de busqueda y añadir nueva cita FORM ==================--------->

    <div class="row ml-2 ">
        <h4 id="minimum-setup">Patients Information</h4>
        <div class="container-fluid p-0">
<form action="{{url('/especializacion')}}" method="post" enctype="multipart/form-data">
    @csrf      
    <!-- paciente y medico nombre -->
            <div class="m-0 px-5">

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="exampleInputEmail1" class="col-form-label">Nombre especializacion</label>
                            <div class="col input-group mb-3">
                                <input class="form-control" id="nombreEspecializacion" name="nombreEspecializacion">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="exampleInputEmail1" class="col-form-label">Descripcion</label>
                            <div class="col input-group mb-3">
                                <input class="form-control" id="descripcion" name="descripcion">
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="exampleInputEmail1" class="col-form-label">Activo</label>
                            <div class="col input-group mb-3">
                                <input class="form-control" id="activo" name="activo">

                            </div>
                        </div>
                    </div>
                </div>
     
                <input type="submit" id="Enviar">
            </div>
    </form>
        </div>
    </div>
    <!-- -->