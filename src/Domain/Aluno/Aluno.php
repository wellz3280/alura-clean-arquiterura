<?php
    declare(strict_types=1);
    namespace EstudosCleanArch\Domain\Aluno;

use EstudosCleanArch\Domain\ValueObjects\Cpf;
use EstudosCleanArch\Domain\ValueObjects\Email;

class Aluno
{
    private Cpf $cpf;
    private string $nome;
    private Email $email;
    private array $telefone;
    // Named constructors
    public static function comCpfNomeEmail(string $cpf,string $nome, string $email):Aluno
    {
        return new Aluno(new Cpf($cpf),$nome,new Email ($email));
    }

    public function __construct(Cpf $cpf, string $nome, Email $email,)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->email =  $email;
    }

    public function adicionarTelefone(string $ddd,string $numero):self
    {
       $this->telefone[] = new Telefone($ddd,$numero);
        return $this;
    }

    public function getCpf():Cpf
    {
        return $this->cpf;
    }

    public function getNome():string
    {
        return $this->nome;
    }

    public function getEmail():Email
    {
        return $this->email;
    }

    public function getTelefone():array
    {
        return $this->telefone;
    }
}

