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
echo "Введите длину стороны a:";
$a = (float)fgets(STDIN);
echo "Введите длину стороны b:";
$b = (float)fgets(STDIN);
echo "Введите длину стороны c:";
$c = (float)fgets(STDIN);

$result = Treygol($a, $b, $c);
echo $result . "\n";
