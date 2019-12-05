<?php
require_once './Clases/categoria.php';
try
{
    $conexion=new PDO("mysql:dbname=northwind;host=127.0.0.1","root","higuera2@");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión realizada...";

    $consulta=$conexion->query("select CategoryName as NombreCategoria,
     Description as Descripcion from categories where CategoryID=1");
    $consulta->setFetchMode(PDO::FETCH_CLASS,"Categoria");
    echo "</br>";
    while ($categoria=$consulta->fetch())
    {
        //var_dump($categoria);
        echo "Nombre categoria=".$categoria->NombreCategoria."</br>";
        echo "Descripción = ".$categoria->Descripcion."</br>";
        echo "................................................"."</br>";
    }
}
catch(PDOException $e)
{
    //código error...
}
 

 