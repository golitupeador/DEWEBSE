<?php
class vacuna
{

    private $tipoVacuna;
    private $fechaVacuna;
    private $observaciones;

/**
     * Al haberla hecho asociativa yy haberle dado un valor, se hace de la siguiente manera
     *
     * @param String $numeroChip
     * @param string $tipoVacuna
     * @param string $fechaVacuna
     * @param string $observaciones
     * @return void
     */
    public function anadirVacuna(String $numeroChip, string $tipoVacuna, string $fechaVacuna, string $observaciones)
    {
        $this->animales[$numeroChip]["vacunas"][$tipoVacuna]=[$tipoVacuna,$fechaVacuna, $observaciones];
    }

    /**
     * Modifica datos de una vacuna
     *
     * @param string $numeroChip
     * @param string $tipoVacuna
     * @param array $nuevosDatosVacuna
     * @return void
     */
    public function  modificaVacuna(string $numeroChip, string $tipoVacuna, array $nuevosDatosVacuna)
    {
        $this->animales[$numeroChip]["vacunas"][$tipoVacuna]=$nuevosDatosVacuna;
    }
    public function todasVacunasAnimal(string $numeroChip)
    {
        return $this->animales[$numeroChip]["vacunas"];
    }
    
}