<!-- Modal -->
 <div class="modal fade bd-example-modal-lg" id="modalHorario2" tabindex="-1" role="dialog" aria-labelledby="modalHorario" aria-hidden="true"  style="z-index: 2000;">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Horario</h5>
          <button type="button" class="close" data-dismiss="modalHorario" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <!-- table -->
            <table id="idTablaHorario2" class="table table-hover">
                <thead class="bg-primary">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">#</th>
                    <th scope="col">Hora Entrada</th>
                    <th scope="col">Hora Salida </th>
                    <th scope="col">Días laborales</th>
                  </tr>
                </thead>
              
                <tbody data-dismiss="modal">
                    @php $i=1 @endphp
                @foreach ($horarios as $hora)
                    <td type="hidden">{{ $hora->idHorario }}</td>
                    <td>{{ $i++ }}</td>
                    <td>{{ $hora->horaEntrada }}</td>
                    <td>{{ $hora->horaSalida }}</td>
                    <td>{{ $hora->diasLaborales }}</td>            
                @endforeach
               </tbody>
            </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

