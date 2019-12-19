<?php
    $nombre = $_FILES['imagen']['name'];
    $tipo = $_FILES['imagen']['type'];
    $tama = $_FILES['imagen']['size'];

    //Ruta de la carpeta destino en servidor
    $carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'/cargar-imagen-php-mysql/simple/img/';


    //echo $tipo;

    //Limite de la imagen 1Mb
    if($tama <= 1000000) {
        if($tipo == 'image/jpeg' || $tipo == 'image/jpg' || $tipo == 'image/png' || $tipo == 'image/gif') {

            $moved = move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta_destino.$nombre);
            echo "Se subio correctamente la imagen<br>";         
        }else {
            echo "Formato no valido<br>";
        }
    } else {
        echo "No se pudo subir la imagen<br>";
    }

    echo "<a href='index.php'>Volver..<a>";


    $con = mysqli_connect('localhost', 'root', '5181789781Ri-', 'productos');

    if(mysqli_connect_errno()){
        echo "Error al conectar la base de datos";
    }else {
        echo "Se conecto a la base de datos<br>";
    }

    mysqli_set_charset($con, 'utf8');

    $sql = "UPDATE products set foto='$nombre' where codigo='AR01'";
    //$sql = "INSERT INTO products(codigo, foto) values('AR12', '$nombre')";
    $resultado = mysqli_query($con, $sql); 



?>