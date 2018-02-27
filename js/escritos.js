/*
 * função : trocarImg()
 * autor : Manfred
 * descrição : Trocar imagem do cabeçalho
 */
var flag = false;

function trocarImg() {
    var url0 = "img/se2.jpg";
    var url1 = "img/se.gif";
    
    if (!flag) {
        document.getElementById("se").src = url0;
    }
    else {
        document.getElementById("se").src = url1;
    }
    flag = !flag;
}

function inserirNome() {
    var nome = prompt("Nome: ");
    alert("Olá, " + nome);
}

function sayHello() {
    document.write("Olá, criançada");
}

function calcularIMC() {
    var formulario = document.getElementById("formulario");
    var regex = /^\d.\d\d$/;
    
    if (regex.test(formulario.metros.value)) {
        var peso = +formulario.quilos.value;
        var altura = +formulario.metros.value;
    }
    else {
        alert("Formato dos metros inválido");
    }
    
    try {
        if (peso <= 0 || altura <= 0) {
            formulario.imc.value = "";
            formulario.classificacao.value = "";
            throw "Os campos não podem estar vazios ou com valores negativos";
        }
        else {
            var imc = peso / (altura * altura);   
            
            var ver = new Boolean(imc);
            
            if (ver.toString() == "true") {
                formulario.imc.value = imc.toFixed(2);
                var classificacao = detectarClassificacao(imc);
                classificar(classificacao);
            }
            else {
                formulario.imc.value = "";
                formulario.classificacao.value = "";
                throw "Insira apenas valores numéricos";
            }
            
        }
    }
    catch(e) {
        //alert(e.name + " - " + e.message);
        alert(e.toString());
    }        
}

function detectarClassificacao(imc) {
    var classificacao = 0;

    if (imc > 15 && imc < 20) {
        classificacao = 1;
    }
    else if (imc > 20 && imc < 25) { 
        classificacao = 2;
    }
    
    return classificacao;
}

function classificar(classificacao) {
    switch (classificacao) {
        case 1: 
            formulario.classificacao.value = "Magro";
            break;
        case 2: 
            formulario.classificacao.value = "Normal";
            break;
        default:
            formulario.classificacao.value = "Gordo";
    }
}