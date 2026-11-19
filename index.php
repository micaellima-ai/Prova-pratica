<?php 
require_once __DIR__ . "/Models/Funcionario.php";


if ($_SERVER ["REQUEST_METHOD"]==="POST"){
    $acao = $_POST ["acao"] ?? "";
    $nome = $_POST ["nome"] ?? "";
    $email = $_POST ["email"] ?? "";
    $salario = $_POST ["salario"] ?? "";
    
    
    //cadastrar
    if ($acao === "cadastrar"){
        $nome = trim($_POST["nome"] ?? "");
        $email = trim($_POST["email"] ?? "");
        $salario = trim($_POST["salario"] ?? "");
       

    if ($nome === "" || $email === "" || $salario === ""){
        $mensagem = "Preencha toodos os campos corretamente";
        $tipoMensagem = "erro";
    }
}


?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>