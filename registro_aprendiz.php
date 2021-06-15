<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="css/boostrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="Estilos.css">
    <script src="js/bootstrap.js"></script>
    <title>Registro de aprendices</title>
</head>
<body>
    <div id="div1" class="container">
    <br>
        <div id="div2">
            <?php session_start(); if(! empty($_SESSION['Tipo_usuario'])) { ?> 
            <img src="IMAGENES/banner3.png" alt=""> <?php } ?>
                <div id="div3">
                    <?php 
                    if ($_SESSION['Tipo_usuario']=='ADMINISTRADOR')
                    { 
                    ?>
                    <form id="formulario" role="form" method="post" action="guardado_aprendiz.php">
                        <div class="col-md-12">
                            <strong class="lgris">Ingrese los datos del aprendiz</strong>
                            <br>
                            <label class="lgris">Indentificacion: </label>
                            <div class="form-row">
                            
                                <div class="form-group col-xs-2"> 
                                <select class="form-control" name="tipoid">
                                    <option value="C.C" selected> CC </option>
                                    <option value="T.I"> T.I</option>
                                    <option value="R.C"><R.C/option>
                                    <option value="PEP">PEP</option>
                                </select>
                                </div>
                            </div>
                                <div class="from-group col-md-6">
                                    <input class="form-control input-lg" type="number" name="numid" min="9999" max="9999999999" value="" placeholder="IDENTIFICACION" required/>
                                </div>

                                <label class="lgris">Nombres: </label>
                                <input class="form-control" style="text-transform:uppercase;" type="text" name="nombres" value="" placeholder="Nombres" required/>

                                <label class="lgris">Apellidos: </label>
                                <input class="form-control" style="text-transform:uppercase;" type="text" name="apellidos" value="" placeholder="Apellidos" required/>

                                <label class="lgris">Dirección: </label>
                                <input class="form-control" style="text-transform:uppercase;" type="text" name="direccion" value="" placeholder="Dirección" required/>

                                <label class="lgris">Telefono: </label>
                                <input class="form-control" type="number" name="telefono" min="9999" max="99999999999" value="" placeholder="Telefono" required/>

                                <label class="lgris">Ficha: </label>
                                <input class="form-control" type="number" name="ficha" min="9999" max="99999999999" value="" placeholder="FICHA" required/>
                                <br>

                                <input class="btn btn-primary" type="submit" value="Guardar">
                        </div>
                    
                    </form>
                <?php
                    }
                    else
                    {
                        echo "No tiene permisos para realizar esta accion";
                    }
                ?>
                <br>
                </div>
        </div>
    </div>
    
</body>
</html>