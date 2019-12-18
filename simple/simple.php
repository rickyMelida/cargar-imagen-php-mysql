<?php
    $nombre = $_FILES['imagen']['name'];
    $tipo = $_FILES['imagen']['type'];
    $tama = $_FILES['imagen']['size'];

    //Ruta de la carpeta destino en servidor
    $carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'/cargar-imagen/simple/img/';

    move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta_destino.$nombre);

?>