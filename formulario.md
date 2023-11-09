# Formulario

## form.php

<pre class="language-php"><code class="lang-php">&#x3C;body>
//Formulario
<strong>    &#x3C;form action="/guardar.php"> //El form subira los datos 
</strong>    //a guardar.php
        //Entrada manual para un ID
        &#x3C;label for="id">ID&#x3C;/label>
        &#x3C;input type="text" name="id">&#x3C;br>
        //Entrada para el campo Nombre
        &#x3C;label for="nombre">Nombre&#x3C;/label>
        &#x3C;input type="text" name="nombre">&#x3C;br>
        //Entrada para el campo Apellidos
        &#x3C;label for="apellidos">Apellido&#x3C;/label>
        &#x3C;input type="text" name="apellidos">&#x3C;br>
        //Entrada para el campo Edad
        &#x3C;label for="edad">Edad&#x3C;/label>
        &#x3C;input type="text" name="edad">&#x3C;br>
        //Entrada para el campo Puesto
        &#x3C;label for="puesto">Puesto&#x3C;/label>
        &#x3C;input type="text" name="puesto">&#x3C;br>
        //Boton para guardar los campos
        &#x3C;input type="submit" value="guardar">
    &#x3C;/form>
//Fin Formulario
    &#x3C;div>
        &#x3C;?php
        //Abre el archivo a leer 'r' lectura
            $mostrar=fopen('datos.txt','r');
            //Ciclo 'while' para leer el archivo linea por linea
            //con la funcion 'feof'
            while(!feof($mostrar))
            {
            //obtiene los datos del archivo
                $id=fgets($mostrar);
                $nombre=fgets($mostrar);
                $apellidos=fgets($mostrar);
                $edad=fgets($mostrar);
                $puesto=fgets($mostrar);
                
                if($id!=""){//Si el 'id' no es nulo muestra los datos
                    //Agrega el id y lo muestra como un enlace
                    //redirecionara a VistaEliminar y se llevara el valor de ID
                    echo "&#x3C;a href=\"/VistaEliminar.php?variable=".$id."\">Id: ".$id."&#x3C;/a>&#x3C;br>";
                    echo "Nombre: ".$nombre."&#x3C;br>";
                    echo "Apellidos: ".$apellidos."&#x3C;br>";
                    echo "Edad: ".$edad."&#x3C;br>";
                    echo "Puesto: ".$puesto."&#x3C;br>";
                    //Una vez que termina de mostrar los datos
                    //Crea un link a VistaEditar y se lleva el valor de ID
                    echo "&#x3C;a href=\"/VistaEditar.php?variable=".$id."\">Editar&#x3C;/a>&#x3C;br>&#x3C;br>";
                }
            }
        ?>
    &#x3C;/div>
&#x3C;/body>
</code></pre>
