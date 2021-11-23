<?php

class Dado
{
    private $minNumDado;
    private $maxNumDado;

    // Setters
    public function setMinNumDado($param){
        $this->minNumDado = $param;
    }

    public function setMaxNumDado($param){
        $this->maxNumDado = $param;
    }

    // Getters
    public function getMinNumDado(){
        return $this->minNumDado;
    }

    public function getMaxNumDado(){
        return $this->maxNumDado;
    }


}
