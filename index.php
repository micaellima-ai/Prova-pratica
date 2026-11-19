<?php
require_once 'Funcionario.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $acao = $_POST["acao"] ?? "";
    $nome = $_POST["nome"] ?? "";
    $email = $_POST["email"] ?? "";
    $salario = $_POST["salario"] ?? "";
    $tipo = $_POST["tipo"] ?? "";


    //cadastrar
    if ($acao === "cadastrar") {
        $nome = trim($_POST["nome"] ?? "");
        $email = trim($_POST["email"] ?? "");
        $salario = trim($_POST["salario"] ?? "");
        $tipo = trim($_POST["tipo"] ?? "");


        if ($nome === "" || $email === "" || $salario === "" || $tipo === "") {
            $mensagem = "Preencha toodos os campos corretamente";
            $tipoMensagem = "erro";
        } else {
            $novoFuncionario = criarFuncionario(
                uniqid("funcionario_"),
                $nome,
                $email,
                $salario,
                $tipo
            );
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="POST">
        <input type="hidden" value="cadastrar">

        <label>Nome:</label>
        <input type="text" name="nome" required>
        <br><br>

        <label >Tipo:</label>
        <select name="tipo" required>
            <option value="">Selecione</option>
            <option value="FuncionarioComum">FuncionarioComum</option>
            <option value="Gerente">Gerente</option>
        </select>

        <label>E-mail:</label>
        <input type="text" name="email" required>
        <br><br>

        <label>Salario: </label>
        <input type="number" name="salario" required>
<br>
        <button type="submit">Enviar</button>
    </form>


    <?php if($mensagem != ""){ ?>
    
    <p> <?=  $nome ?></p>
    <p> <?=  $email ?></p>
    <p> <?=  $salario ?></p>
    <p> <?=  $tipo ?></p>

    <?php } ?>
        

</body>

</html>