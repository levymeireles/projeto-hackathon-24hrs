<?php
include_once("lib/conexao.php");
$_conexao = ConexaoMysql();

session_start();
if (!isset($_SESSION['id'])) {
    header("location: ../index.php");
    exit();
}
$_id = $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projeto 24Horas</title>

    <link rel="stylesheet" href="../lib/bootstrap.css">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">

    <link href="../lib/all.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../lib/resume.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/administrador.css">

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
                <a class="botao_lateral" href="administrador.php"><img style="padding-rigth:rem;" src="../img/user.png" alt=""><?php echo ($rs['nome']) ?></a>
            <?php

            }

            ?>


            <a class="botao_lateral" href="rankingAlunos.php">Ranking Alunos</a>
            <!-- <a class="botao_lateral" href="rankingTurma.php">Ranking Turma</a> -->
            <a class="botao_lateral" href="lib/logout.php?logout">Sair</a>
        </nav>
        <div class="conteudo" style="margin-left:200px;text-align:center;padding-top:100px">

            <h1 style="margin-bottom:100px">ATIVIDADES</h1>


            <ul>

                <?php

                $sql = 'SELECT *, tbl_atividade.nome AS nome_atividade FROM tbl_matricula_aluno INNER JOIN tbl_aluno 
                ON tbl_matricula_aluno.cod_aluno = tbl_aluno.cod_aluno
                INNER JOIN tbl_turma
                ON tbl_aluno.cod_turma = tbl_turma.cod_turma
                INNER JOIN tbl_professor_turma_disciplina
                ON tbl_professor_turma_disciplina.cod_turma = tbl_turma.cod_turma
                INNER JOIN tbl_atividade
                ON tbl_atividade.cod_professor_turma_disciplina = tbl_professor_turma_disciplina.cod_professor_turma_disciplina
                WHERE tbl_matricula_aluno.cod_matricula = ' . $_SESSION['id'] . ' ';



                $select = mysqli_query($_conexao, $sql);

                while ($rs = mysqli_fetch_array($select)) {
                    $_SESSION['codigo'] = $rs['cod_atividade'];


                    ?>

                    <a class="botao" href='atividade_aluno.php?cod=<?php echo ($rs['cod_atividade']) ?>'>
                        <li><?php echo ($rs['nome_atividade']) ?></li>
                    </a>

                <?php

                }

                ?>

            </ul>

        </div>

    </main>
</body>

</html>