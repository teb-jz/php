<!DOCTYPE html>
<html lang = "pl">
<head>
    <meta charset = "UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Dane wprowadzone przez użytkownika</h1>
    <?php
    
        // Aby pobrać dane z formularza odwołujemy się
        // do wbudowanej tablicy $_GET i podajemy interesujący
        // nas indeks, będący nazwą odpowiedniego pola wejściowego
        echo "Liczba: ", $_GET['num'], "<br>";
        echo "Tekst: ", $_GET['txt'];
    
    ?>
    <br><br><a href = "./">Powrót</a>
</body>
</html>
