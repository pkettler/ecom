<?php

// helper functions


//Gives us last inserted id
function last_id()
{

    global $connection;

    return mysqli_insert_id($connection);
}

function set_message($msg)
{
    if (!empty($msg)) {
        $_SESSION['message'] = $msg;
    } else {
        $msg = "";
    }
}

function display_message()
{
    if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}

function redirect($location)
{

    header("Location: $location");
}

function query($sql)
{

    global $connection;

    return mysqli_query($connection, $sql);
}


function confirm($result)
{

    global $connection;

    if (!$result) {
        die("QUERY FAILED " . mysqli_error($connection));
    }
}

function escape_string($string)
{

    global $connection;

    return mysqli_real_escape_string($connection, $string);
}

function fetch_array($result)
{

    return mysqli_fetch_array($result);
}

/*****************************************FRONT END FUNCTIONS********************************* */

// get products

function get_products()
{

    $query = query(" SELECT * FROM products");
    confirm($query);

    while ($row = fetch_array($query)) {

        $product = <<<DELIMETER

        <div class="col-sm-4 col-lg-4 col-md-4">
                <div class="thumbnail">
                   <a href="item.php?id={$row['product_id']}"> <img src="{$row['product_image']}" alt=""> </a>
                    <div class="caption">
                    <h4 class="pull-right">&#36;{$row['product_price']}</h4>
                        <h4><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a>
                        </h4>
                        <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                    <a class="btn btn-primary" href="../resources/cart.php?add={$row['product_id']}">Add To Cart</a>
                    </div>
                </div>
            </div>

    DELIMETER;

        echo $product;
    }
}

function get_categories()
{

    $query = query("SELECT * FROM categories");
    confirm($query);

    while ($row = fetch_array($query)) {
        $categories_links = <<<DELIMETER

        <a href='category.php?id={$row['cat_id']}' class='list-group-item'>{$row['cat_title']}</a>

        DELIMETER;

        echo $categories_links;
    }
}

//get products in category page
function get_products_in_cat_page()
{

    $query = query(" SELECT * FROM products WHERE product_category_id = " . escape_string($_GET['id']) . " ");
    confirm($query);

    while ($row = fetch_array($query)) {

        $product = <<<DELIMETER

            <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail">
            <a href="item.php?id={$row['product_id']}"> <img src="{$row['product_image']}" alt=""> </a>
                
                    <h3>{$row['product_title']}</h3>
                    <p>{$row['product_short_desc']}</p>
                    <p>
                        <a href="#" class="btn btn-primary">Buy Now!</a> <a href="item.php?id={$row['product_id']}" class="btn btn-default">More Info</a>
                    </p>
               
            </div>
        </div>

    DELIMETER;

        echo $product;
    }
}


function get_products_in_shop_page()
{

    $query = query(" SELECT * FROM products");
    confirm($query);

    while ($row = fetch_array($query)) {

        $product = <<<DELIMETER

            <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail">
            <a href="item.php?id={$row['product_id']}"> <img src="{$row['product_image']}" alt=""> </a>
                
                    <h3>{$row['product_title']}</h3>
                    <p>{$row['product_short_desc']}</p>
                    <p>
                        <a href="#" class="btn btn-primary">Buy Now!</a> <a href="item.php?id={$row['product_id']}" class="btn btn-default">More Info</a>
                    </p>
               
            </div>
        </div>

    DELIMETER;

        echo $product;
    }
}

function login_user()
{

    if (isset($_POST['submit'])) {
        $username = escape_string($_POST['username']);
        $password = escape_string($_POST['password']);
        // $email = escape_string($_POST['email']);

        $query = query("SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}'");
        confirm($query);

        if (mysqli_num_rows($query) == 0) {
            set_message("Incorrect username or password");
            redirect("login.php");
        } else {
            $_SESSION['username'] = $username;
            // set_message("Hello {$username}!");
            redirect("admin/index.php");
        }

        //Use this to show user's first name in the top admin nav by creating a first name column in database. change session to 'first_name' instead of 'email'
        while ($row = fetch_array($query)) {
            $_SESSION['email'] = $row['email'];
        }
    }
}


// On the contact page
function send_message()
{

    if (isset($_POST['submit'])) {
        $to         = "someEmailAddress@gmail.com";
        $from_name  = $_POST['name'];
        $subject    = $_POST['subject'];
        $email      = $_POST['email'];
        $message    = $_POST['message'];


        $headers = "From: {$from_name} {$email}";

        $result = mail($to, $subject, $message, $headers);

        if (!$result) {
            set_message("An error ocurred while sending this message. ");
            // redirect("contact.php"); uncomment when mail function is working.
        } else {
            set_message("Your message has been sent!");
            redirect("contact.php");
        }
    }
}



/*****************************************BACK END FUNCTIONS********************************* */

function display_orders()
{

    $query = query("SELECT * FROM orders");
    confirm($query);

    while ($row = fetch_array($query)) {

        $orders = <<<DELIMETER
            <tr>
                <td>{$row['order_id']}</td>
                <td>{$row['order_amount']}</td>
                <td>{$row['order_transaction']}</td>
                <td>{$row['order_currency']}</td>
                <td>{$row['order_status']}</td>
                <td><a class="btn btn-danger" href="../../resources/templates/back/delete_order.php?id={$row['order_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
            </tr>

        DELIMETER;

        echo $orders;
    }
}


/***********************************Admin Products ***************************************** */

function get_products_in_admin()
{

    $query = query(" SELECT * FROM products");
    confirm($query);

    while ($row = fetch_array($query)) {

        $product = <<<DELIMETER

            <tr>
                <td>{$row['product_id']}</td>
                <td>{$row['product_title']}<br>
                <a href="index.php?edit_product&id={$row['product_id']}"><img src="{$row['product_image']}" alt=""></a>
                </td>
                <td>Category</td>
                <td>{$row['product_price']}</td>
                <td>{$row['product_quantity']}</td>
                <td><a class="btn btn-danger" href="../../resources/templates/back/delete_product.php?id={$row['product_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
            </tr>

    DELIMETER;

        echo $product;
    }
}



/************************************Add Products in Admin ***********************************/

function add_product()
{
    if (isset($_POST['publish'])) {

        $product_title       = escape_string($_POST['product_title']);
        $product_category_id = escape_string($_POST['product_category_id']);
        $product_price       = escape_string($_POST['product_price']);
        $product_quantity    = escape_string($_POST['product_quantity']);
        $product_description = escape_string($_POST['product_description']);
        $product_short_desc  = escape_string($_POST['product_short_desc']);
        $product_image       = $_FILES['file']['name'];
        $image_temp_location = $_FILES['file']['tmp_name'];


        move_uploaded_file($image_temp_location, UPLOAD_DIRECTORY . DS . $product_image);

        $query = query("INSERT INTO products (product_title, product_category_id, product_price, product_quantity, product_description, product_short_desc, product_image ) VALUES('{$product_title}', '{$product_category_id}', '{$product_price}', '{$product_quantity}', '{$product_description}','{$product_short_desc}','{$product_image}')");
        $last_id = last_id();
        confirm($query);
        set_message("Product with id {$last_id} added");
        redirect("index.php?products");
    }
}
