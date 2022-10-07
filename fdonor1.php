<?php

$pname = $_POST['pname'];
$age  = $_POST['age'];
$gender = $_POST['gender'];
$bgroup  = $_POST['bgroup'];
$hospital = $_POST['hospital'];
$unit  = $_POST['unit'];
$anumber = $_POST['anumber'];
$aname = $_POST['aname'];
$reason  = $_POST['reason'];
$remarks = $_POST['remarks'];
// echo $remarks ;
$user_id=$_GET['uname'];
$id=$user_id;
if (!empty($pname) || !empty($age) || !empty($gender) || !empty($bgroup) || !empty($hospital) || !empty($unit) || !empty($anumber)|| !empty($aname) || !empty($reason) || !empty($remarks))
{

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
  
  // $INSERT = "INSERT Into request (pname, age, gender, bgroup, hospital, unit, anumber, id, aname, reason,remarks)values(?,?,?,?,?,?,?,".$user_id.",?,?,?)";
  // $stmt = $conn->prepare($INSERT);
  // $stmt->bind_param('sssssssssss', $pname,$age,$gender,$bgroup,$hospital,$unit,$anumber,$id,$aname,$reason,$remarks);
  // $stmt->execute();
  
  $INSERT = "INSERT Into request (pname, age, gender, bgroup, hospital, unit, anumber, uid, aname, reason,remarks)values('".$pname."','".$age."','".$gender."','".$bgroup."','".$hospital."','".$unit."','".$anumber."','".$id."','".$aname."','".$reason."','".$remarks."')";

  // echo $INSERT;

  $stmt = $conn->query($INSERT);
  
  // echo "New record inserted sucessfully";
  ?>
  <script>
    alert("Requested Successful")
    location.href = "Home.php?uname=<?php echo $user_id?>";
    </script>
  <?php
   $stmt->close();
   $conn->close();
  }
  } else {
    echo "All field are required";
    die();
  }
?>



