
<!--------------------------------------------- Modal eliminar --------------------------------------->

<!-- Modal medico eliminar -->
<div class="modal fade" id="modal-delete-consultorio-{{ $consultorio->idConsultorio}}" tabindex="-1" role="dialog" aria-labelledby="eliminarModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Eliminar consultorio</h4>
            <form action="consultorio" method="post" id="deleteForm">
                {{ csrf_field()}}
                {{method_field('DELETE')}}
                <div class="modal-body">
                    <input type="hidden" name="_method" id="idMedico" value="DELETE">
                    <p class="text-center">
                    Are you sure you want to delete this?
                    </p>
                </div>
    
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-danger">Eliminar</button>
        </div>
    </form>
      </div>
    </div>
  </div>