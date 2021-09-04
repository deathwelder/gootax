<?php

    //1. Основы PHP

//1.1 PHP: Привет, Мир!
print_r('Hello, World!'); 

//1.2 PHP: Теги
print_r('King in the North!');

//1.3 PHP: Комментарии
//You know nothing, Jon Snow!. 

//1.4 PHP: Инструкции (Statements)
print_r('Robert');
print_r('Stannis');
print_r('Renly');

//1.5 PHP: Как мы проверяем ваши решения
print_r('9780262531962');

//1.6 PHP: Синтаксические ошибки
print_r('What Is Dead May Never Die');


    //2. Арифметика

//2.1 PHP: Арифметические операции
print_r(81 / 9);

//2.2 PHP: Операторы
print_r(6 - -81);

//2.3 PHP: Коммутативная операция
print_r(3 ** 5);
print_r(-8 / -4);

//2.4 PHP: Композиция операций
print_r(8 / 2 + 5 - -3 / 2);

//2.5 PHP: Приоритет операций
print_r(70 * (3 + 4) / (8 + 2));

//2.6 PHP: Линтер
print_r(3 ** (4 - 2));


    //3. Строки

//3.1 PHP: Кавычки
print_r('"Khal Drogo\'s favorite word is "athjahakar""');

//3.2 PHP: Экранирующие последовательности
print_r("- Did Joffrey agree?\n- He did. He also said \"I love using \\n\".");

//3.3 PHP: Конкатенация
print_r('Winter ' . 'came ' . 'for ' . 'the ' . 'House ' . 'of ' . 'Frey.');

//3.4 PHP: Кодировка
print_r(chr(126) );
print_r(chr(94) );
print_r(chr(37) );


    //4. Типы данных PHP

//4.1 PHP: Типы данных
print_r(-0.304);

//4.2 PHP: Слабая типизация
print_r('7' - (-8 - -2));

//4.3 PHP: Явное преобразование типов
print_r(((string) 2) . ' times');


    //5. Переменные в языке PHP

//5.1 PHP: Что такое переменная
$motto = 'What Is Dead May Never Die!';
print_r($motto);

//5.2 PHP: Изменение переменной
$name = 'Brienna';
$name = 'anneirB';
print_r($name);

//5.3 PHP: Выбор имени переменной
$numberOfSiblings = 2;
print_r($numberOfSiblings);

//5.4 PHP: Ошибки при работе с переменными
$family = 'Targaryen';
$pet = 'Dragon';
print_r($family);
print_r(' and ');
print_r($pet);

//5.5 PHP: Выражения в определениях
$eurosCount = 100;
$dollarsCount = $eurosCount * 1.25;
$rublesCount = $dollarsCount * 60;
print_r($dollarsCount);
print_r("\n");
print_r($rublesCount);

//5.6 PHP: Переменные и конкатенация
$info = "We couldn't verify you mother's maiden name.";
$intro = "\nHere is important information about your account security.";
$firstName = 'Joffrey';
$greeting = 'Hello';
print_r($greeting . "," . " " . $firstName . "!");
print_r($intro);
print_r("\n");
print_r($info);

//5.7 PHP: Именование переменных
$firstNumber = 1.10;
$secondNumber = -100;
print_r($firstNumber * $secondNumber);

//5.8 PHP: Магические числа
$king = 'King Balon the 6th';
$dynasty = 6;
$numberOfRooms = 17;
print_r($king . ' has ' . ($dynasty * $numberOfRooms) . ' rooms.');


//5.9 PHP: Константы
const DRAGONS_BORN_COUNT = 3;

//5.10 PHP: Магические константы
print_r(__DIR__);

//5.11 PHP: Интерполяция
$stark = 'Arya';
print_r("Do you want to eat, {$stark}?");

//5.12 PHP: Извлечение символов из строки
$one = 'Naharis';
$two = 'Mormont';
$three = 'Sand';

print_r($one[2]);
print_r($two[1]);
print_r($three[3]);
print_r($two[4]);
print_r($two[2]);

//5.13 PHP: Heredoc
$str = <<<EOT
Lannister, Targaryen, Baratheon, Stark, Tyrell... they're all just spokes on a wheel.
This one's on top, then that one's on top, and on and on it spins, crushing those on the ground.
EOT;

print_r($str);


    //6. Вызов функций

//6.1 PHP: Функции и их вызов
use function HexletBasics\Functions\calculateDistance;

$ligs = calculateDistance('Qarth', 'Vaes Dothrak');
print_r($ligs);

//6.2 PHP: Сигнатура функции
$text = 'mount';

$text = ucfirst($text);
print_r($text);

//6.3 PHP: Стандартная библиотека
$motto = 'Family, Duty, Honor';

$type = gettype($motto);
print_r($type);

//6.4 PHP: Аргументы по умолчанию
$number = 10.1234;

$number = round($number, 2);
print_r($number);

//6.5 PHP: Функции с переменным числом параметров
$min =  min(3, 10, 22, -3, 0);
print_r($min);

//6.6 PHP: Вызов функции — выражение
print_r(calculateDistance("Winterfell", "The Twins") + calculateDistance("The Twins", "The Eyrie"));

//6.7 PHP: Аргументы как выражения
$from = 'The Twins';
$to = 'The Eyrie';

print_r(calculateDistanceBetweenTowns($from . '-' . $to));

//6.8 PHP: Вызов функций в аргументах функций
print_r(getParentFor(getParentFor('Joffrey Baratheon'), 'father'));

//6.9 PHP: Детерминированность
$text = 'knock!';

print_r(strtoupper($text));

//6.10 PHP: Побочные эффекты
use function HexletBasics\Functions\getParentFor;

print_r(getParentFor('Daenerys Targaryen'));


    //7. Определение функций

//7.1 PHP: Создание (определение) функции
namespace HexletBasics\DefineFunctions\Define;

function printMotto() {
    print_r("Winter is coming");
}

//7.2 PHP: Передача одного аргумента
namespace HexletBasics\DefineFunctions\Argument;

function printJaimesLine($line) {
    print_r("JAIME: {$line}");
}

//7.3 PHP: Передача нескольких аргументов
namespace HexletBasics\DefineFunctions\Arguments;

function  printSeq($string, $number) {
    print_r(str_repeat($string, $number));
}

//7.4 PHP: Возврат значений
namespace HexletBasics\DefineFunctions\ReturnInstruction;

use function HexletBasics\Functions\getParentFor;


function getParentNamesTotalLength($childName) {
    return strlen(getParentFor($childName, 'mother')) + strlen(getParentFor($childName, 'father'));
}

//7.5 PHP: Возврат по умолчанию
namespace HexletBasics\DefineFunctions\DefaultReturn;

function getNull() {
    return null;
}

//7.6 PHP: Параметры по умолчанию
namespace HexletBasics\DefineFunctions\DefaultArguments;

use function HexletBasics\Functions\getParentFor;

function getCustomParentFor($nameChild, $parent = 'father') {
    return getParentFor($nameChild, $parent);
}

//7.7 PHP: Именование
namespace HexletBasics\DefineFunctions\Naming;

function getFormattedBirthday($day, $mounth, $year) {
    $tmp = "%02d-%02d-%04d";
    return sprintf($tmp, $day, $mounth, $year);
}

//7.8 PHP: Окружение
namespace HexletBasics\DefineFunctions\Environment;

function getAgeDifference($firstYear, $secondYear) {
    $string = "The age difference is ";
    $sub = abs($secondYear) - abs($firstYear);
    return $string . $sub;
}

//7.9 PHP: Чтение документации
namespace HexletBasics\DefineFunctions\ReadingDocumentation;

function getAge($age) {
    return round($age, 0, PHP_ROUND_HALF_DOWN);
}


    //8. Логика

//8.1 PHP: Логический тип
namespace HexletBasics\Logic\BoolType;

function isPensioner($age) {
    return $age >= 60;
}

//8.2 Предикаты
namespace HexletBasics\Logic\Predicates;

function isMister($type) {
    return $type === 'Mister';
}

//8.3 PHP: Комбинирование операций и функций
namespace HexletBasics\Logic\CombineExpressions;

function hasTargaryenReference($name) {
    $tmp = substr($name, 0, 9);
    return $tmp === 'Targaryen';
}

//8.4 PHP: Логические операторы
namespace HexletBasics\Logic\LogicalOperators;

function isLannisterSoldier($color, $shield) {
    return $color === 'red' && $shield === null || $shield === 'lion';
}

//8.5 PHP: Отрицание
namespace HexletBasics\Logic\LogicalNegation;

use function HexletBasics\Functions\isLannisterSoldier;

function isNotLannisterSoldier($color, $shield) {
    return !($color === 'red' && $shield === null || $shield === 'lion');
}

//8.6 PHP: Логические операторы 2
namespace HexletBasics\Logic\LogicalOperators2;

function isNeutralSoldier($armorColor, $shieldColor) {
    return !($armorColor === 'red') && ($shieldColor === 'black');
}

//8.7 PHP: Слабая типизация - 2
namespace HexletBasics\Logic\WeakTyping;

function isFalsy($var) {
    return $var == false;
}


    //9. Условные конструкции

//9.1 PHP: Условная конструкция (if)
namespace HexletBasics\Conditionals\IfStatement;

function getSentenceTone($string) {
    if (strtoupper($string) === $string) {
        return 'scream';
    }
    return 'general';
}

//9.2 PHP: else
namespace HexletBasics\Conditionals\IfElse;

function normalizeUrl($url)
{
    if (strpos($url, 'http://') === 0) {
        $tmp = substr($url, 7);
    } else {
        $tmp = $url;
    }

    return "https://{$tmp}";
}

//9.2 PHP: Конструкция else if
namespace HexletBasics\Conditionals\ElseIfStatement;

function whoIsThisHouseToStarks($lastName) {
    if ($lastName === 'Karstark' || $lastName === 'Tully') {
       return 'friend';
    } elseif ($lastName === 'Lannister' || $lastName === 'Frey') {
       return 'enemy';
    } else {
        return 'neutral';
    }
}

//9.3 PHP: Тернарный оператор
namespace HexletBasics\Logic\TernaryOperator;

function convertText($string) {
    return ($string === ucfirst($string)) ? $string : strrev($string);
}

//9.4 PHP: Конструкция Switch
namespace HexletBasics\Conditionals\SwitchStatement;

function getNumberExplanation($number) {
    switch ($number) {
        case 666 :
                return 'devil number';
        case 42 :
                return 'answer for everything';
        case  7:
                return 'prime number';
        default:
                return null;
    }
}

//9.5 PHP: Оператор Элвис
namespace HexletBasics\Conditionals\Elvis;

function generateAmount($product, $audit) {
    return $product ?: $audit * 3;
}


    //10. Циклы

//10.1 Цикл While
namespace HexletBasics\Loops\WhileLoop;

function printNumbers($firstNumber)
{
    while ($firstNumber >= 1) {
        print_r($firstNumber);
        print_r("\n");
         $firstNumber = $firstNumber - 1;
    }
    print_r('finished!');
}

//10.2 PHP: Агрегация данных (Числа)
namespace HexletBasics\Loops\AgregationNumber;

function multiplyNumberFromRange($start, $finish) {
    $i = $start;
    $multiply = 1; 

    while ($i <= $finish) { 
        $multiply = $multiply * $i; 
        $i = $i + 1; 
    }
    return $multiply;
}

//10.3 PHP: Агрегация данных (Строки)
namespace HexletBasics\Loops\AgregationString;

function joinNumbersFromRange($numberOne, $numberTwo) {
    $result = "";
    while ($numberOne <= $numberTwo) {
        $result = "{$result}{$numberOne}";
        $numberOne = $numberOne + 1; }
    return $result;
}

//10.4 PHP: Обход строк
namespace HexletBasics\Loops\IterationOverString;

function printReversedNameBySymbol($name) {
    $nameReverse = strrev($name);
        $i = 0;
        while ($i < strlen($nameReverse)) {
            print_r("$nameReverse[$i]\n");
            $i = $i + 1;
    }
}

//10.5 PHP: Условия внутри тела цикла
namespace HexletBasics\Loops\ConditionsInsideLoops;

function countChars($str, $char) {
    $i = 0;
    $count = 0;
    while ($i < strlen($str)) {
        if (strtoupper($str[$i]) === strtoupper($char)) {
            $count = $count + 1;
        }
        $i = $i + 1;
    }
    return $count;
}

//10.6 PHP: Формирование строк в циклах
namespace HexletBasics\Loops\ReverseString;

function mysubstr($str, $length){
    $index = 0;
    $result = '';
    while ($index < $length) {
        $currentChar = $str[$index];
        $result = "{$result}{$currentChar}";
        $index = $index + 1;
    }

    return $result;
}

//10.7 PHP: Пограничные случаи
namespace HexletBasics\Loops\EdgeCases;

function isArgumentsForSubstrCorrect($str,$index,$lenght) {
    if( $lenght < 0){
        return false;
    }elseif($index < 0){
        return false;
    }elseif($index > (strlen($str) - 1)){
        return false;
    }elseif(($index + $lenght) > (strlen($str))){
        return false;
    }
return true;
}

//10.8 PHP: Синтаксический сахар
namespace HexletBasics\Loops\SyntaxSugar;

function countChars($str, $char) {
    $lenght = strlen($str);
    $iterator = 0;
    $charCount = 0;
    while ($lenght > 0) {
        if($str[$iterator] === $char) {
            $charCount += 1;
        }
        $iterator += 1;
        $lenght -= 1;
    }
    return $charCount;
}

//10.9 PHP: Инкремент и декремент
namespace HexletBasics\Loops\Mutators;

function filterString($str, $char) {
    $len = strlen($str);
    $iterator = 0;
    $newStr = '';
    while ($len > 0) {
        if ($str[$iterator] != $char) {
            $newStr = $newStr . $str[$iterator];
        }
        $len -= 1;
        $iterator += 1;
    }
    return $newStr;
}

//10.10 PHP: Возврат из циклов
namespace HexletBasics\Loops\ReturnFromLoop;

function hasChar($str, $char)
{
    $length = strlen($str);
    $index = 0;
    while ($index < $length) {
        $currentChar = $str[$index];
        if ($currentChar === $char) {
            return true;
        }

        $index++;
    }

    return false;
}

//10.11 PHP: Цикл For
namespace HexletBasics\Loops\ForLoop;

function sumOfSeries($numberOne, $numberTwo) {
    $sum = 0;
    for ($i = $numberOne; $i <= $numberTwo; $i += 1) {
        $sum = $sum + $i;
    }
    return $sum;
}


    //11. Погружаясь в строки

//11.1 PHP: Юникод
function invertCase($text) {
    $result = "";
    for ($i = 0; $i < mb_strlen($text); $i +=1) {
        if (mb_substr($text, $i, 1) === mb_strtoupper(mb_substr($text, $i, 1))) {
            $result .= mb_strtolower(mb_substr($text, $i, 1));
} else { $result .= mb_strtoupper(mb_substr($text, $i, 1));}
    }   
        return $result;
    }

//11.2 PHP:Локализация
print_r(setlocale(LC_CTYPE, 0));

//11.3 PHP: Поиск стартовой позиции
namespace HexletBasics\DeepIntoStrings\StartWith;

function startsWith($text, $substr) {
    $length = mb_strlen($substr);

if (mb_substr($text, 0, $length) === $substr)
return true;

return false;
}


    //12 Дата и Время

//12.1 PHP: Время
namespace HexletBasics\Dates\Timestamp;

const SECONDS_IN_YEAR = 60 * 60 * 24 * 365;

function getYear($timestamp) {
    return (int)date('Y',$timestamp);
}

//12.2 PHP: Date
namespace HexletBasics\Dates\DateFunction;

function getCustomDate($timestamp) {
    return date('d/m/Y',$timestamp );
   }

//12.3 PHP: mktime()
namespace HexletBasics\Dates\Mkdtime;

function getHexletBirthday() {
    return mktime(0, 0, 0, 1, 1, 2012);
}

//12.4 PHP: Часовые пояса (тайм зоны)
print_r(date_default_timezone_get());





