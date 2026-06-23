<?php

class Funcionario
{
    protected $nome;
    protected $salario;

    public function __construct($nome, $salario)
    {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function calcularBonus()
    {
        return $this->salario * 0.10;
    }

    public function exibirDados()
    {
        echo "Funcionário: {$this->nome}<br>";
    }
}

class Gerente extends Funcionario
{
    public function calcularBonus()
    {
        return $this->salario * 0.20;
    }

    public function exibirDados()
    {
        echo "Funcionário: {$this->nome} (Gerente)<br>";
    }
}

class Desenvolvedor extends Funcionario
{
    public function calcularBonus()
    {
        return $this->salario * 0.15;
    }

    public function exibirDados()
    {
        echo "Funcionário: {$this->nome} (Desenvolvedor)<br>";
    }
}

$funcionarios = [
    new Gerente("Vitor", 10000),
    new Desenvolvedor("Luiza", 8000),
    new Gerente("Antonio", 15000),
    new Desenvolvedor("Sartori", 12000)
];

foreach ($funcionarios as $funcionario) {
    $funcionario->exibirDados();
    echo "Bônus: " . $funcionario->calcularBonus() . "<br><br>";
}

?>