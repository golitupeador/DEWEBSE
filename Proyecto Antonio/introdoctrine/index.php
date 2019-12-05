<?php
require_once './vendor/autoload.php';
require_once './bootstrap.php';
use App\Entidades\Animal;
$animal=new Animal();
$animal->setNumerochip("1234567");
$animal->setNombre("Popo");
$animal->setRaza("Pachón");
$entityManager->persist($animal);
$entityManager->flush();