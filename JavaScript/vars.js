//let: Pode ser reatribuída, mas não redeclarada no mesmo escopo. Exemplo:
let x = 10;
x = 5; // reatribui o valor
console.log(x); // resultado: 5

/*var: Pode ser reatribuída e redeclarada em qualquer lugar dentro do escopo em que foi definida.
Se for declarada fora de uma função, será global. Exemplo*/
var y = 2;
{
   var y = 4;// reatribui e redefine a variável
}
console.log(y);// resultado: 4

//const: Não pode ser reatribuída nem redeclarada no mesmo escopo. Exemplo:
const z = 7;
z = 3; // tenta reatribuir, resultando em erro

//object: Representa um objeto com propriedades e métodos. Exemplo:
const pessoa = {
    nome: 'João',
    idade: 30,
    profissao: 'Desenvolvedor'
 };
 console.log(pessoa.nome);// resultado: João

/*forEach é um método disponível em arrays que permite iterar sobre  cada elemento
 do array e executar uma função para cada um desses elementos. Exemplo:*/
const frutas = ['maçã', 'banana', 'laranja'];
frutas.forEach(function(fruta) {
   console.log(fruta);
});
// resultado: maçã, banana, laranja (cada fruta em uma linha)