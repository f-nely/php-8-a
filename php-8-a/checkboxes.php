<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bebibas</title>
</head>
<body>
    <form action="tratar-checkboxes.php" method="POST">
        <p>Indique que bebidas gosta?</p>

        <input type="checkbox" name="check_vinho" id="check_1" value="vinho">
        <label for="check_1">Vinho</label><br>

        <input type="checkbox" name="check_cerveja" id="check_2" value="cerveja">
        <label for="check_2">Cerveja</label><br>

        <input type="checkbox" name="check_vinho" id="check_3" value="refrigerante">
        <label for="check_3">Refrigerante</label><br>

        <input type="submit" value="Aceitar">
    </form>
</body>
</html>