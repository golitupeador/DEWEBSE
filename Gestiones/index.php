<?php
require_once '../../Cargadores/cargarclases.php';
class Principal
{
    public static function main()
    {
        $gestiona=new gestionAnimales();
        $gestiona->crearAnimal("123","Lua","YorkShire","12-02-2012");

        var_dump($gestiona->todosAnimales());

        //Comprobar modificar
        $gestiona->modificaAnimal("123",["PEPA","GALICIA","33-33-3333","vacunas"=>[]]);
        var_dump($gestiona->todosAnimales());

        //Ponervacuna
        $gestiona->anadirVacuna("123","Moquillo","12-02-2019","Ninguna, mu sano");
        var_dump($gestiona->todosAnimales());

        //Modifica vacuna

        $gestiona->modificaVacuna("123","Moquillo",["13-03-2019","Ta pa morirse"]);
        print_r($gestiona->todosAnimales());
    }
}
Principal::main();