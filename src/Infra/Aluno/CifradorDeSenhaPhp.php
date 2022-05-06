<?php
    declare(strict_types=1);
    namespace EstudosCleanArch\Infra\Aluno;

use EstudosCleanArch\Domain\Aluno\HashDeSenhas;

class CifradorDeSenhaphp implements HashDeSenhas
{
    public function cifrar(string $senha): string
    {
        return  password_hash($senha,PASSWORD_ARGON2ID);
    }

    public function verificar(string $senhaEmTexto, string $senhaCifrada): bool
    {
        return password_verify($senhaEmTexto,$senhaCifrada);
    }
}