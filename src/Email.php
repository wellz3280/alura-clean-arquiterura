<?php
    declare(strict_types=1);
    namespace EstudosCleanArch;

use InvalidArgumentException;

class Email
{
    private string $enderecoEmail;

    public function __construct(string $enderecoEmail)
    {
        if(filter_var($enderecoEmail,FILTER_VALIDATE_EMAIL)){
            $this->enderecoEmail = $enderecoEmail;
        }else {
            throw new InvalidArgumentException("Email Invalido");
        }
    }

    public function __toString():string
    {
        return $this->enderecoEmail;
    }

}
