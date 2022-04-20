<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php"); ?>

<?php


if (isset($_SESSION['login_id'])) {

    $query = query("SELECT * FROM users WHERE user_id = " . escape_string($_SESSION['login_id']));
    confirm($query);


    while ($row = fetch_array($query)) {

        // $product_title       = escape_string($row['product_title']);
        // $product_category_id = escape_string($row['product_category_id']);
        // $product_price       = escape_string($row['product_price']);
        // $product_quantity    = escape_string($row['product_quantity']);
        // $product_description = escape_string($row['product_description']);
        // $product_short_desc  = escape_string($row['product_short_desc']);
        // $product_image       = $row['product_image'];
        // $product_image = display_image($row['product_image']);

        $username    = escape_string($row['username']);
        $password    = escape_string($row['password']);
        $first_name  = escape_string($row['first_name']);
        $last_name   = escape_string($row['last_name']);
        $email       = escape_string($row['email']);
        $phone       = escape_string($row['phone']);
        $address     = escape_string($row['address']);
    }


    update_user();
}




?>

<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">

            <h1 class="page-header text-left">
                Update Account

            </h1>
            <h3 class="bg-success"><?php display_message(); ?></h3>

        </div>
        <div class="col-md-2"></div>
    </div>

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form class="" action="" method="post" enctype="multipart/form-data">
                <div class="col-md-8">

                    <div class="form-group">
                        <label for="product-title">Username </label>
                        <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                    </div>

                    <div class="form-group">
                        <label for="product-title">Password </label>
                        <input type="text" name="password" class="form-control" value="<?php echo $password; ?>">
                    </div>

                    <div class="form-group">
                        <label for="product-title">First Name </label>
                        <input type="text" name="first_name" class="form-control" value="<?php echo $first_name; ?>">
                    </div>

                    <div class="form-group">
                        <label for="product-title">Last Name </label>
                        <input type="text" name="last_name" class="form-control" value="<?php echo $last_name; ?>">
                    </div>

                    <div class="form-group">
                        <label for="product-title">Email </label>
                        <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                    </div>

                    <div class="form-group">
                        <label for="product-title">Phone </label>
                        <input type="tel" name="phone" class="form-control" value="<?php echo $phone; ?>">
                    </div>

                    <!-- change input to textarea for Address? -->
                    <div class="form-group">
                        <label for="product-title">Address </label>
                        <input type="text" name="address" class="form-control" value="<?php echo $address; ?>">
                    </div>



                    <div class=" form-group">
                        <input type="submit" name="update_user" class="btn btn-primary btn-lg" value="Update">
                    </div>

                    <a href="user_account.php">
                        <p>Back to Account</p>
                    </a>

                </div>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>