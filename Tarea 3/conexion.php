<?php
class Database{
  private $bd ='TecWeb';
  private $servidor='localhost';
  private $usuario='root';
  private $contrasena='';

  //creamos una conexión a la base de datos
  public $conexion;
  // checamos la conexion
  function __construct(){
            $this->connect_db();
  }

  public function connect_db(){
    $this->conexion=mysqli_connect($this->servidor, $this->usuario,$this->contrasena,$this->bd);
    if(!$this->conexion){
      die('Conexion a la base de datos ' . $this->bd . ' falló: ' . mysqli_connect_error());
    }else{
      //echo "SE logro la conexion";
    }
  }



  function selectEspecial($conexion,$query){

    $resultado = mysqli_query($conexion,$query) or die('Error al ejecutar la consulta');

    if(mysqli_num_rows($resultado)==0){
      return false;
    }else{

      return $resultado;
    }
  }

  function Operacion($conexion,$query){
      if (mysqli_query($conexion,$query)) {
          return true;
      } else {
          return false;
      }
  }



/*
  function selectCount($conexion,$query){

    $resultado = mysqli_query($this->$conexion,$query) or die('Error al ejecutar la consulta');
    
    if(mysqli_num_rows($resultado)==0){
      return false;
    }else{
     // $row = mysql_fetch_array($resultado);
      //$count = $row['total'];
      return $resultado;
    }
  }

  function select($conexion,$table){
    $query = "select * from {$table}";
    $resultado = mysqli_query($conexion,$query) or die('Error al ejecutar la consulta');

    if(mysqli_num_rows($resultado)==0){
      return false;
    }else{

      return $resultado;
    }
  }

  



  

  function borrar_registro($conexion,$id,$table){
  $query = "delete from {$table} WHERE id = {$id}  ;";
     if (mysqli_query($conexion,$query)) {
      return true;
   } else {
      return false;
   }

  }

  function borrar_registro_especial($conexion,$id, $dia,$table){
  $query = "delete from {$table} WHERE id_clase = {$id} AND dia = {$dia};";
     if (mysqli_query($conexion,$query)) {
      return true;
   } else {
      return false;
   }
  }

function obtener_resultado_por_id($conexion,$id,$table){
   $query = "select * from {$table} where id = {$id}  LIMIT 1";
  $resultado = mysqli_query($conexion,$query) or die('Error al ejecutar la consulta');

    if(mysqli_num_rows($resultado)==0){
      return false;
    }else{

      return $resultado;
    }

  }


  function crear_registro($conexion,$query){
      if (mysqli_query($conexion,$query)) {
          return true;
      } else {
          return false;
      }
  }


   function Redirect($url, $permanent = false)
    {
        if (headers_sent() === false)
        {
            header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
        }

        exit();
    }
*/
}
 ?>
