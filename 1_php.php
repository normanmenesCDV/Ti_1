<?php
    $firstName = "Janusz";
    $lastName = "Nowak";
    echo "Imię i naziwsko: $firstName $lastName<br>";
    echo 'Imię i naziwsko: $firstName $lastName<br>';

    // heredoc
    echo <<< DATA
    Imię: $firstName<br>
    Naziwsko: $lastName<br>
    DATA;
    
    $data = <<< DATA
    Imię: $firstName<br>
    Naziwsko: $lastName<br>
    DATA;
    echo $data;

    // nowdoc
    echo <<< 'DATA'
    Imię: $firstName<br>
    Naziwsko: $lastName<br>
    DATA;

    // systemy liczbowe
    $bin = 0b1011;
    echo "$bin <br>"; // 11
    $oct = 011;
    echo "$oct <br>"; // 9
    $hex = 0xA1;
    echo "$hex <br>"; // 161
?>