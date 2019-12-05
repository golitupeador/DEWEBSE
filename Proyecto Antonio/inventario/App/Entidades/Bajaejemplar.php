<?php

namespace App\Entidades;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bajaejemplar
 *
 * @ORM\Table(name="bajaejemplar", indexes={@ORM\Index(name="fk_bajaejemplar_ubicacion", columns={"ubicacion_idubicacion"}), @ORM\Index(name="fk_bajaejemplar_categoria_idx", columns={"categoria_idcategoria"})})
 * @ORM\Entity
 */
class Bajaejemplar
{
    /**
     * @var string
     *
     * @ORM\Column(name="identificacionejemplar", type="string", length=100, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $identificacionejemplar;

    /**
     * @var int
     *
     * @ORM\Column(name="idarticulo", type="integer", nullable=false)
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
     * Get identificacionejemplar.
     *
     * @return string
     */
    public function getIdentificacionejemplar()
    {
        return $this->identificacionejemplar;
    }

    /**
     * Set idarticulo.
     *
     * @param int $idarticulo
     *
     * @return Bajaejemplar
     */
    public function setIdarticulo($idarticulo)
    {
        $this->idarticulo = $idarticulo;

        return $this;
    }

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
     * @return Bajaejemplar
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
     * @return Bajaejemplar
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
     * Set inventariable.
     *
     * @param bool $inventariable
     *
     * @return Bajaejemplar
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
     * @return Bajaejemplar
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
     * Set categoriaIdcategoria.
     *
     * @param \App\Entidades\Categoria|null $categoriaIdcategoria
     *
     * @return Bajaejemplar
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
     * @return Bajaejemplar
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
