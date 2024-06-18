<?php
    include 'header.php';
  
    include 'carrinho.class.php';
    if(!isset($_GET['msg'])){
        // colocar mensagem de sucesso
    }    
?>

<br>
<div class="container offset-1">
    <div class="col-lg-2 col-md-0 col-sm-0"></div>
    <div class="col-lg-8 col-md-12 col-sm-12 offset-2" style="background-color: white; padding: 10px; border-radius: 10px;">
        <form action="cadastro.php" method="post" class="row g-3">
            <div class="col-md-6">
                <label for="user" class="form-label">Usuário</label>
                <input type="text" class="form-control" id="user">
            </div>
            <div class="col-md-6">
                <label for="Password" class="form-label">Senha</label>
                <input type="password" class="form-control" id="Password">
            </div>
            <div class="col-12">
                <label for="nome" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="nome" placeholder="Ex: José das coves">
            </div>
            <div class="col-12">
                <label for="Email" class="form-label">Email</label>
                <input type="email" class="form-control" id="Email" placeholder="jcoves@gmail.com">
            </div>
            <div class="col-md-6">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="telefone">
            </div>
            
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
    </div>
    <div class="col-lg-2 col-md-0 col-sm-0"></div>
    

</div>
<?php
    include 'footer.php';

?>