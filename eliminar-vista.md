---
description: Vista al dar clic en eliminar
---

# Eliminar Vista

## VistaEliminar.php

```php
<body>
//Mensaje de advertencia
    <h1>¿Deseas eliminar el dato?</h1>
    <?php
    //Se obtiene el dato al que se dio click
        $var =  ($_GET['variable']);
        //Abre el archivo a leer
        $mostrar=fopen('datos.txt','r');
        //Recorrido linea por linea en el archivo
	while(!feof($mostrar)){
	//Obtiene los datos del archivo
	        $id=fgets($mostrar);
		$nombre=fgets($mostrar);
		$apellidos=fgets($mostrar);
		$edad=fgets($mostrar);
		$puesto=fgets($mostrar);
		//Compara si el ID obtenido del archivo es igual al que dimos click
		if($id==$var){
		//Si es igual muestra los datos relacionados a ese ID
		//los agrega a una vista en un formulario
		//los datos no se pueden editar solo son para consulta
                       echo '<form action="/eliminar.php">';
                       echo '<label for="id">ID</label>';
                       echo '<input type="text" name="id" readonly value="'.$id.'"><br>';
                       echo '<label for="nombre">Nombre</label>';
                       echo '<input type="text" name="nombre" readonly value="'.$nombre.'"><br>';
                       echo '<label for="apellidos">Apellido</label>';
                       echo '<input type="text" name="apellidos" readonly value="'.$apellidos.'"><br>';
                       echo '<label for="edad">Edad</label>';
                       echo '<input type="text" name="edad" readonly value="'.$edad.'"><br>';
                       echo '<label for="puesto">Puesto</label>';
                       echo '<input type="text" name="puesto" readonly value="'.$puesto.'"><br>';
                       echo '<input type="submit" value="Eliminar">';
                       echo '</form>';
		}
	}
    ?>
</body>
```

## Damos clic en el ID a eliminar

<figure><img src=".gitbook/assets/image (3).png" alt=""><figcaption></figcaption></figure>

## Vista antes de eliminar

<figure><img src=".gitbook/assets/image (4).png" alt=""><figcaption></figcaption></figure>
