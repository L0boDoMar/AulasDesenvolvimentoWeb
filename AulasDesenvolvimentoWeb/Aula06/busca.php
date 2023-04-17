<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca</title>
</head>
<body>
    <?php
    include_once "FuncionarioDao.php";
    include_once "Funcionario.php";
    $re=intval($_GET["re"]);
    $dao = new FuncionarioDao();
    $f = $dao->buscarPeloRe($re);
    echo $f ->getRe()."<br/>";
    echo $f ->getNome()."<br/>";
    echo $f ->getDataNasc()."<br/>";
    echo $f ->getSalario()."<br/>";
    ?>
</body>
</html>