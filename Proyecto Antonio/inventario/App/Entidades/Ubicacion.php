<?php

namespace App\Entidades;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ubicacion
 *
 * @ORM\Table(name="ubicacion")
 * @ORM\Entity
 */
class Ubicacion
{
    /**
     * @var string
     *
     * @ORM\Column(name="idubicacion", type="string", length=8, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idubicacion;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=150, nullable=false)
     */
    private $descripcion;



    /**
     * Get idubicacion.
     *
     * @return string
     */
    public function getIdubicacion()
    {
        return $this->idubicacion;
    }

    /**
     * Set descripcion.
     *
     * @param string $descripcion
     *
     * @return Ubicacion
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
}
