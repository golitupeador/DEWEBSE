<?php

namespace App\Entidades;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ejemplar
 *
 * @ORM\Table(name="ejemplar", indexes={@ORM\Index(name="fk_ejemplar_ubicacion1_idx", columns={"ubicacion_idubicacion"}), @ORM\Index(name="fk_ejemplar_articulo1_idx", columns={"articulo_idarticulo"})})
 * @ORM\Entity
 */
class Ejemplar
{
    /**
     * @var int
     *
     * @ORM\Column(name="idejemplar", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idejemplar;

    /**
     * @var string
     *
     * @ORM\Column(name="identificacion", type="string", length=100, nullable=false)
     */
    private $identificacion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="observacion", type="string", length=500, nullable=true)
     */
    private $observacion;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="prestado", type="boolean", nullable=true)
     */
    private $prestado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaalta", type="date", nullable=false)
     */
    private $fechaalta;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechabaja", type="date", nullable=true)
     */
    private $fechabaja;

    /**
     * @var \App\Entidades\Articulo
     *
     * @ORM\ManyToOne(targetEntity="App\Entidades\Articulo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="articulo_idarticulo", referencedColumnName="idarticulo")
     * })
     */
    private $articuloIdarticulo;

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
     * Get idejemplar.
     *
     * @return int
     */
    public function getIdejemplar()
    {
        return $this->idejemplar;
    }

    /**
     * Set identificacion.
     *
     * @param string $identificacion
     *
     * @return Ejemplar
     */
    public function setIdentificacion($identificacion)
    {
        $this->identificacion = $identificacion;

        return $this;
    }

    /**
     * Get identificacion.
     *
     * @return string
     */
    public function getIdentificacion()
    {
        return $this->identificacion;
    }

    /**
     * Set observacion.
     *
     * @param string|null $observacion
     *
     * @return Ejemplar
     */
    public function setObservacion($observacion = null)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion.
     *
     * @return string|null
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set prestado.
     *
     * @param bool|null $prestado
     *
     * @return Ejemplar
     */
    public function setPrestado($prestado = null)
    {
        $this->prestado = $prestado;

        return $this;
    }

    /**
     * Get prestado.
     *
     * @return bool|null
     */
    public function getPrestado()
    {
        return $this->prestado;
    }

    /**
     * Set fechaalta.
     *
     * @param \DateTime $fechaalta
     *
     * @return Ejemplar
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
     * Set fechabaja.
     *
     * @param \DateTime|null $fechabaja
     *
     * @return Ejemplar
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
     * Set articuloIdarticulo.
     *
     * @param \App\Entidades\Articulo|null $articuloIdarticulo
     *
     * @return Ejemplar
     */
    public function setArticuloIdarticulo(\App\Entidades\Articulo $articuloIdarticulo = null)
    {
        $this->articuloIdarticulo = $articuloIdarticulo;

        return $this;
    }

    /**
     * Get articuloIdarticulo.
     *
     * @return \App\Entidades\Articulo|null
     */
    public function getArticuloIdarticulo()
    {
        return $this->articuloIdarticulo;
    }

    /**
     * Set ubicacionIdubicacion.
     *
     * @param \App\Entidades\Ubicacion|null $ubicacionIdubicacion
     *
     * @return Ejemplar
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
