<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php"); ?>


<!-- Page Content -->



<div class="container">
    <?php include(TEMPLATE_FRONT . DS . "side_nav.php"); ?>

    <div class="col-md-9">
        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <?php get_category_title(); ?>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
        <p><a class="btn btn-primary btn-large">Call to action!</a>
        </p> -->
        </header>

        <hr>


        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Latest Product</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

            <?php get_products_in_cat_page(); ?>

        </div>
        <!-- /.row -->


    </div>
</div>
<!-- /.container -->


<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>