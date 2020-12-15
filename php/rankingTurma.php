<?php
require_once('lib/conexao.php');
$conexao = ConexaoMysql();
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Resume - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="../lib/bootstrap.css" rel="stylesheet">

  <link href="../lib/all.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../lib/resume.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navBar">

    <?php

    $sql = 'SELECT * FROM tbl_matricula_aluno INNER JOIN tbl_aluno 
    ON tbl_matricula_aluno.cod_aluno = tbl_aluno.cod_aluno
    WHERE tbl_matricula_aluno.cod_matricula = ' . $_SESSION['id'] . ' ';

    $select = mysqli_query($conexao, $sql);

    if ($rs = mysqli_fetch_array($select)) {

      ?>
      <a class="botao_lateral" href="#"><?php echo ($rs['nome']) ?></a>
    <?php

    }

    ?>


    <a class="botao_lateral" href="rankingAlunos.php">Ranking Alunos</a>
    <a class="botao_lateral" href="rankingTurma.php">Ranking Turma</a>
    <a class="botao_lateral" href="lib/logout.php?logout">Sair</a>
  </nav>

  <div class="container-fluid p-0">

    <section id="about">

      <div class='center ranking'>

        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">Nome</th>
              <th scope="col">Pontos</th>
              <th scope="col">Turma</th>
            </tr>
          </thead>
          <tbody>
            <?php

            $sql = "SELECT * FROM tbl_matricula_aluno INNER JOIN tbl_aluno
          ON tbl_matricula_aluno.cod_aluno = tbl_aluno.cod_aluno
          INNER JOIN tbl_turma
          ON tbl_turma.cod_turma = tbl_aluno.cod_turma
          ORDER BY pontos DESC";

            $select = mysqli_query($conexao, $sql);


            $cont = 1;

            while ($rs = mysqli_fetch_array($select)) {


              ?>

              <tr>
                <th scope="row"><?php echo ($cont) ?></th>
                <td><?php echo ($rs['nome']) ?></td>
                <td><?php echo ($rs['pontos']) ?></td>
                <td><?php echo ($rs['nome_turma']) ?></td>
              </tr>
              <?php

              $cont = $cont + 1;
            }
            ?>

          </tbody>
        </table>

    </section>



  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="../lib/jquery.min.js"></script>
  <script src="../lib/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="../lib/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="../lib/resume.min.js"></script>

</body>

</html>