<html>
<head>
    <title></title>
</head>
<body>
    <?php
        include "persona.php";

        $persona=new persona();

        $conn = mysqli_connect( "localhost", "root", "","TecWeb" ) or die ("No se ha podido conectar al servidor de Base de datos");

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $persona->setEdad($_POST["Edad"]);
            $persona->setAltura($_POST["Altura"]);
            $persona->setPeso($_POST["Peso"]);
        }
    ?>
    <h2>IMC Formulario</h2>
    <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

        Edad: <input type="text" name="Edad" value="<?php echo $persona-> getEdad();?>">

        Altura: <input type="text" name="Altura" value="<?php echo $persona-> getAltura();?>">

        Edad: <input type="text" name="Peso" value="<?php echo $persona-> getPeso();?>">
        <br><br>
        <input type="submit" name="submit" value="Calcular">

    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $sql = "INSERT INTO imc (edad, altura, peso) 
                    VALUES ('$persona->edad', '$persona->altura', '$persona->peso')";
            if (mysqli_query($conn, $sql)) {
                echo "REGISTRO GUARDADO <br><br>";
                }else{
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
        }
    ?>
        <?php
            $sql = "SELECT * FROM imc";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo "Edad: " . $row["edad"]. " altura " . $row["altura"]. " peso " . $row["peso"]. "<br>";
    }
} else {

}
        ?>

            

</body>
</html>