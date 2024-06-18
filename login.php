<?php     
   
    include 'carrinho.class.php';
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "carrinho";

    session_start();
    include 'header.php';
    if (isset($_SESSION['carrinho'])){
        $produtos = $_SESSION['carrinho'];
    }

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    //INICIA O SPAN LIMPO
    if(!isset($_GET['erro'])){
        $_SESSION['msglogin'] = "";
    }
?>


<section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__content">
                        
                        <div class="contact__form">
                            <h5>Login</h5>
                            <form action="processar.php" method="post">
                               
                                <div class="form-group">                                  
                                <input type="text" name="username" id="userName" placeholder="Username">                             
                                </div>
                                <div class="form-group">
                                <input type="password" name="password" id="pwd" placeholder="Password">
                                </div> 
                                </div>
                                <button type="submit" class="site-btn">Entrar</button>
                                <a href="cadastro.php" class="site-btn">Cadastre-se Aqui</a>  
                                
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

