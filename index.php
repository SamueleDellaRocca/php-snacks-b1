<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Snack 1
    Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60 -->
    <h1>SNACK 1</h1>
    <ul>
        <?php

        $array_partite = [
            [
                'casa' => [
                    'squadra' => 'Roma',
                    'punteggio' => 3,
                ],

                'ospiti' => [
                    'squadra' => 'Lazio',
                    'punteggio' => 0,
                ],
            ],

            [
                'casa' => [
                    'squadra' => 'Milan',
                    'punteggio' => 2,
                ],

                'ospiti' => [
                    'squadra' => 'Inter',
                    'punteggio' => 2,
                ],
            ],

            [
                'casa' => [
                    'squadra' => 'Juve',
                    'punteggio' => 1,
                ],

                'ospiti' => [
                    'squadra' => 'Napoli',
                    'punteggio' => 2,
                ],
            ],
        ];


        for ($index = 0; $index < count($array_partite); $index++) { ?>
            <li>
                <span> <?= $array_partite[$index]['casa']['squadra'] ?></span> -
                <span> <?= $array_partite[$index]['ospiti']['squadra'] ?></span> |
                <span> <?= $array_partite[$index]['casa']['punteggio'] ?></span> -
                <span> <?= $array_partite[$index]['ospiti']['punteggio'] ?></span>
            </li>
        <?php }

        ?>


    </ul>
    <br>
    <!-- Snack 2
    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

    <h1>SNACK 2</h1>


    <form action="">

        <label for="name">name</label>
        <input type="name" name="name" id="name">

        <label for="email">email</label>
        <input type="email" name="email" id="email">

        <label for="age">age</label>
        <input type="age" name="age" id="age">

        <button>Verifica</button>
    </form>

    <br>

    <!-- Snack 4
    Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

    <h1>SNACK 4</h1>

    <?php
    $numero_random = rand(1, 20);
    $array_numeri = [];

    while (count($array_numeri) < 15) {

        $numero_random = rand(1, 20);

        if (!in_array($numero_random, $array_numeri)) {
            $array_numeri[] = $numero_random; ?>

            <span><?= $numero_random ?> - </span>
    <?php
        }
    }

    var_dump($array_numeri);
    ?>


    <!-- Snack 5
    Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->



</body>

</html>