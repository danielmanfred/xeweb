window.onload = function() {
    carregarPoltronas();
    
    var imagens = document.getElementsByTagName("img");
    
    for (var i = 0; i < imagens.length; i++) {
        imagens[i].onclick = verificarStatus(i);
    }
}

function verificarStatus(poltrona) {
    return function() {
        var src = document.getElementsByTagName("img")[poltrona].src; 
        var msg = "";
        
    }
}

var poltronas = [true, true, true, true, true, true, true, true, true];

function carregarPoltronas() {
    var imagens = document.getElementsByTagName("img");
    
    for (var i = 0; i < imagens.length; i++) {
        if (poltronas[i]) {
            imagens[i].src = "../img/polon.jpg";
        }
        else {
            imagens[i].src = "../img/poloff.jpg";
        }
    }
}

function selecionarPoltronaSolteiro() {
    var imagens = document.getElementsByTagName("img");
    
    for (var i = 0; i < poltronas.length; i++) {
        if (poltronas[i]) {
            imagens[i].src = "../img/PoltronaDisponivel.png";
            var selecionado = confirm("Deseja escolher esta poltrona?");
            if (selecionado) {
                imagens[i].src = "../img/poloff.jpg";
                poltronas[i] = false;
                break;
            }
            else {
                imagens[i].src = "../img/polon.jpg";
            }
        }
    }
}

function selecionarPoltronaCasal() {
    var imagens = document.getElementsByTagName("img");
    
    for (var i = 0; i < poltronas.length; i++) {
        if (poltronas[i] && poltronas[i+1]) {
            imagens[i].src = "../img/PoltronaDisponivel.png";
            imagens[i+1].src = "../img/PoltronaDisponivel.png";
            var selecionado = confirm("Deseja escolher estas poltronas?");
            if (selecionado) {
                imagens[i].src = "../img/poloff.jpg";
                imagens[i+1].src = "../img/poloff.jpg";
                poltronas[i] = false;
                poltronas[i+1] = false;
                break;
            }
            else {
                imagens[i].src = "../img/polon.jpg";
                imagens[i+1].src = "../img/polon.jpg";
            }
        }
    }
}


