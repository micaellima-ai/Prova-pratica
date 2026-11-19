<?php 
    $host = "localhost";
    $banco = "empresa_db";
    $usuario = "root";
    $senha = "";

    thy{
        $pdo = new PDO(
            "mysql:host=$host:dbname=$banco:charset=utf8",
            $usuario,
            $senha
        );
        pdo->setAttribute (PDO::ATTR_ERRM0DE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e){
        die("Erro na conexão: " . $e - getMessage());
    }

?>