<?php
    declare(strict_types=1);
    namespace EstudosCleanArch\Application\Indicacao;

use EstudosCleanArch\Application\Contracts\Service;
use EstudosCleanArch\Domain\Aluno\Aluno;

interface EnviaEmailIndicacao extends Service
{
    public function enviaPara(Aluno $alunoIndicado):void;
}