<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mime Types</title>
</head>
<body>
    <form action="tratar-mime-types.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file-1" id="file-1" accept="image/png"><br>
        <input type="file" name="file-2" id="file-2"><br>
        <hr>
        <input type="submit" value="Enviar arquivo">
    </form>
</body>
</html>