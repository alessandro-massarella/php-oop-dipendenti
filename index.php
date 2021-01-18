<!-- Generate la gerarchia di classi in PHP che rappresenta il contesto in allegato. 
La funzione calcola_compenso deve basarsi sugli attributi intrinseci dell'oggetto per generare il valore corretto. 
La funzione to_string deve stampare in formato stringa il contenuto delle proprieta' dell'oggetto su cui e' stata definita (solo Persona e Impiegato la definiscono, ma se volessi, potrei invocarla su ogni tipo di impiegato ). 
Attenzione ad utilizzare un trait laddove necessario.... 
( l'attributo commissione di Progetto contiene il compenso dovuto all'impiegato che svolge il progetto ) -->


<?php

require_once 'persona.php';
require_once 'impiegato.php';

$persona1 = new Persona('Alessandro', 'Massarella', 'codfisc');
echo $persona1->toString();







?>

