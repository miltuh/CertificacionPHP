<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;

if(isset($_POST['del_id'])){
  $del_id = $_POST['del_id'];
  if($job->delete($del_id)){
    redirect('index.php', 'Tu empleo ha sido eliminado.','exito');
  } else {
    redirect('index.php', 'Ha habido un problema al elimnar tu empleo.', 'error');
  }
}

$template = new Template('templates/job-single.php');

$job_id = isset($_GET['id']) ? $_GET['id'] : null;

$template->job = $job->getJob($job_id);

echo $template;
