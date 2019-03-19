<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Painel</title>
</head>
<body>
<table>
    <thead>
        <tr>
            <td>Nome:</td>
            <td>Email:</td>
            <td>Telefone:</td>
        </tr>
    </thead>
    <tbody>
<?php
    foreach($resultado as $campo):
        $nome = $campo->nome;
        $telefone = $campo->telefone;
        $email = $campo->email;
?>
        <tr>
            <td><?=$nome?></td>
            <td><?=$email?></td>
            <td><?=$telefone?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</body>
</html>