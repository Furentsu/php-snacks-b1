<!-- Creare un array contenente qualche alunno di un'ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php 
    $classe = [
        [
            'nome' => 'Gino',
            'cognome' => 'Gini',
            'voti' => [22, 18, 29, 24, 25]
        ],
        [
            'nome' => 'Lollo',
            'cognome' => 'Lolli',
            'voti' => [17, 19, 23, 22, 22]
        ],
        [
            'nome' => 'Pino',
            'cognome' => 'Pini',
            'voti' => [30, 30, 29, 30, 30]
        ],
        [
            'nome' => 'Mario',
            'cognome' => 'Draghi',
            'voti' => [27, 25, 24, 28, 27]
        ],
        [
            'nome' => 'Sandro',
            'cognome' => 'Sandri',
            'voti' => [18, 25, 23, 27, 23]
        ]
    ]; 
?>

<ul>
    <?php foreach ($classe as $alunno) { ?>
        <li> 
            <?php echo $alunno['nome'] . ' ' . $alunno['cognome']; ?>  -- 
            <?php echo array_sum($alunno['voti']) / count($alunno['voti']); ?>
        </li>
    <?php } ?>
</ul>



