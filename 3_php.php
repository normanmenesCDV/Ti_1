<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Początek strony</h4>
    <?php
        // include - jeśli plik nie zostanie dołączony, wtedy WARNING, ale dalsza część strony będzie wykonywna
        include "./scripts/list.php"; # _once sprawia, że jeśli wcześniej został podpięty ten plik, to nie będzie on podpięty po raz drugi
        @include_once "./scripts/nieIstenijacyPlik.php"; # @ na początku w przypadku wystąpienia błędów, nie wyświetla komunikatu o błędzie

        // requre - jeśli plik nie zostanie dołączony, wtedy FATAL ERROR i dalsza część strony nie będzie wykonywna
        echo "<br>Require<br>";
        require "./scripts/list.php";
        require_once "./scripts/nieIstenijacyPlik.php";
        @require "./scripts/nieIstenijacyPlik.php"; # @ usuwa wyświetlanie błędu, ale błąd nie usuwa się - cały czas jest
    ?>
     <h4>Koniec strony</h4>
</body>
</html>