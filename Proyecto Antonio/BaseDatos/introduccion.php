<?php
require_once './Clases/categoria.php';
//Crear conexión con base de datos
try
{
    $conexion=new PDO("mysql:dbname=northwind;host=127.0.0.1","root","higuera2@");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión realizada...";

    $consulta=$conexion->query("select CategoryName, Description from categories");
    //Por defecto los datos se devuelven indexados y asociativos
    $categorias=$consulta->fetchAll();
    var_dump($categorias);

    //Datos asociativos solamente
    $consulta=$conexion->query("select CategoryName, Description from categories");
    $categorias=$consulta->fetchAll(PDO::FETCH_ASSOC);
    var_dump($categorias);

    //Datos indexados solamente
    $consulta=$conexion->query("select CategoryName, Description from categories");
    $categorias=$consulta->fetchAll(PDO::FETCH_NUM);
    var_dump($categorias);

    //Leer y convertir en objeto Categoria
    $consulta=$conexion->query("select CategoryName as NombreCategoria, Description as Descripcion from categories");
    $categorias=$consulta->fetchAll(PDO::FETCH_CLASS,"Categoria");
    var_dump($categorias);

}
catch(PDOException $e)
{
    echo $e->getMessage();
}

