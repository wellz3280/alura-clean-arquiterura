<?php

use EstudosCleanArch\Domain\Aluno\Aluno;

require __DIR__.'/vendor/autoload.php';

$cpf = $argv[1];
$nome = $argv[2];
$email = $argv[3];
$ddd = $argv[4];
$numero = $argv[5];

$aluno = Aluno::comCpfNomeEmail($cpf,$nome,$email)
        ->adicionarTelefone($ddd,$numero);