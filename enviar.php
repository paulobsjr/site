<?php

$para = "paulobsj@gmail.com";
$assunto = "E-mail do Site Pessoal";
$mensagem = utf8_decode('Nome: '.$_POST['nome']. "\r\n"."\r\n" . 'Telefone: '.$_POST['telefone']. "\r\n"."\r\n" . 'Mensagem: ' . "\r\n"."\r\n" .$_POST['mensagem']);
$dest = $_POST['email'];

$cabecalhos = "From: " .$dest;

mail($para, $assunto, $mensagem, $cabecalhos);
?>

<script>alert('Enviado com Sucesso.'); </script>

<script language='javascript'>window.location='index.html'; </script>


