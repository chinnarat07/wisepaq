<?php
if (isset($_POST['add_user'])) {
    $user_firstname = $_POST['firstname'];
    $user_lastname = $_POST['lastname'];
    $user_name = $_POST['username'];
    $user_password = md5($_POST['password']); 
    $user_email = $_POST['email'];

        // Check exist user.
         $user=1;
        $queryExist = "SELECT EXISTS(SELECT * FROM tbl_users WHERE user_name = '$user_name') as user";
         $fetch_data = mysqli_query($connection, $queryExist);
              while ($Row = mysqli_fetch_assoc($fetch_data)) {
                                  $user = $Row['user'];
             }   
        
    if($user==0){
    
        // Add new user.
        $query = "INSERT INTO tbl_users(user_firstname, user_lastname, user_name, user_password, user_email) ";
        $query .= "VALUES('{$user_firstname}', '{$user_lastname}', '{$user_name}', '{$user_password}', '{$user_email}')";

        $create_user_query = mysqli_query($connection, $query);
        if (!$create_user_query) {
            die("Query Failed: " . mysqli_error($connection));
        }
        header("Location: ../backend/index.php");
        echo "User Created " . "<a href='users.php'>View Users</a>";
    }else{
          echo "<script>alert('This user already in the system!');window.history.go(-1);</script>";           
    }
    
    
}



?>

<form action="" method="post">

    <div class="form-group">
        <label for="firstname">Firstname</label>
        <input type="text" class="form-control" name="firstname">
    </div>

    <div class="form-group">
        <label for="lastname">Lastname</label>
        <input type="text" class="form-control" name="lastname">
    </div>

    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username">
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email">
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="add_user" value="Add User">
    </div>
</form>