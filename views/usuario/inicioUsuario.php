<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700;900&display=swap" rel="stylesheet">
    <link async href="https://fonts.googleapis.com/css?family=Warnes" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css" />
    <!-- Materialize -->
    <link rel="stylesheet" href="build/css/materialize.css">
    <!-- CSS Estilos -->
    <link rel="stylesheet" href="build/css/appUsuario.css">
</head>

<body>
    <?php
    include_once __DIR__ . "/../templates/gotop.php";
    ?>
    <!-- Navegacion -->
    <nav class="navegacion">
        <div class="nav-wrapper navegacion-list">
            <a href="/usuario" class="brand-logo">Darkalculator</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="#section">Inicio</a></li>
                <li><a href="#ide">Ide</a></li>
                <li><a href="/logout">Cerrar Session</a></li>
            </ul>
        </div>
    </nav>

    <section id="section" class="seccion-principal">
        <div class="container">
            <div class="row">
                <div class="col s12"">
                <div class=" button">Herramientas</div>

                <div class="carousel center-align">

                    <!-- Empieza un Elemento del carrusel -->
                    <div class="carousel-item">
                        <a href="/cientifica" class="subtitulo">
                            <h2>Cientifica</h2>
                        </a>
                        <div class="linea-division"></div>
                        <!-- <p class=""></p> -->
                        <a href="/cientifica">
                            <img src="build/img/2.jpg" alt=""></a>
                    </div>
                    <!-- Termina un Elemento del carrusel -->

                    <!-- Empieza un Elemento del carrusel -->
                    <!-- <div class="carousel-item">
                        <a href="/estandar" class="subtitulo">
                            <h2>Estandar</h2>
                        </a>
                        <div class="linea-division"></div>
                         <p class=""></p> 
                        <a href="/estandar">
                            <img src="build/img/3.jpg" alt="">
                        </a>
                    </div> 
                    Termina un Elemento del carrusel -->

                    <!-- Empieza un Elemento del carrusel -->
                    <div class="carousel-item">
                        <a href="/porcentaje" class="subtitulo">
                            <h2>Porcentaje</h2>
                        </a>
                        <div class="linea-division"></div>
                        <!-- <p class=""></p> -->
                        <img src="build/img/4.jpg" alt="">
                        <a href="/porcentaje"></a>
                    </div>
                    <!-- Termina un Elemento del carrusel -->

                    <!-- Empieza un Elemento del carrusel -->
                    <div class="carousel-item">
                        <a href="/binario" class="subtitulo">
                            <h2>Binario</h2>
                        </a>
                        <div class="linea-division"></div>
                        <a href="/binario"><img src="build/img/binario.gif" alt=""></a>
                    </div>
                    <!-- Termina un Elemento del carrusel -->

                    <!-- Empieza un Elemento del carrusel -->
                    <div class="carousel-item">
                        <a href="/basica" class="subtitulo">
                            <h2>Basic</h2>
                        </a>
                        <div class="linea-division"></div>
                        <!-- <p class=""></p> -->
                        <a href="/basica">
                            <img src="build/img/3.jpg" alt=""></a>
                    </div>
                    <!-- Termina un Elemento del carrusel -->
                </div>
            </div>
        </div>
        </div>

    </section>

    <hr>
    <!-- IDE -->

    <section id="ide" class="projects-section">

        <h1 class="button">IDE Online</h1>

        <div class="proyects-grid">

            <!--Comienzo de una herramienta -->
            <a href="https://www.w3schools.com/js/tryit.asp?filename=tryjs_myfirst" target="_blank" class="project project-tile">
                <img class="project-image" src="build/img/3.png" alt="JavaScript" />

                <!-- <p class="project-title">
                    <span class="code">&lt;</span>
                    JavaScript
                    <span class="code">&#47;&gt;</span>
                </p> -->
            </a>
            <!--Fin de una herramienta -->

            <!--Comienzo de una herramienta -->
            <a href="https://www.w3schools.com/css/tryit.asp?filename=trycss_default" target="_blank" class="project project-tile">
                <img class="project-image" src="build/img/6.png" alt="SQL" />
            </a>
            <!--Fin de una herramienta -->

            <!--Comienzo de una herramienta -->
            <a href="https://www.w3schools.com/html/tryit.asp?filename=tryhtml_default_default" target="_blank" class="project project-tile">
                <img class="project-image" src="build/img/5.png" alt="HTML" />
            </a>
            <!--Fin de una herramienta -->

            <!--Comienzo de una herramienta -->
            <a href="https://www.w3schools.com/python/trypython.asp?filename=demo_indentation" target="_blank" class="project project-tile">
                <img class="project-image" src="build/img/2.png" alt="python" />
            </a>
            <!--Fin de una herramienta -->

            <!--Comienzo de una herramienta -->
            <a href="https://www.w3schools.com/sql/trysql.asp?filename=trysql_select_where" target="_blank" class="project project-tile">
                <img class="project-image" src="build/img/4.png" alt="sql" />
            </a>
            <!--Fin de una herramienta -->

            <!--Comienzo de una herramienta -->
            <a href="https://www.w3schools.com/java/tryjava.asp?filename=demo_helloworld" target="_blank" class="project project-tile">
                <img class="project-image" src="build/img/1.png" alt="java" />
            </a>

            <!--Comienzo de una herramienta -->
            <a href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_intro" target="_blank" class="project project-tile">
                <img class="project-image" src="build/img/php.png" alt="php" />
            </a>
            <!--Fin de una herramienta -->

            <!--Comienzo de una herramienta -->
            <a href="https://www.w3schools.com/kotlin/trykotlin.php?filename=demo_helloworld" target="_blank" class="project project-tile">
                <img class="project-image" src="build/img/kotlin.png" alt="kotlin" />
            </a>
            <!--Fin de una herramienta -->

            <!--Comienzo de una herramienta -->
            <a href="https://www.w3schools.com/c/tryc.php?filename=demo_helloworld" target="_blank" class="project project-tile">
                <img class="project-image" src="build/img/c.png" alt="c" />
            </a>
            <!--Fin de una herramienta -->

            <!--Comienzo de una herramienta -->
            <a href="https://www.w3schools.com/r/tryr.asp?filename=demo_default" target="_blank" class="project project-tile">
                <img class="project-image" src="build/img/r.png" alt="r" />
            </a>
            <!--Fin de una herramienta -->

            <!--Comienzo de una herramienta -->
            <a href="https://www.w3schools.com/cs/trycs.php?filename=demo_helloworld" target="_blank" class="project project-tile">
                <img class="project-image" src="build/img/cshar.png" alt="csharp" />
            </a>
            <!--Fin de una herramienta -->

            <!--Comienzo de una herramienta -->
            <a href="https://www.w3schools.com/cpp/trycpp.asp?filename=demo_helloworld" target="_blank" class="project project-tile">
                <img class="project-image" src="build/img/cplus.png" alt="cplus" />
            </a>
            <!--Fin de una herramienta -->
        </div>
    </section>

    <!-- Footer -->
    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">DarkApp</h5>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Herramientas Utilizadas en el Proyecto</h5>
                    <ul>
                        <!-- <li><a class="grey-text text-lighten-3" href="#!">Boostrap 5</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Materializes</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">HTML & CSS</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">SQL</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">PHP</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">GULP</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">SASS</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2022 Esteban Oller
                <a class="grey-text text-lighten-4 right" href="/logout">Cerrar Session</a>
            </div>
        </div>
    </footer>


    <!-- Materialize.js Funciona Online, para hacer oFfline se hace como el de css -->
    <script src="build/js/materialize.js"></script>
    <!-- JS Main -->
    <script src="build/js/carrusel.js"></script>



</body>

</html>