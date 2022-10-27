document.addEventListener('DOMContentLoaded', ()=>{
    const elementosCarousel = document.querySelectorAll('.carousel'); //Todos los elementos de la pagina con ese nombre
    M.Carousel.init(elementosCarousel, {

        duration: 100,//El tiempo de mover de uin elemneto a otro dentro del carrusel
        dist: -80, //Se agranda
        shift: 5,
        padding: 5, //Espaciado
        numVisible: 3, //imagenes que me mostrara al costado
        indicators: true, //Mostrar los indicadores para tener un mejor control
        noWrap: false //inicia con el primer elemento del carrusel. si se pone en false hay un elemnto a la izquiera y otro a la derecha

    }); //Que se inice un carrusel con cada elemnetso que esten en la pagina
}); //cuando el contenido de nuestra pagina se haya cargado