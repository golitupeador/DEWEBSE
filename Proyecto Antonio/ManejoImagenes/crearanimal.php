<?php
require_once './Cargadores/cargarhelper.php';
$bd=new GBD("127.0.0.1","veterinaria","root","higuera2@");
if(isset($_POST['enviar']))
{
    move_uploaded_file($_FILES['fotografia']['tmp_name'],"./imagenes/".
    $_FILES['fotografia']['name']);
    ImagenesTools::Redimensionar("./imagenes/".$_FILES['fotografia']['name'],null,
    150,null,"./imagenes/perrito.png");
    $imagen=file_get_contents("./imagenes/perrito.png");
    $imagen=base64_encode($imagen);

  $bd->add("animal",["numeroChip"=>$_POST['numerochip'],
  "nombre"=>$_POST['nombre'],"raza"=>$_POST['raza'],"Foto"=>$imagen]);
}
?>
<form action='' method='post' enctype='multipart/form-data'>
Nº Chip:
<input type="text" name="numerochip" id="">
Nombre:
<input type="text" name="nombre" id="">
Raza:
<input type="text" name="raza" id="">
Selecciona fichero:
<input type='file' name='fotografia'>
<br>
<input type='submit' name="enviar" value='Enviar'>
</form>