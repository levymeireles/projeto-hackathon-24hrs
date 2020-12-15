<?php
include_once("conexao.php");
$_conexao = ConexaoMysql();

$_matricula = $_POST['username'];
$_senha = $_POST['password'];

$_sql = "SELECT cod_matricula FROM tbl_matricula_aluno WHERE matricula = '".$_matricula."' and senha = '".$_senha."'";
$_query = mysqli_query($_conexao, $_sql);
$_id = mysqli_fetch_array($_query);
$_rows = mysqli_num_rows($_query);

mysqli_close($_conexao);


if ($_rows > 0) {
    session_start();
    $_SESSION['id'] = $_id[0];
    header("location:../administrador.php");
} else {
    header("location:../loginAluno.php");
}
