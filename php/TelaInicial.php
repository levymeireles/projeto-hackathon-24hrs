<?php
include_once('./lib/conexao.php');
$conexao = ConexaoMysql();

session_start();
if (!isset($_SESSION['id'])) {
  header("location: ../index.php");
  exit();
}

$id = $_SESSION['id'];


if (isset($_POST['btn-enviar'])) {

  $atividade = $_POST['txt-nome-tarefa'];
  $data = $_POST['data_finalizada'];
  $professor_diciplina = $_POST['slt_professor_disciplina'];
  $incio = 0;


  if ($_POST['btn-enviar'] == "Salvar") {



    $sql = "INSERT INTO tbl_atividade (atividade, cod_professor_turma_disciplina, nome) VALUES ('" . $valor . "', '" . $professor_diciplina . "' , '" . $atividade . "')";

    //var_dump($sql);

    mysqli_query($conexao, $sql);

    header("location:questoes.php");
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

  <link href="../css/formatacao1.css" rel="stylesheet">
  <link href="../lib/resume.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../lib/bootstrap.css">
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

  <section class="resume-section p-3 p-lg-5 d-flex" id="tarefas">
    <form method='post' action='TelaInicial.php'>

      <div class="w-100">
        <p class="lead mb-5">Adicionar Uma Nova Atividade</p>
        <div class="form-group">
          <input type="text" name="txt-nome-tarefa" id="" class="form-control" placeholder="Coloque o Nome da Tarefa" aria-describedby="helpId" required>
        </div>

        <hr class="hr">

        <div class="selecioneArquivos">
          <label>Selecione arquivos: <input type="file" name="image[]" multiple="multiple"></label>
        </div>

        <hr class="hr">


        <select name="slt_professor_disciplina" class="browser-default custom-select" required>
          <option selected>Selecione a diciplina e a turma</option>
          <?php
          $sql = 'SELECT * FROM tbl_professor_turma_disciplina
                            INNER JOIN tbl_curso_disciplina
                            ON tbl_professor_turma_disciplina.cod_curso_disciplina = tbl_curso_disciplina.cod_curso_disciplina
                            INNER JOIN tbl_disciplina
                            ON tbl_curso_disciplina.cod_disciplina = tbl_disciplina.cod_disciplina
                            INNER JOIN tbl_professor
                            ON tbl_professor_turma_disciplina.cod_professor= tbl_professor.cod_professor
                            INNER JOIN tbl_turma
                            ON tbl_turma.cod_turma= tbl_professor_turma_disciplina.cod_turma';

          $select = mysqli_query($conexao, $sql);

          while ($rs = mysqli_fetch_array($select)) {
            ?>
            <option value="<?php echo ($rs['cod_professor_turma_disciplina']) ?>"><?php echo ($rs['professor'] . " - " . $rs['disciplina'] . " - " . $rs['nome_turma']) ?></option>
          <?php

          }

          ?>

        </select>
      </div>

      <hr class="hr">

      <input class="btn btn-primary" type="submit" name="btn-enviar" id="btn-enviar" value="Salvar">


    </form>


    </div>
    </div>
  </section>


  <script src="../lib/jquery.min.js"></script>
  <script src="../lib/bootstrap.bundle.min.js"></script>
  <script src="../lib/jquery.easing.min.js"></script>
  <script src="../lib/resume.min.js"></script>

</body>

</html>