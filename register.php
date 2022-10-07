<?php

$uname = $_POST['uname'];
$email  = $_POST['email'];
$bgroup  = $_POST['bgroup'];
$pnumber  = $_POST['pnumber'];
$upswd1 = $_POST['upswd1'];
$upswd2 = $_POST['upswd2'];
$dob = $_POST['dob'];




if(!empty($uname) || !empty($email) || !empty($dob) || !empty($bgroup) || !empty($pnumber) || !empty($upswd1) || !empty($upswd2) ){

$host = "127.0.0.1";
$dbusername = "root";
$dbpassword = "";
$dbname = "users";



// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  
  $SELECT = "SELECT email From register Where email = ? Limit 1";
  $INSERT = "INSERT Into register (uname, email,dob,bgroup, pnumber, upswd1, upswd2 )values(?,?,?,?,?,?,?)";

//Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;



     //checking username
      if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssssss", $uname,$email,$dob,$bgroup,$pnumber,$upswd1,$upswd2);
      $stmt->execute();
      echo "New record inserted sucessfully";
      ?>
      <script>
        alert("Registered Successful")
        location.href =  "index.html";
        </script>
     <?php
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>