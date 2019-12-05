<?php
use App\Entidades\{Articulo, Categoria};

//Crear un nuevo artículo con una categoría nuevaCategoria.
$nuevoArticulo=new Articulo();
$nuevoArticulo->setDescripcion("Impresora HP laser");
$nuevoArticulo->setFechaalta(new \DateTime());
$nuevoArticulo->setNumeroejemplares(2);
$nuevoArticulo->setInventariable(true);
$nuevaCategoria=new Categoria();
$nuevaCategoria->setDescripcion("Impresoras Laser");
$entityManager->persist($nuevaCategoria);
$nuevoArticulo->setCategoriaIdcategoria($nuevaCategoria);
$entityManager->persist($nuevoArticulo);
$entityManager->flush();

//Borrar una entidad, para ello se busca y se borra
$articuloAborrar=$entityManager->find("Articulo",35);
$entityManager->remove($articuloAborrar);
$entityManager->flush();

//Buscar un artículo y cambiar categoria por otra que existe (id=5)
$articulo=$entityManager->getRepository("App\Entidades\Articulo")->findOneBy(["descripcion"=>"Impresora HP laser"]);
$categoria=$entityManager->getRepository("App\Entidades\Categoria")->find(5);
$articulo->setCategoriaIdcategoria($categoria);
$entityManager->flush();

//DQL lenguaje de consulta de Doctrine

//Listado de todos los articulos con su nombre de categoría
$consulta=$entityManager->createQuery("select a from App\Entidades\Articulo a");
$articulos=$consulta->getResult();
foreach ($articulos as $articulo) {
    echo "Descripción: ".$articulo->getDescripcion()."<br>";
    echo "Categoría: ".$articulo->getCategoriaIdcategoria()->getDescripcion()."<br>";
    echo "======================================================================<br>";
}

//Articulos que no pertenecen a la categoría con id 5
$consulta=$entityManager->createQuery("select a from App\Entidades\Articulo a join a.categoriaIdcategoria c where c.idcategoria!=5");
$articulos=$consulta->getResult();
var_dump($articulos);

//Articulos de una categoría desde categoría habiendo creado en Categoria la asociación OneToMany
$consulta=$entityManager->createQuery("select c from App\Entidades\Categoria c where c.idcategoria=5 ");
$articulos=$consulta->getResult();
foreach ($articulos[0]->getArticulos() as $articulo) {
    echo "Descripción :".$articulo->getDescripcion()."<br>";
}