<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Banco de Dados</title>
</head>
<body>
    <?php
    define('HOST', 'localhost');
    define('PORT', '5432');
    define('DBNAME', 'atv1');
    define('USER', 'postgres');
    define('PASSWORD', '2203');

    try{
        $dsn = new PDO("pgsql:host=".HOST."; port=".PORT."; dbname=".DBNAME."; user=".USER."; password=".PASSWORD);
        echo 'A conexão foi estabelecida com sucesso!<br>';
    }
    catch (PDOException $e){
        echo 'A conexão falhou e retornou a seguinte mensagem de errro: '.$e->getMessage();
    }
    
    $dsn = null;
    ?>
</body>
</html>