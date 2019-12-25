<?php
    $con = mysqli_connect('localhost', 'root', '', 'productos');
    
    if(mysqli_connect_errno()){
        echo "Error al conectar la base de datos";
    }else {
        echo "Se conecto a la base de datos<br>";
    }
    
    mysqli_set_charset($con, 'utf8');
    
    $sql = "SELECT antes, despues from datos where id='1'";
    
    $res = mysqli_query($con, $sql);
    
    while($fila=mysqli_fetch_array($res)) {
        $ruta_antes = $fila['antes'];
        $ruta_despues = $fila['despues'];

    }
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Leer Imagen</title>
</head>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-3 col-md-4">
                <div class="card w-100 m-auto" >
                    <!-- Carrusel de las imagenes -->
                    <div id="tarea_1" class="carousel slide" data-pause="false">
                        <!-- -->
                        <ol class="carousel-indicators">
                            <li data-target="#tarea_1" data-slide-to="0" class="active"></li>
                            <li data-target="#tarea_1" data-slide-to="1"></li>
                            <li data-target="#tarea_1" data-slide-to="2"></li>
                        </ol>

                        <!-- Imagenes del carrusel -->
                        <div class="carousel-inner ">
                            
                            <!-- Primera imagen del carrusel -->
                            <div class="carousel-item active">
                                <img src="./antes/<?php echo $ruta_antes;?>" class="d-block w-100 img-thumbnail" alt="Imagen antes">
                            </div>

                            <div class="carousel-item">
                                <img src="./despues/<?php echo $ruta_despues;?>" class="d-block w-100 img-thumbnail" alt="Imagen despues">
                            </div>
                        </div>

                        <!-- -->
                        <a class="carousel-control-prev" href="#tarea_1" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>

                        <!-- -->
                        <a class="carousel-control-next" href="#tarea_1" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Tarea 1</h5>
                        <p class="card-text">
                            <div>
                                <strong>Descripcion:</strong> <span>Verificacion de sistema.</span>
                            </div> 
                            <div>
                                <strong>Fecha:</strong> <span>12-02-2019</span>
                            </div>
                            <div>
                                <strong>Inicio:</strong> <span>08:00</span>
                            </div>
                            <div>
                                <strong>Fin:</strong> <span>09:15</span>
                            </div>
                            <div>
                                <strong>Horas Hombre:</strong> <span>1:15</span>
                            </div>
                        </p>
                        <a href="index.php" class="btn btn-primary">Volver..</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
        $('.carousel').carousel()
    </script>
</body>
</html>