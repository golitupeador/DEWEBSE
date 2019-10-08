<?php
class animal
{ 
    private $nombre;
    private $raza;
    private $fechaNacimiento;
    private $tipoVacuna=array();

    public function __construct()
    {

    }

    

    /**
     * Borra un animal con sus vacunas (todo)
     *
     * @param [type] $numeroChip
     * @return void
     */
    public function borraAnimal($numeroChip)
    {
        unset($this->animales[$numeroChip]);
    }

    /**
     * Esto es a lo bestia, lobueno seria pasarle dato a dato y ponerlo con un if set nombre
     *
     * @param String $numeroChip
     * @param array $nuevosDatos
     * @return void
     */
    public function modificaAnimal(String $numeroChip, array $nuevosDatos)
    {
        $this->animales[$numeroChip]=$nuevosDatos;
    }

    public function todosAnimales()
    {
        return $this->animales;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of raza
     */ 
    public function getRaza()
    {
        return $this->raza;
    }

    /**
     * Set the value of raza
     *
     * @return  self
     */ 
    public function setRaza($raza)
    {
        $this->raza = $raza;

        return $this;
    }

    /**
     * Get the value of fechaNacimiento
     */ 
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set the value of fechaNacimiento
     *
     * @return  self
     */ 
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get the value of tipoVacuna
     */ 
    public function getTipoVacuna()
    {
        return $this->tipoVacuna;
    }

    /**
     * Set the value of tipoVacuna
     *
     * @return  self
     */ 
    public function setTipoVacuna($tipoVacuna)
    {
        $this->tipoVacuna = $tipoVacuna;

        return $this;
    }
}