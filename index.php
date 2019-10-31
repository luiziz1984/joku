<?php

/*
    Yhdistetään tietokantaan käyttäen eri tiedostoa
    https://www.w3schools.com/php/php_includes.asp
*/

require_once("mysqlConnection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Document</title>
</head>
<body>

    <main>

    <div class="box">

        <div class="box1">

            <h1>Mitä opin tänään</h1>

        </div>

        <div class="uusi">

            
            
                <div class="box2">

                    <form action="lisaa_oivallus.php" method="post">

                        <input name="lisaa_uusi_oivallus" type="text"></input>

                        <input type="submit" value="lisää uusi">

                    </form>

                </div>

        </div>

        <div class="table">

                <table>
                        <tr>
                          <th>Päivä</th>
                          <th>Oivallus</th>
                          <th>Poista</th>
                        </tr>
                        <tr>
                          <td>31.10.2019</td>
                          <td>https://github.com/PT-JaloIT/MIT-opin-t-n-n</td>
                          <td>X</td>
                        </tr>
 
<?php

include("listaa_oivallus.php");

?>                
                    
                    
                </table>

        </div>

        <div class="footer">

            <p>Copyright Aki Siltanen 2019</p>
            

            

        </div>

    </div>

</main>
    
   

</body>
</html>
