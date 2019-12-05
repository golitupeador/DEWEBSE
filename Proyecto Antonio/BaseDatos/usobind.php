<?php
require_once './Clases/producto.php';
try
{
    //Crear conexión
    $conexion=new PDO("mysql:dbname=northwind;host=127.0.0.1","root","higuera2@");
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //Preparar una consulta
    $consulta=$conexion->prepare("
    select ProductID,ProductName,CategoryID,UnitPrice from Products 
    where CategoryID=:idcat and UnitPrice > :precio ");
    //Vinculamos parámetros
    $id=4;
    $pre=20;
    $consulta->bindValue(":idcat",$id,PDO::PARAM_INT);
    $consulta->bindValue(":precio",$pre);
    //Ejecuto la consulta
    $consulta->execute();
    $productos=$consulta->fetchAll(PDO::FETCH_CLASS,"Producto");
    var_dump($productos);
    //Otra consulta
    $id=5;
    $pre=30;
    $consulta->execute();
    $productos=$consulta->fetchAll(PDO::FETCH_CLASS,"Producto");
    var_dump($productos);

}
catch(PDOException $e)
{
    //código error...
}
