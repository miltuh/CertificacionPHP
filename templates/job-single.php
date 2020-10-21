<?php include 'inc/header.php'; ?>
    <h2 class="page-header"><?php echo $job->titulo_empleo; ?> (<?php echo $job->lugar ?>)</h2>
    <small>Publicado por <?php echo $job->contacto_usuario; ?> en <?php echo $job->post_fecha; ?></small>
    <hr>
    <p class="lead"><?php echo $job->descripcion; ?></p>
    <ul class="list-group">
      <li class="list-group-item"><strong>Empresa: </strong> <?php echo $job->empresa; ?></li>
      <li class="list-group-item"><strong>Salario: </strong> <?php echo $job->salario; ?></li>
      <li class="list-group-item"><strong>Email de Contacto: </strong> <?php echo $job->contacto_email; ?></li>
    </ul>
    <br><br>
    <a style="color:pink;" href="index.php">Inicio</a>
    <br><br>
    <div class="well">
        <a href="edit.php?id=<?php echo $job->id ?>" class="btn btn-default">Editar</a>

        <form style="display:inline" action="job.php" method="post">
          <input type="hidden" name="del_id" value="<?php echo $job->id; ?>">
          <input type="submit" class="btn btn-danger" value="Eliminar">
        </form>
    </div>
    <br>

<?php include 'inc/footer.php'; ?>
