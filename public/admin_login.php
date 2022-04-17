<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php"); ?>

<!-- Page Content -->
<div class="container">

    <header>
        <h1 class="text-center bg-success">Admin Login</h1>
        <h2 class="text-center bg-warning"><?php display_message(); ?></h2>
        <div class="col-sm-4 col-sm-offset-5">
            <form class="" action="" method="post" enctype="multipart/form-data">

                <?php login_admin_user(); ?>

                <div class="form-group"><label for="">
                        Username<input type="text" name="admin_username" class="form-control"></label>
                </div>
                <div class="form-group"><label for="password">
                        Password<input type="password" name="admin_password" class="form-control"></label>
                </div>

                <div class="form-group">
                    <input type="submit" name="submit_admin" class="btn btn-primary">
                </div>
            </form>
        </div>


    </header>


</div>

<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>