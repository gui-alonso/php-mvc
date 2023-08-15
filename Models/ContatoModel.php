<?php

    namespace Models;

    class ContatoModel {
    
        public function enviarFormulario() {
            $mail = new \Email('srv232.prodns.com.br', 'testes@studiowebsolutions.com.br', 'gqh44a6i1f', 'Guilherme');
            $mail->addAdress('testes@studiowebsolutions.com.br', 'Guilherme');
            $mail->formatarEmail(array('assunto'=>'Mensagem do site','corpo'=>'Aqui é uma mensagem do site.'));
            $mail->enviarEmail();
        }
   
    }
