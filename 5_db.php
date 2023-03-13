<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Użytkownicy</title>
</head>
<body>
    <?php
        require_once "./scripts/db/connect.php";
        // echo $conn->connect_errno;
        $sql = "SELECT * FROM `users`;";
        $result = $conn->query($sql);
        // $user = $result->fetch_assoc();
        // print_r($user);
        // echo $user["firstName"];

        while($user = $result->fetch_assoc()) {
            // print_r($user);
            // var_dump($user);
            // echo "<br>";
            $yearOfBirth = substr($user["birthday"], 0, 4);
            echo <<< USERS
                Imię i nazwisko: $user[firstName] $user[lastName]<br>
                Data urodzenia: $user[birthday]<br>
                Rok urodzenia: $yearOfBirth<br>
                <hr>
                USERS;
        }
    ?>
</body>
</html>