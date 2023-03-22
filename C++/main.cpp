#include <iostream>
#include "calculadora.h"

int main()
{
  Calculadora calculador;

  double num1, num2;
  char op;

  std::cout << "Digite o primeiro número: ";
  std::cin >> num1;

  std::cout << "Digite o operador (+, -, *, /): ";
  std::cin >> op;

  std::cout << "Digite o segundo número: ";
  std::cin >> num2;

  switch(op) {
    case '+':
      calculadora.Somar(num1, num2);
      break;
    case '-':
      calculadora.Subtrair(num1, num2);
      break;
    case '*':
      calculadora.Multiplicar(num1, num2);
      break;
    case '/':
        calculadora.Dividir(num1, num2);
      break;
    default:
      std::cerr << "Operador inválido\n";
  }

  std::cout << "Resultado: " << calculadora.getResultado() << '\n';

  return 0;
}