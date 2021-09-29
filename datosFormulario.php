<?php
//echo print_r($_GET);




    if(empty($_GET['nombre'])){

        echo '<p> Tienes que rellenar el nombre </p><br/>';

    }else
        echo '<p>'.$_GET['nombre'].'</p><br/>';


    if(empty($_GET['apellidos'])){

        echo '<p> Tienes que rellenar el Apellido </p><br/>';

    }else
        echo '<p>'.$_GET['apellidos'].'</p><br/>';

    if(empty($_GET['telefono'])){

        echo '<p> Tienes que rellenar el telefono </p><br/>';

    }else
        echo '<p>'.$_GET['telefono'].'</p><br/>';




    if (isset($_GET['informatica']) ){
            echo $_GET['informatica'];
        }


    if (isset($_GET['historia']) ){
        echo $_GET['historia'];
        }
    if (isset($_GET['tecnologia']) ){
        echo $_GET['tecnologia'];
    }
?>