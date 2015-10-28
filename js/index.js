/*
function validaBusca() {
    if (document.querySelector("#q").value == '') {
           alert('Não podia ter deixado em branco a busca!');
           return false;
     }
}
document.querySelector('#form-busca').onsubmit = validaBusca();
*/


document.querySelector('#form-busca').onsubmit = function() {
    if (document.querySelector('#q').value == '') {
        document.querySelector('#form-busca').style.background = 'red';
        return false;
     }
};