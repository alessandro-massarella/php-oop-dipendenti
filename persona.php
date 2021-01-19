<?php

class Persona {
    protected $nome;
    protected $cognome;
    protected $codice_fiscale;

    public function __construct($nome, $cognome, $codice_fiscale) {
        
        if (!is_string($nome)) {  /* INSERISCO UN'ECCEZIONE. IN QUESTO CASO CONTROLLA SE SI INSERISCE UNA STRINGA VALIDA */
            throw new Exception('Non hai inserito caratteri validi, non puoi usare numeri');
        }
        if (!is_string($cognome)) {
            throw new Exception('Non hai inserito caratteri validi, non puoi usare numeri');
        }

        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->codice_fiscale = $codice_fiscale;
    }

    public function toString() {
        $stringify = 'Nome Persona:' . ' ' . $this->nome .'; '. 'Cognome: ' . $this->cognome . '; '. 'Codice fiscale: '. $this->codice_fiscale;
        
        return $stringify;
    }
}



?>