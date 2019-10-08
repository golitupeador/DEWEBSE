<?php
require_once "../../Cargadores/cargarclases.php";
class Principal 
{
     public static function main()
     {
         //Recorrer matrices
         //Unidemensionales
         foreach ( EjemplosMatrices::$nombres as $key=>$value) //Para las clases en el foreach, son los :
         {
             echo $key."...".$value."</br>";
         }
         //Asociativa
         foreach ( EjemplosMatrices::$nombreedad as $key=>$value) //Para las clases en el foreach, son los :
        {
            echo "El tipo ".$key." tiene ".$value." años</br>";
        }

        //Añadir elementos al final de un array
        EjemplosMatrices::$edades[100]=5;
        EjemplosMatrices::$edades[]=89; //Si no pongo indices lo añade al final
        print_r(EjemplosMatrices::$edades);
        var_dump(EjemplosMatrices::$edades);

        //recorrer matriz de objetos asociativa
        foreach (EjemplosMatrices::MatrizObjetoAsociativa() as $nombre => $animal) 
        {
            echo "El animal con nombre ".$nombre." pertenece al genero ".$animal->getGenero()."</br>";   
        }

        //acceso a elemento de matriz de 2D
        echo EjemplosMatrices::$comunidades[0][1]."</br>";
        //Recorrer matriz de dos dimensiones
        foreach ( EjemplosMatrices::$comunidadesAsociativa as $comunidad => $matrizProvincias) 
        {
            echo "La comunidad de". $comunidad." pertenecea las siguientes provincias ";
            foreach ($matrizProvincias as $provincia) 
            {
                echo "</blockquote></blockquote></blockquote>".$provincia. "</br>";
            }
        }
     }
     
}
Principal::main();