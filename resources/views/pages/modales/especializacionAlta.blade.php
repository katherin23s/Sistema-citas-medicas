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
               <h4 id="minimum-setup">Consultorio Information</h4>
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
                                   <label for="exampleInputEmail1" class="col-form-label">Status</label>
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