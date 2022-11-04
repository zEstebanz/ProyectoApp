<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porcentaje</title>
    <!-- Boostrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>


<style>
    * {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
    }

    .body {
        background-color: #f7f7f7;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        background-color: black;
    }

    h1 {
        padding-bottom: 20px;
        font-weight: 500;
        margin-bottom: 12px;
        font-size: 23px;
        color: white;
    }

    h2 {
        font-size: 15px;
    }

    .caja {
        width: 240px;
        background-color: #aaa;
        margin: 6px 0;
        padding: 14px;
        text-align: center;
        box-shadow: 2px 2px 8px 2px #aaa;
        margin-left: 20px;
    }

    .app{
        margin-bottom: 15rem;
    }
    
    input[type=number] {
        width: 54px;
        font-size: 18px;
        padding: 2px;
        margin: 0px 8px 8px 8px;
    }

    .boton {
        text-transform: uppercase;
        font-weight: 500;
        font-size: 15px;
        margin: 12px 0;
        padding: 8px;
        cursor: pointer;
        letter-spacing: 1px;
    }

    input[type=text] {
        font-size: 22px;
        padding: 8px 0;
        font-weight: 900;
        text-align: center;
        background-color: #f7f7f7;
        border: 2px solid #ccc;
        border-radius: 6px;
        width: 200px;
    }

    /* Tamaño de Media Queries
        telefono: 480px;
        tablet: 768px;
        desktop: 1024px; */

    @media (min-width: 480px) {
        .caja {
            width: 480px;
            margin: 12px 0;
            padding: 24px;
            text-align: center;
            box-shadow: 2px 2px 8px 2px #aaa;
            height: 15rem;
        }

        h1 {
            font-size: 35px;
            text-align: center;
            padding-top: 50px;
        }

        h2 {
            font-size: 20px;
        }

        input[type=number] {
            width: 84px;
            font-size: 18px;
            padding: 8px;
            margin: 0px 8px 8px 8px;
        }

    }

    @media (min-width: 768px) {
        .caja {
            width: 480px;
            margin: 12px 0;
            padding: 24px;
            text-align: center;
            box-shadow: 2px 2px 8px 2px #aaa;
        }

        h1 {
            font-size: 40px;
            text-align: center;
        }

        input[type=number] {
            width: 84px;
            font-size: 18px;
            padding: 8px;
            margin: 0px 8px 8px 8px;
        }
    }
</style>

<body class="body">
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

    <h1>Calculadora Porcentaje</h1>

    <div class="caja">

        <!-- Defines a field for entering a number-->
        <h2>Que porcentaje es<input type="number" id="percent" />% de
            <input type="number" id="num" />?
        </h2>

        <!-- onclick event is to call the function when
            user click on the button-->
        <button class="boton" onclick="percentage_1()">Calcular</button><br>

        <!-- Read-only input field to display 
            output and cannot be modified -->
        <input type="text" id="value1" readonly />
    </div>

    <div class="caja">
        <!-- Defines a field for entering a number -->
        <h2><input type="number" id="num1" />
            es qué porcentaje de
            <input type="number" id="num2" />?
        </h2>

        <!-- onclick event is to call the function 
            when user click on the button -->
        <button class="boton" onclick="percentage_2()">Calcular</button></br>

        <!-- Read-only input field to display 
            output and cannot be modified -->
        <input type="text" id="value2" readonly />
    </div>

    <script type="text/javascript" src="script.js"></script>
</body>

<script>
    function percentage_1() {

        var percent = document.getElementById("percent").value;

        var num = document.getElementById("num").value;
        document.getElementById("value1")
            .value = (num / 100) * percent;
    }

    function percentage_2() {

        var num1 = document.getElementById("num1").value;

        var num2 = document.getElementById("num2").value;
        document.getElementById("value2")
            .value = (num1 * 100) / num2 + "%";
    }
</script>

</html>