<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Injeção SQL</title>
</head>
<body>
    <h1>Formulario</h1> /*' OR  '1'  =  '1*/
    <form action="injecao.php" method="post">
        <label for="login">Login:</label>
        <input type="text" name="login" id="login" required>
        <br><br>

        <label for="pswd">Senha:</label>
        <input type="password" name="pswd" id="pswd" required>
        <br><br>

        <button type="submit">Entrar</button>
    </form>
</body>
</html>