<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Tabla de multiplicar</h1>
<table border="1">
    <?php
        for ($i=1; $i < 11; $i++) 
        { 
            echo "<tr>
                    <td>
                        1 x $i = " . $i*1 . "
                    </td>
                  </tr>";
        }


    ?>
</table>
</body>
</html>