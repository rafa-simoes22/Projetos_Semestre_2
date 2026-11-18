<?php 
require_once 'conexao.php';

$instrucaoSQL = "Select id, nome, cpf, email, data_nascimento From clientes";

try{
    $resultSet = $dsn->query($instrucaoSQL);
    echo "Consulta realizada  com sucesso!<br>";

    foreach ($resultSet as $row){
        $cpfFormatado = preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", '$1.$2.$3.$4', $row["cpf"]);
        echo " <br><br> ID: {$row['id']} <br> Nome: {$row['nome']} <br> CPF: {$cpfFormatado} <br> Email: {$row['email']} <br>
         Data de Nascimento: {$row['data_nascimento']}";
    }
}
catch (PDOException $e){
    echo "Erro ao executar a consulta: ".$e->getMessage();
}
?>