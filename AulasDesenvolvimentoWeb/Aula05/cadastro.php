<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <?php
    
    include_once "Funcionario.php";
    include_once "FuncionarioDao.php";

    $re = intval($_GET["re"]);
    $nome = $_GET["nome"];
    $format = "d/m/y";
    $dataNasc = DateTime::createFromFormat($format,$_GET["dataNasc"]);
    $salario = floatval($_GET["salario"]);
    $funcionario = new Funcionario ($re, $nome, $dataNasc->format("Y-m-d"), $salario);
    $dao = new FuncionarioDao();
    if ($dao -> inserir($funcionario)){
        echo "Inserido com sucesso";
    } else{
        echo "Ocorreu um erro na inserção";
    };


    
    ?>
</body>
</html>