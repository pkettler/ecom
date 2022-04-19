<div class="container" id="nav">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><img src="../resources/uploads/IFCLogo.jpg"></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li>
                <a href="shop.php">Shop</a>
            </li>
            <li>
                <a href="login.php">Login</a>
            </li>
            <li>
                <a href="checkout.php">Checkout</a>
            </li>
            <li>
                <a href="contact.php">Contact</a>
            </li>
            <li>
                <a href="about.php">About Us</a>
            </li>
            <li>
                <a href="privacy.php">Privacy</a>
            </li>

        </ul>

        <?php

        function show_username()
        {
            //WHERE user_id = " . escape_string($_GET['id']) . " "
            $query = query(" SELECT * FROM users");
            confirm($query);

            while ($row = fetch_array($query)) {
                if (isset($_SESSION['username']) && $_SESSION['username'] == $row['username']) {
                    $display_first_name = $row['first_name'];


                    $display_icon = <<<DELIMETER
                    <div class="display_icon">
                        <ul class="nav navbar-right top-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Welcome $display_first_name! <b class="caret"></b></a>
                                <ul class="dropdown-menu">

                                    <li class="divider"></li>
                                    <li>
                                        <a href="../public/user_account.php"><i class="fa fa-fw fa-power-off"></i>Account Details</a>
                                    </li>
                                    <li>
                                        <a href="../public/admin/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    DELIMETER;
                } else {
                    $display_icon = "";
                }
                echo $display_icon;
            }
        }

        ?>

        <?php show_username();  ?>
    </div>


    <!-- /.navbar-collapse -->
</div>
<!-- /.container -->