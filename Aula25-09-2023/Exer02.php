<?php
class Funcionario {
    private $codigo;
    private $nome;
    private $salarioBase;

    public function __construct($codigo, $nome, $salarioBase) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->salarioBase = $salarioBase;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getSalarioBase() {
        return $this->salarioBase;
    }

    public function setSalarioBase($salarioBase) {
        $this->salarioBase = $salarioBase;
    }

    public function getSalarioLiquido() {
        $inss = $this->salarioBase * 0.1;
        $ir = 0;

        if ($this->salarioBase > 2000.0) {
            $ir = ($this->salarioBase - 2000.0) * 0.12;
        }

        return $this->salarioBase - $inss - $ir;
    }

    public function __toString() {
        return get_class($this) . " Codigo: " . $this->getCodigo()
            . " Nome: " . $this->getNome() . " Salario Base: " . $this->getSalarioBase()
            . "\n Salario liquido: " . $this->getSalarioLiquido();
    }
}

class Servente extends Funcionario {
    public function __construct($codigo, $nome, $salarioBase) {
        parent::__construct($codigo, $nome, $salarioBase);
    }

    public function getSalarioLiquido() {
        // Servente recebe um adicional de 5% a título de insalubridade
        $salarioBase = parent::getSalarioBase();
        $insalubridade = $salarioBase * 0.05;
        return parent::getSalarioLiquido() + $insalubridade;
    }
}

class Motorista extends Funcionario {
    private $numeroCarteiraMotorista;

    public function __construct($codigo, $nome, $salarioBase, $numeroCarteiraMotorista) {
        parent::__construct($codigo, $nome, $salarioBase);
        $this->numeroCarteiraMotorista = $numeroCarteiraMotorista;
    }

    public function getNumeroCarteiraMotorista() {
        return $this->numeroCarteiraMotorista;
    }

    public function setNumeroCarteiraMotorista($numeroCarteiraMotorista) {
        $this->numeroCarteiraMotorista = $numeroCarteiraMotorista;
    }
}

class MestreDeObras extends Servente {
    private $funcionariosSobSupervisao;

    public function __construct($codigo, $nome, $salarioBase, $funcionariosSobSupervisao) {
        parent::__construct($codigo, $nome, $salarioBase);
        $this->funcionariosSobSupervisao = $funcionariosSobSupervisao;
    }

    public function getFuncionariosSobSupervisao() {
        return $this->funcionariosSobSupervisao;
    }

    public function setFuncionariosSobSupervisao($funcionariosSobSupervisao) {
        $this->funcionariosSobSupervisao = $funcionariosSobSupervisao;
    }

    public function getSalarioLiquido() {
        // Mestre de Obras ganha um adicional de 10% para cada grupo de 10 funcionários sob seu comando
        $salarioBase = parent::getSalarioBase();
        $insalubridade = $salarioBase * 0.05;
        $adicionalMestre = ($this->funcionariosSobSupervisao / 10) * ($salarioBase * 0.10);
        return parent::getSalarioLiquido() + $insalubridade + $adicionalMestre;
    }
}

?>