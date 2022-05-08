<?php
    declare(strict_types=1);
    namespace EstudosCleanArch\Application\Service\MatricularAlunoDto;

class MatricularAlunoDto
{
    private string $cpfAluno;
    private string $nomeAluno;
    private string $emailAluno;

    public function __construct(string $cpfAluno, string $nomeAluno,string $emailAluno)
    {
        $this->cpfAluno = $cpfAluno;
        $this->nomeAluno = $nomeAluno;
        $this->emailAluno = $emailAluno;
    }
}