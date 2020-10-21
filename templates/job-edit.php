<?php include 'inc/header.php' ?>
    <h2 class="page-header">Actualizar Empleo</h2>
    <form method="post" action="edit.php?id<<?php echo $job->id; ?>">
      <div class="form-group">
          <label>Categoría</label>
          <select type="text" class="form-control" name="categoria">
            <option value="0">Escoge una Categoría</option>
            <?php foreach ($categories as $category):?>
              <?php if($job->categoria_id == $category->id) : ?>
                <option value="<?php echo $category->id; ?>" selected><?php echo $category->nombre; ?></option>
              <?php else:  ?>
                <option value="<?php echo $category->id; ?>"><?php echo $category->nombre; ?></option>
              <?php endif; ?>
            <?php endforeach; ?>
          </select>
      </div>
        <div class="form-group">
            <label>Empresa</label>
            <input type="text" class="form-control" name="empresa" value="<?php echo $job->empresa; ?>">
        </div>
        <div class="form-group">
            <label>Titulo de Empleo</label>
            <input type="text" class="form-control" name="titulo_empleo" value="<?php echo $job->titulo_empleo; ?>">
        </div>
        <div class="form-group">
            <label>Descripción</label>
            <textarea type="text" class="form-control" name="descripcion"><?php echo $job->descripcion; ?></textarea>
        </div>
        <div class="form-group">
            <label>Lugar</label>
            <input type="text" class="form-control" name="lugar" value="<?php echo $job->lugar; ?>">
        </div>
        <div class="form-group">
            <label>Salario</label>
            <input type="text" class="form-control" name="salario" value="<?php echo $job->salario; ?>">
        </div>
        <div class="form-group">
            <label>Usuario de Contacto</label>
            <input type="text" class="form-control" name="contacto_usuario" value="<?php echo $job->contacto_usuario; ?>">
        </div>
        <div class="form-group">
            <label>Email de Contacto</label>
            <input type="text" class="form-control" name="contacto_email" value="<?php echo $job->contacto_email; ?>">
        </div>
        <input type="submit" class="btn btn-default" value="Aceptar" name="aceptar">
        <br><br>
    </form>
<?php include 'inc/footer.php' ?>
