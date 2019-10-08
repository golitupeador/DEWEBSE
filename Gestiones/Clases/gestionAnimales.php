<?php
class gestionAnimales
{
    //array de datos
    private $animales=array(); //Esto no hace falta 
    public function __construct()
    {

    }

    /**
     * Crea un nuevo animal con array de vacunas vacio
     * 
     */

    //Si le paso un parametro tiene que ser string si se lo ponemos, aunque se traga lo que sea en la funcion
    public function crearAnimal(string $numeroChip, string $nombre, string $raza, string $fechaNacimiento)
    {
        $this->animales[$numeroChip]=[$nombre,$raza,$fechaNacimiento, "vacunas"=>[]];
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

    /**
     * Devuelve la coleccion de animales
     *
     * @return void
     */
    public function todosAnimales()
    {
        return $this->animales;
    }

    public function todasVacunasAnimal(string $numeroChip)
    {
        return $this->animales[$numeroChip]["vacunas"];
    }
}