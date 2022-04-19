<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php"); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <h1 class="page-header text-center">
                Order History

            </h1>
            <h3 class="bg-success"><?php display_message(); ?></h3>
            <table class="table table-hover">


                <thead>

                    <tr>
                        <th>Date of Purchase</th>
                        <th>Product Title</th>
                        <th>Product Quantity</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>

                    <?php get_user_reports();  ?>

                </tbody>
            </table>

            <button>
                <a href="user_account.php">Account Home</a>
            </button>



        </div>
    </div>
    <?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>