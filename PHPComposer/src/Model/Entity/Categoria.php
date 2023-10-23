<?php 

namespace Php\Biblioteca\Model\Entity;

class Categoria {

    private $id;
    private $descricao;

    public function __construct($id, $descricao)
    {
        $this->id = $id;
    }
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getDescricao(){
        return $this->descricao;
    }
    
}
