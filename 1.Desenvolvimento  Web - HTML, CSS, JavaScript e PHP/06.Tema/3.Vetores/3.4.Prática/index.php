<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Média de Notas</title>
</head>
<body>
    <?php
    function calc_media($n1, $n2){
        return ($n1+$n2)/2;
    }

    $aluno = array("João", 8.8, 9.4);

    $media = calc_media($aluno[1], $aluno[2]);
    echo $aluno[0]." tem média igual a ".$media;
    ?>
</body>
</html>