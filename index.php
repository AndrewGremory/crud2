<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <link rel="stylesheet" href="Estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>
    <div id="div1" class="container">
        <br>
        <div id="div2">
            <img src="IMAGENES/banner.png" alt="banner">
            <div id="div3">
                <form id="formulario" method="post" action="menu.php">
                <br>
                <strong class="lgris">Ingrese su usuario y contraseña para iniciar sesion</strong>
                <br>
                <label class="lgris">Nombre de usuario: </label>
                <br>
                  <input style="text-transform: uppercase;" type="text" name="usuario" value="" required/>
                <br>
                <label class="lgris">contraseña: </label>
                <br>
                 <input type="password" name="clave" value="" required/>
                <br><br>
                <input type="submit" value="Iniciar sesión">
                <br><br>
                </form>
            </div>
        </div>
    </div>
    <br><br>
</body>
</html>