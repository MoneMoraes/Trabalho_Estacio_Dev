<?php
    include 'header.php';
    include 'carrinho.class.php';
    if(!isset($_GET['msg'])){
        // colocar mensagem de sucesso
    }    
?>
<body>
    

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/banner1.webp" alt="First slide" style="height: 520px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/banner2.webp" alt="Second slide" style="height: 520px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/banner3.webp" alt="Third slide" style="height: 520px ">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>




<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">

                    <h4>Produtos</h4>
                    <br>
                </div>
            </div>
            

        <div class="row property__gallery">






<!-- PRODUTO 1-------------------------------------------------------------------------------------------------------->
        <div class="col-lg-3 col-md-4 col-sm-6 mix women">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/pexels-enginakyurt-3687550.jpg">
                        
                                <a href="#">
                                    <form action="adicionar.php" method="post">
                                        <input type="hidden" name="cod" value="1">

                                    </form>
                                </a>
                                                        
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Vestido Outonal Amarelo</a></h6>
                 
                        <div class="product__price">R$500,00</div>
                    </div>
                </div>
            </div>
 <!-- PRODUTO 2----------------------------------------->

            <div class="col-lg-3 col-md-4 col-sm-6 mix women">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/pexels-chloekalaartist-1043474.jpg">
          
                     
                  
                                <a href="#">
                                    <form action="adicionar.php" method="post">
                                        <input type="hidden" name="cod" value="2">
                                   
                                    </form>
                                </a>
                                                                    
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Camisa Social Popular Elegante</a></h6>
                      
                        <div class="product__price">R$150,00</div>
                    </div>
                </div>
            </div>

<!-- PRODUTO 3----------------------------------------->
<div class="col-lg-3 col-md-4 col-sm-6 mix women">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/pexels-gabby-k-6310924.jpg">
        
                     
                                <a href="#">
                                    <form action="adicionar.php" method="post">
                                        <input type="hidden" name="cod" value="3">
                                   
                                    </form>
                                </a>
                                                                  
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Moleton Bege de Veludo</a></h6>

                        <div class="product__price">R$299,99</div>
                    </div>
                </div>
            </div>
<!-- PRODUTO 4----------------------------------------->
<div class="col-lg-3 col-md-4 col-sm-6 mix women">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/pexels-mart-production-9558577.jpg">
                   
                     
                        
                                <a href="#">
                                    <form action="adicionar.php" method="post">
                                        <input type="hidden" name="cod" value="4">
                                  
                                    </form>
                                </a>
                                                                      
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Camisa Oversized Preta Lisa </a></h6>
                       
                        <div class="product__price">R$199,99</div>
                    </div>
                </div>
            </div>
<!-- PRODUTO 5----------------------------------------->

             
<!-- PRODUTO 6----------------------------------------->

<div class="col-lg-3 col-md-4 col-sm-6 mix women">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/pexels-maryiaplashchynskaya-3792124.jpg">
       
                                <a href="#">
                                    <form action="adicionar.php" method="post">
                                        <input type="hidden" name="cod" value="6">
                                    
                                    </form>
                                </a>
                                                                 
                        </ul>
                    </div>
                    <div class="product__item__text">
                        
                        <h6><a href="#">Conjunto Casual Claro</a></h6>
                   
                        <div class="product__price">R$400,00</div>
                    </div>
                </div>
            </div>
 </body>

<!-- PRODUTO FIM ----------------------------------------->



</div>
<?php
    include 'footer.php';

?>