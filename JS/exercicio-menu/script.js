res = document.getElementsByClassName('submenu').length;
console.log(document.getElementsByClassName('submenu').value)

function inicial() {

    for (let index = 0; index <= 9; index++) {
        document.getElementsByClassName('submenu')[index].style.display = 'none'; 
    }
    
}

function exibir() {

    if (document.getElementsByClassName('submenu')[0].style.display == 'none') {
        for (let index = 0; index <= 9; index++) {
            document.getElementsByClassName('submenu')[index].style.display = 'block';
        }

    }else {
        for (let index = 0; index <= 9; index++) {
            document.getElementsByClassName('submenu')[index].style.display = 'none';
        }
    }

}
