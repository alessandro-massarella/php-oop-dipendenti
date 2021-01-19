<?php

class Persona {
    protected $nome;
    protected $cognome;
    protected $codice_fiscale;

    public function __construct($nome, $cognome, $codice_fiscale) {
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