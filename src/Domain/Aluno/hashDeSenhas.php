<?php
    declare(strict_types=1);
    namespace EstudosCleanArch\Domain\Aluno;

interface HashDeSenhas
{
    public function cifrar(string $senha):string;
    public function verificar(string $senhaEmTexto,string $senhaCifrada):bool;
}