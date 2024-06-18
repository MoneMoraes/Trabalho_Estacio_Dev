<?php
    
    include 'carrinho.class.php';
    session_start();
    include 'header.php';
    if (isset($_SESSION['carrinho'])){
        $produtos = $_SESSION['carrinho'];
    }
    
?>


        <br>
        <h3 style="text-align:center">Carrinho de Compras</h3>
        <br>
        <td><center><?php if (isset($_SESSION['carrinho'])){ ?><a data-bs-toggle="modal" data-bs-target="#modallimpar" class="btn btn-danger" style=" color: #fff;" >Zerar Carrinho</a><?php } ?></center></td> 
        <br>  <br>
    
    
    
    
    
    <table class="table ">
      <thead>
        <tr>
          <th scope="col"><center></center></th>
          <th scope="col"><center>Produto</center></th>
          <th scope="col"><center>Quantidade</center></th>
          <th scope="col"><center>Valor unitário</center></th>
          <th scope="col"><center>Valor Total</center></th>
          <th scope="col"><center>Excluir</center></th>         
        </tr>
      </thead>
      <tbody>
        <?php 
            $prectotal = 0;
            if (isset($_SESSION['carrinho'])){
                foreach ($produtos as $key => $p) {
                    $prec = floatval($p->Preco);
                    $quant = floatval($p->Quantidade);
                    $prectotal += $prec * $quant;
            ?>
                
                <tr>
                <td><center><img style="max-width:150px" src="<?php echo "img/".$p->Imagem.".png"; ?>" alt=""></center></td>
                <td><center><?php echo $p->Produto; ?></center></td>
                <td><center><a class="btn btn-danger" href="alterar.php?cod=<?php echo $key; ?>&op=2">-</a>ㅤ<?php echo $p->Quantidade; ?>ㅤ<a class="btn btn-success" href="alterar.php?cod=<?php echo $key; ?>&op=1">+</a></center></td>
                <td><center><?php echo "R$".$p->Preco; ?></center></td>
                <td><center><?php echo "R$".$prec * $quant;?></center></td>
                <td><center><button  data-bs-toggle="modal" data-bs-target="#modalremover" onclick="alterarId(<?php echo $key; ?>)" class="btn btn-danger">Excluir</button></center></td>
                </tr>
        <?php } ?>
        
        <tr>
            
        
            <td><center><b>Total a Pagar:</b></center></td>
            <td><center><?php echo "R$".$prectotal;// valor total ?></center></td>
            <td><center></center></td>
            <td><center></center></td>
            <td><center></center></td>
            <td><center><?php if (isset($_SESSION['carrinho'])){ ?><a href="login.php" class="btn btn-success">Finalizar compra</a><?php } ?></center></td>           
        </tr> 
        <?php } else { 
            echo '
            <center>
            <br>
              
              <h3 style="color: grey;display:inline-block;">Seu carrinho de compras está vazio.</h3>
              <img src="img/em.png" style="width:50px;height:50px;display:inline-block;margin-top:-10px">
              <div class="col-xl-6 col-lg-7">
                            <nav class="header__menu">
                                <ul>
                                    <li class="active"><a href="index.php"><h5 >Volte as Compras</h8></a></li> 
                                    
                                </ul>
            </center>
            ';
            
            
            ?>

            <tr>
            <td><center></center></td>
            <td><center>-</center></td>
            <td><center>-</center></td>
            <td><center>-</center></td>
            <td><center>-</center></td>
            <td><center>-</center></td>
            </tr>
        <?php } ?>
            
      </tbody>
        
    </table>
    
    

    <!-- Modal de remover ---------------------------------------------------------------------------------------->
    <div class="modal fade" id="modalremover" tabindex="-1" aria-labelledby="modalremover" aria-hidden="true">
        <div class="modal-dialog">
            <form action="remover.php" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalremover">Confirmação</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                <div class="modal-body">
                    Deseja realmente remover este item?
                    <input type="hidden" name="cod" id="idProduto">
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                        <button type="submit" class="btn btn-primary">Sim</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Modal de Zerar ---------------------------------------------------------------------------------------->
    <div class="modal fade" id="modallimpar" tabindex="-1" aria-labelledby="modallimpar" aria-hidden="true">
        <div class="modal-dialog">
            <form action="limpar.php" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modallimpar">Confirmação</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                <div class="modal-body">
                    Deseja realmente limpar seu carrinho?
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                        <button type="submit" class="btn btn-primary">Sim</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php
    include 'footer.php';
?>