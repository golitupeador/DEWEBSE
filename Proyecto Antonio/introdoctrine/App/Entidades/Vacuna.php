<?php

namespace App\Entidades;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vacuna
 *
 * @ORM\Table(name="vacuna", indexes={@ORM\Index(name="fk_vacuna_animal1_idx", columns={"animal_numeroChip"})})
 * @ORM\Entity
 */
class Vacuna
{
    /**
     * @var int
     *
     * @ORM\Column(name="idvacuna", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idvacuna;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoVacuna", type="string", length=45, nullable=false)
     */
    private $tipovacuna;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaVacuna", type="date", nullable=false)
     */
    private $fechavacuna;

    /**
     * @var string|null
     *
     * @ORM\Column(name="observaciones", type="string", length=255, nullable=true)
     */
    private $observaciones;

    /**
     * @var \App\Entidades\Animal
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="App\Entidades\Animal")
     * @ORM\JoinColumns({ 
     *   @ORM\JoinColumn(name="animal_numeroChip", referencedColumnName="numeroChip")
     * })
     */
    private $animalNumerochip;



    /**
     * Set idvacuna.
     *
     * @param int $idvacuna
     *
     * @return Vacuna
     */
    public function setIdvacuna($idvacuna)
    {
        $this->idvacuna = $idvacuna;

        return $this;
    }

    /**
     * Get idvacuna.
     *
     * @return int
     */
    public function getIdvacuna()
    {
        return $this->idvacuna;
    }

    /**
     * Set tipovacuna.
     *
     * @param string $tipovacuna
     *
     * @return Vacuna
     */
    public function setTipovacuna($tipovacuna)
    {
        $this->tipovacuna = $tipovacuna;

        return $this;
    }

    /**
     * Get tipovacuna.
     *
     * @return string
     */
    public function getTipovacuna()
    {
        return $this->tipovacuna;
    }

    /**
     * Set fechavacuna.
     *
     * @param \DateTime $fechavacuna
     *
     * @return Vacuna
     */
    public function setFechavacuna($fechavacuna)
    {
        $this->fechavacuna = $fechavacuna;

        return $this;
    }

    /**
     * Get fechavacuna.
     *
     * @return \DateTime
     */
    public function getFechavacuna()
    {
        return $this->fechavacuna;
    }

    /**
     * Set observaciones.
     *
     * @param string|null $observaciones
     *
     * @return Vacuna
     */
    public function setObservaciones($observaciones = null)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones.
     *
     * @return string|null
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set animalNumerochip.
     *
     * @param \App\Entidades\Animal $animalNumerochip
     *
     * @return Vacuna
     */
    public function setAnimalNumerochip(\App\Entidades\Animal $animalNumerochip)
    {
        $this->animalNumerochip = $animalNumerochip;

        return $this;
    }

    /**
     * Get animalNumerochip.
     *
     * @return \App\Entidades\Animal
     */
    public function getAnimalNumerochip()
    {
        return $this->animalNumerochip;
    }
}
