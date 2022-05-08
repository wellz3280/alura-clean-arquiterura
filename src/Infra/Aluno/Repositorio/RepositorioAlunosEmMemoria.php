<?php   
    declare(strict_types=1);
    namespace EstudosCleanArch\Infra\Aluno\Repositorio;

use EstudosCleanArch\Domain\Aluno\Aluno;
use EstudosCleanArch\Domain\Aluno\Repositorio\Alunos\RepositorioAlunos;
use EstudosCleanArch\Domain\ValueObjects\Cpf;

class RepositorioDeAlunoEmMemoria implements RepositorioAlunos
{
    private array $alunos = [];

    public function adicionar(Aluno $aluno): void
    {
        $this->alunos[] = $aluno;
    }

    public function buscarPorCpf(Cpf $cpf): Aluno
    {
        $alunosFiltrados = array_filter(
            $this->alunos,
            fn (Aluno $aluno) => $aluno->cpf() == $cpf
        );

        if (count($alunosFiltrados) === 0) {
            throw new AlunoNaoEncontrado($cpf);
        }

        if (count($alunosFiltrados) > 1) {
            throw new \Exception();
        }

        return $alunosFiltrados[0];
    }

    public function buscarTodos(): array
    {
        return $this->alunos;
    }
}