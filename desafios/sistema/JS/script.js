
const input_cpf = document.querySelector('#cpf');
input_cpf.addEventListener('keypress', () => {
    let cpf_length = input_cpf.value.length;
    
    if (cpf_length === 3 || cpf_length === 7 ){
        input_cpf.value += '.'
    }
    if (cpf_length === 11){
        input_cpf.value += '-'
    }

})
const input_cell = document.querySelector('#cell');
input_cell.addEventListener('keypress', () => {
    let cell_length = input_cell.value.length;
    
    if (cell_length === 0 ){
        input_cell.value += '('
    }
    if (cell_length === 3){
        input_cell.value += ') '
    }
    if (cell_length === 10){
        input_cell.value += '-'
    }

})
const input_nasc = document.querySelector('#nasc');
input_nasc.addEventListener('keypress', () => {
    let nasc_length = input_nasc.value.length;
    
    if (nasc_length === 4 ){
        input_nasc.value += '/'
    }
    if (nasc_length === 7){
        input_nasc.value += '/'
    }

})
 






