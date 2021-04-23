
 <!-- Modal -->
 <div class="modal fade bd-example-modal-lg" id="modalMedicoCitas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Medicos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
            <!-- table -->
            <table id="idTablaMedicoCita" class="table table-hover">
                <thead class="bg-primary">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Email</th>
                    <th scope="col">Sexo</th>
                  </tr>
                </thead>
                @foreach ($medicosModal as $medicos)
                <tbody data-dismiss="modal">
                    <td>{{ $medicos->idMedicos }}</td>
                    <td>{{ $medicos->nombre }}</td>
                    <td>{{ $medicos->apellido }}</td>
                    <td>{{ $medicos->apellidoM }}</td>
                    <td>{{ $medicos->telefono }}</td>
                    <td>{{ $medicos->edad }}</td>
                    <td>{{ $medicos->email }}</td>
                    <td>{{ $medicos->sexo }}</td>
                </tbody>
                @endforeach
              </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>