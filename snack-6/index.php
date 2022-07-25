<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $class66 = [
        [
            'name' => 'Luca',
            'lastname' => 'Uno',
            'marks' => [
                'italiano' => 8,
                'matematica' => 6,
                'storia' => 7,
                'ginnastica' => 10
            ],
        ],
        [
            'name' => 'Paolo',
            'lastname' => 'Melazzi',
            'marks' => [
                'italiano' => 6,
                'matematica' => 'nc',
                'storia' => 7,
                'ginnastica' => 10
            ],
        ],
        [
            'name' => 'Laura',
            'lastname' => 'Verdi',
            'marks' => [
                'italiano' => 10,
                'matematica' => 8,
                'storia' => 8,
                'ginnastica' => 7
            ],
        ],
        [
            'name' => 'Cosimo',
            'lastname' => 'Fini',
            'marks' => [
                'italiano' => 10,
                'matematica' => 10,
                'storia' => 10,
                'ginnastica' => 10
            ],
        ],
    ]
    ?>
    <?php function calcAverage($ita, $mate, $sto, $ginn) {
        $average = ($ita + $mate + $sto + $ginn) / 4;
        echo $average;
    } ?>
    <div>
        <?php for($i = 0; $i < count($class66); $i++) {?>
            <div class="student">
                <?php echo $class66[$i]['name'] . ' ' . $class66[$i]['lastname']  ?> <br>
                MEDIA STUDENTE:<?php calcAverage($class66[$i]['marks']['italiano'], $class66[$i]['marks']['matematica'], $class66[$i]['marks']['storia'], $class66[$i]['marks']['ginnastica']) ?>
            </div>
        <?php } ?>
    </div>
</body>
</html>