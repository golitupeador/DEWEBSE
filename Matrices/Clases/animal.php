<?php
class Animal 
{
    private $nombre;
    private $genero;

     public function __construct($nombre,$genero)
     {
         $this->nombre=$nombre;
         $this->genero=$genero;
     }

    /**
     * Get the value of genero
     */ 
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     *
     * @return  self
     */ 
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }
}