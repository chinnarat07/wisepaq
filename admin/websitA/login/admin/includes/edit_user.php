<?php
if (isset($_POST['update_user'], $_GET['user_id'])) {
    $the_user_id = $_GET['user_id'];

    $user_firstname = $_POST['firstname'];
    $user_lastname = $_POST['lastname'];
    $user_username = $_POST['username'];
    $user_password = $_POST['password'];
    $user_email = $_POST['email'];

    // $post_image = $_FILES['post_image']['name'];
    // $post_image_temp = $_FILES['post_image']['tmp_name'];
    // move_uploaded_file($post_image_temp, "../images/$post_image");



    // Engrypt Password.
    $user_password =  md5($user_password); 

    // Update a User.
    $query = "UPDATE users SET ";
    $query .= "user_firstname='$user_firstname', ";
    $query .= "user_lastname='$user_lastname', ";
    $query .= "user_name='$user_username', ";
    $query .= "user_password='$user_password', ";
    $query .= "user_email='$user_email' ";
    $query .= "WHERE user_id=$the_user_id";

    $update_user_query = mysqli_query($connection, $query);
    if (!$update_user_query) {
        die("Query Failed: " . mysqli_error($connection));
    }
     header("Location: ../admin/index.php");
}
?>


<?php
if (isset($_GET['user_id'])) {
    $the_user_id = $_GET['user_id'];
    $query = "SELECT * FROM users WHERE user_id=$the_user_id";
    $fetch_data = mysqli_query($connection, $query);
    while ($Row = mysqli_fetch_assoc($fetch_data)) {
        $user_id = $Row['user_id'];
        $firstname = $Row['user_firstname'];
        $lastname = $Row['user_lastname'];
        $username = $Row['user_name'];
        $password = $Row['user_password'];
        $email = $Row['user_email'];
        ?>

        <form action="" method="post">

            <div class="form-group">
                <label for="firstname">Firstname</label>
                <input type="text" class="form-control" name="firstname" value='<?php echo $firstname; ?>'>
            </div>

            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input type="text" class="form-control" name="lastname" value='<?php echo $lastname; ?>'>
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" value='<?php echo $username; ?>'>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" value='<?php echo $password; ?>'>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" value='<?php echo $email; ?>'>
            </div>


            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="update_user" value="Update User">
            </div>
        </form>
<?php }
}
?>