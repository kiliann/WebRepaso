
<?php
function rellenaArray(){
    $opiniones= array("Muy buena","Buena","Regular","Mala","Muy mala");
    return $opiniones;
}
function mostraroption($array){
    foreach ($array as $indice => $valor)
        echo '<option value="'.$indice.'">'.$valor.'</option>';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Las Mujeres en la Historia de la Informática</title>
    <link type="text/css" rel="stylesheet" href="estilo.css"/>
</head>
<body>
<a href="index.html"><h1>Las Mujeres en la Historia de la Informática</h1></a>

<div id="formulario">
    <form action="datosFormulario2.php" method="get">
        <label>Nombre</label>
        <input name="nombre" type="text"></br>

        <label>Intereses</label></br>
        <input name="informatica" type="checkbox" value="Informatica"><label>Informática</label>
        <input name="historia" type="checkbox" value="Historia"><label>Historía</label>
        <input name="tecnologia" type="checkbox" value="Tecnologia"><label>Tecnología</label></br>
        <label>Que le parecio la historía </label></br>
        <select name="opiniones">
            <?php
           // foreach (rellenaArray() as $indice => $valor)
           //     echo '<option value="'.$indice.'">'.$valor.'</option>';
            mostraroption(rellenaArray());
            ?>
        </select></br>

        <button type="submit" value="Enviar">Enviar</button>

    </form>
</div>
</body>
</html>