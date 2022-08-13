<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
    <title>Login</title>
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
    <form action="exemplo-login.php" method="POST" class="form">
        <fieldset>
            <legend>Login</legend>
            <p><input type="text" name="user" id="user" placeholder="Type your name, please." class="input"></p>
            <p><input type="password" name="password" id="password" placeholder="Type your password" class="input"></p>
            <p><input type="submit" value="Login" class="btn"></p>
        </fieldset>
    </form>
</body>
</html>