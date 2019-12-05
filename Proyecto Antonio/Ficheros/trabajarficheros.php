<?php

//Abrir un fichero para escritura
$fichero=fopen('./ficheros/texto.txt',"wt");
//Escribir datos en el fichero
fwrite($fichero,"Linea1\n");
fwrite($fichero,"Linea2\n");
fclose($fichero);
//Abrir un fichero para escritura
$fichero=fopen('./ficheros/texto.bin',"wb");
//Escribir datos en el fichero
fwrite($fichero,"Linea1\n");
fwrite($fichero,"Linea2\n");
fclose($fichero);

//Abrir para leer
$fichero=fopen("./ficheros/texto.txt","rt");
while($linea=fgets($fichero))
{
    echo $linea."<br>";
}
fclose($fichero);
echo 
$datos=file_get_contents("./ficheros/texto.txt");
echo $datos;
echo "<br>";
//Leer en binario
$fichero=fopen("./ficheros/texto.bin","rb");
$datos=fread($fichero,filesize("./ficheros/texto.bin"));
echo $datos;

