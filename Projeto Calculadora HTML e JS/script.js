function somar()
{
    var fNum = document.getElementById("num1")
    var sNum = document.getElementById("num2")
    var resultado = parseInt(fNum.value) + parseInt(sNum.value);
    document.getElementById("resultado").innerHTML = resultado;
}
function subtracao()
{
    var fNum = document.getElementById("num1")
    var sNum = document.getElementById("num2")
    var resultado = parseInt(fNum.value) - parseInt(sNum.value);
    document.getElementById("resultado").innerHTML = resultado;
}
function multiplicacao()
{
    var fNum = document.getElementById("num1")
    var sNum = document.getElementById("num2")
    var resultado = parseInt(fNum.value) * parseInt(sNum.value);
    document.getElementById("resultado").innerHTML = resultado;
}
function divisao()
{
    var fNum = document.getElementById("num1")
    var sNum = document.getElementById("num2")
    var resultado = parseInt(fNum.value) / parseInt(sNum.value);
    document.getElementById("resultado").innerHTML = resultado;
}
function calcular()
{
    var operacao = document.getElementById("operacao").value;
    switch (operacao) {
        case '+':
            somar()
            break;
        case '-':
            subtracao()
            break;
        case '×':
            multiplicacao()
            break;
        case '÷':
            divisao()
            break;

        default:
            alert("Operação invalida")
            break;
    }
}