<?php
    declare(strict_types=1);
    namespace EstudosCleanArch\Indiacao;

use DateTimeImmutable;
use EstudosCleanArch\Domain\Aluno\Aluno;

class Indicacao
{
    private Aluno $indicante;
    private Aluno $indicado;
    private DateTimeImmutable $data;

    public function __construct(Aluno $indicante, Aluno $indicado)
    {
        $this->indicante = $indicante;
        $this->indicado = $indicado;
        $this->data = new DateTimeImmutable();
    }
}