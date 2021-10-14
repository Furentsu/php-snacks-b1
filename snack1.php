<!-- 
    Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario, di 8 partite. 
    Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
    Stampiamo a schermo tutte le partite con questo schema:       Olimpia Milano - Cantù | 55-60
-->

<?php 

$matchs = [
    [
        'casa' => 'Olimpia Milano',
        'ospite' => 'Virtus Segafredo',
        'puntiCasa' => 90,
        'puntiOspite' => 88
    ],
    [
        'casa' => 'Reyner Venezia',
        'ospite' => 'Dinamo Sassari',
        'puntiCasa' => 103,
        'puntiOspite' => 110
    ],
    [
        'casa' => 'New Basket Brindisi',
        'ospite' => 'Golden State Warriors',
        'puntiCasa' => 54,
        'puntiOspite' => 122
    ],
    [
        'casa' => 'Chicago Bulls',
        'ospite' => 'Pallacanestro Varese',
        'puntiCasa' => 139,
        'puntiOspite' => 66
    ],
    [
        'casa' => 'Los Angeles Lakers',
        'ospite' => 'San Antonio Spurs',
        'puntiCasa' => 76,
        'puntiOspite' => 101
    ],
    [
        'casa' => 'Boston Celtics',
        'ospite' => 'Vanoli Cremona',
        'puntiCasa' => 98,
        'puntiOspite' => 82
    ],
    [
        'casa' => 'Pallacanestro Trieste',
        'ospite' => 'New York Knicks',
        'puntiCasa' => 77,
        'puntiOspite' => 110
    ],
    [
        'casa' => 'Pallacanestro Reggiana',
        'ospite' => 'Miami Hits',
        'puntiCasa' => 21,
        'puntiOspite' => 249
    ],
]; 

?>

<ul>
    <?php foreach ($matchs as $match) { ?>

        <li> <?php echo $match['casa']; ?> -- <?php echo $match['ospite']; ?> | <?php echo $match['puntiCasa']; ?> -- <?php echo $match['puntiOspite']; ?>
        </li>
        
    <?php } ?>
    
</ul>