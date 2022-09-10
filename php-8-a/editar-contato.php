<?php 

    // verifica se existe o id
    if (!isset($_GET['id'])) {
        exit('Acesso inválido');
    }

    $id_contato = $_GET['id'];

    // adiciona à base de dados
    require_once 'EasyPDO.php';
    require_once 'config-contatos.php';
    $bd = new EasyPDO\EasyPDO(MYSQL_OPTIONS);

    $id_contato = aes_decrypt($id_contato);
    if($id_contato == -1 || $id_contato == false) {
        exit('Acesso inválido');
    }
    
    $parametros = [
        ':id_contato' => $id_contato
    ];

    $contato = $bd->select('SELECT * FROM dados WHERE id_contato = :id_contato', $parametros)[0];

    // var_dump($contato);
    // exit;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar contato</title>
</head>
<body>
    <form action="editar-contatos-submit.php" method="POST">
        <input type="hidden" name="id-contato" value="<?= aes_encrypt($id_contato) ?>">
        <div>
            <label for="text-nome">Nome:</label>
            <input type="text" name="text-nome" id="text-nome" maxlength="50" value="<?= $contato['nome'] ?>">
        </div>
        <div>
            <label for="text-telefone">Telefone:</label>
            <input type="text" name="text-telefone" id="text-telefone" maxlength="20" value="<?= $contato['telefone'] ?>">
        </div>
        <div>
            <input type="submit" value="Guardar">
        </div>
        <div>
            <a href="mostrar-contatos.php">Cancelar</a>
        </div>
    </form>
</body>
</html>