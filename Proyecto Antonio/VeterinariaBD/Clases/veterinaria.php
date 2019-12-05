<?php
class Veterinaria
{
    private $nombre;
    private $cif;

    //Propiedad que viene de la relación entre Veterinaria y Animal
    private $animales;

    //Constructor
    public function __construct(string $nombre,string $cif)
    {
        $this->nombre=$nombre;
        $this->cif=$cif;
        //Cargar animales desde la BD
        $this->CargarAnimales();
    }

    private function CargarAnimales()
    {
        $bd=new GBD("localhost","veterinaria","root","higuera2@");
        $todosAnimales=$bd->getAll("animal");
        foreach ($todosAnimales as $animal) {
            $this->animales[$animal->getNumeroChip()]=$animal;
        }
    }
    /**
     * Añade un nuevo animal a la colección 
     *
     * @param Animal $nuevoAnimal
     * @return void
     */
    public function addAnimal(Animal $nuevoAnimal)
    {
        $nuevoAnimal->setEstado(Estado_Enum::NUEVO);
        $this->animales[$nuevoAnimal->getNumeroChip()]=$nuevoAnimal;
    }

    /**
     * Borra un animal de la colección
     *
     * @param Animal $borradoAnimal
     * @return void
     */
    public function removeAnimal(Animal $borradoAnimal)
    {
        //unset($this->animales[$borradoAnimal->getNumeroChip()]);
        $borradoAnimal->setEstado(Estado_Enum::BORRADO);
    }

    /**
     * Modifica los datos de un animal si existe
     *
     * @param Animal $modificaAnimal
     * @return void
     */
    public function updateAnimal(Animal $modificaAnimal)
    {
        if(isset($this->animales[$modificaAnimal->getNumeroChip()]))
        {
            $modificaAnimal->setEstado(Estado_Enum::MODIFICADO);
            $this->animales[$modificaAnimal->getNumeroChip()]=$modificaAnimal;
        }
    }

    /**
     * Devuelve la colección de animales
     *
     * @return array
     */
    public function allAnimal()
    {
        return $this->animales;
    }

    /**
     * Devuelve un animal
     *
     * @param string $numeroChip
     * @return Animal
     */
    public function findAnimalById(string $numeroChip)
    {
        return $this->animales[$numeroChip];
    }

    public function GrabarAnimales()
    {
        $bd=new GBD("localhost","veterinaria","root","higuera2@");
        foreach ($this->animales as $numeroChip => $animal) {
            switch ($animal->getEstado()) {
                case Estado_Enum::MODIFICADO:
                    $bd->update("animal",get_object_vars($animal),[$animal->getNumeroChip()]);
                    $animal->setEstado(Estado_Enum::SIN_CAMBIOS);
                    break;
                case Estado_Enum::BORRADO:
                    $bd->delete("animal",[$animal->getNumeroChip()]);
                    unset($this->animales[$animal->numeroChip]);
                    break;
                case Estado_Enum::NUEVO:
                    $bd->add("animal",["NumeroChip"=>$animal->numeroChip,"nombre"=>$animal->nombre,
                    "raza"=>$animal->raza,"fechaNacimiento"=>$animal->fechaNacimiento->format("Y-m-d")]);
                    $animal->setEstado(Estado_Enum::SIN_CAMBIOS);
                    break;
            }
        }
    }
}