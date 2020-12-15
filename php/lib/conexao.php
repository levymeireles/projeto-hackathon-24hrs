<?php
function ConexaoMysql()
{
    $_conexao = mysqli_connect('esn509vmysql:3306', 'aluno', 'Senai1234', 'db_hackathon') or die(mysqli_error());
    return $_conexao;
}
