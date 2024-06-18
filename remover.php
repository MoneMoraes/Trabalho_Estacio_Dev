<?php 
    include 'carrinho.class.php';
    session_start();
    $chave = $_POST['cod'];
    unset($_SESSION['carrinho'][$chave]);
    header("Location: carrinho.php");
?>