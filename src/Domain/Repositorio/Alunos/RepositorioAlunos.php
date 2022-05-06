<?php
    declare(strict_types=1);
    namespace EstudosCleanArch\Domain\Aluno\Repositorio\Alunos;

use EstudosCleanArch\Domain\Aluno\Aluno;
use EstudosCleanArch\Domain\ValueObjects\Cpf;

interface RepositorioAlunos
{
    public function todosAlunos():array;
    public function adicionarAluno(Aluno $aluno):void;
    public function buscarAluno(Cpf $cpf):Aluno;
}