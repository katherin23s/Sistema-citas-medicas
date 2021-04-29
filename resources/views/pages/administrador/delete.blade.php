<!--------------------------------------------- Modal eliminar --------------------------------------->
<!-- Modal medico eliminar -->
<div class="modal fade" id="modal-delete-{{$medico->idMedicos}}" tabindex="-1" role="dialog" aria-labelledby="eliminarModal" aria-hidden="true">
    <form action="{{route('medicos.destroy',$medico->idMedicos)}}" method="POST" id="deleteForm">
        @csrf
        {{method_field('DELETE')}}
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Eliminar medico</h4>
           
                <div class="modal-body">
                 
                    <p class="text-center">
                    Are you sure you want to delete this {{$medico->nombre}} {{$medico->apellido}}?
                    </p>
                </div>
    
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <input type="submit" name="_method" id="idMedicos" value="DELETE">
        </div>
  
      </div>
    </div>
</form>
  </div>