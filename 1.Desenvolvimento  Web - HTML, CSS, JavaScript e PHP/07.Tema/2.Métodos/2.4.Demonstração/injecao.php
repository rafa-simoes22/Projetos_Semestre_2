<?php 
require_once 'conexao.php';

$login = $_POST['login'];
$pswd = $_POST['pswd'];
$instrucaoSQL = "Select * From cliente Where login = '$login' And senha = '$pswd'";

try{
    $resultSet = $dsn->query($instrucaoSQL);
    echo "Consulta realizada  com sucesso!<br>";

    foreach ($resultSet as $row){
        echo "ID: {$row['id']} | Nome: {$row['nome']} | CPF: {$row['cpf']} | Email: {$row['email']} |
         Data de Nascimento: {$row['nascimento']} | Login: {$row['login']} | Senha: {$row['senha']}";
    }
}
catch (PDOException $e){
    echo "Erro ao executar a consulta: ".$e->getMessage();
}
?>