<?php
try
{
     //Crear conexión
     $conexion=new PDO("mysql:dbname=northwind;host=127.0.0.1","root","higuera2@");
     $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

     $consulta=$conexion->prepare("insert into products (ProductName,CategoryID) values(?,?)");
     $consulta->execute(["Melones",1]);
}
catch(PDOException $e)
{
    echo $e->getMessage();
}