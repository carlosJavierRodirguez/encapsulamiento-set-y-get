<?php
class Numeros
{
    private $numeroUno;
    private $numeroDos;

    //  public function __construct($numeroUno, $numeroDos = null)
    // {
    //     $this->numeroUno = $numeroUno;
    //     $this->numeroDos = $numeroDos;
    // }

    public function setNumeroUno($numeroUno)
    {
        $this->numeroUno = $numeroUno;
    }

    public function getNumeroUno()
    {
        return $this->numeroUno;
    }

    public function setNumeroDos($numeroDos)
    {
        $this->numeroDos = $numeroDos;
    }

    public function getNumeroDos()
    {
        return $this->numeroDos;
    }
}
