<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Script de PHP</h1>
    <?php

        echo 'EY <strong>LISTEN<strong>';
        $a = 20;
        echo '</br>';
        echo 'El valor de la variable a es ' . $a . '</br>';
        var_dump($a);
        var_dump($b);
        $a = 'Esto es una cadena';
        echo 'Elvalor de la variable a es ' . $a . '</br>';
        var_dump($a);
    ?>

    <h1>Ambito de las variables</h1>
    <?php
    $x = 5;
    $y = 7;
    echo 'La variable x = ' . $x . ' y la variable y = ' . $y . '</br>';

    function suma()
    {
        global $x; //PARA OBTENER LA VARIABLE X GLOBAL, NO LA LOCAL DE LA FUNCION
        $x = 1;
        echo 'La variable x en la funcion vale ' . $x;
    }
    echo '</br>';
    suma();
    echo '</br>';
    if ($x == 5) 
    {
        echo "Valor bueno";
    } else 
    {
        echo "Valor malo";
    }

    ?>
    
    
    <?php if(true):?>
    <h2>HOLA2</h2>
    <h1>HOLA1</h1>
    <?php else:echo "no";endif?>

    
    <?php
    for ($i=0; $i < 10; $i++)
    {
        echo 'i= '.$i.'</br>';
    }

        
    
        
    
    ?>


</body>
</html>