<?php

class EmailInvalidoExecption extends Exception{

    // personaliza a apresentação do objeto como string
    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
    
    public function getMenssagem(){
        return $this->message;
    }
    
     public function customFunction() {
        return $this->message;
    }
}

