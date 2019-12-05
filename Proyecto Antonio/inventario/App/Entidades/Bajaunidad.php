<?php

namespace App\Entidades;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bajaunidad
 *
 * @ORM\Table(name="bajaunidad", indexes={@ORM\Index(name="fk_bajaunidad_ubicacion", columns={"ubicacion_idubicacion"}), @ORM\Index(name="fk_bajaunidad_categoria_idx", columns={"categoria_idcategoria"})})
 * @ORM\Entity
 */
class Bajaunidad
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
     * @ORM\Column(name="unidadesdadasbaja", type="integer", nullable=true)
     */
    private $unidadesdadasbaja = '0';

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
     * @return Bajaunidad
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
     * @return Bajaunidad
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
     * @return Bajaunidad
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
     * @return Bajaunidad
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
     * Set unidadesdadasbaja.
     *
     * @param int|null $unidadesdadasbaja
     *
     * @return Bajaunidad
     */
    public function setUnidadesdadasbaja($unidadesdadasbaja = null)
    {
        $this->unidadesdadasbaja = $unidadesdadasbaja;

        return $this;
    }

    /**
     * Get unidadesdadasbaja.
     *
     * @return int|null
     */
    public function getUnidadesdadasbaja()
    {
        return $this->unidadesdadasbaja;
    }

    /**
     * Set categoriaIdcategoria.
     *
     * @param \App\Entidades\Categoria|null $categoriaIdcategoria
     *
     * @return Bajaunidad
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
     * @return Bajaunidad
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
