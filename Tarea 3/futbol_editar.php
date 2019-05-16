<?php
include_once('utilities.php');
require("conexion.php");
$bd=new Database();
$id = $_GET['id'];  
$query = "select * from futbolistas where id =$id";
$res=$bd->selectEspecial($bd->conexion,$query);
$res = mysqli_fetch_assoc($res);
if (isset($_POST) && !empty($_POST)) {
  //$id=$_POST['numero'];
  $numero=$_POST['numero'];
  $nombre=$_POST['nombre'];
  $posicion=$_POST['posicion'];
  $carrera=$_POST['carrera'];
  $email=$_POST['email'];

  $query = "update futbolistas set id='$numero', nombre='$nombre', posicion='$posicion', carrera='$carrera', email='$email' where id=$id";
  if ($bd->operacion($bd->conexion,$query)) {
    //$message="Datos insertados con éxito";
    //$class="alert alert-success";
    $query = "select * from futbolistas where id =$numero";
    $res=$bd->selectEspecial($bd->conexion,$query);
    $res = mysqli_fetch_assoc($res);
    echo "<h3>Registro actualizado</h3>";
    }else{
    $message="No se pudieron insertar los datos";
    $class="alert alert-danger";
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
        <h3>EDITAR || Futbolistas</h3>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
              </div>
              <form method="post">
                    <div class="col-md-6">
                        <label>numero:</label>
                        <input type="text" name="numero" id="numero" value="<?php echo $res["id"];?>" class="form-control" maxlength="100" required>
                    </div>
                    <div class="col-md-6">
                        <label>nombre:</label>
                        <input type="text" name="nombre" id="nombre" value="<?php echo"$res[nombre]";?>" class="form-control" maxlength="100" required>
                    </div>
                    <div class="col-md-12">
                        <label>posicion:</label>
                        <input type="text" name="posicion"  id="posicion" value="<?php echo"$res[posicion]";?>" class="form-control" maxlength="100" required>
                    </div>
                    <div class="col-md-6">
                        <label>carrera:</label>
                        <input type="text" name="carrera" id="carrera" value="<?php echo"$res[carrera]";?>" class="form-control" maxlength="100" required>
                    </div>
                    <div class="col-md-6">
                        <label>Correo Electrónico:</label>
                        <input type="text" name="email" id="email" value="<?php echo"$res[email]";?>" class="form-control" maxlength="100" required>
                    </div>
                    <div class="col-md-12 pull-right">
                        <hr>
                            <button type="submit" class="btn btn-success">Actualizar Datos</button>
                    </div>
</form>
            </div>
          </section>
        </div>
      </div>

    </div>
    

    <?php require_once('footer.php'); ?>