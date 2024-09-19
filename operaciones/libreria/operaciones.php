<?php

class Operaciones
{
    public $numeroUno;
    public $numeroDos;
    public $suma;
    public $resta;
    public $multiplicacion;
    public $division;

    public function sumar($numeroUno, $numeroDos)
    {
        $this->suma = $numeroUno + $numeroDos;

        return $this->suma;
    }
    
    public function resta($numeroUno, $numeroDos)
    {
        $this->resta = $numeroUno - $numeroDos;

        return $this->resta;
    }

    public function multiplicacion($numeroUno, $numeroDos)
    {
        $this->multiplicacion = $numeroUno * $numeroDos;

        return $this->multiplicacion;
    }

    public function division($numeroUno, $numeroDos)
    {
        $this->division = $numeroUno / $numeroDos;

        return $this->division;
    }
}
