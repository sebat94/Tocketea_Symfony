window.addEventListener('load', inicia);


function inicia() {
    let enlacesEliminar = document.getElementsByClassName('borrar_elemento');

    for (let i = 0; i < enlacesEliminar.length; i++) {
        enlacesEliminar[i].addEventListener('click', eliminaElemento);
    }
}



function eliminaElemento(e) {
    e.preventDefault();
    const enlaceEliminar = this;

    swal({
        title: '¿Seguro que quieres eliminarlo?',
        text: "Esta operación no podrá deshacerse",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, bórralo!'
    }).then(function(){
        let xhttpRequest = new XMLHttpRequest();
        const url = enlaceEliminar.href;

        xhttpRequest.open('DELETE', url, true);
        xhttpRequest.send();
        xhttpRequest.onreadystatechange = function()
        {
            if (this.status === 200 && this.readyState === 4)
            {
                let respuesta = JSON.parse(xhttpRequest.response);

                if (xhttpRequest.response !== null)
                {
                    let mensaje = '';
                    if (respuesta.code == 200)
                    {

                        if(url.includes('usuarios'))
                            enlaceEliminar.parentNode.parentNode.parentNode.remove();
                        else if(url.includes('eventos'))
                            enlaceEliminar.parentNode.parentNode.remove();

                        swal(
                            'Eliminado!',
                            respuesta.message,
                            'success'
                        )
                    }
                    else {
                        swal(
                            'No se ha elimiado!',
                            respuesta.message,
                            'error'
                        )
                    }
                }
            }

        };
    })
}