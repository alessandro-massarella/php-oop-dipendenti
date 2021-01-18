<?php

require 'progetto.php';


class Impiegato extends Persona {
    protected $codice_impiegato;
    protected $compenso;
    
    public function calcola_compenso(){

    }
    public function toString() {

    }
}


class ImpiegatoSalariato extends Impiegato {
    protected $giorni_lavorati;
    protected $compenso_giornaliero;

    public function calcola_compenso(){

    }
}


class ImpiegatoAOre extends Impiegato {
    protected $ore_lavorate;
    protected $compenso_orario;

    public function calcola_compenso(){

    }
    
}

class ImpiegatoSuCommissione {
    public function calcola_compenso(){

    }

}

?>
