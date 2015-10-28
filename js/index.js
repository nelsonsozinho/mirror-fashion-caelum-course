/*
function validaBusca() {
    if (document.querySelector("#q").value == '') {
           alert('Não podia ter deixado em branco a busca!');
           return false;
     }
}
document.querySelector('#form-busca').onsubmit = validaBusca();
*/

var banners = ["img/destaque-home.png", "img/destaque-home-2.png"];
var bannerAtual = 0;
var interval = setInterval(rodarBanner, 2000);

function rodarBanner() {
    var $banner = document.querySelector('#banner');
    console.log($banner.src);
    if($banner.src == 'file:///Users/nelsonsozinho/Documents/curso-front-javascript/ex1/img/destaque-home.png') {
        console.log("Mudando para a umg2");
        $banner.src = 'img/destaque-home-2.png';
    } else {
        console.log("Mudando para a umg1");
        $banner.src = 'img/destaque-home.png';
    }
}

document.querySelector('#form-busca').onsubmit = function() {
    if (document.querySelector('#q').value == '') {
        document.querySelector('#form-busca').style.background = 'red';
        return false;
     }
};

document.querySelector('#play-button').onclick = function() {
    console.log("play");
    interval = setInterval(rodarBanner, 2000);
};

document.querySelector('#pause-button').onclick = function() {
    console.log("pause");
     clearInterval(interval);
};



