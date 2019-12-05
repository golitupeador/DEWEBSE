<?php
class Animal
{
    public $numeroChip;
    public $nombre;
    public $raza;
    public $fechaNacimiento;
    public $estado;

    //Propiedad que nace de la relación entre animal y vacuna
    public $vacunas;
    
    //Constructor
    public function __construct(string $numeroChip='',string $nombre='',string $raza='',DateTime $fechaNacimiento=null)
    {
        //Cuando se cargan los datos desde la BD $fechaNacimiento noes DateTime
        if(!$fechaNacimiento instanceof DateTime)
        {
            $fechaNacimiento=new \DateTime($fechaNacimiento);
        }
        $this->numeroChip=empty($numeroChip)?$this->numeroChip:$numeroChip;
        $this->nombre=empty($nombre)?$this->nombre:$nombre;
        $this->raza=empty($raza)?$this->raza:$raza;
        $this->fechaNacimiento=is_null($fechaNacimiento)?$this->fechaNacimiento:$fechaNacimiento;
        $this->estado=Estado_Enum::SIN_CAMBIOS;
    }

    // public function __construct()
    // {
    //     $this->estado=Estado_Enum::SIN_CAMBIOS;
    // }

    /**
     * Get the value of numeroChip
     */ 
    public function getNumeroChip()
    {
        return $this->numeroChip;
    }

    /** 
     * Set the value of numeroChip
     *
     * @return  self
     */ 
    public function setNumeroChip($numeroChip)
    {
        $this->numeroChip = $numeroChip;

        return $this;
    }

    /**
     * Añade una nueva vacuna a la colección 
     *
     * @param Vacuna $nuevoVacuna
     * 
     * @return void
     */
    public function addVacuna(Vacuna $nuevoVacuna)
    {
        $this->vacunas[$nuevoVacuna->getTipoVacuna()]=$nuevoVacuna;
    }

    /**
     * Borra un Vacuna de la colección
     *
     * @param Vacuna $borradoVacuna
     * 
     * @return void
     */
    public function removeVacuna(Vacuna $borradoVacuna)
    {
        unset($this->vacunas[$borradoVacuna->getTipoVacuna()]);
    }

    /**
     * Modifica los datos de un Vacuna si existe
     *
     * @param Vacuna $modificaVacuna
     * 
     * @return void
     */
    public function updateVacuna(Vacuna $modificaVacuna)
    {
        if(isset($this->vacunas[$modificaVacuna->getTipoVacuna()]))
        {
            $this->vacunas[$modificaVacuna->getTipoVacuna()]=$modificaVacuna;
        }
    }

    /**
     * Devuelve la colección de Vacunas
     *
     * @return array
     */
    public function allVacuna()
    {
        return $this->vacunas;
    }

    /**
     * Devuelve una Vacuna
     * 
     *
     * @param string $numeroChip
     * @return Vacuna
     * 
     */
    public function findVacunaById(string $tipoVacuna)
    {
        return $this->vacunas[$tipoVacuna];
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
    public function getFechaNacimiento():\DateTime
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set the value of fechaNacimiento
     *
     * @return  self
     */ 
    public function setFechaNacimiento(\DateTime $fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    public function setEstado($estado)
    {
        $this->estado=$estado;
    }

    public function getEstado()
    {
        return $this->estado;
    }
}