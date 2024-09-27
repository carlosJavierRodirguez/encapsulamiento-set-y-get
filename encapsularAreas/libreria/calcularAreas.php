<?php
require('numeros.php');

class Areas extends Numeros
{
    public $areaCirculo;
    public $areaCuadrado;
    public $areaRectangulo;
    public $areaTriangulo;

    public function rectangulo()
    {
        $this->areaRectangulo = $this->getNumeroUno() *  $this->getNumeroDos();
        return  $this->areaRectangulo;
    }

   public function triangulo()
    {
        $this->areaTriangulo = ($this->getNumeroUno() *  $this->getNumeroDos()) / 2;
        return  $this->areaTriangulo;
    }

   public function cuadrado()
    {
        $this->areaCuadrado = $this->getNumeroUno() *  $this->getNumeroUno();
        return  $this->areaCuadrado;
    }

   public function circulo()
    {
        $this->areaCirculo = ($this->getNumeroUno() *  $this->getNumeroUno()) * 3.1416;
        return  $this->areaCirculo;
    }
}
