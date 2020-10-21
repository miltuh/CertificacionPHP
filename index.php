<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;

$template = new Template('templates/frontpage.php');

$category = isset($_GET['category']) ? $_GET['category'] : null;

if($category){
        $template->jobs = $job->getByCategory($category);
        $template->title = 'Empleos Disponibles: '. $job->getCategory($category)->nombre;
} else {
        $template->title = 'Empleos Mas Recientes';
        $template->jobs = $job->getAllJobs();
}


$template->categories = $job->getCategories();

echo $template;
