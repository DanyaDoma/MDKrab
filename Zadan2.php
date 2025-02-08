<?php
function Treygol(float $a, float $b, float $c): string
{
    if ($a <= 0 || $b <= 0 || $c <= 0) {
        return "Все стороны треугольника, должны быть положительными";
    }
    if ($a + $b <= $c || $a + $c <= $b || $b + $c <= $a) {
        return "Такого треугольника - не существует.";
    }
    if ($a == $b && $b == $c) {
        return "Равносторонний треугольник.";
    } elseif ($a == $b || $a == $c || $b == $c) {
        return "Равнобедренный треугольник";
    } else {
        return "Разносторонний треугольник";
    }
}
$a = isset($argv[1]) ? (float)$argv[1] : 0;
$b = isset($argv[2]) ? (float)$argv[2] : 0;
$c = isset($argv[3]) ? (float)$argv[3] : 0;

$result = Treygol($a, $b, $с);
echo $result . "\n";
