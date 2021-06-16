<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="Estilos.css">
    <title>Modificar aprendiz</title>
</head>
<body>
    <div id="divconsulta" class="container">
        <br>
        <div id="div2">
            <div id="div4">
                <form name="formulario" role="form" method="post">
                    <div class="col-md-12">
                        <strong class="lgris">Ingrese criterio de busqueda</strong>
                        <br><br>
                        <div class="form-row">
                            <div class="form-group col-md-5">
                            <input class="form-control" type="number" name="numid" min="9999" max="99999999999" autofocus value="" placeholder="IDENTIFICACION">
                            </div>
                            <div class="form-group col-md-3">
                            <input class="btn btn-primary" type="submit" value="Consultar">
                            </div>
                        </div>
                        <br>
                    </div>
                </form>
                <br>
            </div>
            <div id="divconsulta2">
            <?php
            if ($_SERVER['REQUEST_METHOD']==='POST')
                {
                include('funciones.php');
                session_start();
                $vnumid=$_POST['numid'];
                $miconexion=conectar_bd('root', 'sena_bd');
                $resultado=consulta($miconexion, "select * from aprendices where Apre_Numid='{$vnumid}'");
                if ($resultado->num_rows>0)
                    {
                    $fila = $resultado->fetch_object();
                    $_SESSION['ide1']=$fila->Apre_id;
                    ?>
                <form action="actualizar_aprendiz.php">
                        <div class="col-md-12">
                            <strong class="lgris">Datos del aprendiz</strong>
                                <label for="lgris">Id:</label>
                                <input class="form-control" type="text" name="ide" disabled="disabled" value="<?php echo $fila->Apre_id ?>"/>

                                <label for="lgris">Nombres:</label>
                                <input class="form-control" style="text-transform:uppercase;" type="text" name="nombres" required value="<?php echo $fila->Apre_Nombres ?>"/>

                                <label for="lgris">Apellidos:</label>
                                <input class="form-control" style="text-transform:uppercase;" type="text" name="apellidos"  value="<?php echo $fila->Apre_Apellidos ?>" required/>

                                <label for="lgris">Dirección:</label>
                                <input class="form-control" style="text-transform:uppercase;" type="text" name="direccion"  value="<?php echo $fila->Apre_Direccion ?>"required/>

                                <label for="lgris">Telefono:</label>
                                <input class="form-control" style="text-transform:uppercase;" type="text" name="telefono"  value="<?php echo $fila->Apre_Telefono ?>"required/>

                                <input class="btn btn-primary" type="submit" value="Actualizar">
                                <br>
                        </div>
                </form>
                <?php
                        }
                        else{
                            echo "No existen registros";
                        }
                        $miconexion->close();
                    }?>
            </div>
        </div> 
    </div>
    
</body>
</html>