<?php

if(empty($_GET['nombre'])){

    echo '<p> Tienes que rellenar el nombre </p><br/>';

}else
    echo '<p>'.$_GET['nombre'].'</p><br/>';


if (isset($_GET['informatica']) ){
    echo $_GET['informatica'];
}

if (isset($_GET['historia']) ){
    echo $_GET['historia'];
}
if (isset($_GET['tecnologia']) ){
    echo $_GET['tecnologia'];
}
if(isset($_GET['opiniones'])){
    echo $_GET['opiniones'];
}

?>
