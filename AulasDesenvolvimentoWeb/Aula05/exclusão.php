<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão</title>
</head>
<body>
    <?php
    include_once "Funcionario.php";
    include_once "FuncionarioDao.php";

    $re = intval($_GET["re"]);
    $funcionario = new Funcionario($re,NULL,NULL,NULL);
    $funcionario->setRE($re);
    $dao= new FuncionarioDao();
    if($dao->excluir($funcionario)){
        echo "Excluido";
    } else{
        echo "Não Encontrado";
    }
    ?>
</body>
</html>