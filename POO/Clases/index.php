<?php 
require_once './persona.php';
require_once './alumno.php';
class Principal
{
    public static function main()
    {
        $noelia=new Persona('123456789Q');
        $juan=new Persona('123456789A','Juan',24);
        $noelia->setNombre('Noelia');
        echo '<h1>'.$noelia->getNombre().'</h1>';
        echo '<h1>'.$juan->getNombre().'</h1>';
        echo '<h1>'.$juan->getEdad().'</h1>';

        //Acceso a una propiedad estatica
        echo '</br>Todas las personas tienen '.Persona::$numojos.' ojos';
        echo '</br> Numero de orejas = '.$juan->getNumorejas();

        //Alumno
        $silverio=new Alumno('123456789O','Silverio','45','10');

        echo '<h1>'.$silverio->getNombre().'</h1>';


        //Matriz alumnos indexada
        $alumnos=[new Alumno('1234A','Pepe',14,5), new Alumno('1222A','Alonso',13,2)];
        echo '</br> <h1>LISTADO DE ALUMNOS</H1>';

        foreach ( $alumnos as $alumno) 
        {
            echo 'Dni= '.$alumno->getDni().' Nombre ='.$alumno->getNombre().'</br> ';    
        }

        //Matriz de alumnos asociativa
        $al1=new Alumno('13334A','Sete',11,3);
        $al2=new Alumno('1654A','Fons',16,7);
        $alumnosasoc=[$al1->getDni()=>$al1, '1654A'=>$al2];
        foreach ($alumnosasoc as $dni=>$alumno) 
        {
            echo 'Dni= '.$dni.' Nombre ='.$alumno->getNombre().'</br> ';    
        }
    }
}
Principal::main();