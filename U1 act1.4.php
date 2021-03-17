<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="post" action="complement U1 act1.4.php">

    <p>
    <label for='usuario'>Usuario</label>
    <input type='text' name='usuario' />
    </p>

    <p>
    <label for='email'>Ingresa tu email</label>
    <input type='email' name='email' />
    </p>

    <p>
    <label for='pin'>Contraseña</label>
    <input type='password' id='pin' name='pin' />
    </br></br>
    </p>

    <p>
    <input type="radio" name="rememberme"> Recordar usuario
    </p>

    <p>
    <label for='etiqueta'>Etiqueta tu archivo</label>
    <input type='text' name='etiqueta' />
    </p>

    <p>
    <label for='pin'>Selecciona el tipo de archivo</label>
    <input list="browsers">
    <datalist id="browsers">
        <option value="Imagen">
        <option value="Audio">
        <option value="Video">
        <option value="Gif">
        <option value="ZIP">
    </datalist>
    </br></br>
    </p>

    <p>
    <label  for="archivo"> Selecciona un archivo</label>
    <input type="file" name="archivo">
    </br></br>
    </p>


    <input type="submit" />
</br></br>
</form>

</body>
</html>
