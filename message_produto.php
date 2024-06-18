<?php
if(isset($_SESSION['message'])) :
?>

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>ATENÇÃO:</strong> <?= $_SESSION['message']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
    </div>

<?php
    unset($_SESSION['message']);
    endif;
?>