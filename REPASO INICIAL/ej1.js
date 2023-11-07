

function calcular(){
     let x=parseFloat(document.getElementById('1').value)
     let y=parseFloat(document.getElementById('2').value) 

     document.getElementById('sum').innerHTML=x+y
     document.getElementById('rest').innerHTML=x-y
     document.getElementById('mult').innerHTML=x*y
     if(y==0){
        document.getElementById('div').innerHTML='No se puede dividir entre 0'
     }
     else{
        document.getElementById('div').innerHTML=x/y
     }
}

