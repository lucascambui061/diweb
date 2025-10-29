<?php
 class calculadora{
    public $numero1;
    public $numero2;

    public function __construct($numero1,$numero2){
        $this->numero1 = $numero1;
        $this->numero2 = $numero2;
    }
      public function somaNumeros(){
       echo nl2br("$this->numero1 + $this->numero2 = ".$this->numero1 + $this->numero2."\n");

    }
      public function subtracaoNumeros(){
        echo nl2br("$this->numero1 - $this->numero2 = ".$this->numero1 - $this->numero2."\n");
 
    }
      public function multiplicacaoNumeros(){
        echo nl2br("$this->numero1 x $this->numero2 = ".$this->numero1 * $this->numero2."\n");
 
    }
       public function divisaoNumeros(){
        echo nl2br("$this->numero1 % $this->numero2 = ".$this->numero1 % $this->numero2."\n");
 
    }
 }
   
    $calcular = new calculadora(10,20);
    $calcular-> somaNumeros();
    $calcular-> subtracaoNumeros();
    $calcular-> multiplicacaoNumeros();
    $calcular-> divisaoNumeros();



?>