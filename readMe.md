# Wprowadzenie

PHP to interpretowany, skryptowy język programowania zaprojektowany do generowania stron internetowych i budowania aplikacji webowych.

# Podstawowa składnia

Kod zapisujemy w pliku o rozszerzeniu *php*. Jest to standardowy dokument *HTML* wzbogacony o możliwości oferowane przez interpreter *PHP*.

```php
<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Sample page</h1>

    <?php
        echo "Sample text";
    ?>

    <p>Lorem ipsum dolor sit amet.</p>
</body>
</html>
```

Treść skryptu *PHP* umieszczamy pomiędzy znacznikami `<?php` `?>`. Pozostała część witryny to typowy kod *HTML*.

# Wyświetlanie tekstu

Podstawową funkjcą służącą do wyświetlania elementów na stronie jest `echo`.

```php
echo "<h2>Header</h2>";
```

Z pomocą tej funkcji jesteśmy w stanie między innymi nadawać strukturę stronie, dodając kolejne elementy, oraz wyświetlać dane tekstowe, wypełniając stronę zawartością.

> Znaczniki *html* wyświetlone przy pomocy `echo` zostają odpowiednio zinterpretowane przez przeglądarkę.

# Zmienne

Do deklarowania zmiennych służy znak `$`, następnie podajemy nazwę symboliczną zmiennej, a po znaku równości jej wartość.

```php
$text = "text";

echo $text;
```

Po zadeklarowaniu zmiennej możemy się do niej odwoływać poprzez podanie jej nazwy symbolicznej.

```php
$text = "text";

echo "Przykładowy $text<br>";
echo 'Przykładowy $text<br>';
echo "Przykładowy ", $text, "<br>";
echo 'Przykładowy ', $text, '<br>';
```

Wyróżniamy kilka podstawowych sposobów zapisywania ciągów znaków - w zależności od użycia `"` lub `'` będzie on inaczej interpretowany.

> Kolejne ciągi do wyświetlenia można wymieniać po przecinku.

```php
$number = 2;
$anotherNumber = 3.14;
$flag = true;
```

*PHP* posiada kilka podstawowych, wbudowanych typów prostych, jak liczby czy wartości logiczne.

# Instrukcje warunkowe

Instrukcje warunkowe rozpoczynamy od słowa kluczowego `if`, po czym podajemy warunek, a między klamrami znaleźć się ma blok kodu przeznaczony do wykonania, jeżeli warunek będzie spełniony.

```php
$number = 5;

if ($number < 0 or $number > 4) {

    echo "Liczna $number jest ujemna lub większa niż 4.<br>";
}

elseif ($number != 3.5) {

    echo "Liczna $number nie jest równa 3.5<br>";
}

else {

    echo "Liczna $number jest równa 3.5.";
}
```

*PHP*, podobnie jak inne języki pozwala na bardziej rozbudowane konstrukcje.

# Pętle

Wyróżniamy dwa standardowe rodzaje pętli. Warunek pętli konstruujemy tak samo, jak warunki w instrukcjach warunkowych `if`. Możemy korzystać z operatorów relacyjnych i logicznych.

```php
$i = 0;

while ($i < 5) {

    echo $i, " ";
    $i++;
}
```

W przypadku pętli `while` należy pamiętać o zadeklarowaniu iteratora przed pętlą.

```php
for ($j = 10; $j > 5; $j--) {

    echo $j, " ";
}
```
