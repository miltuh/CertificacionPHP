<?php include 'inc/header.php'; ?>
<div class="container">


     <div class="jumbotron">
       <h2>Bienvenido</h2>
       <p class="h5">Encuentra empleos con un solo click.</p>
       <br>
       <form method="GET" action="index.php">
          <select name="category" class="form-control">
            <option value="0">Escoge una Categoría</option>
            <?php foreach ($categories as $category):?>
              <option value="<?php echo $category->id; ?>"><?php echo $category->nombre; ?></option>
            <?php endforeach; ?>
          </select>
          <br>
          <input type="submit" class="btn btn-outline-secondary btn-sm" style="background-color: pink;" value="Buscar">
       </form>
     </div>
     <h3><?php echo $title;  ?></h3>
     <?php foreach($jobs as $job):  ?>
     <div class="row marketing">
       <div class="col-md-10">
         <h4><?php echo $job->titulo_empleo ?></h4>
         <p><?php echo $job->descripcion ?></p>
       </div>
      <div class="col-md-2">
        <a class="btn btn-default" href="job.php?id=<?php echo $job->id; ?>">Ver más</a>
      </div>
      </div>
    <?php endforeach; ?>

<?php include 'inc/footer.php'; ?>
