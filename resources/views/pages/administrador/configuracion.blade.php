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
             <h3 class="col-auto minimum-setup" id="minimum-setup">Configuration</h3>
             <div class="col">
                 <hr class="borde">
             </div>
         </div>



         <!----===============1. Campos de busqueda y añadir nueva cita FORM ==================--------->

         <div class="row ml-2 ">
             <h4 id="minimum-setup">Configuration Information</h4>
             <div class="container-fluid p-0">

                 <!-- paciente y medico nombre -->
                 <div class="m-0 px-5">





                     <div class="row">
                         <div class="col-12 col-sm-6">
                             <div class="form-group row">
                                 <label for="exampleInputEmail1" class="col-form-label">Id Usuario</label>
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
                                     <label for="exampleSelect1" class="col-form-label">Tipo Cita</label>
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

                     <div class="row">
                         <div class="col-12 col-sm-6">
                             <!-- Fecha -->
                             <div class="">
                                 <div class="form-group row">
                                     <label for="example-date-input" class="col-form-label">Date</label>
                                     <div class="col input-group mb-3">
                                         <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                                     </div>
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
                                 <div class="col-auto">OR</div>
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
                                         <div class="card-body pb-2">
                                             <div class="input-group mb-3">
                                                 <input type="text" class="form-control" placeholder="Browser"
                                                     aria-label="Browser" aria-describedby="basic-addon2">
                                                 <div class="input-group-append d-flex justify-content-end">
                                                     <button class="btn btn-outline-primary" type="button">Buscar</button>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <!-- Agregar Seleccionado -->
                                     <button type="button" class="btn btn-primary col-12 col-xl-1 my-5 mr-auto ">Añadir
                                         seleccionado</button>
                                     <!-- -->

                                     <!-- CRUD de botones -->
                                     <div class="row d-flex justify-content-end m-0 pr-5 border-0 ">
                                         <div class="btn-group border-0" role="group" aria-label="Basic example">
                                             <button type="button" class="btn btn-secondary my-5 p-3">Left</button>
                                             <button type="button" class="btn btn-secondary my-5">Middle</button>
                                             <button type="button" class="btn btn-secondary my-5">Right</button>
                                             <button type="button" class="btn btn-secondary my-5">Right</button>
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


                                 <!-- -->


                                 <div class="table-responsive">
                                     <table class="table table-striped table-hover">
                                         <thead class="bg-primary">
                                             <tr>
                                                 <th>Invoice ID</th>
                                                 <th>Customer</th>
                                                 <th>Status</th>
                                                 <th>Due Date</th>
                                                 <th>Amount</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             <tr>
                                                 <td>INV-87239</td>
                                                 <td>Viola Ford</td>
                                                 <td>Paid</td>
                                                 <td>20 Jan 2019</td>
                                                 <td>$755</td>
                                             </tr>
                                             <tr>
                                                 <td>INV-87239</td>
                                                 <td>Dylan Waters</td>
                                                 <td>Unpaid</td>
                                                 <td>23 Feb 2019</td>
                                                 <td>$800</td>
                                             </tr>
                                             <tr>
                                                 <td>INV-87239</td>
                                                 <td>Louis Poole</td>
                                                 <td>Unpaid</td>
                                                 <td>25 Mar 2019</td>
                                                 <td>$463</td>
                                             </tr>
                                             <tr>
                                                 <td>INV-87239</td>
                                                 <td>Vera Howell</td>
                                                 <td>Paid</td>
                                                 <td>27 Mar 2019</td>
                                                 <td>$235</td>
                                             </tr>
                                             <tr>
                                                 <td>INV-87239</td>
                                                 <td>Allie Goodman</td>
                                                 <td>Unpaid</td>
                                                 <td>1 Apr 2019</td>
                                                 <td>$657</td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </div>
                                 <div class="row d-flex justify-content-end p-1">
                                     <div class="btn-group mr-2" role="group" aria-label="First group">
                                         <button type="button" class="btn btn-secondary">1</button>
                                         <button type="button" class="btn btn-secondary">2</button>
                                         <button type="button" class="btn btn-secondary">3</button>
                                         <button type="button" class="btn btn-secondary">4</button>
                                     </div>
                                 </div>
                             </div>

                         </div>
                     </div>


                 </div>
             </div>

         </div>
     @endsection
