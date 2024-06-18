<?php 
    include 'carrinho.class.php';
    session_start();
   
    if (isset($_SESSION['carrinho'])){
        $produtos = $_SESSION['carrinho'];
    }
    $_SESSION['msglogin'] = "";
    $username=$_POST['username']; $password=$_POST['password']; $servername = "localhost";
    $user = "root"; $pwd = ""; $dbname = "carrinho";

    // Create connection
    $conn = new mysqli($servername, $user, $pwd, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM clientes WHERE username='$username' AND senha='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) { 
        $row = $result->fetch_assoc();
        $usuario = $row['username']; $pass = $row['senha']; $nome = $row['nome_completo']; $idcliente = $row['id_cliente'];

        
        $sql = "INSERT INTO pedidos (id_cliente, date_time_pedido)
        VALUES ('$idcliente','". date('Y-m-d h:i:sa'). "')";
        $result = $conn->query($sql);

        $id_pedido = $conn->insert_id;
        foreach ($_SESSION['carrinho'] as $key => $p) {
            $id = $p->Id;
            $produto = $p->Produto;
            $quant = floatval($p->Quantidade);
            $sqlitens = "INSERT INTO itenspedidos (id_pedido, produto, quantidade, id_produto)
            VALUES ('$id_pedido','$produto','$quant', $id)";
            $conn->query($sqlitens);
        }
        // if ($conn->query($sql) === TRUE) {
        //     echo "Inserts";
        // } else {
        //     echo "Error: " . $sql . "<br>" . $conn->error;
        // }
        session_destroy();
        header("Location: index.php");
    } 
    
    $conn->close();
?>