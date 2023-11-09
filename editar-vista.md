---
description: Vista al dar clic en editar
---

# Editar Vista

## VistaEditar.php

```php
<body>
    <h1>Edite los datos</h1>
    <?php
    //Obtiene el ID al que se le dio clic para editar
        $var =  ($_GET['variable']);
        //Abre el archivo donde estan los datos
        $mostrar=fopen('datos.txt','r');
        //Ciclo 'while' para leer linea por linea
	while(!feof($mostrar)){
	//Obtiene los datos del archivo
		$id=fgets($mostrar);
		$nombre=fgets($mostrar);
		$apellidos=fgets($mostrar);
		$edad=fgets($mostrar);
		$puesto=fgets($mostrar);
		//Verifica que el ID a editar sea igual al obtenido del archivo 
		if($id==$var){
		//Si es igual crea un formulario
		//muestra los datos relacionados a ese ID
		//los habilita pa poderse editar
                        echo '<form action="/editar.php">';
                        echo '<label for="id">ID</label>';
                        echo '<input type="text" name="id" readonly value="'.$id.'"><br>';
                        echo '<label for="nombre">Nombre</label>';
                        echo '<input type="text" name="nombre" value="'.$nombre.'"><br>';
                        echo '<label for="apellidos">Apellido</label>';
                        echo '<input type="text" name="apellidos" value="'.$apellidos.'"><br>';
                        echo '<label for="edad">Edad</label>';
                        echo '<input type="text" name="edad" value="'.$edad.'"><br>';
                        echo '<label for="puesto">Puesto</label>';
                        echo '<input type="text" name="puesto" value="'.$puesto.'"><br>';
                        echo '<input type="submit" value="Editar">';
                        echo '</form>';
		}
	}
    ?>
</body>
```

## Damos clic en editar

<figure><img src=".gitbook/assets/image (6).png" alt=""><figcaption></figcaption></figure>

## Vista para editar

<figure><img src=".gitbook/assets/image (7).png" alt=""><figcaption></figcaption></figure>

## Modificamos los Datos

<figure><img src=".gitbook/assets/image (8).png" alt=""><figcaption></figcaption></figure>
