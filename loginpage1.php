<?php
include "db.php";
$data=$_POST;
$email=$data['email'];
$password=$data['upswd'];


$sql="select * from register where email='$email' and upswd1='$password' ";
$result = $conn->query($sql);
// print_r($result['uname']);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      // echo "<br> id: ". $row["email"]. " - Name: ". $row["uname"]. " " . $row["upswd1"] . "<br>";

      if($row['email']===$email && $row['upswd1']===$password){
        $uid=$row['id'];
        ?>
          <script>
            alert("Login Success");
            location.href = "Home.php?uname=<?php echo $uid?> ";
          
            </script>
        <?php
    
  }
}

  }else {
    ?>
     <script>
              alert("User cannot find");
              location.href = "index.html";
              </script>
    <?PHP
  }
?>
