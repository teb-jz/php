<!DOCTYPE html>
<html lang = "pl">
<head>
    <meta charset = "UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    
        // komentarz

        # komentarz

        /*
            Zmienne zaczynamy od znaku $, poprzedzającego nazwę zmiennej
            Nazwa zmiennej musi zaczynać się od litery lub podkreślenia
            Nazwa zmiennej nie może zaczynać się od cyfry
            Nazwa zmiennej może zawierać jedynie znaki alfa-numeryczne i podkreślenia
            Wielkość znaków jest rozróznialna
        */

        /*

            Główne typy danych:

            String - ciąg znaków
            Integer (int) - liczba całkowita
            Float (float) - liczba zmiennoprzecinkowa
            Boolean (bool) - zmienna logiczna
            Array - tablica

        */
    
    ?>
    <h1>Zagadnienia</h1>
    <a href = "str.php">Ciągi znaków</a><br>
    <a href = "num.php">Liczby</a><br>
    <a href = "ifs.php">Instrukcje warunkowe</a><br>
    <a href = "loo.php">Pętle</a><br>
    <a href = "arr.php">Tablice</a><br>
    <h2>Formularz</h2>
    <form method = "GET" action = "res.php">
        Liczba:<br>
        <input type = "number" name = "num"><br>
        Tekst:<br>
        <input type = "text" name = "txt"><br>
        <button>Submit</button>
    </form>
</body>
</html>
