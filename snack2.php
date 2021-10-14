<!-- 
    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
    che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
    Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" 
-->

<?php 
    $dati = $_GET;

    print_r($dati);
    
    if ( empty($dati['nome']) || empty($dati['email']) || empty($dati['eta'])) {
        echo 'Inserire i dati richiesti';
    } elseif ( strlen($dati['nome']) <= 3 ) {
        echo 'Accesso negato';
    } elseif ( strpos($dati['email'], '.') == false || strpos($dati['email'], '@') == false ) {
        echo 'Accesso negato';
    } elseif ( !is_numeric($dati['eta']) ) {
        echo 'Accesso negato';
    } else {
        echo 'Benvenuto/a!';
    }

?>