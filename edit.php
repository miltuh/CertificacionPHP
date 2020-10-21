<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;

$job_id = isset($_GET['id']) ? $_GET['id'] : null;

if(isset($_POST['aceptar'])){
  //crear un array de datos
  $data = array();
  $data['titulo_empleo'] = $_POST['titulo_empleo'];
  $data['empresa'] = $_POST['empresa'];
  $data['categoria_id'] = $_POST['categoria'];
  $data['descripcion'] = $_POST['descripcion'];
  $data['lugar'] = $_POST['lugar'];
  $data['salario'] = $_POST['salario'];
  $data['contacto_usuario'] = $_POST['contacto_usuario'];
  $data['contacto_email'] = $_POST['contacto_email'];

  if($job->update($job_id, $data)){
    redirect('index.php', 'Tu empleo ha sido actualizado.','exito');
  } else {
    redirect('index.php', 'Ha habido un problema al actualizar tu empleo.','error');
  }
}

$template = new Template('templates/job-edit.php');

$template->job = $job->getJob($job_id);
$template->categories = $job->getCategories();

echo $template;
