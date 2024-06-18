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
    $id_pedido = $_GET['id_pedido'];

    $sql = "SELECT * FROM itenspedidos where id_pedido ='$id_pedido'";
    $result = $conn->query($sql);
    $conn->close();

?>
<div class="container">
    <div class="row">   
        <div class="col-lg-12 ">
        <table class='table table-dark table-striped'>
            <tr>
                
                <td><center><b>Produto</b></center></td>
                <td><center><b>Quantidade</b></center></td>
                <td><center><b>Valor</b></center></td>
            </tr>

            <?php  if ($result->num_rows > 0) { 
                while($row = $result->fetch_assoc()) { ?>                    
                    <tr>
                        
                        <td><center><?php echo $row['produto']?></center></td>
                        <td><center><?php echo $row['quantidade']?></center></td>
                        <td>
                            <?php switch ($row['id_produto']) {
                                case 1:
                                    echo "<center>".$row['quantidade'] * 1148.57."<center>";
                                    break;
                                case 2:
                                    echo "<center>".$row['quantidade'] * 229.99."<center>";
                                    break;
                                case 3:
                                    echo "<center>".$row['quantidade'] * 741.57."<center>";
                                    break;
                                case 4:
                                    echo "<center>".$row['quantidade'] * 882.24."<center>";
                                    break;
                                case 5:
                                    echo "<center>".$row['quantidade'] * 1829.89."<center>";
                                    break;
                                case 6:
                                    echo "<center>".$row['quantidade'] * 2039.99."<center>";
                                    break;
                                
                            }
                            ?>
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