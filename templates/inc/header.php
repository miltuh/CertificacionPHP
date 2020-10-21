<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SEIRB</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/3.4/assets/css/ie10-viewport-bug-workaround.css">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/3.4/examples/jumbotron-narrow/jumbotron-narrow.css">
    <link rel="icon" type="image" href="favicon.png">
  </head>
  <body>
    <div class="container">
        <div class="header clearfix">
          <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">
    <img src="favicon.png" width="75" height="75" alt="logo">
            </a>
            <h3 class="text-muted" style="position:left;">SEIRB</h3>
            <ul class="nav nav-pills pull-right">
              <li role="presentation"><a class="navbar-brand" href="index.php">Buscar Empleo</a></li>
              <li role="presentation"><a class="navbar-brand" href="create.php">Publicar Empleo</a></li>
            </ul>
          </nav>
      </div>
      <div class="container">
        <?php displayMessage(); ?>
      </div>
