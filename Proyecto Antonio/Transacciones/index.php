<?php
require_once '../Cargadores/cargarhelper.php';
require_once '../Cargadores/cargarclases.php';
try
{
    $bd=new GBD("127.0.0.1","northwind","antonio","higuera2@","sqlsrv");
    //Empezar una transición
    $conexion=$bd->getConexion();
    $conexion->beginTransaction();
    $bd->add("categories",["CategoryName"=>"Peluqueria","Description"=>"Too pal pelo"]);
    $bd->add("categories",["CategoryName"=>"Educación","Description"=>"Too pal alumno"]);
    //Si no hay errores confirmamos la transicción
    $conexion->commit();
}
catch(PDOException $e)
{
    //Deshacer la transicción
    $conexion->rollBack();
    throw new PDOException("Error en la transicción:".$e->getMessage());
}

