<?php
include "db.php";
$user_id=$_GET['uname'];
// session_start();
// $user_id = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Profile</title>

    <link rel="stylesheet" href="css/profile.css">
    <link rel="shortcut icon" type="image/png" href="images/logopng.png">

</head>
<body>
   
<div class="container">

   <div class="profile">
      <?php
         $select = mysqli_query($conn, "SELECT * FROM `register` WHERE id = '".$user_id."'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png">';
            // echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
            // echo '<img src="images/default-avatar.png">';
         }
      ?>
      <h3><?php echo $fetch['uname']; ?></h3>
      <a href="update_profile.php?uname=<?php echo $user_id?>" class="btn">Update Profile</a>
      <a href="index.html" class="delete-btn">Logout</a>
      <p>new <a href="index.html">Login</a> or <a href="register.html">Register</a> or <a href="Home.php?uname=<?php echo $user_id?>">Home</a></p>
   </div>
</div>
<input type="hidden" value="<?php echo $user_id?>">
</body>
</html>
<!-- <?php
   session_destroy();
   ?> -->