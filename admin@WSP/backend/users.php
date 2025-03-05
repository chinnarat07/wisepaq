<<<<<<< HEAD
<?php
include "includes_backend/header.php";
include "includes_backend/navigation.php";
?>

<main id="main" class="main">
    <div class="card" style="height:77vh;">
        <div class="card-body">
        <div class="pagetitle">
        <h1 class="fs-1 pb-1 ps-4 py-5">
             Welcome to <span style="color: #578FCA;">USERS</span>
        </h1>
    </div><!-- End Page Title -->
            <?php
            if (isset($_GET['source'])) {
                $source = $_GET['source'];
            } else {
                $source = "";
            }
            switch ($source) {
                case 'add_user':
                    include "./includes_backend/add_user.php";
                    break;
                case 'edit_user':
                    include "./includes_backend/edit_user.php";
                    break;
                default:
                    include "./includes_backend/view_all_users.php";
                    break;
            }
            ?>
        </div>
    </div>
    </div>
</main>

=======
<?php
include "includes_backend/header.php";
include "includes_backend/navigation.php";
?>

<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to <small><?php echo $_SESSION['username'] ?></small>
                </h1>
            </div>
            <div class="col-xs-12">
                <?php
                if (isset($_GET['source'])) {
                    $source = $_GET['source'];
                } else {
                    $source = "";
                }
                switch ($source) {
                    case 'add_user':
                        include "./includes_backend/add_user.php";
                        break;
                    case 'edit_user':
                        include "./includes_backend/edit_user.php";
                        break;
                    default:
                        include "./includes_backend/view_all_users.php";
                        break;
                }
                ?>
            </div>
        </div>
    </div>
</div>

>>>>>>> f210771355439f265820ae9777d49bf0dabfe4de
<?php include "includes_backend/footer.php" ?>