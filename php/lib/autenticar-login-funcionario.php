<?php
include_once("conexao.php");
$_conexao = ConexaoMysql();

if (isset($_POST['save'])) {
    $_email = $_POST['email'];
    $_senha = $_POST['senha'];

    $_sql = "SELECT * FROM tbl_funcionario WHERE email = '".$_email."' and senha = '".$_senha."'";
    $_query = mysqli_query($_conexao, $_sql);
    $_rows = mysqli_num_rows($_query);

    mysqli_close($_conexao);

    if ($_rows > 0) {
        echo 'sucesso';
    } else {
        echo 'Usuario ou senha incorreto';
    }
}
