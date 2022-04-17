<div id="page-wrapper">

    <div class="container-fluid">



        <div class="col-lg-12">


            <h1 class="page-header">
                Administrators

            </h1>
            <p class="bg-success">
                <?php echo display_message(); ?>
            </p>

            <a href="index.php?add_admin" class="btn btn-primary">Add Admin</a>


            <div class="col-md-12">

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Username</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php display_admins(); ?>

                    </tbody>
                </table>
                <!--End of Table-->


            </div>

        </div>