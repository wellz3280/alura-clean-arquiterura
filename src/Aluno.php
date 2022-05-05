<?php
    declare(strict_types=1);
    namespace EstudosCleanArch;

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
}

$aluno = Aluno::comCpfNomeEmail('36529972803','weliton','weliton@weliton.com.br');