<?php


namespace App;
use PHPUnit\Framework\TestCase;
class DNITest extends TestCase
{

    private $dniSinLetra = 12345678;
    private $dniConLetra;



    private function calcularLetraDNITest($dniSinLetra)
    {
        $letras = "TRWAGMYFPDXBNJZSQVHLCKE";
        $indice = $dniSinLetra % 23;
        return $letras[$indice];
    }

    private function calcularDNIConLetraTest()
    {
        $letra = $this->calcularLetraDNITest($this->dniSinLetra);
        return $this->dniSinLetra . $letra;
    }

    public function getDNIConLetraTest()
    {
        $this->assertContains($this->dniSinLetra, $this->dniConLetra);
        return $this->dniConLetra;
    }

}