<?php
$camino="c:/wamp64/www/2019-2020";
//Abrir directorio
$dir=opendir($camino);
while($fichero=readdir($dir))
{
    echo $fichero."<br>";
}
LeerDirectorios("c:/wamp64/www/2019-2020");
 function LeerDirectorios(string $camino, string $tabulacion="")
 {
     if(!is_dir($camino))
     {
         throw new Exception("El parámetro debe ser un directorio válido", 1);
     }
     $dir=opendir($camino);
     while($fichero=readdir($dir))
     {
         if(is_dir($camino."/".$fichero) && $fichero!="." && $fichero!="..")
         {
             LeerDirectorios($camino."/".$fichero,$tabulacion.="&emsp;");
         }
         else
         {
             echo $tabulacion.$fichero."<br>";
         }
     }
     closedir($dir);
 }