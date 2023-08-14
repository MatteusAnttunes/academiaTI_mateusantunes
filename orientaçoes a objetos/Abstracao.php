<?php

class Pessoas
{
    private string $nome;
    private int $idade;
    public string $genero;
    public float $altura;
    public float $peso;
    public string $cabelo;
    private string $corOlhos;
    private string $cor; 

    public function __construct(string $nome, int $idade, string $genero, float $altura, float $peso, string $cabelo, string $corOlhos, string $cor)
    {
        $this-> nome = $nome;
        $this-> setIdade($idade);
        $this-> setCorOlhos($corOlhos);
        $this-> setGenero($genero);
        $this-> altura = $altura;
        $this-> peso = $peso;
        $this-> cabelo = $cabelo;
        $this-> cor = $cor;
    }

    private function setNome(string $nome) : void
    {
        $this ->nome = $nome;
    }
    public function setGenero(string $genero) : void
    {
        $opcoes = ["masculino", "Feminino"];
        if (in_array($genero, $opcoes));{
            $this->genero = $genero;
            return;
        }
    }
    
         private function setIdade(int $idade): void
    
        { if (($idade < 0) || ($idade > 100)) {
            echo "idade informada e invalida " . PHP_EOL;
            exit();}

     }
         private function setCor(string $cor): void
     {
        $opcoes = ["Branco","Negro","Moreno"];
        if(in_array($genero, $opcoes)); {
        $this -> cor = $cor;
        return;
     }
    }
         public function setAltura(float $altura): void
    {
          if(($altura < 0)||($altura >=2.30)){
            echo "Altura invalia " . PHP_EOL;
            exit();
          }
    }
         public function setPeso (float $peso): void 
    {
          if(($peso < 0) && ($peso > 200)){
            echo "Peso invalido " . PHP_EOL;
            exit();
          }

    }
         public function setCabelo (string $cabelo): void
    { 
        $opcoes = ["liso", "cacheado", "ondulado", "crespo"];
        if(in_array($cabelo, $opcoes)){
        $this ->cabelo = $cabelo;
        return; 
    }
    }
    
        private function setCorOlhos(string $corOlhos): void 
    
    {
         $opcoes = ["azul", "castanho", "verde", "preto"];
         if(in_array($corOlhos, $opcoes)) {
            $this->corOlhos = $corOlhos;
            return;
         }
    }
}
