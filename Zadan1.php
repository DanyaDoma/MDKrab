<?php
function Progression($a, $b, $c)
{
	return ($b - $a) == ($c - $b);
}
echo "Введите первое число:";
$a = (float)fgets(STDIN);
echo "Введите второе число:";
$b = (float)fgets(STDIN);
echo "Введите третье число:";
$c = (float)fgets(STDIN);

if (Progression($a, $b, $c)) {
	echo "Числа являются  последовательными челенами арифметической прогрессии. \n";
} else {
	echo "Числа не  являются последовательными челенами арифметической прогрессии. \n";
}
