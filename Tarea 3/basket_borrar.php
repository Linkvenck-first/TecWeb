 <?php
    include ("conexion.php");
    $bd = new Database();
    $id = $_GET['id'];
    $query = "DELETE FROM basquetbolistas WHERE id=$id";
    $bd->operacion($bd->conexion,$query);
    header ("Location: basket.php");
?>