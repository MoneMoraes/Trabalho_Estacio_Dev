<?php
session_start();
include 'header.php';

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belion-Cadastro</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <style>
        .formularion {
             width: 500px;
             margin-left: 560px;
             background-color: #FFDEAD;
             
                    

        }

        .mb-3 {
            width: 350px;
            margin-left: 20px;
        }

       
    </style>
</head>

<body>
    
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    



<!-- Estante de produtos --------------------------------------------------------------------------------------- -->
<?php include('message_produto.php'); ?>
<section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__content">
                        
                        <div class="contact__form">
                            <h5>Cadastro</h5>
                            <form action="inserir_cadastro.php" method="POST">
                                <div class="form-group">                                  
                                    <input type="email" class="form-control" name="email" id="e" aria-describedby="emailHelp" placeholder="Email">                              
                                </div>
                                <div class="form-group">                                  
                                    <input type="text" class="form-control" name="nome_completo" id="n"  placeholder="Nome Completo">                              
                                </div>
                                <div class="form-group">                                  
                                    <input type="text" class="form-control" name="telefone" id="t" aria-describedby="emailHelp" placeholder="Telefone">                              
                                </div>
                                <div class="form-group">                                  
                                    <input type="text" class="form-control" name="username" id="u" aria-describedby="emailHelp" placeholder="Nome de Usuario">                              
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="senha" id="s" placeholder="Senha">
                                </div> 
                                </div>
                                <button type="submit" name="salvar_produto" class="site-btn">Cadastrar</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Estante de produtos FIM --------------------------------------------------------------------------------------------------->

<!-- Footer ----------------------------------------------------------------------------------------------------->


<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search End -->

<!-- Links --------------------------------------------------------------------------------------->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/main.js"></script>

<!-- Links Fim ------------------------------------------------------------------------------------- -->
</body>

</html>