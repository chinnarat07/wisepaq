<<<<<<< HEAD
<?php
//  define('DB_SERVER','localhost');
//  define('DB_USER','root');
//  define('DB_PASS','');
//  define('DB_NAME','db_wisepaq');
define('DB_SERVER','127.0.0.1');
define('DB_USER','root');
define('DB_PASS','7445');
define('DB_NAME','db_wisepaq');
$connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
 mysqli_set_charset($connection,"utf8mb4");
// Check connection
if (mysqli_connect_errno()){
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
=======
<?php
 define('DB_SERVER','localhost');
 define('DB_USER','root');
 define('DB_PASS','');
 define('DB_NAME','db_wisepaq');
$connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
 mysqli_set_charset($connection,"utf8mb4");
// Check connection
if (mysqli_connect_errno()){
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
>>>>>>> f210771355439f265820ae9777d49bf0dabfe4de
?>