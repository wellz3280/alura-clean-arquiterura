<?php
    declare(strict_types=1);
    namespace EstudosCleanArch\Domain\Aluno;

use EstudosCleanArch\Domain\ValueObjects\Cpf;
use EstudosCleanArch\Domain\ValueObjects\Email;

class FabricaAluno
{
    private Aluno $aluno;
    
    public  function comCpfEmailNome(string $cpf, string $email, string $nome):self
    {
        $this->aluno = new Aluno(new Cpf($cpf), $nome,new Email($email));    
        return $this;
    }

    public function addTelefone(string $ddd, string $numero):self
    {
        $this->aluno->adicionarTelefone($ddd,$numero);
        return $this;
    }

    public function aluno():Aluno
    {
        return $this->aluno;
    }
}