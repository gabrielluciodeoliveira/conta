<?php

class conta
{
    private $numero;
    private $agencia;
    private $proprietario;
    private $saldo;
    private $limite;

public function __construct() {}

public function create($_numero, $_agencia, $_proprietario, $_saldo, $_limite)
{
    $this->numero = $_numero;
    $this->agencia = $_agencia;
    $this->proprietario = $_proprietario;
    $this->saldo = $_saldo;
    $this->limite = $_limite;
}

public function set_numero($_numero)
{
    $this->numero = $_numero;
}
public function set_agencia($_agencia)
{
    $this->agencia = $_agencia;
}
public function set_proprietario($_proprietario)
{
    $this->proprietario = $_proprietario;
}
public function set_agencia($_agencia)
{
    $this->agencia = $_agencia;
}
public function set_limite($_limite)
{
    $this->limite = $_limite;
}
 ////get
 public function get_numero($_numero)
{
    return $this->numero;
}
public function get_agencia($_agencia)
{
    return $this->agencia;
}
public function get_proprietario($_proprietario)
{
    return $this->proprietario;
}
public function get_agencia($_agencia)
{
    return $this->agencia;
}
public function get_limite($_limite)
{
    return $this->limite;
}

//funçoes sacar e depositar

public function depositar($_valor)
{
    $this->saldo += $_valor;
    echo "Seu saldo é de" . $this->saldo;
}
public function sacar($_valor)
{
    if ($this->saldo < $_VALOR) 
    {
        echo
    }
}

}
?>