<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<div class="go-top-container">
    <div class="go-top-button">
        <i class="fas fa-chevron-up"></i>
    </div>
</div>

<style>
    /* GOTOP */

    .go-top-container {
        position: fixed;
        bottom: 4rem;
        right: 4rem;
        width: 6.6rem;
        height: 6.6rem;
        z-index: -1;
    }

    .go-top-button {
        width: 0rem;
        height: 0rem;
        background: #00ffff;
        border-radius: 50%;
        cursor: pointer;
        transition: .2s;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: -1;
    }

    .go-top-button i {
        position: absolute;
        font-size: 1.7rem;
        top: 48%;
        left: 50%;
        transform: translate(-50%, -50%) scale(0);
        color: #fff;
        transition: .2s;
    }

    /* Elemento de js*/
    .show {
        z-index: 10;
    }

    .show .go-top-button {
        animation: popup .3s ease-in-out;
        width: 6.6rem;
        height: 6.6rem;
        z-index: 11;
    }

    .show i {
        transform: translate(-50%, -50%) scale(1);
    }

    @keyframes popup {
        0% {
            width: 0rem;
            height: 8rem;
        }

        50% {
            width: 8rem;
            height: 8rem;
        }

        100% {
            width: 6.6rem;
            height: 6.6rem;
        }
    }
</style>

<script>
    window.onscroll = function() {
        console.log(document.documentElement.scrollTop);
        if (document.documentElement.scrollTop > 300) { // Cuando sea mayor a 100 se muestre
            document.querySelector('.go-top-container').classList.add('show');
        } else { // Cuando sea menor a 100, remueve esa clase (es decir el boton)
            document.querySelector('.go-top-container').classList.remove('show');
        }
    }

    document.querySelector('.go-top-container').addEventListener('click', () => { // Funcion flecha de click
        window.scrollTo({
            top: 0, //Nos lleva hacia Arriba
            behavior: 'smooth' // Efecto suave hacia arriba
        });
    });
</script>