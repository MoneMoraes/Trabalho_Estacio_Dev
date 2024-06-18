<?php
session_start();
require 'conect.php';

if(isset($_POST['salvar_produto']))
{
  $nome_completo = mysqli_real_escape_string($con, $_POST['nome_completo']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $telefone = mysqli_real_escape_string($con, $_POST['telefone']);
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $senha = mysqli_real_escape_string($con, $_POST['senha']);

  $query = "INSERT INTO clientes (nome_completo,email,telefone,username,senha) VALUES
  ('$nome_completo','$email','$telefone','$username','$senha')";

  $query_run = mysqli_query($con, $query);
  if($query_run)
  {
    $_SESSION['message'] = "Cliente Cadastrado";
     header("location: cadastro.php");
    exit(0);
  }
  else
  {
    $_SESSION['message'] = "Cliente não Cadastrado";
     header("location: cadastro.php");
    exit(0);
  }
}

?>