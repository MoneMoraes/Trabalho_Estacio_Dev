<?php
    include 'carrinho.class.php';
    session_start();

    $chave = $_GET['cod'];
    $op = $_GET['op'];

    if ($op == 1) {
        $_SESSION['carrinho'][$chave]->Quantidade += 1;
    }
    if ($op == 2) {
        if ($_SESSION['carrinho'][$chave]->Quantidade > 1){

            $_SESSION['carrinho'][$chave]->Quantidade -= 1;
        }
    }   
    header("Location: carrinho.php");
?>