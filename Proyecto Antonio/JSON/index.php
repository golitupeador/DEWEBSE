<?php
class Alumno
{
    public $dni;
    public $nombre;
    public $edad;

    public function __construct(string $dni,string $nombre, int $edad)
    {
        $this->dni=$dni;
        $this->nombre=$nombre;
        $this->edad=$edad;
    }
}

//$alumnos=[new Alumno("1234","Juan",30),new Alumno("2345","Antonio",60)];
//var_dump($alumnos);
//file_put_contents("alumnos.json",json_encode($alumnos));
$alumnos=json_decode(file_get_contents("alumnos.json"));
var_dump($alumnos);
echo serialize($alumnos[0]);