<div class="modal fade" role="dialog" id="pagar-cita" data-focus="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modulo de pago</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          PAGAR
          <div class="wrapper">
            <form action="#">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-success" id="basic-addon1">$</span>
                </div>
                <input id="pagar-citas-input" type="text" class="form-control">
              </div>
              <div class="row d-flex justify-content-end mr-1">
              <button id="pagoo" type="button" class="btn btn-primary">Save changes</button>
              <button id="btn-pagar-modal" data-toggle="modal" data-target="#pagar-cita" type="button" class="btn btn-warning">Pagar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>