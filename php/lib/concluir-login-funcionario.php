<?php
include_once("conexao.php");
$_conexao = ConexaoMysql();

$_email = $_POST['username'];
$_senha = $_POST['password'];

$_sql = "SELECT cod_funcionario FROM tbl_funcionario WHERE email = '".$_email."' and senha = '".$_senha."'";
$_query = mysqli_query($_conexao, $_sql);
$_id = mysqli_fetch_array($_query);
$_rows = mysqli_num_rows($_query);

mysqli_close($_conexao);


if ($_rows > 0) {
    session_start();
    $_SESSION['id'] = $_id[0];
    header("location:../Telainicial.php");
} else {
    header("location:../loginFuncionario.php");
}
