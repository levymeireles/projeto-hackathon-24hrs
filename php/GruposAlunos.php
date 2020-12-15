<?php
session_start();

require_once('lib/conexao.php');
$conexao = ConexaoMysql();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Grupos</title>

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
        <li class=" nav-item">
          <a class="zoom nav-link js-scroll-trigger " href="TelaInicial.php">Adicionar Tarefas</a>
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

  <div class="resume-section p-3 p-lg-5 d-flex justify-content-center tudo">
    <div>
      <h1 class="mb-5">Grupos</h1>
      <div class="lista_grupos">
        <?php
        $sql = 'SELECT nome, cod_grupo FROM tbl_grupo';
        $select = mysqli_query($conexao, $sql);
        while ($rs = mysqli_fetch_array($select)) {
          ?>
          <a class="link_grupo" href="#"><?php echo ($rs['nome']) ?></a>
        <?php
        }
        ?>
      </div>
    </div>
    <div class="mostrar_grupo">
      <span>
        <h4>Professor:</h4>
        <h4>Vitor Luis fernandes</h4>
      </span>
      <span>
        <h4>Turma:</h4>
        <h4>4IT</h4>
      </span>
      <span>
        <h4>Disciplina:</h4>
        <h4>Gestão de pessoas</h4>
      </span>
    </div>
  </div>
  <script src="../lib/jquery.min.js"></script>
  <script src="../lib/bootstrap.bundle.min.js"></script>
  <script src="../lib/jquery.easing.min.js"></script>
  <script src="../lib/resume.min.js"></script>
</body>

</html>