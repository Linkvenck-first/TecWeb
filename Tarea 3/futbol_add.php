<?php
include_once('utilities.php');
require("conexion.php");
$bd=new Database();

if (isset($_POST) && !empty($_POST)) {
  $numero=$_POST['numero'];
  $nombre=$_POST['nombre'];
  $posicion=$_POST['posicion'];
  $carrera=$_POST['carrera'];
  $email=$_POST['email'];

  $query = "INSERT INTO futbolistas (id, nombre, posicion, carrera, email) VALUES ($numero, '$nombre', '$posicion', '$carrera', '$email')";

  if ($bd->operacion($bd->conexion,$query)) {
    echo "<h3>Agregado correctamente</h3>";
    }else{
    echo "No se pudieron insertar los datos";
    }
}
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Equipo de Futbolistas</title>
    <link rel="stylesheet" href="./css/foundation.css" />
    <script src="./js/vendor/modernizr.js"></script>
  </head>
  <body>
    
    <?php require_once('header.php'); ?>

     
    <div class="row">
 
      <div class="large-12 columns">
        <h3>AGREGAR || Futbolistas</h3>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
              </div>
              <form method="post">
                    <div class="col-md-6">
                        <label>numero:</label>
                        <input type="text" name="numero" id="numero" class="form-control" maxlength="100" required>
                    </div>
                    <div class="col-md-6">
                        <label>nombre:</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" maxlength="100" required>
                    </div>
                    <div class="col-md-12">
                        <label>posicion:</label>
                        <input type="text" name="posicion"  id="posicion"  class="form-control" maxlength="100" required>
                    </div>
                    <div class="col-md-6">
                        <label>carrera:</label>
                        <input type="text" name="carrera" id="carrera"  class="form-control" maxlength="100" required>
                    </div>
                    <div class="col-md-6">
                        <label>Correo Electrónico:</label>
                        <input type="text" name="email" id="email" class="form-control" maxlength="100" required>
                    </div>
                    <div class="col-md-12 pull-right">
                        <hr>
                            <button type="submit" class="btn btn-success">Agregar futbolista</button>
                    </div>
</form>
            </div>
          </section>
        </div>
      </div>

    </div>
    

    <?php require_once('footer.php'); ?>