<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php"); ?>

<!-- Page Content -->
<div class="container">

    <div class="row">
        <!-- include(TEMPLATE_FRONT . DS . "side_nav.php");  -->


        <div class="col-md-12">


            <div class="row carousel-holder">

                <div class="col-md-12">
                    <?php include(TEMPLATE_FRONT . DS . "slider.php"); ?>
                </div>

            </div>

            <!-- <div class="row">

               // get_products function used to be here

            </div> -->

            <!-- Hardcoded categories with pictures below. use add_category and create an update_category function to dynamically add and update categories in admin section in future versions -->

            <div class="row">
                <div class="col-md-3 col-sm-6 hero-feature">
                    <div class="thumbnail">
                        <a href="category.php?id=3"> <img src="../resources/uploads/Gina+Canopy+Bed.webp" alt=""> </a>
                        <h3>Bedroom</h3>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 hero-feature">
                    <div class="thumbnail">
                        <a href="category.php?id=17"> <img src="../resources/uploads/biege room view.jpg" alt=""> </a>
                        <h3>Living Room</h3>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 hero-feature">
                    <div class="thumbnail">
                        <a href="category.php?id=18"> <img src="../resources/uploads/5-piece-table.jpg" alt=""> </a>
                        <h3>Kitchen</h3>
                    </div>
                </div>


                <div class="col-md-3 col-sm-6 hero-feature">
                    <div class="thumbnail">
                        <a href="category.php?id=19"> <img src="../resources/uploads/white room view.jpg" alt=""> </a>
                        <h3>Office</h3>
                    </div>
                </div>




            </div>
            <!-- Row ends here -->

        </div>

    </div>

</div>
<!-- /.container -->

<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>