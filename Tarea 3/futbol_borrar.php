 <?php
    include ("conexion.php");
    $bd = new Database();
    $id = $_GET['id'];
    $query = "DELETE FROM futbolistas WHERE id=$id";
    $bd->operacion($bd->conexion,$query);
    header ("Location: futbol.php");
?>