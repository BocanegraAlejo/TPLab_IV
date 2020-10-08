
<div class="container ">
  <form class="formulario-add bg-light" method="post" action="<?php echo FRONT_ROOT ?>Cine/altaCine">
    <div class="form-group">
      <label for="nombre">Nombre:</label>
      <input type="text" name="nombre" class="form-control" id="nombre">
    </div>
    <div class="form-group">
      <label for="direccion">Direccion:</label>
      <input type="text" name="direccion" class="form-control" id="direccion">
    </div>
    <div class="form-row">
      <div class="form-group col">
        <label for="horario_aper">Horario Apertura:</label>
        <input type="time" name="horario_apertura" class="form-control" id="horario_aper">
      </div>
      <div class="form-group col">
        <label for="horario_cierre">Horario Cierre:</label>
        <input type="time" name="horario_cierre" class="form-control" id="horario_cierre">
      </div>
    </div>
    <div class="form-group">
      <label for="valor_entrada">Valor Entrada</label>
      <input type="int" name="valor_entrada" class="form-control" id="valor_entrada">
    </div>
    <div class="form-group">
      <label for="cap_total">Capacidad Total</label>
      <input type="int" name="capacidad_total" class="form-control" id="cap_total">
    </div>
    <button type="submit" class="btn btn-success">Enviar</button>
  </form>
</div>
</div>