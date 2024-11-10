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



do {
  displayMenu();
  $choice = trim(fgets(STDIN));

  switch ($choice) {
    case 0:
      echo "Выход из программы.\n";
      break;
    default:
      echo "Неверный выбор, попробуйте снова.\n";
      break;
  }
} while ($choice != 0);
