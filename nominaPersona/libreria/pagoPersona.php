<?php
class PagoPersona
{
    private $diasTrabajados;
    private $valorDia;
    public $salario;
    public $pagoSalud;
    public $pagoPension;
    public $pagoArl;
    public $descuentos;
    public $pagoTotal;

    public function __construct(Salario $valorDia, Salario $diasTrabajados)
    {
        $this->diasTrabajados = $diasTrabajados;
        $this->valorDia = $valorDia;
    }

    public function calcularSalario()
    {
        $this->salario = $this->diasTrabajados->getDiasTrabajados() * $this->valorDia->getValorDia();

        return $this->salario;
    }

    public function calcularSalud()
    {
        $this->pagoSalud = $this->calcularSalario() * 0.12;
        return $this->pagoSalud;
    }

    public function calcularPension()
    {
        $this->pagoPension = $this->calcularSalario() * 0.16;
        return $this->pagoPension;
    }

    public function calcularArl()
    {
        $this->pagoArl = $this->calcularSalario() * 0.052;
        return $this->pagoArl;
    }

    public function calcularDescuentos()
    {
        $this->descuentos = $this->calcularSalud() + $this->calcularPension() + $this->calcularArl();
        return $this->descuentos;
    }

    public function calcularPagoFinal()
    {
        $this->pagoTotal = $this->calcularSalario() - $this->calcularDescuentos();
        return $this->pagoTotal;
    }
}
?>

?>