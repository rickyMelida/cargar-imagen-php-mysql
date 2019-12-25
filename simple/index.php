<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="simple.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
                    <label for="imagen">Antes:</label>
                </td>
                <td>
                    <input type="file" name="antes" size="20">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="imagen">Despues:</label>
                </td>
                <td>
                    <input type="file" name="despues" size="20">
                </td>
            </tr>
            <tr>
            <tr>
                <td>
                    <label for="imagen">Texto:</label>
                </td>
                <td>
                    <input type="text" name="texto">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center">
                    <input type="submit" value="Enviar Imagen">
                </td>
            </tr>
            <tr>
                <td>
                    <a href="leer_imagen_bd.php">Ver imagenes</a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>