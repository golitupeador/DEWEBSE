<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Veterinaria</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel = "stylesheet"type = "text/css" href = "css/estilos.css" />
    </head>
    <body>
        <?php
            require_once './Vistas/Principal/header.php';
        ?>
        
    <div class="clear"></div>
            <div id="contenido">
            <?php
            require_once './Vistas/Principal/enruta.php';
            ?>
            </div>

        <?php
            require_once './Vistas/Principal/footer.php';
        ?>
    </body>
</html>