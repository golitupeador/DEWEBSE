<?php
require_once './Cargadores/cargarhelper.php';
require_once './Cargadores/cargarclases.php';
$bd=new GBD("127.0.0.1","veterinaria","root","higuera2@");
$bd->generaClases();
$animales=$bd->getAll("animal");
?>
<table>
<tr>
<td>Chip</td>
<td>Fotografia</td>
<td>Nombre</td>
</tr>
<?php
foreach ($animales as $animal) {
    echo "<tr>";
    echo "<td>".$animal->numeroChip."</td>";
    $imagen=$animal->Foto;
    echo "<td><img src='data:image/png;base64,$imagen' title='perro'>"."</td>";
    echo "<td>".$animal->nombre."</td>";
}
?>
</table>