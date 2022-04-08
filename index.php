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
    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
    che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

    <h1>SNACK 2</h1>

    <?php

    if (isset($_GET['name']) && isset($_GET['email']) && isset($_GET['age'])) {
        $name = $_GET['name'];
        $email = $_GET['email'];
        $age = $_GET['age'];
    }

    if (strlen($name) > 3 && strpos($email, '@') && strpos($email, '.') && is_numeric($age)) { ?>
        <h4>Accesso Riuscito</h4>
    <?php
    } else { ?>
        <h4>Accesso Negato</h4>
    <?php
    }

    ?>


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

    <br>
    <!-- Snack 5
    Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

    <h1>SNACK 5</h1>

    <?php

    $testo = "Mai, mai scorderai
    L'attimo, la terra che tremò
    L'aria si incendiò
    E poi silenzio
    E gli avvoltoi sulle case sopra la città
    Senza pietà.
    Chi mai fermerà
    La follia, che per le strade va
    Chi mai spezzerà
    Le nostre catene.
    Chi da quest'incubo nero ci risveglierà
    Chi mai potrà.
    Ken, sei tu
    Fantastico guerriero
    Sceso come un fulmine dal cielo.
    Ken, sei tu
    Il nostro condottiero
    E nessuno al mondo adesso è solo.
    Ken, sei libero
    L'unico, l'ultimo angelo
    Ken, sei l'energia
    L'azzurra magia (Magia, magia, magia)
    Stella dell'orsa maggiore
    Stella su di noi
    Guerriero va!.
    Ken, sei tu
    Col pugno tuo più forte
    Tu che hai messo KO la morte.
    Ken, sei tu
    L'acciaio nelle mani
    Tu la mia speranza nel domani.
    Mai, mai scorderai
    L'attimo
    La terra che tremò
    Vai, vai tu vivrai
    Giorni felici.
    Stella dell'orsa maggiore
    Stella su di noi
    Guerriero vai";

    $array_paragrafi = explode('.', $testo);

    var_dump($array_paragrafi);

    ?>

    <div><?= $testo ?></div>

    <?php for ($index = 0; $index < count($array_paragrafi); $index++) { ?>
        <h6><?= $array_paragrafi[$index] ?></h6> <?php
                                                }
                                                    ?>
</body>

</html>