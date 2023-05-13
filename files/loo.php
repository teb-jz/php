<!DOCTYPE html>
<html lang = "pl">
<head>
    <meta charset = "UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Pętle</h1>
    <?php
    
        echo "<b>Iteracje pętli while:</b><br>";
        // Deklarujemy zmienną $i, która będzie iteratorem pętli, i przypisujemy jej wartość 0
        // W nawiasach okrągłych zapisujemy warunek jaki musi być spełniony, aby pętla się wykonała
        // Pomiędzy klamrami wyświetlamy wartość iteratora
        // Inkrementujemy zmienną $i (zwiększamy jej wartość o 1)
        $i = 0;
        while ($i < 5) {

            echo $i, " ";
            $i++;
        }

        echo "<br><br><b>Iteracje pętli for:</b><br>";
        // Wewnątrz nawiasów okrągłych
        // deklarujemy zmienną $j, która będzie iteratorem pętli, i przypisujemy jej wartość 10
        // po średniku zapisujemy warunek jaki musi być spełniony, aby pętla się wykonała
        // po kolejnym średniku zapisujemy jak ma zmieniać się iterator
        // (dekrementacja - zmniejszenie wartości o 1)
        // Pomiędzy klamrami wyświetlamy wartość iteratora
        for ($j = 10; $j > 5; $j--) {

            echo $j, " ";
        }
        
    ?>
    <br><br><a href = "./">Powrót</a>
</body>
</html>
