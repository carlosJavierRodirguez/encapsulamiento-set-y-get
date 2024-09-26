<?php
require('numeros.php');

class Areas extends Numeros
{
    private $numeroDos;
    private $numeroUno;
    public $areaCirculo;
    public $areaCuadrado;
    public $areaRectangulo;
    public $areaTriangulo;

    function rectangulo()
    {
        $this->areaRectangulo = $this->numeroUno->getNumeroUno() *  $this->numeroDos->getNumeroDos();
        return  $this->areaRectangulo;
    }

    function triangulo()
    {
        $this->areaTriangulo = ($this->numeroUno->getNumeroUno() *  $this->numeroDos->getNumeroDos()) / 2;
        return  $this->areaTriangulo;
    }

    function cuadrado()
    {
        $this->areaCuadrado = $this->numeroUno->getNumeroUno() *  $this->numeroUno->getNumeroUno();
        return  $this->areaCuadrado;
    }

    function circulo()
    {
        $this->areaCirculo = ($this->numeroUno->getNumeroUno() *  $this->numeroUno->getNumeroUno()) * 3.1416;
        return  $this->areaCirculo;
    }
}
