<?php

if(isset($POST['email']) && !empty($POST['email'])){

$nome =addslashes($_POST['name']);
$email =addslashes($_POST['email']);
$mensagem =addslashes($_POST['mensagem']);



$to="deliciasmg5@gmail.com";
$subjet = "Contato - Formulario"
$body ="Nome: " .$nome. "\n".
        "Email: ".$email. "\n".
        "Mensagem: ".$mensagem;

$header ="from:deliciasgm.c1.biz" "." "\r\n"."  
            Reply-te".$email
            ."X=Mailer:PHP/".phpversion();
            
if (mail($to,$subjet,$body,$header)){
    echo ("Eamil enviado com sucesso!");


}else{
    echo("Email não pode ser enviado");
}


}

?>