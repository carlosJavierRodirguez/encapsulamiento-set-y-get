<?php

class Operaciones
{
    private $numeroUno;
    private $numeroDos;
    public $resta;
    public $suma;
    public $multiplicacion;
    public $division;

    public function __construct(Numero $numeroUno, Numero $numeroDos)
    {
        $this->numeroUno = $numeroUno;
        $this->numeroDos = $numeroDos;
    }
    // encapsular suma
    public function sumar()
    {
        $this->suma = $this->numeroUno->getValor() + $this->numeroDos->getValor();
        return  $this->suma;
    }

    // encapsular resta
    public function restar()
    {
        $this->resta = $this->numeroUno->getValor() - $this->numeroDos->getValor();
        return  $this->resta;
    }

    // encapsular multiplicación
    public function multiplicar()
    {
        $this->multiplicacion = $this->numeroUno->getValor() * $this->numeroDos->getValor();
        return  $this->multiplicacion;
    }

    // encapsular division
    public function division()
    {
        $this->division = $this->numeroUno->getValor() / $this->numeroDos->getValor();
        return  $this->division;
    }
}
