<!-- Utilizzare questo array: https://pastebin.com/CkX3680A
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<!DOCTYPE html>

<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Snack 6</title>
</head>
<body>
    <div class="container">

        <div class="teachers">
            <ul>
                <?php foreach ($db['teachers'] as $teacher) { ?>   
                    <li> <?php echo $teacher['name'] . ' ' . $teacher['lastname']; ?> </li>
                <?php } ?>
            </ul>
        </div>

        <div class="pms">
            <ul>
                <?php foreach ($db['pm'] as $pm) { ?>   
                    <li> <?php echo $pm['name'] . ' ' . $pm['lastname']; ?> </li>
                <?php } ?>
            </ul>   
        </div>
    </div>
</body>
</html>