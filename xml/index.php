<?php
$doc=new DOMDocument();
$xml=file_get_contents("www.aemet.es/xml/municipios/localidad_23086.xml");
$doc->loadXML($xml);
$nodos=$doc->getElementsByTagName("prob_precipitacion");

foreach($nodos as $nodo)
{
    $salida="";
    if($nodo->nodeValue>="80")
    {
        $salida="El dia: ".$node->parentNode->getAttribute("fecha")." hay probabilidad de precipitacion de un ".$node->nodoValue;
        if($nodo->hasAttribute("periodo"))
        {
            $salida.=" durante el periodo ".$nodo->getAttribute("periodo");
        }
        $salida.="<br>";
    }
    echo $salida;
}