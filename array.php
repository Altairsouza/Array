<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php

function numeroNaoRepetido($array)
{
    $arrayUnico = $array;

    foreach ($array as $key => $value) {
        foreach ($array as $key2 => $value2) {
            if ($key != $key2 && $value == $value2) {
                unset($arrayUnico[$key]);
            }
        }
    }
    return $arrayUnico;
}

for ($i = 0; $i < 20; $i++) {
    $array[] = rand(1, 10);
}

$naoRepete = numeroNaoRepetido($array);

echo "Array sorteado: " . implode(', ', $array) . "<br>";

if ($naoRepete != null) {
    echo "Os números que não se repetem são: " . implode(', ', $naoRepete);
} else {
    echo "Não há números que não se repetem";
}

?>
</body>
</html>