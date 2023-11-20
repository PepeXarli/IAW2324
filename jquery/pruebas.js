// Conjunto de ejercicios de jQuery

$(document).ready(function () {
    $('#esconder').click(function() {
        // algo 1
        let entrada=prompt('Por favor introduzca que párrafo que esconder').toLocaleLowerCase();

        if(entrada=='todos'){
            $('p').hide();

        }
        else{
            $('#'+entrada).hide();
        }


    }); 

});