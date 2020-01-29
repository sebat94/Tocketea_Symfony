(function(){
    "use strict";

    window.addEventListener('load', e => {

        let formCat = document.getElementById('filtrarEventosCategoria');
        let formFech = document.getElementById('filtrarEventosFecha');

        let filtroCategoria = document.getElementById('filtroCategoria');
        let filtroFecha = document.getElementById('filtroFecha');

        let todosCategoria = document.getElementById('todosCategoria');
        let todosFecha = document.getElementById('todosFecha');

        filtroCategoria.addEventListener('change', () => {
            formCat.submit();
        });
        todosCategoria.addEventListener('click', () => {
            formCat.submit();
        });

        filtroFecha.addEventListener('change', () => {
            formFech.submit();
        });
        todosFecha.addEventListener('click', () => {
            formFech.submit();
        });

    });// Load Page

})();
