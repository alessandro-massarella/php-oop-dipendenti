<!-- Generate la gerarchia di classi in PHP che rappresenta il contesto in allegato. 
La funzione calcola_compenso deve basarsi sugli attributi intrinseci dell'oggetto per generare il valore corretto. 
La funzione to_string deve stampare in formato stringa il contenuto delle proprieta' dell'oggetto su cui e' stata definita (solo Persona e Impiegato la definiscono, ma se volessi, potrei invocarla su ogni tipo di impiegato ). 
Attenzione ad utilizzare un trait laddove necessario.... 
( l'attributo commissione di Progetto contiene il compenso dovuto all'impiegato che svolge il progetto ) -->


<?php

require_once 'persona.php';
require_once 'impiegato.php';

$persona1 = new Persona('Alessandro', 'Massarella', 'codfisc');
// echo $persona1->toString();

$impiegato1 = new Impiegato('Giulio', 'Rossi', 'codfiscrossi', 'cod:1', '2000');
// echo $impiegato1->calcola_compenso();
// echo $impiegato1->toString();


$impiegato_salariato1 = new ImpiegatoSalariato('Luca', 'Brazi', 'cod_fisc', 'imp_sal', '100', '30');
// echo $impiegato_salariato1->calcola_compenso();
// echo $impiegato_salariato1->toString();



try {
    $impiegato_a_ore1 = new ImpiegatoAOre('Lillo', 'Petroli', 'codfiscpetr', 'imp_ore_1', '40', '30');
} catch (Exception $e) {
    echo $e->getMessage();
}
echo $impiegato_a_ore1->calcola_compenso();
// echo $impiegato_a_ore1->toString();




$impiegato_commissione = new ImpiegatoSuCommissione('Roberto', 'Rossi', 'codfisc-rossi', 'cod_imp_com', '200', 'progetto: uno', '2300');

// echo $impiegato_commissione->calcola_compenso();
// echo $impiegato_commissione->toString();








?>

