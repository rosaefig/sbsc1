<div class="modal fade in" id="modal-impact-of-expenses" style="display: none; padding-right: 15px;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span></button>
          <h4 class="modal-title"></h4>
        </div>
        <form class="form-horizontal save-form">
          <div class="modal-body">
            <input type="hidden" name="formula_type" value="1">
            <input type="hidden" class="indicator" name="indicator" value="">
            <input type="hidden" class="date" name="date" value="">
            <input type="hidden" class="threshold" name="threshold" value="">
            <div class="form-group container-input_1-help">
              <div class="col-sm-10 col-sm-offset-1">
                <label for="administrativeExpenses">Gastos admin. y ventas*</label>
                <input type="number" class="form-control" id="administrativeExpenses" name="input_1" step=".01" value="" min="0" placeholder="Gastos">
                <span  style="display:none;" class="help-block input_1-help">
                    <strong>error 1</strong>
                </span>
              </div>
            </div>
            <div class="form-group container-input_2-help">
              <div class="col-sm-10 col-sm-offset-1">
                <label for="sales">Ventas*</label>
                <input type="number" class="form-control" id="sales" name="input_2" min="0" value="" step=".01" placeholder="Ventas">
                <span style="display:none;" class="help-block input_2-help">
                    <strong>error 2</strong>
                </span>
              </div>
            </div>
          </div>
          <div class="modal-footer">
          <button type="submit" class="btn btn-success btn-flat pull-right" > Guardar</button>
        </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
