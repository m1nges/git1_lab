<?php

$number1 = 0;
$number2 = 0;

function displayMenu()
{
  echo "Меню:\n";
  echo "1. Ввести два числа\n";
  echo "2. Выполнить сложение\n";
  echo "3. Выполнить вычитание\n";
  echo "4. Выполнить деление\n";
  echo "5. Возвести число в степень\n";
  echo "0. Выход\n";
  echo "Выберите пункт меню: ";
}

function enterNumbers(&$number1, &$number2)
{
  echo "Введите первое число: ";
  $number1 = trim(fgets(STDIN));
  echo "Введите второе число: ";
  $number2 = trim(fgets(STDIN));
}

function performAddition($number1, $number2)
{
  $result = $number1 + $number2;
  echo "Результат сложения: $result\n";
}

function performSubstriction($number1, $number2)
{
  $result = $number1 - $number2;
  echo "Результат сложения: $result\n";
}

function performDivision($number1, $number2)
{
  if ($number2 == 0) {
    echo "Ошибка: деление на ноль\n";
  } else {
    $result = $number1 / $number2;
    echo "Результат деления: $result\n";
  }
}

do {
  displayMenu();
  $choice = trim(fgets(STDIN));

  switch ($choice) {
    case 1:
      enterNumbers($number1, $number2);
      break;
    case 2:
      performAddition($number1, $number2);
      break;
    case 2:
      performSubstriction($number1, $number2);
      break;
    case 4:
      performDivision($number1, $number2);
      break;
    case 0:
      echo "Выход из программы.\n";
      break;
    default:
      echo "Неверный выбор, попробуйте снова.\n";
      break;
  }
} while ($choice != 0);
