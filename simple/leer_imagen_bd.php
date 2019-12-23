<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Leer Imagen</title>
</head>
<body>
    <?php
        $con = mysqli_connect('localhost', 'root', '', 'productos');

        if(mysqli_connect_errno()){
            echo "Error al conectar la base de datos";
        }else {
            echo "Se conecto a la base de datos<br>";
        }
    
        mysqli_set_charset($con, 'utf8');
    
        $sql = "SELECT antes from datos where id='1'";

        $res = mysqli_query($con, $sql);

        while($fila=mysqli_fetch_array($res)) {
            $ruta_img = $fila['antes'];
        }
    
    ?>

    <div>
        <img src="./antes/<?php echo $ruta_img;?>" alt="Imagen del primer articulo " width="25%">
    </div>
</body>
</html>