<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $bool = true;
        $entier = 12;
        $string = "chaine de caracter";
        $float = 12.42;

    ?>
    <table>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
        <tr>
            <td><?=gettype($string)?></td>
            <td>$string</td>
            <td><?=$string?></td>
        </tr>
        <tr>
            <td><?=gettype($bool);?></td>
            <td>$bool</td>
            <td><?=$bool?></td>
        </tr>
        <tr>
            <td><?=gettype($entier)?></td>
            <td>$entier</td>
            <td><?=$entier?></td>
        </tr>
        <tr>
            <td><?=gettype($float)?></td>
            <td>$float</td>
            <td><?=$float ?></td>
        </tr>
    </table>
    
</body>
</html>