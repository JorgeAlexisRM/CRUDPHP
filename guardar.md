---
description: Código PHP para guardar los datos
---

# Guardar

## guardar.php

```php
<?php
//Obtiene los datos del formulario anterior
    $id=(int)"$_REQUEST[id]";
    $nombre="$_REQUEST[nombre]";
    $apellidos="$_REQUEST[apellidos]";
    $edad="$_REQUEST[edad]";
    $puesto="$_REQUEST[puesto]";
    
    //Abre el archivo donde se guardaran los datos
    $mostrar=fopen('datos.txt','r');
    
    //Contador para saber si encontro un ID repetido
    $aux=0;
    
    //Ciclo 'while' para leer linea por linea con la funcion 'feof'
    while(!feof($mostrar)){
    //Obtiene los campos del archivo
        $idaux=fgets($mostrar);
        $nombreaux=fgets($mostrar);
        $apellidosaux=fgets($mostrar);
        $edadaux=fgets($mostrar);
        $puestoaux=fgets($mostrar);
        
        //Compara el ID del formulario con el obtenido del archivo
        if($id!=$idaux){
        //Si el ID es diferente
            echo "Guardando...";
            $aux=$aux+0;
        }else{
        //Si encuentra una similitud el contador aumenta
            echo "Ya existe un usuario con ese ID";
            $aux=$aux+1;
        }
    }
    
    //Si el contador nunca cambio guarda los nuevos datos en el archivo
    if($aux===0){  
    //Abre el archivo en modo lectura y escritura  
        $guardar=fopen('datos.txt','a+');
        //Agrega dato por dato al archivo
        fputs($guardar,$id."\n");
        fputs($guardar,$nombre."\n");
        fputs($guardar,$apellidos."\n");
        fputs($guardar,$edad."\n");
        fputs($guardar,$puesto."\n");
        //Una vez que termina cierra el archivo
        fclose($guardar);
        //Mensaje para confirmar el guardado
        echo "Datos guardados correctamente";
    }
    //Cierra el archivo de lectura
    fclose($mostrar);
?>
```
