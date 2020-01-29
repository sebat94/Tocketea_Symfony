(function(){
    "use strict";

    let form = document.getElementById('formFiltrarGestionUsr');
    let filtroPorRol = document.getElementById('categoriaMisEventos');
    let todosRoles = document.getElementById('todosRoles');

    filtroPorRol.addEventListener('change', () => {
        form.submit();
    });

    todosRoles.addEventListener('click', () => {
       form.submit();
    });

})();
