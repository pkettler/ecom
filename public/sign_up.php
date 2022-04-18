<!-- Configuration-->

<?php require_once("../resources/config.php"); ?>

<?php add_user(); ?>

<!-- Header-->
<?php include(TEMPLATE_FRONT .  "/header.php"); ?>

<!-- Contact Section -->

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="section-heading">Create an account</h2>
            <h3 class="section-subheading">

            </h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form action="" method="post" enctype="multipart/form-data">




                <div class="col-md-6">


                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control">

                    </div>


                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control">

                    </div>


                    <div class="form-group">
                        <label for="first name">First Name</label>
                        <input type="text" name="first_name" class="form-control">

                    </div>

                    <div class="form-group">
                        <label for="last name">Last Name</label>
                        <input type="text" name="last_name" class="form-control">

                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control">

                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" name="phone" class="form-control">

                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control">

                    </div>

                    <!-- <div class="form-group">
        <label for="product-title">User Image</label>
        <input type="file" name="file">

    </div> -->

                    <div class="form-group">

                        <!-- Delete button -->
                        <!-- <a id="user-id" class="btn btn-danger" href="">Delete</a> -->

                        <input type="submit" name="add_user" class="btn btn-primary pull-right" value="Add User">

                    </div>




                </div>



            </form>
        </div>
    </div>


</div>

</div>
<!-- /.container -->
<?php include(TEMPLATE_FRONT .  "/footer.php"); ?>