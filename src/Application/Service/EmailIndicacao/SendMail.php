<?php 
    declare(strict_types=1);
    namespace EstudosCleanArch\Application\Service\EmailIndicacao;

use EstudosCleanArch\Domain\Aluno\Aluno;
use EstudosCleanArch\Application\Indicacao\EnviaEmailIndicacao;
use EstudosCleanArch\Application\Contracts\InputBoundryInterface;
use EstudosCleanArch\Application\Contracts\OutputBoundryInterface;

final class SendMail implements EnviaEmailIndicacao
{
     public function enviaPara(Aluno $alunoIndicado):void
     {

     }

     public function hundle(InputBoundryInterface $input): OutputBoundryInterface
     {
        
     }
}