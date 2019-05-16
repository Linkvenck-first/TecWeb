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
    <title>TABLA || Conteo de datos</title>
    <link rel="stylesheet" href="./css/foundation.css" />
    <script src="./js/vendor/modernizr.js"></script>
  </head>
  <body>
    
    <?php require_once('header.php'); ?>

     
    <div class="row">
 
      <div class="large-9 columns">
        <h3>TABLA || Conteo de datos</h3>
          <p>Conteo de datos</p>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
              </div>
              <table>
                <thead>
                  <tr>
                    <th width="200">Usuarios</th>
                    <th width="250">Tipos</th>
                    <th width="250">Status</th>
                    <th width="250">Accesos</th>
                    <th width="250">Usuarios Activos</th>
                    <th width="250">Usuarios Inactivos</th>
                  </tr>
                </thead>
                <tbody>
                  <?php //foreach( $user_access as $id => $user ){ ?>
                  <tr>
                    <td><?php 
                    		$query = "select count(*) as total from user;";
							$res = $bd->selectEspecial($bd->conexion,$query);
	                    	foreach ($res as $data) {
	                    		echo " ".$data["total"]."";
	                        } 
                     	?></td>
                    <td><?php 
                    		$query = "select count(*) as total from user_type;";
							$res = $bd->selectEspecial($bd->conexion,$query);
	                    	foreach ($res as $data) {
	                    		echo " ".$data["total"]."";
	                        } 
                     	?></td>
                    <td><?php 
                    		$query = "select count(*) as total from status;";
							$res = $bd->selectEspecial($bd->conexion,$query);
	                    	foreach ($res as $data) {
	                    		echo " ".$data["total"]."";
	                        } 
                     	?></td>
                    <td><?php 
                    		$query = "select count(*) as total from user_log;";
							$res = $bd->selectEspecial($bd->conexion,$query);
	                    	foreach ($res as $data) {
	                    		echo " ".$data["total"]."";
	                        } 
                     	?></td>

                    <td><?php 
                    		$query = "select count(*) as total from status where name ='conectado'";
							$res = $bd->selectEspecial($bd->conexion,$query);
	                    	foreach ($res as $data) {
	                    		echo " ".$data["total"]."";
	                        } 
                     	?></td>

                     	<td><?php 
                    		$query = "select count(*) as total from status where name ='desconectado'";
							$res = $bd->selectEspecial($bd->conexion,$query);
	                    	foreach ($res as $data) {
	                    		echo " ".$data["total"]."";
	                        } 
                     	?></td>
                  </tr>
                </tbody>

              </table>


              <h3>TABLA || Usuarios</h3>
              <table>
                <thead>
                  <tr>
                    <th width="200">Id</th>
                    <th width="250">Correo</th>
                    <th width="250">Contraseña</th>
                    <th width="250">Id de status</th>
                    <th width="250">Tipo de usuario</th>
                  </tr>
                </thead>
                <tbody>
                 
                    <?php 
                    	$query = "select * from user;";
						$res = $bd->selectEspecial($bd->conexion,$query);
	                    foreach ($res as $data) {
	                    	echo "<tr>";
	                    	echo "<td>".$data["id"]."</td>";
	                    	echo "<td>".$data["email"]."</td>";
	                    	echo "<td>".$data["pssw"]."</td>";
	                    	echo "<td>".$data["status_id"]."</td>";
	                    	echo "<td>".$data["user_type_id"]."</td>";
	                    	echo "</tr>";
	                    } 
                   	?>
                  
                </tbody>
              </table>


              

              <h3>TABLA || Registro de inicio de sesión</h3>
              <table>
                <thead>
                  <tr>
                    <th width="200">Id</th>
                    <th width="250">Fecha</th>
                    <th width="250">Usuario</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                    	$query = "select * from user_log;";
						$res = $bd->selectEspecial($bd->conexion,$query);
	                    foreach ($res as $data) {
	                    	echo "<tr>";
	                    	echo "<td>".$data["id"]."</td>";
	                    	echo "<td>".$data["date_logged"]."</td>";
	                    	echo "<td>".$data["user_id"]."</td>";
	                    	echo "</tr>";
	                    } 
                   	?>    
                </tbody>
              </table>

              <h3>TABLA || Tipos de usuario</h3>
              <table>
                <thead>
                  <tr>
                    <th width="200">Id</th>
                    <th width="250">Nombre</th>
                    
                  </tr>
                </thead>
                <tbody>
                    <?php 
                    	$query = "select * from user_type;";
						$res = $bd->selectEspecial($bd->conexion,$query);
	                    foreach ($res as $data) {
	                    	echo "<tr>";
	                    	echo "<td>".$data["id"]."</td>";
	                    	echo "<td>".$data["name"]."</td>";
	                    	echo "</tr>";
	                    } 
                   	?>    
                </tbody>
              </table>

              <h3>TABLA || Status</h3>
              <table>
                <thead>
                  <tr>
                    <th width="200">Id</th>
                    <th width="250">Status</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                    	$query = "select * from status;";
						$res = $bd->selectEspecial($bd->conexion,$query);
	                    foreach ($res as $data) {
	                    	echo "<tr>";
	                    	echo "<td>".$data["id"]."</td>";
	                    	echo "<td>".$data["name"]."</td>";
	                    	echo "</tr>";
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