/* Rellena este fichero */
$(document).ready(function () {
    $('#btn-aumentar').click(function () { 
        let tamaño=$('.pares').css('font-size');
        $('.pares').css('font-size', parseInt(tamaño)+5+'px');  

    });
    $('#btn-disminuir').click(function () { 
        let tamaño=$('.pares').css('font-size');
        $('.pares').css('font-size', parseInt(tamaño)-5);  

    });
});
