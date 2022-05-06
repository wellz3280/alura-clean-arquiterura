<?php
    declare(strict_types=1);
    namespace EstudosCleanArch\Application\Contracts;

interface Service
{
    public function hundle(InputBoundryInterface $input):OutputBoundryInterface;
}