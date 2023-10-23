<?php 

namespace Php\Biblioteca\Controller;
use Php\Blibioteca\Model\Entity\Categoria;
use Php\Blibioteca\Model\DAO\CategoriaDAO;

class CategoriaController{


    //HTTP GET
    public function inserir(){
        require '../src/View/Categoria/inserir.php';
    }
    public function gravar()
    {
        $categoria = new Categoria('', $_POST['descricao']);
        $categoriaDAO = new CategoriaDAO();
        session_start();
        if($categoriaDAO->inserir($categoria)){
            $_SESSION['gravar'] = true;
        }else{
            $_SESSION['gravar'] = false;
        }
        require '../src/View/Categoria/index.php';
    }

}