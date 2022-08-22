<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <form action="tratar-upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" id="file"><br>
        <input type="submit" value="Enviar arquivo">
    </form>
</body>
</html>