---
description: Código PHP para eliminar el dato seleccionado
---

# Eliminar

## eliminar.php

```php
<?php
//Obtiene los datos del formulario anterior
    $id=(int)"$_REQUEST[id]";
    $nombre="$_REQUEST[nombre]";
    $apellidos="$_REQUEST[apellidos]";
    $edad="$_REQUEST[edad]";
    $puesto="$_REQUEST[puesto]";

    //Abre el archivo original donde estan todos los datos en modo lectura
    $eliminar=fopen('datos.txt','r+');
    //Crea un archivo auxiliar donde guardaremos los datos que se van a conservar
    $archivoaux = fopen('datosaux.txt','a+');
    
    //Verfica que ambos archivos se hayan abierto correctamente
    if($eliminar && $archivoaux){
        //Ciclo para leer el archivo original
        while(!feof($eliminar)){
            //Obtiene los datos del archivo original
            $idaux=fgets($eliminar);
            $nombreaux=fgets($eliminar);
            $apellidosaux=fgets($eliminar);
            $edadaux=fgets($eliminar);
            $puestoaux=fgets($eliminar);
    
            //Compara el ID del formulario con el obtenido del archivo
            if($idaux!=$id){
                //Si es diferente pasa los datos del original al auxiliar
                fputs($archivoaux, $idaux);
                fputs($archivoaux, $nombreaux);
                fputs($archivoaux, $apellidosaux);
                fputs($archivoaux, $edadaux);
                fputs($archivoaux, $puestoaux);
            }else{
                //Si no, los ignora
                echo "Datos eliminados...";
            }
        }
        //Cierra ambos archivos
        fclose($eliminar);
        fclose($archivoaux);
        
        //Elimina el archivo donde esta el dato a eliminar
        unlink('datos.txt');
        //Renombra el archivo auxiliar como el archivo original
        rename("datosaux.txt","datos.txt");
    }else{
    //Mensaje de error si no se pudieron abrir los archivos
        echo "Erro al abrir los archivos";
    }
    
?>
```

## Vista al eliminar los datos

<figure><img src=".gitbook/assets/image (5).png" alt=""><figcaption></figcaption></figure>
