<?php
//Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

/*$squadre = [
    [
        "squadra di casa" => ["Verona", 91],
        "squadra ospit" => ["Varese" => 98]
    ],
    [
        "squadra di casa"[["Olimpia Milano", 55]],
        "squadra ospit"[["Cantù", 60]]
    ],
    [
        "squadra di casa"[["Scafati", 61]],
        "squadra ospit"[["Reggina", 59]]
    ],
];
$squadra = null;
foreach ($squadre as $squadreEL) {
    foreach ($squadreEL as $squadraEl) {
        foreach ($squadraEl as $squadra) {
            echo $squadra;
        }
    }
}*/

$matches = [
    [
        'home_team' => 'lakers',
        'guest_team' => 'cicago bulls',
        'home_points' => 10,
        'guest_points' => 5
    ],
    [
        'home_team' => 'lakers',
        'guest_team' => 'cicago bulls',
        'home_points' => 11,
        'guest_points' => 15
    ],
    [
        'home_team' => 'lakers',
        'guest_team' => 'cicago bulls',
        'home_points' => 17,
        'guest_points' => 51
    ],
];



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1 </title>
</head>

<body>
    <ul>
        <?php foreach ($matches as $match) : ?>
            <li> <?php echo $match['home_team'] . ' ' . $match['guest_team'] ?> | <?php echo $match['home_points'] . ' ' . $match['guest_points'] ?> </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>