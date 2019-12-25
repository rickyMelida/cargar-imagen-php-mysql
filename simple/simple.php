<?php
    $antes_nombre = $_FILES['antes']['name'];
    $antes_tipo = $_FILES['antes']['type'];
    $antes_tama = $_FILES['antes']['size'];

    $despues_nombre = $_FILES['despues']['name'];
    $despues_tipo = $_FILES['despues']['type'];
    $despues_tama = $_FILES['despues']['size'];

    $texto = $_POST['texto'];

    //Ruta de la carpeta destino en servidor
    $carpeta_antes = $_SERVER['DOCUMENT_ROOT'].'/cargar-imagen/simple/antes/';
    $carpeta_despues = $_SERVER['DOCUMENT_ROOT'].'/cargar-imagen/simple/despues/';

    $n_antes = "antes";
    $n_despues = "despues";

    //echo $tipo;

    //Limite de la imagen 1Mb
    if($antes_tama <= 1000000) {
        if($despues_tipo == 'image/jpeg' || $despues_tipo == 'image/jpg' || $despues_tipo == 'image/png' || $despues_tipo == 'image/gif') {

            $mover_antes = move_uploaded_file($_FILES['antes']['tmp_name'], $carpeta_antes.$antes_nombre);
            $mover_despues = move_uploaded_file($_FILES['despues']['tmp_name'], $carpeta_despues.$despues_nombre);
            
            $tipo = substr($antes_tipo, 6, 10);
            if($tipo == "jpeg") {
                $tipo = "jpg";
            }
            //rename("despues/".$despues_nombre, "despues/despues.".$tipo);

            echo "Se subio correctamente la imagen<br>";         
        }else {
            echo "Formato no valido<br>";
        }
    } else {
        echo "No se pudo subir la imagen<br>";
    }

    echo "<a href='index.php'>Volver..<a>";

    /* ----- Conexion a base de datos ------------*/
    $con = mysqli_connect('localhost', 'root', '', 'productos');

    if(mysqli_connect_errno()){
        echo "Error al conectar la base de datos";
    }else {
        echo "Se conecto a la base de datos<br>";
    }

    mysqli_set_charset($con, 'utf8');

    $sql = "INSERT into datos(texto, antes, despues) values('$texto', '$antes_nombre', '$despues_nombre')";
    $resultado = mysqli_query($con, $sql); 



?>