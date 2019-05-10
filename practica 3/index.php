<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD a mi BD usando POO</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela-Round|Open-Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Agregar <b>Cliente</b></h2></div>
                    <div class="col-sm-4">
                        <a href="create.php" class="tn btn-info add-new" ><i class="material-icons">&#xE147;</i> <span>Agregar empleado</span></a>
                        
                    </div>
                </div>
            </div>
            <?php
                include ("database.php");
                $clientes = new Database();
                $sql= $clientes->select();  
            ?>
            
             <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>


                <script type="text/javascript">
                function clienteBorrar() {
                    //Ingresamos un mensaje a mostrar
                    var mensaje = confirm("¿Te gusta Desarrollo Geek?");
                    //Detectamos si el usuario acepto el mensaje
                    if (mensaje) {
                    alert("¡Gracias por aceptar!");
                    }
                    //Detectamos si el usuario denegó el mensaje
                    else {
                    alert("¡Haz denegado el mensaje!");
                    }
                }
                </script>    
                <?php
                    while($res = mysqli_fetch_assoc($sql)){
                    echo "<tr>";
                    echo "<td>".$res["id"]."</td>";
                    
                    echo "<td>".$res["nombres"]."</td>";
                    
                    echo "<td>".$res["apellidos"]."</td>";
                    
                    echo "<td>".$res["telefono"]."</td>";
                    
                    echo "<td>".$res["direccion"]."</td>";

                    echo "<td>".$res["correo_electronico"]."</td>";
                                        
                    echo "<td>
                      <div class=\"btn-group\">
                        <a  href=\"editar.php?id=".utf8_encode($res["id"])."\" type=\"button\" class=\"btn btn-info\"><i class=\"fa fa-fw fa-pencil\"></i></a>
                        <a  href=\"borrar.php?id=".utf8_encode($res["id"])."\" type=\"button\" class=\"btn btn-danger\"><i class=\"fa fa-fw fa-trash\"></i></a>
                      </div>
                    </td>";
                    echo "</tr>";
                       
                    }
                
                ?>
                </tbody>
            </table>
            
            
        </div>
    </div>
</body>
</html>