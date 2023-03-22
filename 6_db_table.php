<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/table.css">
    <title>Użytkownicy</title>
</head>
<body>
    <h4>Użytkownicy</h4>
    <table>
        <tr>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Data urodzenia</th>
            <th>Miasto</th>
            <th>Województwo</th>
            <th>Państwo</th>
        </tr>
        <?php
        require_once "./scripts/db/connect.php";
        $sql = "SELECT * FROM users u INNER JOIN cites c on c.id = u.city_id INNER JOIN states s on s.id = c.state_id INNER JOIN countries co on co.id = s.country_id";
        $result = $conn->query($sql);
        while ($user = $result->fetch_assoc()) {
            echo <<< TABLEUSERS
            <tr>
                <td>$user[firstName]</td>
                <td>$user[lastName]</td>
                <td>$user[birthday]</td>
                <td>$user[city]</td>
                <td>$user[state]</td>
                <td>$user[country]</td>
            </tr>
            TABLEUSERS;
        }
        echo "</table>";
    ?>
</body>
</html>