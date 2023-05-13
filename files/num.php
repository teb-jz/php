<!DOCTYPE html>
<html lang = "pl">
<head>
    <meta charset = "UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Liczby</h1>
    <?php

        $num = 7.61;

        echo "<b>Konwersja/rzutowanie:</b><br>";
        // Konwersja/rzutowanie, czyli zmiana typu na inny,
        // zachodzi poprzez dodanie okrągłego nawiasu z odpowiedniaą nazwą
        // przed wartością, którą chcemy konwertować
        echo "Liczba zmiennoprzecinkowa $num przekonwertowana na liczbę całkowitą to ", (int)$num, ".<br><br>";

        echo "<b>Notacja naukowa/wykładnicza:</b><br>";
        // Liczba po znaku "e" wskazuje, w którą stronę
        // i o ile miejsc przesuwamy kropkę
        echo "2.614e7 = ", 2.614e7, "<br>";
        echo "1.632e-4 = ", 1.632e-4, "<br><br>";

        $a = 9;
        $b = 2;

        echo "<b>Podstawowe operacje arytmetyczne:</b><br>";
        echo "Suma: $a + $b = ", $a + $b, "<br>";
        echo "Różnica: $a - $b = ", $a - $b, "<br>";
        echo "Iloczyn: $a * $b = ", $a * $b, "<br>";
        echo "Iloraz: $a / $b = ", $a / $b, "<br>";
        echo "Potęga: $a<sup>$b</sup> = ", $a ** $b, "<br>";
        // (int)($a / $b) - część całkowita z dzielenia
        echo "Reszta z dzielenia: $a % $b = ", $a % $b, ", bo $a = $b * ", (int)($a / $b), " + ", $a % $b, "<br><br>";

        echo "<b>Stała matematyczna:</b><br>";
        echo "Liczba PI: ", pi(), "<br><br>";

        $x = -3.25;
        $y = 1.3487;
        $z = 0;

        echo "<b>Inne funkcje operujące na liczbach:</b><br><br>";

        echo "Najmniejsza wartość spośród $x, $y i $z to ", min($x, $y, $z), ".<br>";
        echo "Największa wartość spośród $x, $y i $z to ", max($x, $y, $z), ".<br>";
        echo "Wartość bezwzględna liczby $x to ", abs($x), ".<br>";
        echo "Liczba $y zaokrąglona do dwóch miejsc po przecinku wynosi ", round($y, 2), ".<br><br>";

        $number1 = 4;
        $number2 = 3;

        echo "Pierwiastek kwadratowy z liczby $number1 wynosi ", sqrt($number1), ".<br>";
        echo "Potęga $number1<sup>$number2</sup> wynosi ", pow($number1, $number2), ".<br><br>";

        echo "Losowo wygenerowana liczba z zakrasu [-5; 5]: ", rand(-5, 5);

    ?>
    <br><br><a href = "./">Powrót</a>
</body>
</html>
