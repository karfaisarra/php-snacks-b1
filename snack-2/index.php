<?php
//Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

//var_dump($_GET)
if (strlen($_GET['name']) < 3) {
    echo 'devi inserire un nome più lungo di 3 caratteri';
}
if (str_contains('@' && '.', $_GET['mail'])) {
    echo 'devi inserire un mail valida';
}
if (!is_numeric($_GET['age'])) {
    echo 'devi inserire un numero';
}
if (is_numeric($_GET['age']) && strlen($_GET['name']) >= 3 && str_contains('@' && '.', $_GET['mail'])) {
    echo 'Accesso riuscito';
} else {
    echo 'Accesso negato';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack-2</title>
</head>

<body>
    <form action="index.php">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="mail">Mail</label>
            <input type="text" name="mail" id="mail">
        </div>
        <div>
            <label for="age">Age</label>
            <input type="text" name="age" id="age">
        </div>
        <button type="submit">Invia</button>
    </form>
</body>

</html>