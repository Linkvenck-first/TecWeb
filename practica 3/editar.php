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
                    <div class="col-sm-8"><h2>Editar <b>Cliente</b></h2></div>
                    <div class="col-sm-4">
                        <a href="index.php" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i>Regresar</a>
                    </div>
                </div>
            </div>
            <?php
                include ("database.php");
                $clientes = new Database();
                $id = $_GET['id'];
                $sql=$clientes->WHERE($id);
                $res = mysqli_fetch_assoc($sql);
                //$nombres=$res["nombres"];
                //$apellidos=;
                //$telefono=;
                //$direccion=;
                //$correo_electronico=;
                if (isset($_POST)&& !empty($_POST)) {
                    $nombres=$clientes->sanitize($_POST['nombres']);
                    $apellidos=$clientes->sanitize($_POST['apellido']);
                    $telefono=$clientes->sanitize($_POST['telefono']);
                    $direccion=$clientes->sanitize($_POST['direccion']);
                    $correo_electronico=$clientes->sanitize($_POST['correo_electronico']);
                    if ($clientes->update($nombres,$apellidos,$telefono,$direccion,$correo_electronico,$id)) {
                        $message="Datos insertados con éxito";
                        $class="alert alert-success";
                        $sql=$clientes->WHERE($id);
                        $res = mysqli_fetch_assoc($sql);
                    }else{
                        $message="No se pudieron insertar los datos";
                        $class="alert alert-danger";
                    }
            ?>
                <div class="<?php echo $class; ?>">
                    <?php echo $message; ?>
                </div>
            <?php
                }
            ?>
            <div class="row">
                <form method="post">
                    <div class="col-md-6">
                        <label>Nombres:</label>
                        <input type="text" name="nombres" id="nombres" value="<?php echo $res["nombres"];?>" class="form-control" maxlength="100" required>
                    </div>
                    <div class="col-md-6">
                        <label>Apellidos:</label>
                        <input type="text" name="apellido" id="apellido" value="<?php echo"$res[apellidos]";?>" class="form-control" maxlength="100" required>
                    </div>
                    <div class="col-md-12">
                        <label>Dirección:</label>
                        <input type="text" name="direccion"  id="direccion" value="<?php echo"$res[direccion]";?>" class="form-control" maxlength="100" required>
                    </div>
                    <div class="col-md-6">
                        <label>Teléfono:</label>
                        <input type="text" name="telefono" id="telefono" value="<?php echo"$res[telefono]";?>" class="form-control" maxlength="100" required>
                    </div>
                    <div class="col-md-6">
                        <label>Correo Electrónico:</label>
                        <input type="text" name="correo_electronico" id="correo_electronico" value="<?php echo"$res[correo_electronico]";?>" class="form-control" maxlength="100" required>
                    </div>
                    <div class="col-md-12 pull-right">
                        <hr>
                            <button type="submit" class="btn btn-success">Actualizar Datos</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>





