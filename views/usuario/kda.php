<style>
    body {
        font-family: 'Lato', sans-serif;
    }

    /*===============================
utilidades para todos los bloques
=================================*/
    .chico {
        width: 100px;
    }

    .grande {
        width: 150px;
    }

    .center-block {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .text-center {
        text-align: center;
    }

    .row {
        padding: 20px 0;
    }

    /*==============================
clases generales de los bloques
================================*/
    .kda-container {
        max-width: 150px;
        /*box-shadow: 0px  0px 0px  3px rgba(255,250,250,1);*/
    }

    p {
        border-bottom: 2px solid #111;
        margin: 0;
        padding: 0;
        width: 80%;
        margin-left: 9%;
    }

    .box {
        font-size: 0.8em;
        text-align: center;
        font-weight: 600;
        line-height: 2em;
        background-color: #FFF;
        width: 100%;
        height: 100px;
        box-shadow: 0px 0px 0px 3px rgba(16, 16, 16, 1);
        -moz-box-shadow: 0px 0px 0px 3px rgba(16, 16, 16, 1);
        -webkit-box-shadow: 0px 0px 0px 3px rgba(16, 16, 16, 1);
    }

    input {
        max-width: 80px;
        height: 50px;
        text-align: center;
        margin-top: 10px;
        background-color: #FFF;
        color: #111;
        font-size: 2.5em;
        font-weight: 900;
        border: 0px;
    }

    input:focus {
        text-decoration: none;
    }

    /*========================
clases para hacer los triangulos con borde
========================*/
    .chico .box-bottom .triangle {
        width: 50%;
        padding-bottom: 30.27%;
        /* = width / 1.41 */
        position: relative;
        overflow: hidden;
        float: left;
    }

    .chico .box-bottom .triangle.left:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 500%;
        background-color: #FFF;
        transform-origin: 0% 0%;
        transform: rotate(-61deg);
        box-shadow: 0px 0px 0px 3px rgba(16, 16, 16, 1);
    }

    .chico .box-bottom .triangle.right:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 500%;
        background-color: #FFF;
        transform-origin: 100% 0%;
        transform: rotate(61deg);
        box-shadow: 0px 0px 0px 3px rgba(16, 16, 16, 1);
    }

    /*========================
Clases para el bloque del titulo
========================*/
    h1 {
        font-weight: 900;
        font-size: 2em;
    }

    .logo {
        width: 90px;
        height: auto;
    }

    /*========================
Clases para el estilo del cuerpo de la calculadora
========================*/
    #body {
        background-color: #ebeae6;
    }

    #header {
        position: relative;
        overflow: hidden;
    }

    #header:after {
        content: '';
        background: #ebeae6;
        width: 100%;
        height: 100px;
        position: relative;
        bottom: -100px;
        left: 0%;
        z-index: -1;
        transform-origin: 0% 0%;
        transform: rotate(-2deg);
    }

    /*========================
clases especificas para bloque #resultado
========================*/
    #resultado .box-top {
        font-size: 2em;
        font-style: italic;
        line-height: 1.5em;
        background-color: black;
        color: #FFF;
        box-shadow: none;
    }

    #resultado .box {
        font-size: 2em;
        font-style: italic;
        line-height: 1.5em;
        width: 100%;
        height: 160px;
        box-shadow: none;
        background-color: #111;
        color: #FFF;
    }

    #resultado .box p {
        border-bottom: 2px solid #FFF;
        margin: 0;
        padding: 0;
        width: 80%;
        margin-left: 9%;
    }

    #resultado .box input {
        max-width: 150px;
        height: 100px;
        text-align: center;
        background-color: black;
        color: #FFF;
        font-size: 1.5em;
    }

    #resultado.grande .box-bottom {
        width: 0px;
        height: 0px;
        border-left: 75px solid transparent;
        border-right: 75px solid transparent;
        border-top: 50px solid black;
    }

    /*========================
clases especificas para bloque #footer
========================*/
    #footer {
        background-color: #111;
        color: #FFF;
    }
</style>

<div class="container-fluid">
    <!-- Titulo de la página y logo de LLN -->
    <div class="row text-center" id="header">
        <div class="col-sm-12">
            <img src="https://lolstatic-a.akamaihd.net/esports-assets/production/league/liga-latinoamérica-norte-f994mkpu.png" class="logo">
            <h1>Calcula tu KDA

            </h1>
            <p>Escribe tus datos dentro de las cajas y tu KDA se calculará automaticamente</p>
        </div>
    </div>
    <!-- Cuerpo de la página y contenedor de la calculadora -->
    <div class="row" id="body">
        <div class="col-sm-12 col-md-6">
            <form class="row" id="formulario">
                <div class="col-sm-4">
                    <div class="kda-container-custom chico center-block">
                        <div class="box">
                            ASESINATOS
                            <p></p>
                            <input type="text" maxlength="3" id="kills" name="kills" placeholder="0">
                        </div>
                        <div class="box-bottom">
                            <div class="triangle left">
                            </div>
                            <div class="triangle right">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="kda-container chico center-block">
                        <div class="box">
                            MUERTES
                            <p></p>
                            <input type="text" maxlength="3" id="deaths" name="deaths" placeholder="0">
                        </div>
                        <div class="box-bottom">
                            <div class="triangle left">
                            </div>
                            <div class="triangle right">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="kda-container chico center-block">
                        <div class="box">
                            ASISTENCIAS
                            <p></p>
                            <input type="text" maxlength="3" id="assists" name="assists" placeholder="0">
                        </div>
                        <div class="box-bottom">
                            <div class="triangle left">
                            </div>
                            <div class="triangle right">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="kda-container grande center-block" id="resultado">
                <div class="box">
                    KDA
                    <p></p>
                    <input type="text" id="display" disabled>
                </div>
                <div class="box-bottom">
                </div>
            </div>
        </div>
    </div>
    <!-- Footer para disclaimers -->
    <div class="row text-center" id="footer">
        <div class="col-sm-12">
            <p>
                <small>Fan site desarrollado por Mike Huitrado.</small>
            </p>
            <p>
                <small>
                    El logo de la LLN es propiedad de Riot Games.
                </small>
            </p>
        </div>
    </div>
</div>

<script>
    $('#formulario').on('keyup', function(event) {
        event.preventDefault();

        var kills = parseInt($('#kills').val());
        var deaths = parseInt($('#deaths').val());
        var assists = parseInt($('#assists').val());

        showResultado(calculateKDA(kills, deaths, assists));

    });

    function calculateKDA(kills, deaths, assists) {
        if (deaths == 0) {
            deaths = 1;
        }
        var resultado = Math.round(((kills + assists) / deaths) * 10) / 10;

        return resultado;
    }

    function showResultado(resultado) {
        var container = $('#resultado');
        if (resultado > 0) {
            console.log(resultado);
            container.find('.box #display').val(resultado);
        }
    }
</script>