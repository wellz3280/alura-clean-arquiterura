<?php
    declare(strict_types=1);
    namespace EstudosCleanArch\Domain\Aluno;

use InvalidArgumentException;

class Telefone
{
    private string $ddd;
    private string $numero;
    
    public function __construct(string $ddd, string $numero)
    {
        $this->setDdd($ddd);
        $this->setNumero($numero);
    } 
    

    public function setDdd(string $ddd):void
    {
        if(preg_match('/\d{2}/',$ddd) !== 1){
            throw new InvalidArgumentException("DDD invalido");
        }else {
            $this->ddd = $ddd;
        }

    }

    public function setNumero(string $numero):void
    {
        if(preg_match('/\d{8,9}/',$numero) !==1){
            throw new InvalidArgumentException("Numero de telefone invalido");
        }else {
            $this->numero = $numero;
        }
    }

    public function __toString():string
    {
        return "({$this->ddd}) {$this->numero}";
    }
}

echo $teste = new Telefone('11','76340280');