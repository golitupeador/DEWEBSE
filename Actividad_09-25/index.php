<?php
class Principal
{
    public static function main()
    {
        require_once './Vistas/Principal/layout.php';
        require_once '../../Cargadores/cargarclases.php';

        $gestionaAnimal=new animal();
        $gestionaAnimal->crearAnimal("123","Lua","YorkShire","12-02-2012");

        var_dump($gestionaAnimal->todosAnimales());

        //Comprobar modificar
        $gestionaAnimal->modificaAnimal("123",["PEPA","GALICIA","33-33-3333","vacunas"=>[]]);
        var_dump($gestionaAnimal->todosAnimales());
        
        $gestionaVacuna=new vacuna();
        //Ponervacuna
        $gestionaVacuna->anadirVacuna("123","Moquillo","12-02-2019","Ninguna, mu sano");
        print_r($gestionaAnimal->todosAnimales());

        //Modifica vacuna

        $gestionaVacuna->modificaVacuna("123","Moquillo",["13-03-2019","Ta pa morirse"]);
        print_r($gestionaAnimal->todosAnimales());
    }
}
Principal::main();