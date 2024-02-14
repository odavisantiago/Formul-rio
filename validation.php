<?php

$nome = filter_input(INPUT_POST , "nome", FILTER_SANITIZE_STRING);

$telefone =  filter_input(INPUT_POST , "telefone", FILTER_VALIDATE_INT);

$msg = filter_input(INPUT_POST,"msg", FILTER_SANITIZE_STRING );

$to = "cleber.fidelles@qi.edu.br";
$subject = "Novo contato pelo site";
$message = "Nome : $nome
            Telefone : $telefone 
            Mensagem : $msg";
$headers = "from: cleber.fidelles@qi.edu.br";

try{
    mail($to ,$subject ,$subject ,$headers);
    echo"obrigado, em breve estaremos lhe ligando. sua vaca....";
}catch(Exception $error){
    echo "erro ao enviar teu formulario, tente novamente quando deixar de ser uma vaca";
}
