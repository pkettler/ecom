<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php"); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <h1 class="page-header text-left">
                Account Details

            </h1>
            <h3 class="bg-success"><?php display_message(); ?></h3>
            <div class="col-md-12 text-left">
                <div id="user_details">
                    <?php
                    show_user_details();
                    ?>
                </div>

            </div>

        </div>
    </div>
</div>


<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>