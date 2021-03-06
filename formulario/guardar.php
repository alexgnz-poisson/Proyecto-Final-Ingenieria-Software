<?php

    $usuario = "root"; //en este caso root por ser localhost
    $password = "";  //contraseña por si tiene algun servicio de hosting 
    $servidor = "localhost"; //localhost por lo del xampp
    $basededatos ="formulario"; //nombre de la base de datos


$conexion = mysqli_connect  ($servidor,$usuario,"") or die ("Error con el servidor de la Base de datos"); 


//por si hay error de conexion un mensaje "Error al conectarse a la Base de datos".
$db = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la Base de datos");


        //recuperar las variables
    $nombre=$_POST['nombre']; 
    $correo=$_POST['correo']; 
    $mensaje=$_POST['mensaje']; 

   
    $sql="INSERT INTO datos VALUES ('$nombre','$correo','$mensaje')"; //manda a traer los valores de '$nombre','$correo','$mensaje'
    
    
    $ejecutar=mysqli_query($conexion, $sql);


    //verificacion de la ejecucioon
    if(!$ejecutar){
        echo"huvo algun error"; //si algo sale mal manda este mensaje
    }else{
        echo"Datos guardado correctamente <br><a href='nosotros.html'>volver</a>"; //si todo sale bien manda este mensaje
    }    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogDeCafe</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header class="header">

        <div class="contenedor">
            <div class="barra">
                <a class="logo" href="index.html">
                  <h1 class="logo__nombre no-margin centrar-texto">Dulce <span class="logo__bold">Paladar</span></h1>  
                </a>

                <nav class="navegacion">
                    <a href="nosotros.html" class="navegacion__enlace">Nosotros</a>
                    <a href="cursos.html" class="navegacion__enlace">Cursos</a>
                    <a href="contacto.html" class="navegacion__enlace">Contacto</a>
                </nav>
            </div>
        </div>

        <div class="header__texto">
            <h2 class="no-margin"> Blog de Café con Consejos y Cursos</h2>
            <p>Aprende de los expertos con las mejores recetas y conceptos</p>
        </div>
    </header>

    <main class="contenedor">
        <h3 class="centrar-texto">Sobre Nosotros</h3>

        <div class="sobre-nosotros">
            <div class="sobre-nosotros__imagen">
                <img src="img/nosotros.jpg" alt="Imagen nosotros">
            </div>
            <div class="sobre-nosotros__texto">
                <div class="info">
                    <p>A raiz de la pandamia, nosotros como estudiantes decidimos emprender un pequeño proyecto y un 
                    gran sueño que era el de empezar un negocio de cafe, nosotros al no saber mucho de ventas,decidimos
                    empezar creando nuestra pagina para nuestro establecimiento, al ser estudiantes que disfrutamos mucho
                    del cafe en nuestros ratos libres de la unviersidad , tuvimos la gran idea de compartir nuestro conocimiento
                    del cafe.
                    </p>

                    <p>Sabemos que la pandemia nos afecto, nos hizo a algunos mas fuertes , a otros les afecto mucho ,
                    nosotros al ver esto y recordar como eran nuestras mañanas en la Fes Acatlan , y al hablar con otros
                    compañeros nos dimos cuenta el gusto que se tiene por el cafe y como incluso los profesores son grandes
                    consumidores de este, compañeros programadores cuentan que rinden mejor con una buena taza de cafe entonces
                    espero que este blog le sirva a todos los amantes del cafe.

                    </p>
                </div>
            </div>
        </div>
  
    </main>

    <footer class="footer">
        <div class="contenedor">
                <div class="barra">
                    <a class="logo" href="index.html">
                      <h1 class="logo__nombre no-margin centrar-texto">Dulce <span class="logo__bold">Paladar</span></h1>  
                    </a>
    
                    <nav class="navegacion">
                        <a href="nosotros.html" class="navegacion__enlace">Nosotros</a>
                        <a href="cursos.html" class="navegacion__enlace">Cursos</a>
                        <a href="contacto.html" class="navegacion__enlace">Contacto</a>
                    </nav>
                </div>       
        </div>
    </footer>
    
</body>
</html>
