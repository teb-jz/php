<!DOCTYPE html>
<html lang = "pl">
<head>
    <meta charset = "UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Tablice</h1>
    <?php

        echo "<b>Podstawowe operacje na tablicach:</b><br><br>";

        // Deklaracja tablicy, jej elementami są liczby całkowite
        $array = array(3, 5, 2, 4, -1, 0);

        // Wyświetlenie ilości elementów w tablicy $array
        echo "Ilość elementów w tablicy wynosi ", count($array), ".<br>";

        // Wyświetlenie trzeciego elementu tablicy $array
        // Elementy w tablicach numerujemy od zero
        // Pierwszy element ma indeks 0, drugi ma indeks 1...
        // Indeks podajemy w nawiasach kwadratowych
        echo "Trzeci element tablicy ma wartość ", $array[2], ".<br>";

        echo "Najmniejszy element tablicy to ", min($array), ".<br>";

        // Usunięcie ostatniego elementu z tablicy $array
        array_pop($array);
        // Wstawienie na koniec tablicy $array elementu 19
        array_push($array, 9);
        // Sortowanie (rosnąco) tablicy $array
        sort($array);
        // Sortowanie (malejąco) tablicy $array
        rsort($array);
        // Odwrócenie kolejności elementów tablicy $array
        array_reverse($array);
        
        // Elementami tablicy mogą być również napisy
        $words = array("Ala", "ma", "kota");

        // Wyświetlenie elementów tablicy $words połączonych spójnikiem (w tym przypadku myślnikiem)
        // W nawiasie podajemy spójnik oraz interesującą Nas tablicę
        echo join("-", $words), "<br><br>";

        echo "<b>Tablice asocjacyjne:</b><br>";

        // Zamiast indeksów będących kolejntmi liczbami, mamy ciągi znaków
        $arr = array("a" => 1, "b" => 2, "c" => 3);

        // Wyświetlenie elementu tablicy $arr o indeksie "b"
        echo 'Wartość elementu "b" wynosi ', $arr["b"], ".<br><br>";

        echo "<b>Tablice dwuwymiarowe (macierze):</b><br>";

        // Deklaracja tablicy dwuwymiarowej
        // Macierz to tablica, której elementami są również tablice
        $matrix = array(

            array(0, 2),
            array(1, 3)
        );
        
        // Wyświetlenie elementu macierzy $matrix o indeksie 0.1
        // Macierz ma dwa indeksy, gdzie pierwszy określa wiersz, a drugi kolumnę
        // W związku z tym musimy podać dwie wartości w dwóch oddzielnych
        // nawiasach kwadtatowych
        echo 'Wartość elementu 0.1 wynosi ', $matrix[0][1], ".<br><br>";

        echo "<b>Iterowanie po elementach tablicy (pętla foreach):</b><br>";
        // W nawiasie okrągłym podajemy zmienną $array zawierającą tablicę,
        // a następnie nową nazwę zmiennej, która będzie przyjmowała
        // wartości poszczególnych elementów tablicy
        foreach ($array as $element) {
            echo $element, " ";
        }

    ?>
    <br><br><a href = "./">Powrót</a>
</body>
</html>
