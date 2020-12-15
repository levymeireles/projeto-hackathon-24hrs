<?php
include_once("lib/conexao.php");
$_conexao = ConexaoMysql();

session_start();
if (!isset($_SESSION['id'])) {
    header("location: ../index.php");
    exit();
}
$_id = $_SESSION['id'];



if (isset($_POST['btn-enviar'])) {

    $atividade = $_POST['slt_resposta'];


    if ($atividade == 1) {

        $sql = "SELECT * FROM tbl_matricula_aluno WHERE cod_matricula= " . $_SESSION['id'] . "";

        $select = mysqli_query($_conexao, $sql);

        if ($rs = mysqli_fetch_array($select)) {
            $soma = $rs['pontos'] + $_SESSION['pontos'];


            $sql = "UPDATE tbl_matricula_aluno SET pontos = " . $soma . " WHERE cod_matricula = " . $_SESSION['id'] . "";

            mysqli_query($_conexao, $sql);

            header("location:administrador.php");
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projeto 24Horas</title>

    <link rel="stylesheet" href="../css/administrador.css">
    <link rel="stylesheet" href="../lib/bootstrap.css">
</head>

<body>

    <main>
        <nav class="navBar">

            <?php

            $sql = 'SELECT * FROM tbl_matricula_aluno INNER JOIN tbl_aluno 
                ON tbl_matricula_aluno.cod_aluno = tbl_aluno.cod_aluno
                WHERE tbl_matricula_aluno.cod_matricula = ' . $_SESSION['id'] . ' ';

            $select = mysqli_query($_conexao, $sql);

            if ($rs = mysqli_fetch_array($select)) {

                ?>
                <a class="botao_lateral" href="#"><?php echo ($rs['nome']) ?></a>
            <?php

            }

            ?>


            <a class="botao_lateral" href="rankingAlunos.php">Ranking Alunos</a>
            <!-- <a class="botao_lateral" href="rankingTurma.php">Ranking Turma</a> -->
            <a class="botao_lateral" href="lib/logout.php?logout">Sair</a>
        </nav>
        <div class="conteudo">



            <form action="atividade_aluno.php" method="post">
                <div class="form-group">

                    <?php

                    $sql = 'SELECT * FROM tbl_atividade INNER JOIN tbl_questao
                ON tbl_questao.cod_atividade = tbl_atividade.cod_atividade
                INNER JOIN tbl_resposta
                ON tbl_resposta.cod_questao = tbl_questao.cod_questao
                WHERE tbl_questao.cod_atividade = ' . $_SESSION['codigo'] . ' ';

                    $select = mysqli_query($_conexao, $sql);

                    if ($rs = mysqli_fetch_array($select)) {



                        ?>

                        <label for="exampleFormControlSelect1"><?php echo ($rs['questao']) ?></label>



                    <?php

                    }

                    ?>


                    <select class="form-control" name='slt_resposta' id="exampleFormControlSelect1" required>
                        <option>Selecione ...</option>

                        <?php

                        $sql = 'SELECT * FROM tbl_atividade INNER JOIN tbl_questao
                ON tbl_questao.cod_atividade = tbl_atividade.cod_atividade
                INNER JOIN tbl_resposta
                ON tbl_resposta.cod_questao = tbl_questao.cod_questao
                WHERE tbl_questao.cod_atividade = ' . $_GET['cod'] . ' ';

                        $select = mysqli_query($_conexao, $sql);

                        while ($rsslt = mysqli_fetch_array($select)) {

                            $_SESSION['pontos'] = $rsslt['pontos'];

                            ?>


                            <option value='<?php echo ($rsslt['verificacao']) ?>'><?php echo ($rsslt['resposta']) ?></option>


                        <?php

                        }

                        ?>



                    </select>

                </div>

                <input class="btn btn-primary" type="submit" name="btn-enviar" id="btn-enviar" value="Salvar">

            </form>
        </div>

    </main>
</body>

</html>