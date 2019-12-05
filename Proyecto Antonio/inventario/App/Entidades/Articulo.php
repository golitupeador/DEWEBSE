<?php

namespace App\Entidades;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articulo
 *
 * @ORM\Table(name="articulo", indexes={@ORM\Index(name="fk_articulo_ubicacion", columns={"ubicacion_idubicacion"}), @ORM\Index(name="fk_articulo_categoria_idx", columns={"categoria_idcategoria"})})
 * @ORM\Entity
 */
class Articulo
{
    /**
     * @var int
     *
     * @ORM\Column(name="idarticulo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idarticulo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=500, nullable=false)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaalta", type="date", nullable=false)
     */
    private $fechaalta;

    /**
     * @var int
     *
     * @ORM\Column(name="numeroejemplares", type="integer", nullable=false, options={"default"="1"})
     */
    private $numeroejemplares = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="inventariable", type="boolean", nullable=false, options={"default"="1"})
     */
    private $inventariable = '1';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FechaBaja", type="date", nullable=true)
     */
    private $fechabaja;

    /**
     * @var int|null
     *
     * @ORM\Column(name="unidades", type="integer", nullable=true)
     */
    private $unidades = '0';

    /**
     * @var \App\Entidades\Categoria
     *
     * @ORM\ManyToOne(targetEntity="App\Entidades\Categoria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categoria_idcategoria", referencedColumnName="idcategoria")
     * })
     */
    private $categoriaIdcategoria;

    /**
     * @var \App\Entidades\Ubicacion
     *
     * @ORM\ManyToOne(targetEntity="App\Entidades\Ubicacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ubicacion_idubicacion", referencedColumnName="idubicacion")
     * })
     */
    private $ubicacionIdubicacion;



    /**
     * Get idarticulo.
     *
     * @return int
     */
    public function getIdarticulo()
    {
        return $this->idarticulo;
    }

    /**
     * Set descripcion.
     *
     * @param string $descripcion
     *
     * @return Articulo
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
     * Set fechaalta.
     *
     * @param \DateTime $fechaalta
     *
     * @return Articulo
     */
    public function setFechaalta($fechaalta)
    {
        $this->fechaalta = $fechaalta;

        return $this;
    }

    /**
     * Get fechaalta.
     *
     * @return \DateTime
     */
    public function getFechaalta()
    {
        return $this->fechaalta;
    }

    /**
     * Set numeroejemplares.
     *
     * @param int $numeroejemplares
     *
     * @return Articulo
     */
    public function setNumeroejemplares($numeroejemplares)
    {
        $this->numeroejemplares = $numeroejemplares;

        return $this;
    }

    /**
     * Get numeroejemplares.
     *
     * @return int
     */
    public function getNumeroejemplares()
    {
        return $this->numeroejemplares;
    }

    /**
     * Set inventariable.
     *
     * @param bool $inventariable
     *
     * @return Articulo
     */
    public function setInventariable($inventariable)
    {
        $this->inventariable = $inventariable;

        return $this;
    }

    /**
     * Get inventariable.
     *
     * @return bool
     */
    public function getInventariable()
    {
        return $this->inventariable;
    }

    /**
     * Set fechabaja.
     *
     * @param \DateTime|null $fechabaja
     *
     * @return Articulo
     */
    public function setFechabaja($fechabaja = null)
    {
        $this->fechabaja = $fechabaja;

        return $this;
    }

    /**
     * Get fechabaja.
     *
     * @return \DateTime|null
     */
    public function getFechabaja()
    {
        return $this->fechabaja;
    }

    /**
     * Set unidades.
     *
     * @param int|null $unidades
     *
     * @return Articulo
     */
    public function setUnidades($unidades = null)
    {
        $this->unidades = $unidades;

        return $this;
    }

    /**
     * Get unidades.
     *
     * @return int|null
     */
    public function getUnidades()
    {
        return $this->unidades;
    }

    /**
     * Set categoriaIdcategoria.
     *
     * @param \App\Entidades\Categoria|null $categoriaIdcategoria
     *
     * @return Articulo
     */
    public function setCategoriaIdcategoria(\App\Entidades\Categoria $categoriaIdcategoria = null)
    {
        $this->categoriaIdcategoria = $categoriaIdcategoria;

        return $this;
    }

    /**
     * Get categoriaIdcategoria.
     *
     * @return \App\Entidades\Categoria|null
     */
    public function getCategoriaIdcategoria()
    {
        return $this->categoriaIdcategoria;
    }

    /**
     * Set ubicacionIdubicacion.
     *
     * @param \App\Entidades\Ubicacion|null $ubicacionIdubicacion
     *
     * @return Articulo
     */
    public function setUbicacionIdubicacion(\App\Entidades\Ubicacion $ubicacionIdubicacion = null)
    {
        $this->ubicacionIdubicacion = $ubicacionIdubicacion;

        return $this;
    }

    /**
     * Get ubicacionIdubicacion.
     *
     * @return \App\Entidades\Ubicacion|null
     */
    public function getUbicacionIdubicacion()
    {
        return $this->ubicacionIdubicacion;
    }
}
