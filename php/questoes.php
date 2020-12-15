<?php

session_start();
require_once('lib/conexao.php');
$conexao = ConexaoMysql();

if (isset($_POST['btn-salvar'])) {

    $txt_questao1 = $_POST['txt-questao1'];
    $txt_pontos1 = $_POST['txt-pontos1'];
    // $txt_questao2 = $_POST['txt-questao2'];
    // $txt_pontos2 = $_POST['txt-pontos2'];
    // $txt_questao3 = $_POST['txt-questao3'];
    // $txt_pontos3 = $_POST['txt-pontos3'];
    // $txt_questao4 = $_POST['txt-questao4'];
    // $txt_pontos4 = $_POST['txt-pontos4'];
    // $txt_questao5 = $_POST['txt-questao5'];
    // $txt_pontos5 = $_POST['txt-pontos5'];

    $cod_atividade = $_POST['slt_atividade'];

    $sql = "INSERT INTO tbl_questao (questao, pontos, cod_atividade) VALUES('" . $txt_questao1 . "', '" . $txt_pontos1 . "' , '" . $cod_atividade . "')";
    // $sql2 = "INSERT INTO tbl_questao (questao, pontos, cod_atividade) VALUES('$txt_questao2','$txt_pontos2', '$cod_atividade') ";
    // $sql3 = "INSERT INTO tbl_questao (questao, pontos, cod_atividade) VALUES('$txt_questao3','$txt_pontos3', '$cod_atividade') ";
    // $sql4 = "INSERT INTO tbl_questao (questao, pontos, cod_atividade) VALUES('$txt_questao4','$txt_pontos4', '$cod_atividade') ";
    // $sql5 = "INSERT INTO tbl_questao (questao, pontos, cod_atividade) VALUES('$txt_questao5','$txt_pontos5', '$cod_atividade') ";

    mysqli_query($conexao, $sql);
    // mysqli_query($conexao, $sql2);
    // mysqli_query($conexao, $sql3);
    // mysqli_query($conexao, $sql4);
    // mysqli_query($conexao, $sql5);

    $_SESSION['id_atividade'] = $cod_atividade;

    header("location:alternativas.php");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Questões</title>


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
                    <a class="zoom nav-link js-scroll-trigger" href="GruposAlunos.php">Grupos de Alunos</a>
                </li>
                <li class="nav-item">
                    <a class="zoom nav-link js-scroll-trigger" href="lib/logout.php?logout">Sair</a>
                </li>

            </ul>
        </div>
    </nav>
    <form class="container conteudo" method='post' action='questoes.php'>
        <h1 class="lead">Adicionar Questões</h1>

        <div class="campoSelect form-group questoes">
            <div class="questao">
                <input type="text" name="txt-questao1" id="" class="pergunta form-control mr-3" placeholder="Questão" aria-describedby="helpId">
                <input type="number" name="txt-pontos1" id="" class="pergunta form-control" placeholder="Pontos" aria-describedby="helpId">
            </div>

            <!-- <div class="questao">
                <input type="text" name="txt-questao2" id="" class="pergunta form-control mr-3" placeholder="Questão número 2" aria-describedby="helpId">
                <input type="number" name="txt-pontos2" id="" class="pergunta form-control" placeholder="Pontos" aria-describedby="helpId">
            </div>

            <div class="questao">
                <input type="text" name="txt-questao3" id="" class="pergunta form-control mr-3" placeholder="Questão número 3" aria-describedby="helpId">
                <input type="number" name="txt-pontos3" id="" class="pergunta form-control" placeholder="Pontos" aria-describedby="helpId">
            </div>

            <div class="questao">
                <input type="text" name="txt-questao4" id="" class="pergunta form-control mr-3" placeholder="Questão número 4" aria-describedby="helpId">
                <input type="number" name="txt-pontos4" id="" class="pergunta form-control" placeholder="Pontos" aria-describedby="helpId">
            </div>

            <div class="questao">
                <input type="text" name="txt-questao5" id="" class="pergunta form-control mr-3" placeholder="Questão número 5" aria-describedby="helpId">
                <input type="number" name="txt-pontos5" id="" class="pergunta form-control" placeholder="Pontos" aria-describedby="helpId">
            </div> -->
            <div class="questao">
                <select name="slt_atividade" class="browser-default custom-select">
                    <option selected>Selecione uma atividade</option>
                    <?php
                    $sql = 'SELECT cod_atividade, nome FROM tbl_atividade';
                    $select = mysqli_query($conexao, $sql);
                    while ($rs = mysqli_fetch_array($select)) {
                        ?>
                        <option value="<?php echo ($rs['cod_atividade']) ?>"><?php echo ($rs['nome']) ?></option>
                    <?php

                    }

                    ?>

                </select>
                <input class="btn btn-primary" type="submit" name="btn-salvar" id="btn-salvar" value="Salvar">
            </div>
        </div>
    </form>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../js/resume.min.js"></script>
</body>

</html>