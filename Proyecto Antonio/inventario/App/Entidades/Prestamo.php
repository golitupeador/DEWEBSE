<?php

namespace App\Entidades;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prestamo
 *
 * @ORM\Table(name="prestamo", indexes={@ORM\Index(name="fk_prestamo_ejemplar1_idx", columns={"ejemplar_idejemplar"})})
 * @ORM\Entity
 */
class Prestamo
{
    /**
     * @var int
     *
     * @ORM\Column(name="idprestamo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprestamo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaprestamo", type="datetime", nullable=false)
     */
    private $fechaprestamo;

    /**
     * @var string
     *
     * @ORM\Column(name="aquien", type="string", length=250, nullable=false)
     */
    private $aquien;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechadevolucion", type="datetime", nullable=true)
     */
    private $fechadevolucion;

    /**
     * @var \App\Entidades\Ejemplar
     *
     * @ORM\ManyToOne(targetEntity="App\Entidades\Ejemplar")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ejemplar_idejemplar", referencedColumnName="idejemplar")
     * })
     */
    private $ejemplarIdejemplar;



    /**
     * Get idprestamo.
     *
     * @return int
     */
    public function getIdprestamo()
    {
        return $this->idprestamo;
    }

    /**
     * Set fechaprestamo.
     *
     * @param \DateTime $fechaprestamo
     *
     * @return Prestamo
     */
    public function setFechaprestamo($fechaprestamo)
    {
        $this->fechaprestamo = $fechaprestamo;

        return $this;
    }

    /**
     * Get fechaprestamo.
     *
     * @return \DateTime
     */
    public function getFechaprestamo()
    {
        return $this->fechaprestamo;
    }

    /**
     * Set aquien.
     *
     * @param string $aquien
     *
     * @return Prestamo
     */
    public function setAquien($aquien)
    {
        $this->aquien = $aquien;

        return $this;
    }

    /**
     * Get aquien.
     *
     * @return string
     */
    public function getAquien()
    {
        return $this->aquien;
    }

    /**
     * Set fechadevolucion.
     *
     * @param \DateTime|null $fechadevolucion
     *
     * @return Prestamo
     */
    public function setFechadevolucion($fechadevolucion = null)
    {
        $this->fechadevolucion = $fechadevolucion;

        return $this;
    }

    /**
     * Get fechadevolucion.
     *
     * @return \DateTime|null
     */
    public function getFechadevolucion()
    {
        return $this->fechadevolucion;
    }

    /**
     * Set ejemplarIdejemplar.
     *
     * @param \App\Entidades\Ejemplar|null $ejemplarIdejemplar
     *
     * @return Prestamo
     */
    public function setEjemplarIdejemplar(\App\Entidades\Ejemplar $ejemplarIdejemplar = null)
    {
        $this->ejemplarIdejemplar = $ejemplarIdejemplar;

        return $this;
    }

    /**
     * Get ejemplarIdejemplar.
     *
     * @return \App\Entidades\Ejemplar|null
     */
    public function getEjemplarIdejemplar()
    {
        return $this->ejemplarIdejemplar;
    }
}
