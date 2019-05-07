<html>
<head>
    <title>Formulario Alumno - Maestro</title>
</head>

<body>

<?php
$conn = mysqli_connect( "localhost", "root", "","TecWeb" ) or die ("No se ha podido conectar al servidor de Base de datos");


    class alumno{
        public $nombre;
        public $correo;
        public $telefono;
        public $matricula;
        public $carrera;

        public $nombreErr;
        public $correoErr;
        public $telefonoErr;
        public $matriculaErr;
        public $carreraErr;

       

        public function mostrar(){
            if ($this->nombreErr =="" && $this->correoErr =="" && $this->telefonoErr =="" &&
                $this->carreraErr =="" && $this->matriculaErr =="") {
                    echo "<h2>Datos del alumno:</h2> $this->nombre<br>
                            $this->correo <br> $this->matricula <br>
                            $this->carrera <br>$this->telefono <br><br>";

                    
                return 1;
            }
        }

        public function errores(){
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["nombre"])) {
                    $this-> nombreErr = "Nombre requerido";
                } else {
                    $this-> nombre=test_input($_POST["nombre"]);
                        $this-> nombreErr = "";
                    }
                

                if (empty($_POST["email"])) {
                    $this-> correoErr = "Correo requerido";
                } else {
                    $this->  correo = test_input($_POST["email"]);
                        $this-> correoErr = "";
                    }
                

                if (empty($_POST["matricula"])) {
                    $this-> matriculaErr = "Matricula requerida";
                } else {
                    $this->  matricula = test_input($_POST["matricula"]);
                    $this-> matriculaErr = "";
                }

                if (empty($_POST["telefono"])) {
                    $this-> telefonoErr = "telefono requerido";
                } else {
                    $this->  telefono = test_input($_POST["telefono"]);
                    $this-> telefonoErr = "";
                }

                if (empty($_POST["carrera"])) {
                    $this-> carreraErr = "Carrera requerido";
                } else {
                    $this->  carrera = test_input($_POST["carrera"]);
                    $this-> carreraErr = "";
                }
            }
        }
    }




$a= new alumno();

$a-> errores(); 


class maestro{
        public $nombre;
        public $telefono;
        public $no;
        public $carrera;

        public $nombreErr;
        public $noErr;
        public $telefonoErr;
        public $carreraErr;

       

        public function mostrar(){
            if ($this->nombreErr =="" && $this->telefonoErr =="" &&
                $this->carreraErr =="" && $this->noErr =="") {
                    echo "<h2>Datos del maestro:</h2> $this->nombre<br>
                            $this->no <br> $this->carrera <br>
                            $this->telefono <br><br>";
                return 1;
            }
        }

        public function errores(){
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["nombre2"])) {
                    $this-> nombreErr = "Nombre requerido";
                } else {
                    $this-> nombre=test_input($_POST["nombre2"]);
                        $this-> nombreErr = "";
                    }

                if (empty($_POST["no"])) {
                    $this-> noErr = "Numero de empleado requerida";
                } else {
                    $this->  no = test_input($_POST["no"]);
                    $this-> noErr = "";
                }

                if (empty($_POST["telefono2"])) {
                    $this-> telefonoErr = "telefono requerido";
                } else {
                    $this->  telefono = test_input($_POST["telefono2"]);
                    $this-> telefonoErr = "";
                }

                if (empty($_POST["carrera2"])) {
                    $this-> carreraErr = "Carrera requerido";
                } else {
                    $this->  carrera = test_input($_POST["carrera2"]);
                    $this-> carreraErr = "";
                }
            }
        }
    }

$b= new maestro();

$b-> errores(); 
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>Formulario Alumno</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    Nombre: <input type="text" name="nombre" value="<?php echo $a-> nombre;?>">
    <span class="error"> <?php echo $a->nombreErr;?></span>
    <br><br>

    E-mail: <input type="text" name="email" value="<?php echo $a-> correo;?>">
    <span class="error"> <?php echo $a->correoErr;?></span>
    <br><br>
    Matricula: <input type="text" name="matricula" value="<?php echo $a-> matricula;?>">
    <span class="error"><?php echo $a->matriculaErr;?></span>
    <br><br>

    Carrera: <input type="text" name="carrera" value="<?php echo $a-> carrera;?>">
    <span class="error"><?php echo $a->carreraErr;?></span>
    <br><br>

    Telefono: <input type="text" name="telefono" value="<?php echo $a-> telefono;?>">
    <span class="error"><?php echo $a->telefonoErr;?></span>
    <br><br>

    <input type="submit" name="submit" value="Registrar alumno">


</form>

<h2>Formulario maestro</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    Nombre: <input type="text" name="nombre2" value="<?php echo $b-> nombre;?>">
    <span class="error"> <?php echo $b->nombreErr;?></span>
    <br><br>

    Numero de empleado: <input type="text" name="no" value="<?php echo $b-> no;?>">
    <span class="error"> <?php echo $b->noErr;?></span>
    <br><br>

    Carrera: <input type="text" name="carrera2" value="<?php echo $b-> carrera;?>">
    <span class="error"><?php echo $b->carreraErr;?></span>
    <br><br>

    Telefono: <input type="text" name="telefono2" value="<?php echo $b-> telefono;?>">
    <span class="error"><?php echo $b->telefonoErr;?></span>
    <br><br>

    <input type="submit" name="submit2" value="Registrar maestro">

    
</form>

<?php

if ($a-> mostrar()==1) {
    $sql = "INSERT INTO alumno (matricula, nombre, correo, telefono, carrera) 
                    VALUES ('$a->matricula', '$a->nombre', '$a->correo', '$a->telefono',
                    '$a->carrera')";
                    if (mysqli_query($conn, $sql)) {
                          echo "REGISTRO GUARDADO";
                    } else {
                          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
}

if ($b-> mostrar()==1) {
    $sql = "INSERT INTO maestro (no, nombre, telefono, carrera) 
                    VALUES ('$b->no', '$b->nombre', '$b->telefono',
                    '$b->carrera')";
                    if (mysqli_query($conn, $sql)) {
                          echo "REGISTRO GUARDADO";
                    } else {
                          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
}

?>



<ul>
    <li><a href="#">Volver al Inicio</a></li>
</ul>
</body>
</html>
