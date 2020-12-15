<?php
session_start();
require_once('lib/conexao.php');
$conexao = ConexaoMysql();

if (isset($_POST['btn-salvar'])) {

    $txt_questao1 = $_POST['respA'];
    $txt_pontos1 = $_POST['slt_resposta1'];
    $txt_questao2 = $_POST['respB'];
    $txt_pontos2 = $_POST['slt_resposta2'];
    $txt_questao3 = $_POST['respC'];
    $txt_pontos3 = $_POST['slt_resposta3'];
    $txt_questao4 = $_POST['respD'];
    $txt_pontos4 = $_POST['slt_resposta4'];

    $txt_questao = $_POST['slt_questao'];

    $sql = "INSERT INTO tbl_resposta (resposta, verificacao, cod_questao) VALUES('" . $txt_questao1 . "', " . $txt_pontos1 . " , " . $txt_questao . ")";
    $sql2 = "INSERT INTO tbl_resposta (resposta, verificacao, cod_questao) VALUES('$txt_questao2','$txt_pontos2', '$txt_questao') ";
    $sql3 = "INSERT INTO tbl_resposta (resposta, verificacao, cod_questao) VALUES('$txt_questao3','$txt_pontos3', '$txt_questao') ";
    $sql4 = "INSERT INTO tbl_resposta (resposta, verificacao, cod_questao) VALUES('$txt_questao4','$txt_pontos4', '$txt_questao') ";

    mysqli_query($conexao, $sql);
    mysqli_query($conexao, $sql2);
    mysqli_query($conexao, $sql3);
    mysqli_query($conexao, $sql4);
    mysqli_query($conexao, $sql5);


    header("location:TelaInicial.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alternativas</title>

    <link href="../lib/resume.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../lib/bootstrap.css">
    <link href="../css/formatacao1.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger " href="TelaInicial.php">Adicionar Tarefas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="TelaInicial2.php">Gerenciar Casas</a>
                </li>
                <li class="nav-item">
                    <a class="zoom nav-link js-scroll-trigger" href="GruposAlunos.php">Grupos de Alunos</a>
                </li>

                <li class="nav-item">
                    <a class="zoom nav-link js-scroll-trigger" href="lib/logout.php?logout">Sair</a>
                </li>
            </ul>
        </div>
    </nav>
    <form class="container conteudo" method='post' action='alternativas.php'>
        <?php
        $sql = 'SELECT questao FROM tbl_questao WHERE cod_atividade = "' . $_SESSION['id_atividade'] . '"';
        $select = mysqli_query($conexao, $sql);
        while ($rs = mysqli_fetch_array($select)) {
            ?>
            <div class="container alternativas">
                <h3><?php echo ($rs['questao']) ?>:</h3>
                <div class="questao">
                    <input type="text" name="respA" id="respA" class="form-control mr-5" Placeholder="Resposta1" required>
                    <select class="form-control" name='slt_resposta1' id="exampleFormControlSelect1" required>
                        <option value="">Selecione ...</option>
                        <option value="0">Errado</option>
                        <option value="1">Correto</option>
                    </select>
                </div>

                <div class="questao">
                    <input type="text" name="respB" id="respB" class="pergunta form-control" Placeholder="Resposta2" required>
                    <select class="form-control" name='slt_resposta2' id="exampleFormControlSelect1" required>
                        <option value="">Selecione ...</option>
                        <option value="0">Errado</option>
                        <option value="1">Correto</option>
                    </select>
                </div>

                <div class="questao">
                    <input type="text" name="respC" id="respC" class="pergunta form-control" Placeholder="Resposta3" required>
                    <select class="form-control" name='slt_resposta3' id="exampleFormControlSelect1" required>
                        <option value="">Selecione ...</option>
                        <option value="0">Errado</option>
                        <option value="1">Correto</option>
                    </select>
                </div>

                <div class="questao">
                    <input type="text" name="respD" id="respD" class="pergunta form-control" Placeholder="Resposta4" required>
                    <select class="form-control" name='slt_resposta4' id="exampleFormControlSelect1" required>
                        <option value="">Selecione ...</option>
                        <option value="0">Errado</option>
                        <option value="1">Correto</option>
                    </select>
                </div>


                <select class="form-control" name='slt_questao' id="exampleFormControlSelect1" required>
                    <option value="">Selecione ...</option>

                    <?php
                    $sql = 'SELECT * FROM tbl_questao';

                    $select = mysqli_query($conexao, $sql);

                    while ($rs = mysqli_fetch_array($select)) {
                        ?>

                        <option value="<?php echo ($rs['cod_questao']) ?>"><?php echo ($rs['questao']) ?></option>
                    <?php

                    }

                    ?>
                </select>

                <input class="btn btn-primary" type="submit" name="btn-salvar" id="btn-salvar" value="Salvar">


            </div>
        <?php

        }

        ?>
    </form>

</body>

</html>