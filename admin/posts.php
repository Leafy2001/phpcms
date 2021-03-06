
<?php include "./includes/admin_header.php"; ?>

    <div id="wrapper">
        <?php include "./includes/admin_navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        <?php echo $_SESSION['username'] ?>
                            <small><?php echo $_SESSION['user_firstname']." ".$_SESSION['user_lastname'] ?></small>
                        </h1>
                        <?php
                            if(isset($_GET['source'])){
                                $source = $_GET['source'];
                            }else{
                                $source = '';
                            }

                            switch($source){
                                case 'add_post': include "./includes/add_post.php"; break;
                                case 'edit' : include "./includes/edit_post.php"; break;
                                case 'approve' : approve_post(); break;
                                case 'unapprove' : unapprove_post(); break;
                                default : include "./includes/view_all_posts.php";
                            }
                        ?>


                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
 <!-- /#wrapper -->
   
<?php include "./includes/admin_footer.php"; ?>
