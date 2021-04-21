
    <div class="row ml-2 ">
        <h4 id="minimum-setup">Users Information</h4>
        <div class="container-fluid p-0">
         <form action="{{url('usuarios/'.$usuario->id)}}" method="POST" enctype="multipart/form-data">
            @csrf   
            {{ method_field('PATCH')}} 
            <!-- paciente y medico nombre -->
            <div class="m-0 px-5">

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="exampleInputEmail1" class="col-form-label">Nombre</label>
                            <div class="col input-group mb-3">
                                <input class="form-control" id="nombre" name="name" value="{{$usuario->name}}">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="exampleInputEmail1" class="col-form-label">Apellido Parterno</label>
                            <div class="col input-group mb-3">
                                <input class="form-control" id="apellido" name="apellido" value="{{$usuario->apellido}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="exampleInputEmail1" class="col-form-label">Apellido Materno</label>
                            <div class="col input-group mb-3">
                                <input class="form-control" id="apellidoM" name="apellidoM" value="{{$usuario->apellidoM}}">
                            </div>
                        </div>
                    </div>
                </div>

            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="form-group row">
                        <label for="exampleInputEmail1" class="col-form-label pr-4">Direccion </label>
                        <div class="col input-group mb-3">
                            <input class="form-control" id="direccion" name="direccion" value="{{$usuario->direccion}}">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="form-group row">
                        <label for="exampleInputEmail1" class="col-form-label pr-4">Sexo </label>
                        <div class="col input-group mb-3">
                            <input class="form-control" id="sexo" name="sexo" value="{{$usuario->sexo}}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="form-group row">
                        <label for="exampleInputEmail1" class="col-form-label pr-4">Teléfono </label>
                        <div class="col input-group mb-3">
                            <input class="form-control" id="telefono" name="telefono" value="{{$usuario->telefono}}">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="form-group row">
                        <label for="exampleInputEmail1" class="col-form-label pr-4">Email </label>
                        <div class="col input-group mb-3">
                            <input class="form-control" id="email" name="email" value="{{$usuario->email}}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">            
                <div class="col-12 col-sm-6">
                    <!-- Fecha -->
                    <div class="">
                        <div class="form-group row">
                            <label class="col-form-label">Password</label>
                            <div class="col input-group mb-3">
                                <input class="form-control" id="password" name="password" value="{{$usuario->password}}">
                            </div>
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