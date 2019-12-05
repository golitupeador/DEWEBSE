<?php
$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$documento=[
    "CategoriaNombre"=>"Ferreteria",
    "Descripcion"=>"Todo hierro"
];
$bulk = new MongoDB\Driver\BulkWrite;
$_id1 = $bulk->insert($documento);

$result = $manager->executeBulkWrite('northwind.categorias', $bulk);
