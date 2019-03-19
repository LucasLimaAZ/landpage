<?php

require 'back-end/core/config/QueryConfig.php';

$nome = $_GET['nome'];
$email = $_GET['email'];
$telefone = $_GET['telefone'];

$query->insertInto(array([$nome, $email, $telefone]));

?>