<?php
    declare(strict_types=1);
    namespace EstudosCleanArch\Infra\Aluno;

use EstudosCleanArch\Domain\Aluno\HashDeSenhas;

class CifradorDeSenhaMd5 implements HashDeSenhas
{
    public function cifrar(string $senha): string
    {
        return md5($senha);
    }

    public function verificar(string $senhaEmTexto, string $senhaCifrada): bool
    {
        return md5($senhaEmTexto) === $senhaCifrada;
    }
}