<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php"); ?>

<?php

process_transaction();


?>



<!-- Page Content -->
<div class="container text-center">

    <h1 class="text-center">THANK YOU!</h1>
    <h2 class="text-center">Your order is being processed</h2>
    <br>
    <button>
        <a href="index.php">Continue Shopping</a>
    </button>

</div>
<!-- /.container -->

<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>