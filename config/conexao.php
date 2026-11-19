<?php 
    $host = "localhost";
    $banco = "empresa_db";
    $usuario = "root";
    $senha = "";

    
        $pdo = new PDO(
            "mysql:host=$host:dbname=$banco:charset=utf8",
            $usuario,
            $senha
        );


?>