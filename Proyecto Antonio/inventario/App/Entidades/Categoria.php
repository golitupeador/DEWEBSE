<?php

namespace App\Entidades;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Categoria
 *
 * @ORM\Table(name="categoria")
 * @ORM\Entity
 */
class Categoria
{
    /**
     * @var int
     *
     * @ORM\Column(name="idcategoria", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=250, nullable=false)
     */
    private $descripcion;

    //================= AÑADIDO POR MI ========================================
    /**
     * @var \Doctrine\Common\Collections\Collection
     * @ORM\OneToMany(targetEntity="App\Entidades\Articulo", mappedBy="categoriaIdcategoria", cascade={"persist","remove"})
     */
    private $articulos;

    public function __construct()
    {
        $this->articulos= new ArrayCollection();
    }

    /**
     * Get idcategoria.
     *
     * @return int
     */
    public function getIdcategoria()
    {
        return $this->idcategoria;
    }

    /**
     * Set descripcion.
     *
     * @param string $descripcion
     *
     * @return Categoria
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion.
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Get the value of articulos
     *
     * @return  \Doctrine\Common\Collections\Collection
     */ 
    public function getArticulos()
    {
        return $this->articulos;
    }
}
