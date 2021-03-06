<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">AGREGAR UN CINE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
      <form class="formulario-add" method="post" action="<?php echo FRONT_ROOT ?>Cine/altaCine">
        <div class="form-group">
          <label for="nombre">Nombre:</label>
          <input type="text" name="nombre" class="form-control" id="nombre" required>
        </div>
        <div class="form-group">
          <label for="direccion">Direccion:</label>
          <input type="text" name="direccion" class="form-control" id="direccion" required>
        </div>
        <div class="form-row">
          <div class="form-group col">
            <label for="horario_aper">Horario Apertura:</label>
            <input type="time" name="horario_apertura" class="form-control" id="horario_aper" required>
          </div>
          <div class="form-group col">
            <label for="horario_cierre">Horario Cierre:</label>
            <input type="time" name="horario_cierre" class="form-control" id="horario_cierre" required>
          </div>
        </div>
        <div class="form-group">
          <label for="valor_entrada">Valor Entrada</label>
          <input type="number" min="0" name="valor_entrada" class="form-control" id="valor_entrada" required>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
      
    </form>
    </div>
  </div>
</div>
