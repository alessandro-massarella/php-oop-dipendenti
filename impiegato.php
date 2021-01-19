<?php


require_once 'persona.php';

class Impiegato extends Persona {
    protected $codice_impiegato;
    protected $compenso;

    public function __construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $compenso) {
        parent:: __construct($nome, $cognome, $codice_fiscale);  /* invoco gli attributi del padre (persona) */

        if (!is_numeric($compenso)) {
            throw new Exception('Non hai inserito un numero valido');
        }

        $this->codice_impiegato = $codice_impiegato;
        $this->compenso = $compenso;
    }
    
    public function calcola_compenso(){
        return $this->compenso;
    }

    public function toString() {
        $stringify = parent::toString();  /* richiamo la stringa generata in persona.php */
        $stringify .= 'Codice impiegato: '. $this->codice_impiegato .' '. 'Compenso: '. $this->compenso;  /* aggiungo la nuova stringa a quella già generata in persona.php */ 

        return $stringify;

    }
}


class ImpiegatoSalariato extends Impiegato {
    protected $giorni_lavorati;
    protected $compenso_giornaliero;

    public function __construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $compenso, $giorni_lavorati) {
        parent:: __construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $compenso);

        if (!is_numeric($giorni_lavorati)) {
            throw new Exception('Devi inserire un numero di giorni valido');
        }

        $this->giorni_lavorati = $giorni_lavorati;
        $this->compenso_giornaliero = $compenso;
    }

    public function calcola_compenso(){
        $this->compenso = $this->compenso_giornaliero * $this->giorni_lavorati;
        
        return $this->compenso;
    }
}


class ImpiegatoAOre extends Impiegato {
    protected $ore_lavorate;
    protected $compenso_orario;

    public function __construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $compenso, $ore_lavorate) {
        parent:: __construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $compenso);
// TRY AND CATCH
        try {
            if(($ore_lavorate > 30) && ($ore_lavorate < 1)) {
                throw new Exception('Devi inserire un numero di ore valido, compreso tra 1 e 30');
            }
            $this->ore_lavorate = $ore_lavorate;
            $this->compenso_orario = $compenso;
        } catch (Exception $e) {
            echo 'Eccezione: ' . $e->getMessage();
        }

    }

    public function calcola_compenso(){ 
        return $this->compenso_orario * $this->ore_lavorate;
    }

    
}

trait Progetto {
    protected $nome_progetto;      /* di solito anche il trait va messo in file separato */
    protected $commissione;

};

class ImpiegatoSuCommissione extends Impiegato {
    
    use Progetto;

    public function __construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $compenso, $nome_progetto, $commissione) {
        parent:: __construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $compenso);

        $this->nome_progetto = $nome_progetto;
        $this->commissione = $commissione;

    }
    public function calcola_compenso(){
        return $this->compenso = $this->commissione; /* è il compenso dell'impiegato su commissione, collegato al progetto */


    }

}

?>
