<?php

namespace App\Entidades;

use Doctrine\ORM\Mapping as ORM;

/**
 * Animal
 *
 * @ORM\Table(name="animal")
 * @ORM\Entity
 */
class Animal
{
    /**
     * @var string
     *
     * @ORM\Column(name="numeroChip", type="string", length=40, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numerochip;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="raza", type="string", length=45, nullable=false)
     */
    private $raza;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechaNacimiento", type="date", nullable=true)
     */
    private $fechanacimiento;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Foto", type="blob", length=0, nullable=true)
     */
    private $foto;



    /**
     * Get numerochip.
     *
     * @return string
     */
    public function getNumerochip()
    {
        return $this->numerochip;
    }

    /**
     * Set nombre.
     *
     * @param string $nombre
     *
     * @return Animal
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre.
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set raza.
     *
     * @param string $raza
     *
     * @return Animal
     */
    public function setRaza($raza)
    {
        $this->raza = $raza;

        return $this;
    }

    /**
     * Get raza.
     *
     * @return string
     */
    public function getRaza()
    {
        return $this->raza;
    }

    /**
     * Set fechanacimiento.
     *
     * @param \DateTime|null $fechanacimiento
     *
     * @return Animal
     */
    public function setFechanacimiento($fechanacimiento = null)
    {
        $this->fechanacimiento = $fechanacimiento;

        return $this;
    }

    /**
     * Get fechanacimiento.
     *
     * @return \DateTime|null
     */
    public function getFechanacimiento()
    {
        return $this->fechanacimiento;
    }

    /**
     * Set foto.
     *
     * @param string|null $foto
     *
     * @return Animal
     */
    public function setFoto($foto = null)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto.
     *
     * @return string|null
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set numerochip.
     *
     * @param string $numerochip
     *
     * @return Animal
     */
    public function setNumerochip($numerochip)
    {
        $this->numerochip = $numerochip;

        return $this;
    }
}
