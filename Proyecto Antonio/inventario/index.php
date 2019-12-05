<?php
class Principal
{
    public static function main()
    {
        require_once './vendor/autoload.php';
        require_once './bootstrap.php';
        require_once './Vistas/Principal/layout.php';
    }
}
Principal::main();
?>
