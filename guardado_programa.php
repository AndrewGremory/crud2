<?php 
include('funciones.php');

    $vnombre=$_POST['nombre'];
    $vtipo=$_POST['tipo'];


    $miconexion=conectar_bd('root', 'sena_bd');
    $resultado=consulta($miconexion, "insert into fichas (Progra_Nombre, Progra_tipo) values ('{$vnombre}', '{$vtipo}') ");
    if ($resultado)
        {
            echo "Guardado exitoso";
        }
    ?>