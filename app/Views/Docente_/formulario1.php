<div class="container" >
<br>
<div class="text-center" id="for2">
  <a href="#" class="list-group-item list-group-item-action list-group-item-dark">Docente</a>
</div>
<br>
<div class="card" id="for1">
  <div class="card-body">
  <form action="<?php echo base_url() ?>/Docente/guardar" method="post">
  <div class="form-group">
    <label for="apellidos">Apellidos <i class="fas fa-signature"></i></label>
    <input type="text" class="form-control" id="apellidos" name="apellidos">
  </div>
  <div class="form-group">
    <label for="nombre">Nombre <i class="fas fa-signature"></i></label>
    <input type="text" class="form-control" id="nombre" name="nombre">
  </div>
  <div class="form-group">
    <label for="curso">Curso <i class="fas fa-book"></i></label>
    <input type="text" class="form-control" id="curso" name="curso">
  </div>
  <button type="submit" class="btn btn-primary">Registrar <i class="fas fa-save"></i></button>
</form>
  </div>
</div>
</div>