<!DOCTYPE html>
<html lang = "pl">
<head>
    <meta charset = "UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Ciągi znaków</h1>
    <?php

        $text = "tekst";

        echo "<b>Różne sposoby wyświetlania:</b><br>";
        echo "Przykładowy $text<br>";
        echo 'Przykładowy $text<br>';
        echo "Przykładowy ", $text, "<br>";
        echo 'Przykładowy ', $text, '<br><br>';
        
        $text_1 = "Witaj";
        $text_2 = "świecie!";
        $text_3 = $text_1." ".$text_2;
        
        echo "<b>Łączenie ciągów znaków (konkatenacja):</b><br>";
        echo $text_3, "<br><br>";

        $string = "Ala ma kota";

        echo "<b>Przykładowe operacje na ciągach znaków:</b><br><br>";
        echo "Przykładowy ciąg znaków:<br>",
            $string, "<br><br>";
        echo "Długość ciągu znaków: ",
            strlen($string), "<br>";
        echo "Ilość wyrazów w ciągu znaków: ",
            str_word_count($string), "<br><br>";
        echo "Indeks pierwszego wystąpienia szukanego ciągu znaków: ",
            strpos($string, "ma"), "<br><br>";
        // Pierwsza wartość w nawiasie okrągłym to zamieniany ciąg znaków,
        // drugi to ciąg znaków, na który będzie zamieniany
        // trzeci to ciąg znaków, który przekształcamy
        echo "Zmiana wybranej części ciągu znaków na inną:<br>",
            str_replace("kota", "psa", $string), "<br><br>";
        echo "Odwrócony ciąg znaków:<br>",
            strrev($string);

    ?>
    <br><br><a href = "./">Powrót</a>
</body>
</html>
