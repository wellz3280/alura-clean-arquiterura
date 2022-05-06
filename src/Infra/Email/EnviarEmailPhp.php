<?php
    declare(strict_types=1);
    namespace EstudosCleanArch\Infra\Email;

use EstudosCleanArch\Domain\ValueObjects\Email;

final class EnviarEmailPhp 
{
    private string $para;
    private string $assunto;
    private string $mensagen;
    private array $header;
    private string $additional;

    public function __construct( string $para,string $assunto,
        string $mensagen,array $header,
        string $additional)
    {
        $this->para = $para;
        $this->assunto = $assunto;
        $this->mensagen = $mensagen;
        $this->header = $header;
        $this->additional= $additional;
    }

    //usando bilioteca mail do php
    public function sendMail():bool
    {
         return mail($this->para,$this->assunto,$this->mensagen,$this->header,$this->additional);
    }


}
// $header = [
//     'from' => 'weliton@weliton.com',
//      'Reply-To' => 'weliton@weliton.com',
//     'X-Mailer' => 'PHP/' . phpversion()
// ];
// $email = new EnviarEmailPhp('geovane@weliton.com','testes de email',
// 'testando a implementação de email',$header,'');
// $email->sendMail();