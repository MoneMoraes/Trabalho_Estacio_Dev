<?php
    include 'carrinho.class.php';
    session_start();

    $cod = $_POST['cod'];

    if($cod==1){

        $c = new Carrinho;
        $c->Id=1;
        $c->Produto="Jaqueta de Couro Masculina Premium com Capuz Removível";
        $c->Preco=360.90;
        $c->Quantidade=$_SESSION['carrinho'][0]->Quantidade + 1;
        $c->Imagem="eu";
        $_SESSION['carrinho'][0] = $c;
    };
    if($cod==2){

        $c = new Carrinho;
        $c->Id=2;
        $c->Produto="Jaqueta de motociclista regular manga longa da poliuretana zíper";
        $c->Preco=310.90;
        $c->Quantidade=$_SESSION['carrinho'][1]->Quantidade + 1;
        $c->Imagem="a";
        $_SESSION['carrinho'][1] = $c;
    };
    if($cod==3){

        $c = new Carrinho;
        $c->Id=3;
        $c->Produto="Botão Duplo Simples elegante Agasalhos";
        $c->Preco=440.99;
        $c->Quantidade=$_SESSION['carrinho'][2]->Quantidade + 1;
        $c->Imagem="b";
        $_SESSION['carrinho'][2] = $c;
    };
    if($cod==4){

        $c = new Carrinho;
        $c->Id=4;
        $c->Produto="Casaco puffer cropped manga longo de poliéster simples";
        $c->Preco=390.90;
        $c->Quantidade=$_SESSION['carrinho'][3]->Quantidade + 1;
        $c->Imagem="c";
        $_SESSION['carrinho'][3] = $c;
    };
    if($cod==5){

        $c = new Carrinho;
        $c->Id=5;
        $c->Produto="Terno Tradicional";
        $c->Preco=510.99;
        $c->Quantidade=$_SESSION['carrinho'][4]->Quantidade + 1;
        $c->Imagem="d";
        $_SESSION['maquina'][4] = $c;
    };
    if($cod==6){

        $c = new Carrinho;
        $c->Id=6;
        $c->Produto="Blazer Masculino Slim 2 Botões Corte Italiano";
        $c->Preco=799.99;
        $c->Quantidade=$_SESSION['carrinho'][5]->Quantidade + 1;
        $c->Imagem="e";
        $_SESSION['carrinho'][5] = $c;
    };

    header("Location: index.php");
?>