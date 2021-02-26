<!-- 

PHP Snack 1:         DONE
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite
di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra
di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60

-->
<?php

    echo 'PHP Snack 1<br><br>';

    $matches = [

        [
            'squadraCasa' => 'Virtus Bologna',
            'squadraOspite' => 'Varese',
            'puntiCasa' => '35',
            'puntiOspite' => '70'
        ],
        [
            'squadraCasa' => 'Reyer Venezia',
            'squadraOspite' => 'Fortitudo Bologna',
            'puntiCasa' => '84',
            'puntiOspite' => '39'
        ],
        [
            'squadraCasa' => 'Virtus Roma',
            'squadraOspite' => 'Mens Sana Siena',
            'puntiCasa' => '12',
            'puntiOspite' => '47'
        ],
        [
            'squadraCasa' => 'Treviso',
            'squadraOspite' => 'Reggiana',
            'puntiCasa' => '68',
            'puntiOspite' => '54'
        ],
        [
            'squadraCasa' => 'Stella Azzurra',
            'squadraOspite' => 'Trieste',
            'puntiCasa' => '78',
            'puntiOspite' => '32'
        ]

    ];

    for($i = 0; $i < count($matches); $i++) {
        echo $matches[$i]['squadraCasa'] . ' - ' . $matches[$i]['squadraOspite'] . ' | ' . $matches[$i]['puntiCasa'] . ' - ' . $matches[$i]['puntiOspite'] . '<br><br>';
    }

?>

<!--
    
PHP Snack 2:         DONE
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-snacks-b1</title>
</head>
<body>

    <?php

    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];
    $snail = '@';
    $dot = '.';

    if(strlen($name)>3 && strpos($mail, $snail) !== false && strpos($mail, $dot)!== false && is_numeric($age)){
        $result = 'Accesso riuscito';
    }else{
        $result = 'Accesso negato';
    }

    ?>

    <h4>PHP Snack 2</h4>

    <div class="results-container">
        <span class="results"><?php echo $result ?></span>
    </div>

</body>
</html>