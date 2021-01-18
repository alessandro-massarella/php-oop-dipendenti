<?php



class Impiegato extends Persona {
    protected $codice_impiegato;
    protected $compenso;

    public function __construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $compenso) {
        parent:: __construct($nome, $cognome, $codice_fiscale);  /* invoco gli attributi del padre (persona) */
        $this->codice_impiegato = $codice_impiegato;
        $this->compenso = $compenso;
    }

    
    public function calcola_compenso(){
        return $this->compenso;
    }
    public function toString() {

    }
}


class ImpiegatoSalariato extends Impiegato {
    protected $giorni_lavorati;
    protected $compenso_giornaliero;

    public function __construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $compenso_giornaliero, $giorni_lavorati) {
        parent:: __construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $compenso_giornaliero);
        $this->giorni_lavorati = $giorni_lavorati;
        $this->compenso_giornaliero = $compenso_giornaliero;
    }

    public function calcola_compenso(){
        return $this->compenso_giornaliero * $this->giorni_lavorati;
    }
}


class ImpiegatoAOre extends Impiegato {
    protected $ore_lavorate;
    protected $compenso_orario;

    public function __construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $compenso, $ore_lavorate) {
        parent:: __construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $compenso);
        $this->ore_lavorate = $ore_lavorate;
        $this->compenso_orario = $compenso;
    }

    public function calcola_compenso(){ 
        return $this->compenso_orario * $this->ore_lavorate;
    }

    
}

trait Progetto {
    protected $nome;
    public $commissione;

};


class ImpiegatoSuCommissione extends Impiegato {
    
    use Progetto;

    public function __construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $commissione) {
        parent:: __construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $commissione);

    }
    public function calcola_compenso(){
        return $this->commissione; /* è il compenso dell'impiegato su commissione, collegato al progetto */


    }

}

?>
