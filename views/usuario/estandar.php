<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculadora Cientifica</title>
    <!-- Boostrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Imagenes -->
    <link rel="shortcut icon" href="img/favicon.png">
    <!-- Iconos -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="build/css/calCientifica.css">
    <!-- JS -->
    <script src="js/main.js"></script>
</head>
<body>
    <!-- Navegacion Principal -->
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/usuario">AppDark</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/usuario">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/cientifica">Calculadora Cientifica</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/basica">Calculadora Basica</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/porcentaje">Calculadora Porcentaje</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/binario">Calculadora Binario/Decimal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/logout">Cerrar Session</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Comienzo de Calculadora -->
    <div class="container-fluid-calculadora">
        <div class="row cabesal">
            <div class="col-md-9">
                <h1>Cientifica</h1>
            </div>
            <div class="col-md-1" id="historial">
                <h4 id="his">Historial</h4>
            </div>
            <div class="col-md-1" id="memoria">
                <h4 id="mem">Memoria</h4>
            </div>
            <div class="col-md-1" id="blanco">
        
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <div class="resultado2">
                    <p id="valor2"></p>
                </div>
                <div class="resultado1">
                    <h1 id="valor">0</h1> 
                    <!-- Este sera el valor q se muestra en el display al comienzo -->
                </div>
                <div class="row">
                    <div class="col-1 funct-1" id="deg">
                        <span>DEG</span>
                    </div>
                    <div class="col-1 funct-1" id="hyp">
                        <span>HYP</span>
                    </div>
                    <div class="col-1 funct-1" id="f-e">
                        <span>F-E</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 funct-2" id="mc">
                        <span>MC</span>
                    </div>
                    <div class="col-1 funct-2" id="mr">
                        <span>MR</span>
                    </div>
                    <div class="col-1 funct-2" id="m+">
                        <span>M+</span>
                    </div>
                    <div class="col-1 funct-2" id="m-">
                        <span>M-</span>
                    </div>
                    <div class="col-1 funct-2" id="ms">
                        <span>MS</span>
                    </div>
                </div>

                <div class="row linea-funcion-1">
                    <div class="col" id="xquad">
                        <span>x<sup>2</sup></span>
                    </div>
                    <div class="col" id="elevado">
                        <span>x<sup>y</sup></span>
                    </div>
                    <div class="col" id="sen">
                        <span>sen</span>
                    </div>
                    <div class="col" id="cos">
                        <span>cos</span>
                    </div>
                    <div class="col" id="tan">
                        <span>tan</span>
                    </div>
                    <div class="col" id="ce">
                        <span>CE</span>
                    </div>
                    <div class="col" id="c">
                        <span>c</span>
                    </div>
                    <div class="col" id="backspace">
                        <span><img src="build/img/apagar.png"></span>
                    </div>
                    <div class="col" id="dividido">
                        <span>&divide;</span>
                    </div>
                </div>

                <div class="row linea-funcion-2">
                    <div class="col" id="xcubo">
                        <span>x<sup>3</sup></span>
                    </div>
                    <div class="col" id="yroot">
                        <span><sup>y</sup>&radic;x</span>
                    </div>
                    <div class="col" id="sen1">
                        <span>sen<sup>-1</sup></span>
                    </div>
                    <div class="col" id="cos1">
                        <span>cos<sup>-1</sup></</span>
                    </div>
                    <div class="col" id="tan1">
                        <span>tan<sup>-1</sup></</span>
                    </div>
                    <div class="col numeros" id="7">
                        <span>7</span>
                    </div>
                    <div class="col numeros" id="8">
                        <span>8</span>
                    </div>
                    <div class="col numeros" id="9">
                        <span>9</span>
                    </div>
                    <div class="col" id="multiplicacion">
                        <span>&times;</span>
                    </div>
                </div>

                <div class="row linea-funcion-3">
                    <div class="col" id="raiz">
                        <span>&radic;</span>
                    </div>
                    <div class="col" id="dezax">
                        <span>10<sup>x</sup></span>
                    </div>
                    <div class="col" id="log">
                        <span>log</span>
                    </div>
                    <div class="col" id="exp">
                        <span>Exp</span>
                    </div>
                    <div class="col" id="mod">
                        <span>Mod</span>
                    </div>
                    <div class="col numeros" id="4">
                        <span>4</span>
                    </div>
                    <div class="col numeros" id="5">
                        <span>5</span>
                    </div>
                    <div class="col numeros" id="6">
                        <span>6</span>
                    </div>
                    <div class="col" id="sustraccion">
                        <span>-</span>
                    </div>
                </div>

                <div class="row linea-funcion-4">
                    <div class="col" id="unosobre">
                        <span><sup>1</sup>/x</span>
                    </div>
                    <div class="col" id="eax">
                        <span>e<sup>x</sup></span>
                    </div>
                    <div class="col" id="ln">
                        <span>ln</span>
                    </div>
                    <div class="col" id="dms">
                        <span>dms</span>
                    </div>
                    <div class="col" id="deg">
                        <span>deg</span>
                    </div>
                    <div class="col numeros" id="1">
                        <span>1</span>
                    </div>
                    <div class="col numeros" id="2">
                        <span>2</span>
                    </div>
                    <div class="col numeros" id="3">
                        <span>3</span>
                    </div>
                    <div class="col" id="adicion">
                        <span>+</span>
                    </div>
                </div>

                <div class="row linea-funcion-5">
                    <div class="col" id="arrow-up">
                        <span><i class="fas fa-arrow-up"></i></span>
                    </div>
                    <div class="col" id="pi">
                        <span>&pi;</span>
                    </div>
                    <div class="col" id="factorial">
                        <span>n!</span>
                    </div>
                    <div class="col" id="masmenos">
                        <span>&plusmn;</span>
                    </div>
                    <div class="col" id="abreparentesis">
                        <span>(</span>
                    </div>
                    <div class="col" id="cierraparentesis">
                        <span>)</span>
                    </div>
                    <div class="col numeros" id="0">
                        <span>0</span>
                    </div>
                    <div class="col" id="coma">
                        <span>.</span>
                    </div>
                    <div class="col" id="igual">
                        <span>=</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>