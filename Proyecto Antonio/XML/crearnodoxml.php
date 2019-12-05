<?php
    $doc=new DOMDocument();
    $doc->load("categorias_productos.xml");
    $categorias=$doc->getElementsByTagName("Categories");
    if(isset($_POST['enviar']))
    {
        $nuevo=$doc->createElement("products");
        $propiedad=$doc->createAttribute("ProductName");
        $propiedad->value=$_POST['nombreproducto'];
        $nuevo->appendChild($propiedad);
        foreach ($categorias as $categoria)
        {
            if($categoria->getAttribute("CategoryName")==$_POST['categoria'])
            {
                $categoria->appendChild($nuevo);
                break;
            }
        }
        $doc->save("categorias_productos.xml");
    }
?>
<form action="" method="post">
Categorias:
<select name="categoria" id="">
    <?php
        foreach ($categorias as $categoria)
        {
            echo "<option value=".$categoria->getAttribute('CategoryName').">".
            $categoria->getAttribute('CategoryName')."</option>";
        }
    ?>
</select>
<br>
Nombre:
<input type="text" name="nombreproducto" id="">
<br>
<input type="submit" value="Enviar" name="enviar">
</form>