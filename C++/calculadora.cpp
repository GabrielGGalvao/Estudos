#include "calculadora.h"

Calculadora::calculadora()
{
  resultado = 0.0;
}

double Calculadora::Somar(double a, double b)
{
  resultado = a + b;
  return resultado;
}

double Calculadora::Subtrair(double a, double b)
{
  resultado = a - b;
  return resultado;
}

double Calculadora::Multiplicar(double a, double b)
{
  resultado = a * b;
  return resultado;
}

double Calculadora::Dividir(double a, double b)
{
    resultado = a / b;
    return resultado;
}

double Calculadora::getResultado()
{
  return resultado;
}