<?php
class ImagenesTools
{
    public static function Redimensionar(string $imagefile, int $porcentaje=null, int $ancho=null,
    int $alto=null, string $nuevonombre=null)
    {

        $extensiones_permitidas=["jpg","jpeg","png","bmp","gif"];
        if(!file_exists($imagefile))
        {
            throw new InvalidArgumentException("No existe el fichero de imagen");
        }
        $extension=pathinfo($imagefile,PATHINFO_EXTENSION);
        if(!in_array($extension,$extensiones_permitidas))
        {
            throw new InvalidArgumentException("Fichero de imagen no válida.");
        }
        if(is_null($porcentaje) && is_null($ancho))
        {
            throw new InvalidArgumentException("Debes introducir al menos porcentaje o ancho nueva imagen.");
        }
        $imagen=null;
        switch ($extension) {
            case 'jpg':
            case 'jpeg':
                $imagen=imagecreatefromjpeg($imagefile);
                //Método que cambia la escala
                $imagen=self::Escala($imagen,$porcentaje,$ancho,$alto);
                imagejpeg($imagen,is_null($nuevonombre)?$imagefile:$nuevonombre);
                break;
            case 'bmp':
                $imagen=imagecreatefrombmp($imagefile);
                //Método que cambia la escala
                $imagen=self::Escala($imagen,$porcentaje,$ancho,$alto);
                imagebmp($imagen,is_null($nuevonombre)?$imagefile:$nuevonombre);
                break;
            case 'png':
                $imagen=imagecreatefrompng($imagefile);
                //Método que cambia la escala
                $imagen=self::Escala($imagen,$porcentaje,$ancho,$alto);
                imagepng($imagen,is_null($nuevonombre)?$imagefile:$nuevonombre);
                break;
            case 'gif':
                $imagen=imagecreatefromgif($imagefile);
                //Método que cambia la escala
                $imagen=self::Escala($imagen,$porcentaje,$ancho,$alto);
                imagegif($imagen,is_null($nuevonombre)?$imagefile:$nuevonombre);
                break;
        }
    }

    private static function Escala($imagen,$porcentaje,$ancho,$alto)
    {
        if(!is_null($porcentaje))
        {
            $ancho=imagesx($imagen);
            $alto=imagesy($imagen);
        }
        $imagen=imagescale($imagen,$ancho,is_null($alto)?-1:$alto);
        return $imagen;
    }
}