---
description: Código para editar los datos respecto a un ID
---

# Editar

## editar.php

```php
<?php
//Obtiene los datos del formulario anterior
    $id=(int)"$_REQUEST[id]";
    $nombre="$_REQUEST[nombre]";
    $apellidos="$_REQUEST[apellidos]";
    $edad="$_REQUEST[edad]";
    $puesto="$_REQUEST[puesto]";

    //Abre el archivo donde se encuentran los datos a editar
    $editar=fopen('datos.txt','r+');
    //Crea un archivo auxiliar para guardar los datos actualizados
    $archivoaux = fopen('datosaux.txt','a+');

    //Verifica que ambos archivos se abran correctamente
    if($editar && $archivoaux){
        //Ciclo 'while' para leer linea por linea
        while(!feof($editar)){
            //Obtiene los datos del archivo
            $idaux=fgets($editar);
            $nombreaux=fgets($editar);
            $apellidosaux=fgets($editar);
            $edadaux=fgets($editar);
            $puestoaux=fgets($editar);

            //Compara el ID a editar con el obtenido del archivo
            if($idaux!=$id){
            //Si es diferente pasa los datos del archivo original al auxiliar
                fputs($archivoaux, $idaux);
                fputs($archivoaux, $nombreaux);
                fputs($archivoaux, $apellidosaux);
                fputs($archivoaux, $edadaux);
                fputs($archivoaux, $puestoaux);
            }else{
            //Si es igual agrega los datos del formulario al auxiliar
            //los que vienen del archivo los descarta
                fputs($archivoaux, $id."\n");
                fputs($archivoaux, $nombre."\n");
                fputs($archivoaux, $apellidos."\n");
                fputs($archivoaux, $edad."\n");
                fputs($archivoaux, $puesto."\n");
            }
        }
        //Cierra los archivos
        fclose($editar);
        fclose($archivoaux);
    
        //Mensaje de edicion exitosa
        echo "Archivo editado... ID: ".$id." modificado";
        //Elimina el archivo original
        unlink('datos.txt');
        //Renombra el archivo auxiliar con el nombre del original
        rename("datosaux.txt","datos.txt");
    }else{
    //En caso de no poder abrir los archivo manda un mensaje de error
        echo "Error al abrir los archivos";
    }
    
?>
```

## Vista al editar un archivo

<figure><img src=".gitbook/assets/image (9).png" alt=""><figcaption></figcaption></figure>

### Verificamos en nuestros datos

<figure><img src=".gitbook/assets/image (10).png" alt=""><figcaption></figcaption></figure>
