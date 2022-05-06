<?php
    declare(strict_types=1);
    namespace EstudosCleanArch\Application\Indicacao;

use EstudosCleanArch\Domain\Aluno\Aluno;

interface EnviaEmailIndicacao
{
    public function enviaPara(Aluno $alunoIndicado):void;
}