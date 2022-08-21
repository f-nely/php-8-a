<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title>
</head>
<body>
    <form action="tratar-radio.php" method="POST">
        <p>Qual o seu filme preferido?</p>

        <input type="radio" name="radio-filme" id="radio-1" value="Star Wars">
        <label for="radio-1">Star Wars</label><br>

        <input type="radio" name="radio-filme" id="radio-1" value="Matriz">
        <label for="radio-2">Matriz</label><br>

        <input type="radio" name="radio-filme" id="radio-2" value="Spiderman">
        <label for="radio-2">Spiderman</label><br>

        <input type="submit" value="Aceitar">
    </form>
</body>