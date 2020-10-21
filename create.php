<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;

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

  if($job->create($data)){
    redirect('index.php', 'Tu empleo ha sido publicado.','exito');
  } else {
    redirect('index.php', 'Ha habido un problema al publicar tu empleo.','error');
  }
}

$template = new Template('templates/job-create.php');

$template->categories = $job->getCategories();

echo $template;
