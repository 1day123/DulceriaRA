const cuadrodesplegable = document.getElementById('barramenu');/*mando a traer el div que aparece despues de oprimir el icono carrito*/
/*Esta variable es solo para hacer los estilos y se los hago a la barramenu*/
const botoncarrito = document.getElementById('btncarrito');/*Mnado a traer lo que tiene el id=btncarrito */
                                                            /*osea el icono que aparece en mi manu navegador}=🛒*/       
const botoncerrarcarrito=document.getElementById('btncerrarcarrito');/*Mnado a traer lo que tiene el id=btncerrarcarrito */
                                                                    /*OSEA  LA ❎ QUE ESTA dentro de la barramenu*/



botoncarrito.addEventListener('click', function () {/*Estas funciones son para los iconos que estan a la vista, osea los que se pueden manipular*/
                                                    /*En este caso le hago el evento botoncarrito=id=btncarrito */
        
        /*Y le digo que al dar clic le de un estilo with y opacity al cuadro desplegable*/
        /*en este caso que cambie la variable de la barramenu */
        /*y para qcomprobar que si lo hizo debugueo con el console.log que me manda mensaje en consola */
console.log("abriste el carrito");
    cuadrodesplegable.style.width = "400px";
    cuadrodesplegable.style.opacity="1";
});
/*Esta funcion es para cuando le dan clic a la ❎ que esta en el cuadro desaparezca*/
botoncerrarcarrito.addEventListener('click',function(){
console.log("cerraste el carrito");

/*y desaparece haciendole nuevos estilos a la barramenu osea cuadro desplegable*/
cuadrodesplegable.style.opacity="0";
cuadrodesplegable.style.width="0px";
});