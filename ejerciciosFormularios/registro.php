<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
<h2>Formulario:</h2>
<form action="mostrar.php" method="post">
    Nombre:
    <input type="text" name="nombre"><br>
    Email:
    <input type="email" name="email"><br>
    Estudios:
    <select name="estudios">
        <option value="sin-estudios">Sin estudios</option>
        <option value="educacion-obligatoria" selected="selected">Educación Obligatoria</option>
        <option value="formacion-profesional">Formación profesional</option>
        <option value="universidad">Universidad</option>
    </select> <br>
    Avatar:
    <input type="file" name="avatar"><br>

    <input type="submit" name="submit" value="Enviar">
</form>
</body>
</html>