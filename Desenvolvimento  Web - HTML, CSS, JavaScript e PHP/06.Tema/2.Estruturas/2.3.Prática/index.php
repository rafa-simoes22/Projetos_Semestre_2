<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
    <?php
        $notas=[6.6, 8.4, 9.2, 7.8, 5.1, 7.9, 8.3, 7.7, 6.4, 8.6];

        $soma=0;
        
        foreach ($notas as $i){
            $soma += $i;
        }
        $media = $soma / 10;

        if($media < 6.0){
            echo "Media da turma: " .$media. ". Abaixo da média, continuem estudando!";
        }
        elseif ($media == 6.0){
            echo "Media da turma: " .$media. ". Na média, muito Bem!";
        }
        else{
            echo "Media da turma: " .$media. ". Acima da média, Parabéns!";
        }
    ?>
</body>
</html>