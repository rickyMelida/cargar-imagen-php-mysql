<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="proceso.php" enctype="multipart/form-data">
        Subir imagen: <input type="file" name="file[]" multiple>
    <input type="submit" value="Subir imágenes" />
    </form>
</body>
</html>