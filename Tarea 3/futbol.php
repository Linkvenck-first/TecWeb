<?php
include_once('utilities.php');
require("conexion.php");
$bd=new Database();  
//echo $res;
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Equipo de Futbolistas</title>
    <link rel="stylesheet" href="./css/foundation.css" />
    <script src="./js/vendor/modernizr.js"></script>
    <script type="text/javascript">
      function confirmar(id) {
      if (confirm("¿Está seguro de eliminar este registro?")) {
        window.location.href ="futbol_borrar.php?id="+id;
      
      }
    }
    </script>
  </head>
  <body>
    
    <?php require_once('header.php'); ?>

     
    <div class="row">
 
      <div class="large-12 columns">
        <h3>TABLA || Futbolistas</h3>
        <div class="section-container tabs" data-section>
          <div class="large-12 columns">
        <ul class="right button-group">
          <li><a href="./futbol_add.php" class="button">Nuevo Futbolista</a></li>
        </ul>
      </div>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
              </div>
              <table>
                <thead>
                  <tr>
                    <th width="200">Numero</th>
                    <th width="250">Nombre</th>
                    <th width="250">Posición</th>
                    <th width="250">Carrera</th>
                    <th width="250">Correo</th>
                    <th width="250">Acción</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      $query = "select * from futbolistas;";
                      $res = $bd->selectEspecial($bd->conexion,$query);
                      foreach ($res as $data) {
                        echo "<tr>";
                        echo "<td>".$data["id"]."</td>";
                        echo "<td>".$data["nombre"]."</td>";
                        echo "<td>".$data["posicion"]."</td>";
                        echo "<td>".$data["carrera"]."</td>";
                        echo "<td>".$data["email"]."</td>";
                        echo "<td>
                                <div class=\"btn-group\">
                                  <a  href=\"futbol_editar.php?id=".utf8_encode($data["id"])."\" class=\"button\"> Editar </a>
                                  <a  href=# class=\"button\" onclick=\"confirmar(".$data["id"].")\"> Borrar </a>
                                </div>
                              </td>";
                      } 
                  ?>
                 
                </tbody>
              </table>
            </div>
          </section>
        </div>
      </div>

    </div>
    

    <?php require_once('footer.php'); ?>