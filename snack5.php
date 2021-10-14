<!--  
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
-->

<?php 
    $paragrafo = 'Apple ha confermato il suo prossimo evento online, "Unleashed", fissato per le ore 19 del 18 ottobre. Il mese scorso, l\'azienda ha presentato la nuova linea di iPhone 13, i nuovi iPad e l\'Apple Watch Series 7.Considerati i prodotti che ancora attendono un aggiornamento di design e funzioni, sono attualmente candidati a fare la loro comparsa virtuale dall\'Apple Park di Cupertino, i MacBook Pro e gli AirPods di terza generazione. Stando alle indiscrezioni degli esperti, la prossima famiglia di portatili sarà la prima, di fascia alta, a sostituire i chip Intel con i processori casalinghi di Apple, conosciuti come Silicon. Il MacBook, un tempo prodotto di punta della Mela, rimane uno degli oggetti che meglio performa in quanto a vendite, generando circa il 10% delle entrate del colosso americano nel segmento \'devices\'.Stando al sito 9to5mac, i modelli futuri includeranno un nuovo design, un caricatore magnetico MagSafe e display rinnovati nelle dimensioni, da 14 e 16 pollici. I dispositivi dovrebbero anche presentare la porta HDMI rimossa dall\'ultima generazione ma non la touch bar superiore, che probabilmente non ha ottenuto riscontri così positivi nel tempo. Apple ha aggiornato l\'ultima volta i MacBook Pro di fascia bassa alla fine dello scorso anno, con il processore M1, mentre i più recenti notebook top di gamma risalgono al 2019. Oltre ai nuovi MacBook, Apple sta lavorando al successore dei suoi AirPods, in terza generazione, da non confondersi con gli AirPods Pro, che hanno un formato diverso dello stelo, più corto. Gli AirPods 3 dovrebbero invece presentare lo stesso design iconico, con l\'aggiunta di tecnologie che già conosciamo, come lo Spatial Audio, con rilevamento dinamico della posizione della testa, ad oggi disponibile solo su AirPods Pro e le cuffie Max.'; 
?>

<?php 
  $paragrafoDiviso = explode('.', $paragrafo); 

  foreach ($paragrafoDiviso as $singoloParagrafo) {
      if ($singoloParagrafo !== '') {
        echo $singoloParagrafo . '. ' . '<br>' . '<br>';
      }
  }
?>


