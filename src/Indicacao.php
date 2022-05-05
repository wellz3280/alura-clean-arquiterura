<?php
    declare(strict_types=1);
    namespace EstudosCleanArch;

class Indicacao
{
    private Aluno $indicante;
    private Aluno $indicado;

    public function __construct(Aluno $indicante, Aluno $indicado)
    {
        $this->indicante = $indicante;
        $this->indicado = $indicado;
    }
}