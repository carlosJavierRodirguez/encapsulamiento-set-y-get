<?php
class Persona
{
    private $nombrePersona;

    public function setNombrePersona($nombrePersona)
    {
        $this->nombrePersona = $nombrePersona;
    }

    public function getNombrePersona()
    {
        return $this->nombrePersona;
    }
}
?>