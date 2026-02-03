<?php

namespace App;
class DNI {

    private $dniSinLetra; 
    private $dniConLetra; 

    public function __construct($dniSinLetra) {
        $this->dniSinLetra = $dniSinLetra;
        $this->dniConLetra = $this->calcularDNIConLetra();
    }

    private function calcularLetraDNI($dniSinLetra) {
        $letras = "TRWAGMYFPDXBNJZSQVHLCKE"; 
        $indice = $dniSinLetra % 23; 
        return $letras[$indice]; 
    }

    private function calcularDNIConLetra() {
        $letra = $this->calcularLetraDNI($this->dniSinLetra);
        return $this->dniSinLetra . $letra;
    }

    public function getDNIConLetra() {
        return $this->dniConLetra;
    }

}