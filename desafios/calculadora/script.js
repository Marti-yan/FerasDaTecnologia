
function res1(num){
    document.getElementById('res').innerHTML += `${num}`; 
}
function excluir() {
    document.getElementById('res').innerHTML = ''
}
function apagar(){
    var resultado = document.getElementById('res').innerHTML
    document.getElementById('res').innerHTML = resultado.substring(0, resultado.length -1)
}

function calcular(){
    var resultado = document.getElementById('res').innerHTML;
      document.getElementById('conta').innerHTML = resultado;
    if (resultado) {
        document.getElementById('res').innerHTML = eval(resultado);
        // função 'eval' calcula automaticamente oq esta no resultado
    }
    
    
}





