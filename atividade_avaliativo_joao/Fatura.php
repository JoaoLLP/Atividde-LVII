<?php
class Fatura{
    private $descricao;
    private $qtd;
    private $valorItem;
    private $numero;


    public function getDescricao(){
        return $this->descricao;
    }
    public function getQtd(){
        return $this->qtd;
    }
    public function getNumero(){
        return $this->numero;
    }
    public function getvaloritem(){
        return $this->valorItem;
    }


    public function setNumero($numero){
        $this->numero = $numero;
    }
    public function setDescricao($descricao){
    $this->descricao = $descricao;
    }
    public function setQtd($qtd){
        $this->qtd = $qtd;
    }
    public function setValoritem($valorItem){

        $this->valorItem = $valorItem;
    }
    public function totalFatura(){
        $totalFatura = $this->qtd*$this->valorItem;
    
        if( $totalFatura < 0){
            $totalFatura = 0;
        } else{
            return $totalFatura;
        }
    }       

}

?>