<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <form action="/guardar.php">
        <label for="id">ID</label>
        <input type="text" name="id"><br>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre"><br>
        <label for="apellidos">Apellido</label>
        <input type="text" name="apellidos"><br>
        <label for="edad">Edad</label>
        <input type="text" name="edad"><br>
        <label for="puesto">Puesto</label>
        <input type="text" name="puesto"><br>
        <input type="submit" value="guardar">
    </form>

    <div>
        <?php
            $mostrar=fopen('datos.txt','r');
            while(!feof($mostrar))
            {
                $id=fgets($mostrar);
                $nombre=fgets($mostrar);
                $apellidos=fgets($mostrar);
                $edad=fgets($mostrar);
                $puesto=fgets($mostrar);
                if($id!=""){
                echo "<a href=\"/VistaEliminar.php?variable=".$id."\">Id: ".$id."</a><br>";
                echo "Nombre: ".$nombre."<br>";
                echo "Apellidos: ".$apellidos."<br>";
                echo "Edad: ".$edad."<br>";
                echo "Puesto: ".$puesto."<br>";
                echo "<a href=\"/VistaEditar.php?variable=".$id."\">Editar</a><br><br>";
                }
            }
        ?>
    </div>
</body>

</html>