<?php
$sanimal=Sesion::leer("veterinaria");
$sanimal->GrabarAnimales();
header("location:?menu=mantenimiento");