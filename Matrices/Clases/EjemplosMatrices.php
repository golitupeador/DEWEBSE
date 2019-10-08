<?php
class EjemplosMatrices
{
    
    //Mtrices unidimensionales
    //MATRIZ DE NUMEROS
    public static $edades=[2,8,34,56];
    //Matriz de cadenas indexada
    public static $nombres=["Antonio","Juan","Lepre","Baldoy"];
    //Matriz asociativa
    public static $nombreedad=["Antonio"=>2,"Juan"=>8,"Lepre"=>34,"Baldoy"=>56];

    //Matriz de objetos indexada
    public static function MatrizObjetoIndexada()
    {
        return $animales=[new Animal("gato","felino"), new Animal("raton","roedor")];

    }

    //MATRIZ DE OBjetos asociativa
    public static function MatrizObjetoAsociativa()
    {
        return ["gato"=>new Animal("gato","felino"), "raton"=>new Animal("raton","roedor")];
    }

    //MATRIZ asociativa/indexada liada
    public static $lio=[1=>20,4=>80,32=>11];

    //Matrices multidimensionales
    //Matriz indexada
    public static $comunidades=[["Jaen","Cordoba","Sevilla"],["Madrid"]];

    //Matriz asociativa
    public static $comunidadesAsociativa=["Andalucia"=>["Jaen","Cordoba","Sevilla"],"Madrid"=>["Madrid"]];


    
}