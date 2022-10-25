<?php
include "./podaci.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>HTML&PHP</title>
    
</head>
<body>
    <h1>Prodavnica elektronike</h1>
    <h3>Narudzbenica</h3>
    <table><thead>
        <th>Naziv</th>
        <th>Jedinicna cena</th>
        <th>Kolicaina</th>
        <th>PDV</th>
        <th>Rabat</th>
        <th>Ukupan iznos</th>
    </thead>
        <tbody>
        <?php
        foreach($proizvodi as $pr) :
          ?>
          <tr>
                <td><?php echo $pr["naziv"]?></td>
                <td><?php echo $pr["cena"]?></td>
                <td><?php echo $pr["kolicina"]?></td>
                <td><?php echo vratiPDV($pr["cena"])?></td>
                <td><?php echo vratiRabat($pr["kolicina"])?></td>
                <td><?php echo vratiIznos ($pr["cena"], $pr["kolicina"])?></td>
    
            
            </tr>

          <?php
        endforeach;

?>

            
            <!-- <tr>
                <td>Monitor</td>
                <td>350</td>
                <td>35</td>
            </tr>
            <tr>
                <td>Tastatura</td>
                <td>200</td>
                <td>47</td>
            </tr> -->
        </tbody>
        <tfoot>
            <td colspan="5"><B>Ukupno</B></td>
            <td><?php echo vrstiukupno() ?></td>
        </tfoot>
    </table>
</body>
</html>