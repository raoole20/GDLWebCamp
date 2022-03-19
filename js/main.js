( function() {
    "use strict";
    document.addEventListener("DOMContentLoaded", ()=>{
        
        // campos pases 
        tablaEventos();

        // extraEventos
        calcular();

        // aceptar 
        // aceptar();
    });

    const usuario = {
        nombre: null,
        apellido: null, 
        email: null,
    }

    const carrito = {
        paseUndia:    0,
        paseDosDias:  0,
        paseCompleto: 0,
        camisas:      0,
        etiquetas:    0,
        regalo: null,
    }

    const nombre    = document.querySelector('#nombre');
    const apellido  = document.querySelector('#apellido');
    const email     = document.querySelector('#email');

    // validar nombres, email, apellido
 
    
    function tablaEventos(){

        const tabla_input = document.querySelectorAll('.tabla-precio input');

        tabla_input.forEach( ( input ) =>{
            input.addEventListener('input', (e) => {
                mostrarEventos(e);
            });
        })

    }

    function calcular(){

        document.querySelector('#calcular').addEventListener('click', (e)=>{
            e.preventDefault();

            const camisaEvento = document.querySelector('#camisa_evento').value;
            const etiquetas = document.querySelector('#etiquetas').value;
            const regalo = document.querySelector('#regalo');

            if( camisaEvento >=  1 ) carrito.camisas   = (camisaEvento) ? camisaEvento : 0 ;
            if( etiquetas >=  1 )    carrito.etiquetas = etiquetas ? etiquetas : 0;
            
            carrito.regalo    = regalo.value ? regalo.value : carrito.regalo;
            
            // verificar que todos los tados esten seleccionados
            verificarValores();
        })
    }

    function verificarValores() {
         
        if( !(carrito.paseUndia >= 0))    {alert('ha ocurrido un error '); return};
        if( !(carrito.paseDosDias >= 0))  {alert('ha ocurrido un error '); return};
        if( !(carrito.paseCompleto >= 0)) {alert('ha ocurrido un error '); return};

        // mostarar resumen, si y solo si los valores proporcionados son validos
        activarPagos();
        mostrarResumen()
    }

    function activarPagos(){
        const BotonPagos = document.querySelector('#enviar');
        BotonPagos.disabled = false;  
    }

    function validar (e){  
    }
    function mostrarEventos(e){
        
        const pase_un       = document.querySelector('#viernes');
        const pase_dos      = document.querySelector('#sabado');
        const pase_completo = document.querySelector('#domingo');

        switch ( e.target.id ) {
            case 'pase_pordia':

                pase_un.classList.remove('ocultar');

                if( e.target.value >=  1 ) carrito.paseUndia = e.target.value;
                
                if( e.target.value == 0){
                    pase_un.classList.add('ocultar');
                }
                limpiarHTML();
                
                break;
            case 'pase_dosdias':
                
                pase_dos.classList.remove('ocultar');
                pase_un.classList.remove('ocultar');


                if( e.target.value >=  1 ) carrito.paseDosDias = e.target.value;

                if( e.target.value == 0){
                    pase_un.classList.add('ocultar');
                    pase_dos.classList.add('ocultar');
                }

                limpiarHTML();
                break;
            case 'pase_completo':

                pase_completo.classList.remove('ocultar');
                pase_un.classList.remove('ocultar');
                pase_dos.classList.remove('ocultar');

                if( e.target.value >=  1 ) carrito.paseCompleto = e.target.value;

                if( e.target.value == 0){
                    pase_completo.classList.add('ocultar');
                    pase_un.classList.add('ocultar');
                    pase_dos.classList.add('ocultar');
                }
                limpiarHTML();
                break;
        
            default:
                // mostrar error 
                alert('Error en la seleccion de voletos')
                break;
        }
    }


    function mostrarResumen( ){

        limpiarHTML();

        const lista_productos = document.querySelector('#lista-productos');
        const sumaTotal = document.querySelector('#suma-total');

        const { paseUndia,paseDosDias , paseCompleto, camisas, etiquetas, regalo } = carrito;
        
        if( paseUndia || paseDosDias || paseCompleto ) {
            
            const totalPase_1 = 30 * parseInt( paseUndia , 10); 
            const totalPase_2 = 40 * parseInt( paseDosDias, 10); 
            const totalPase_3 = 50 * parseInt( paseCompleto, 10);

            const totalCamisa    = (10 - ( 10*0.07) ) * parseInt(camisas);
            const totalEtiquetas = 2 * parseInt(etiquetas);
            
            const total = totalPase_1 + totalPase_2 + totalPase_3 + totalCamisa + totalEtiquetas;

            const DivResumen = document.createElement('DIV');
            DivResumen.classList.add('resumen-div');

            const divPases = document.createElement('DIV');
            divPases.innerHTML = `
            <div class="pases-div"><p>Boletos</p> <p>cantidad</p> <p>precio <small>c/u</small> </p> </div> 
            <div class="pases-div ${ (totalPase_1 === 0)? 'ocultar' : ''  }"><p>Pase por un dia</p>  <p >${paseUndia}</p> <p>$30.00</p> </div> 
            <div class="pases-div ${ (totalPase_2 === 0)? 'ocultar' : ''  }"><p>Pase por dos dia</p> <p>${paseDosDias}</p> <p>$40.00</p> </div>
            <div class="pases-div ${ (totalPase_3 === 0)? 'ocultar' : ''  }"><p>Pase completo</p>    <p>${paseCompleto}</p> <p>$50.00</p> </div>
            `
            const divCamisas = document.createElement('DIV');
            divCamisas.innerHTML = `
            <div class="camisas-div ${ (camisas === 0)? 'ocultar' : ''  }"><p>Extras</p> <p>cantidad</p> <p>precio</p>  </div>
            <div class="camisas-div ${ (camisas === 0)? 'ocultar' : ''  }"><p>Camisa del evento</p>  <p>${camisas}</p> <p> $10,00 <span>(con 7% de descuento )</span></p></div>
            `
            const divEtiquetas = document.createElement('DIV');
            divEtiquetas.innerHTML = `
            <div class="camisas-div ${ (etiquetas === 0)? 'ocultar' : ''  }"><p>Etiquetas del evento</p>  <p>${etiquetas}</p> <p> $2,00 </p></div>
            `
            const divRegalo = document.createElement('DIV');
            divRegalo.innerHTML = `
            <div class="regalo-div"><p>Regalo</p> <p></p> <p class=" ${ (regalo === null)? 'no-regalo' : 'si-regalo'  }"> ${regalo || 'no seleccionado'}</p> </div>
            `
            const divTotal = document.createElement('DIV');
            divTotal.innerHTML = `
            <div class="total-div"><p>TOTAL</p>  <p></p> <p class=" resumen_total "> $${total.toFixed(2)}</p> </div>
            `


            DivResumen.appendChild(divPases);
            DivResumen.appendChild(divCamisas);
            DivResumen.appendChild(divEtiquetas);
            DivResumen.appendChild(divRegalo);
            DivResumen.appendChild(divTotal);

            document.querySelector('#input_01').value = total;
            document.querySelector('#lista-productos').appendChild(DivResumen);
        }else{
            alert('Porfavor, seleccione almenos un boleto');
            return;
        }  
    }

    function limpiarHTML(){
        const contenedor = document.querySelector('#lista-productos');
        contenedor.innerHTML = '';
    }

    function resaltarPagActual(){

    }
})()
var map = L.map('mapa').setView([20.67, -0.09], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map)


L.marker([51.5, -0.09]).addTo(map)
.bindPopup('GDLWebCamp 2020 <br> Boletos ya disponible').openPopup().bindTooltip('Un tooltip').openTooltip();

