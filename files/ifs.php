<!DOCTYPE html>
<html lang = "pl">
<head>
    <meta charset = "UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Instrukcje warunkowe</h1>
    <?php

        $a = 3;
        $b = 5;

        echo "<b>Podstawowe operatory relacyjne:</b><br>";
        // Wyświetlamy czy $a i $b są równe
        echo "$a == $b - ", var_dump($a == $b), "<br>";
        // Wyświetlamy czy $a i $b są różne
        echo "$a != $b - ", var_dump($a != $b), "<br>";
        // Wyświetlamy czy $a jest większe niż $b
        echo "$a > $b - ", var_dump($a > $b), "<br>";
        // Wyświetlamy czy $a jest mniejsze niż $b
        echo "$a < $b - ", var_dump($a < $b), "<br>";
        // Wyświetlamy czy $a jest większe lub równe niż $b
        echo "$a >= $b - ", var_dump($a >= $b), "<br>";
        // Wyświetlamy czy $a jest mniejsze lub równe niż $b
        echo "$a <= $b - ", var_dump($a <= $b), "<br><br>";

        $q = true;
        $r = false;

        echo "<b>Podstawowe operatory logiczne:</b><br>";
        // Wyświetlamy czy $q i $r jest prawdą
        // Aby operator zwrócił prawdę, oba warunki muszą być prawdziwe
        // operator "and" lub "&&"
        echo "true and false - ", var_dump($q and $r), "<br>";
        // Wyświetlamy czy $q lub $r jest prawdą
        // Aby operator zwrócił prawdę, przynajmniej jeden warunek musi być prawdziwy
        // operator "or" lub "||"
        echo "true or false - ", var_dump($q and $r), "<br>";

        $number = 3.5;

        echo "<br><b>Instrukcje warunkowe:</b><br>";
        // Warunek podajemy w nawiasach okrągłych
        // Pomiędzy klamrami umieszczamy kod, który ma się wykonać,
        // jeżeli warunek będzie spełniony
        if ($number != 4) {
            echo "Liczna $number nie jest równa 4.<br>";
        }

        // Pierwszy warunek nie będzie spełniony,
        // więc przechodzimy do następnego,
        // poprzedzonego słowem kluczowym "elseif"
        if ($number != 3.5) {
            echo "Liczna $number nie jest równa 3.5<br>";
        }
        elseif ($number >= 0 and $number < 4) {
            echo "Liczna $number leży w przedziale [0;4).<br>";
        }

        // Żaden z warunków nie jest spełniony,
        // więc przechodzimy do "else" (w przeciwnym wypadku)
        if ($number != 3.5) {
            echo "Liczna $number nie jest równa 3.5<br>";
        }
        elseif ($number < 0 or $number > 4) {
            echo "Liczna $number jest ujemna lub większa niż 4.<br>";
        }
        else {
            echo "Liczna $number jest równa 3.5.";
        }

    ?>
    <br><br><a href = "./">Powrót</a>
</body>
</html>
