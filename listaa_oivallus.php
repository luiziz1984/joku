<?php

/*
    Haetaan tietokannasta oivallukset
    https://www.w3schools.com/php/php_mysql_select.asp
*/

require_once("mysqlConnection.php");

$sql = "SELECT * FROM oivallus";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "
        <tr>
            <td>" . $row["paiva"]. "</td>
            <td>" . $row["oivallus"]. "</td>
            <td><a href='poista_oivallus.php?id=" . $row["id"]. "'>X</a></td>
        </tr>";
    }
} else {
    //Ei oivalluksia
}

$conn->close();

?>