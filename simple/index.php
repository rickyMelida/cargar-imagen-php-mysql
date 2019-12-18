<!DOCTYPE html>
<html lang="en">
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
                    <label for="imagen">Imagen:</label>
                </td>
                <td>
                    <input type="file" name="imagen" size="20">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center">
                    <input type="submit" value="Enviar Imagen">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>