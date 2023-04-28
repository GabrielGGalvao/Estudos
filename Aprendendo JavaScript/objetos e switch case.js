let objeto = {casa: 'verde', portao: 'azul', parede: 'branca'};

for(let imovel in objeto)
{
    console.log('Propriedade: ' + imovel + ' Valor: ' + objeto[imovel]);
}

let iterable = [10, 20, 30];

for(let value of iterable) {
    console.log(value);
}

let string = "hello";

for(let char of string) {
    console.log(char);
}

let diaSemana = 3;

switch (diaSemana) {
  case 1:
  case 7:
    console.log("Fim de Semana");
    break;
  case 2:
  case 3:
  case 4:
  case 5:
  case 6:
    console.log("Dia de trabalho");
    break;
  default:
    console.log("Dia inválido");
    break;
}