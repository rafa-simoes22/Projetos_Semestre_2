<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Aplicação</title>
    <script>
        function validarFormulario(formulario){
            if(formulario.nome.value === "" || formulario.nome.value === null) {
                alert("O campo Nome não pode ficar vazio.");
                formulario.nome.focus();
                return false;
            }
            if(formulario.cpf.value.length != 11) {
                alert("O campo CPF precisa ter 11 caracteres.");
                formulario.cpf.focus();
                return false;
            }
            //o campo e-mail precisa ser válido, ou seja, deve : "@" e "."
            if(formulario.email.value.indexOf("@") == -1 || formulario.email.value.indexOf(".") == -1) {
                alert("O campo E-mail não é válido.");
                formulario.email.focus();
                return false;
            }
            if(formulario.data_nascimento.value === "" || formulario.data_nascimento.value === null) {
                alert("O campo Data de Nascimento não pode ficar vazio.");
                formulario.data_nascimento.focus();
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <h1>Formulario</h1>
    <form action="injecao.php" method="post" onsubmit="return validarFormulario(this)">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        <br><br>

        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" id="cpf" required>
        <br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br><br>

        <label for="data_nascimento">Nascimento:</label>
        <input type="date" name="data_nascimento" id="data_nascimento" required>
        <br><br>

        <button type="submit">Entrar</button>
    </form>
</body>
</html>