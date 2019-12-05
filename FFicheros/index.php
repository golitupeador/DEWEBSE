<?php 
$camino="c:/wamp64/www/2DAW";
$dir=opendir($camino);
while($fichero=readdir($dir))
{
    echo $fichero."<br>";
    if(is_dir($fichero))
    {
        $subDirectorio=opendir($camino+"/"+$fichero);
        while($fichero2=readdir($subDirectorio))
        {
            echo $fichero2."<br>";
        }
    }
}

function arbol($camino , $tabulacion="")
{

    if(!is_dir($fichero))
    {
        throw new Exception("No valido");
    }
    $dir=opendir($camino);
    while($fichero=readdir($dir))
    {
        if(is_dir($camino."/".$fichero)&& $fichero!="." && $fichero!="..")
        {
            
        }
    
}
}