<div class="container">
    <!------------------------------------- Modal para modificar ------------------------------------------->
    <div class="modal fade" id="modal-update-consultorio-{{$consultorio->idConsultorio}}" tabindex="-1" role="dialog" aria-labelledby="modificarModal" aria-hidden="true">
       <div class="modal-dialog modal-lg modal-dialog-centered">
         <div class="modal-content">
           <div class="modal-header">
             <h4 class="modal-title" id="myModalLabel">Basic Modal {{$consultorio->idConsultorio}}</h4>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
        <div class="modal-body">
            <form id="myFormModificar" name="myFormModificar" class="form-horizontal" novalidate="">
            <!----===============1. Campos de busqueda y añadir nueva cita FORM ==================--------->
           <div class="row ml-2 ">
            <h4 id="minimum-setup">Doctors Information</h4>
            <div class="container-fluid p-0">
                <div class="row m-1 ">
                    <div class="col">
                        <hr class="borde">
                    </div>
                    <h3 class="col-auto minimum-setup" id="minimum-setup">Consultorio</h3>
                    <div class="col">
                        <hr class="borde">
                    </div>
                </div>

                <!-- paciente y medico nombre -->
                <div class="m-0 px-5">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group row">
                                <label for="exampleInputEmail1" class="col-form-label">No Consultorio</label>
                                <div class="col input-group mb-3">
                                    <input class="form-control" id="noConsultorio{{$consultorio->idConsultorio}}" name="noConsultorio" value="{{$consultorio->noConsultorio}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group row">
                                <label for="exampleInputEmail1" class="col-form-label">Status</label>
                                <div class="col input-group mb-3">
                                    <input class="form-control" id="status{{$consultorio->idConsultorio}}" name="status" value="{{$consultorio->status}}">
                                </div>
                            </div>
                        </div>
                    </div>
           
                <div class="row">
                    <!-- Tiempo de duracion -->
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label  class="col-form-label">Status</label>
                            <div class="col input-group mb-3">
                                <input class="form-control" id="activo{{$consultorio->idConsultorio}}" name="activo" value="{{$consultorio->activo}}">
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
             <button type="button" class="btn btn-primary" id="btn-update{{ $consultorio->idConsultorio}}" data-id="{{ $consultorio->idConsultorio}}" onclick="modificar(this)">Save changes</button>
           </div>
         </div>
       </div>
     </div>
</div> 