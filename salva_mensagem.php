<?php
    include_once('conexao.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];


    $result_msg_contato = "INSERT INTO mensagens_contatos(nome, email, telefone, assunto, mensagem, created) VALUES ('$nome', '$email', '$telefone', '$assunto', '$mensagem', NOW()) ";
    
    header("location:index.php");
    
    $resultado_msg_contato = mysqli_query($conn, $result_msg_contato)    
    
   
?>