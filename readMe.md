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

# Tablice

Tablice to struktury pozwalające na przechowywanie większej ilości danych w uporządkowanej formie.

```php
$numbers = array(3, 1, 4, 1, 5);
```

Inicjalizacja tablicy odbywa się poprzez funkcję `array`. W nawiasie wypisujemy elementy.

```php
echo "Pierwszy element: ", $numbers[0];
```

Podobnie jak w innych językach, indeksowanie elementów rozpoczyna się od zera.

# Tablice asocjacyjne

Tablice asocjacyjne to tablice, w których zamiast indeksu numerycznego poszczególne elementy posiadają swoje klucze.

```php
$person = array(
    "name" => "John",
    "surname" => "Paul"
);
```

W nawiasach funkcji `array` wypisujemy kolejne pary - klucze i wartości, oddzielone znakami `=>`.

```php
echo "Mam na imię ", $person["name"];
```

W celu odniesienia się do danego elementu musimy podać jego klucz.

# Pętla foreach

Podczas pracy z tablicami, poza standardowymi pętlami, pobocna okazać może się pętla `foreach`. W tym przypadku iterujemy po kolejnych elementach, nie martwiąc się o indeksy.

```php
$letters = array('n', 'i', 'y', 'a');

foreach ($letters as $letter)
    echo $letter, " ";
```

W przypadku tablic asocjacyjnych nalęzy pomiętać o dodatkowej zmiennej do pzechowywania klucza.

```php
$numbers = array(

    "first" => 1,
    "second" => 2,
    "third" => 3
);

foreach ($numbers as $key => $value)
    echo "Klucz: ", $key, ", Wartość: ", $value, "<br>";
```

# Obsługa formularzy

Do podstawowej komunikacji z użytkownikiem wymagany jest prosty formularz z określonymi atrybutami `action` oraz `metohd`.

```html
<form action = "form.php" method = "POST">
    <label for = "name">Name</label>
    <input type = "text" id = "name" name = "name">

    <button>Submit</submit>
</form>
```

W pliku wynikowym, inforamcje z formularza znajdują się w tablicach asocjacyjnych `$_GET` lub `$_POST`, w zależności od wybranej metody.

```php
if (isset($_GET["name"]))
    echo "Name: ", $_GET["name"];
```

# Komunikacja z bazą danych

Łączenie z bazą wymaga podania adresu serwera oraz danych logowania do jednego z kont.

```php
$conn = mysqli_connect("localhost", "root", "");

if (!$conn) {

    die("Błąd połączenia: " . mysqli_connect_error() . "<br>");
}

else {

    echo "Pomyślnie nawiązano połączenie" . "<br>";

    mysqli_close($conn);
}
```

Możemy od razu wskazać interesującą nas bazę, poprzez podanie jej nazwy.

```php
$conn = mysqli_connect("localhost", "root", "", "sample");
```

Za pośrednictwem funkcji `mysqli_query` jesteśmy w stanie formułować dowolne zapytania.

```php
$sql = "CREATE TABLE sampleTable (
id INT(6) AUTO_INCREMENT NOT NULL PRIMARY KEY,
sampleText VARCHAR(30) NOT NULL
)";

if (mysqli_query($conn, $sql)) {

    echo "Pomyślnie utworzono tabelę" . "<br>";
}

else {

    echo "Błąd tworzenia tabeli: " . mysqli_error($conn) . "<br>";
}
```

W przypadku **projekcji** możemy wykorzystać pętle, by wygodniej wyświetlać interesujące nas dane.

```php
$sql = "SELECT id, sampleText FROM sampleTable";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {

        echo "id: " . $row["id"];
        echo ", sampleText: " . $row["sampleText"] . "<br>";
    }

}
```
