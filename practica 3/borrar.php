 <?php
    include ("database.php");
    $clientes = new Database();
    $id = $_GET['id'];
    $clientes->delete($id);
    header ("Location: index.php");
?>
