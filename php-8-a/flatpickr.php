<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
    <title>Flatpickr</title>

    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }
        .form {
            width: 300px;
            margin: 0 auto;
        }

        .input {
            padding: 4px;
            width: 90%;
        }

        .btn {
            padding: 7px 5px;
            background-color: #008080;
            color: #FFF;
            border: 1px solid #008080;
        }

        .btn:hover {
            background-color: #FFF;
            color: #008080;
            border: 1px solid #008080;
        }
    </style>
</head>
<body>
    <form action="tratar2.php" method="POST" class="form">
        <fieldset>
            <legend>Cadastro</legend>
            <label for="data-nascimento">Data de nascimento:</label>
            <input type="text" name="data-nascimento" id="data-nascimento" class="input">
            <p><input type="submit" value="Enviar" class="btn"></p>
        </fieldset>
    </form>

    <!-- Flatpickr - https://flatpickr.js.org/ -->
    <script>
        let dataNascimento = document.getElementById('data-nascimento');
        dataNascimento.flatpickr({    
            enableTime: true,
            dateFormat: "d-m-Y H:i",
        });
    </script>
</body>
</html>