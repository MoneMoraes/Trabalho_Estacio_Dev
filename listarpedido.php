<?php
    
    session_start();
    include 'header.php';
?>
<?php     
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "carrinho";


    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM pedidos , clientes where pedidos.id_cliente = clientes.id_cliente";
    $result = $conn->query($sql);
    $conn->close();

?>
<div class="container">
    <div class="row">   
        <div class="col-lg-12">
        <table class='table'>
            <tr>
                <td>Pedido</td>
                <td>Cliente</td>
                <td>Hora do pedido</td>
                <td></td>
            </tr>

            <?php  if ($result->num_rows > 0) { 
                while($row = $result->fetch_assoc()) { ?>                    
                    <tr>
                        <td><?php echo $row['id_pedido']?></td>
                        <td>
                            <?php echo $row['nome_completo']?>
                        </td>
                        <td><?php echo $row['date_time_pedido']?></td>
                        <td>
                            <a class="btn btn-danger" href="listaritensped.php?id_pedido=<?php echo $row['id_pedido']?>">Mais Detalhes</a>
                        </td>
                    </tr>

                <?php } ?>
            <?php } ?>

        </table>

        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>