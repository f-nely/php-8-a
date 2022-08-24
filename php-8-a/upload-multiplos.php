<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Múltiplos Arquivos</title>
</head>
<body>
    <form action="tratar-upload-multiplos.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file-1" id="file-1"><br>
        <input type="file" name="file-2" id="file-2"><br>
        <input type="file" name="file-3" id="file-3"><br>
        <hr>
        <input type="submit" value="Enviar arquivo">
    </form>
</body>
</html>