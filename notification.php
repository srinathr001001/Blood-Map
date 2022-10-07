<!DOCTYPE html>
<html lang="en">
<head>
<?php
$user_id=$_GET['uname'];
// echo $user_id;
?>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Map</title>
    <link rel="shortcut icon" type="image/png" href="images/logopng.png">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="Jquery/jquery-3.6.0.min.js"></script>
    <script src="Jquery/sweetalert2.all.min.js"></script>
    
</head>
<body>
<div id="header">
        <!-- <a  id="pp">Privacy Policy</a> -->
        <a  id="tc">Terms and Conditions</a>
        <a href="Profile.php?uname=<?php echo $user_id?>">
            <button type="button">Profile</button>
            </a>
    </div>

    
    <div id="logo-section">
        <div id="logo">
            <img src="images/output-onlinepngtools.png" width="150px" height="150px"/>
            <h1 id="logo-title">BLOOD MAP</h1>
            <p id="subtitle">-------------------------------------------------<br>Every Drop <del>Matters</del> on time Matters</p>
        </div>
        <div id="searchbar">
            <form method="get" action="search.php">
                <input type="text" id="search-inp" name="keyword" placeholder="Search">
                <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                  </svg></button>
            </form>
        </div>
    </div>
    <ul id="menubar">
        <li><a class="active" href="Home.php?uname=<?php echo $user_id?>">HOME</a></li>
        <li><a href="fdonor.php?uname=<?php echo $user_id?>">FIND DONOR</a></li>
        <li><a href="requested.php?uname=<?php echo $user_id?>">REQUESTED LIST</a></li>
        <li><a href="accepted.php?uname=<?php echo $user_id?>">ACCEPTED LIST</a></li>
        <li><a href="notification.php?uname=<?php echo $user_id?>">NOTIFICATION</a></li>
        <li><a href="about.php?uname=<?php echo $user_id?>">ABOUT</a></li>
    </ul>
<br>
<br>
<input type="hidden" value="<?php echo $user_id?>">

<?php
include "db.php";

$sql = "select * from register where id='".$user_id."'";
$result = $conn->query($sql);

?>

<?php

    $i=1;
    while($row = $result->fetch_assoc()) {
    ?>

    <input type="hidden" id="user" value="<?php echo $row['bgroup']?>">

    <?php
    $bgroup = $row['bgroup'];
    // $uname =  $row['uname'];
    $i++;
  }
  ?>

  <!-- another loop -->
  <?php
  $sql1="select * from request where bgroup='".$bgroup."'";
  $result1 = $conn->query($sql1);

    $i=1;
    while($row1 = $result1->fetch_assoc()) {

    ?>

    <input type="hidden" id="pname" value="<?php echo $row1['pname']?>">
    <input type="hidden" id="age" value="<?php echo $row1['age']?>">
    <input type="hidden" id="bgroup" value="<?php echo $row1['bgroup']?>">
    <input type="hidden" id="hospital" value="<?php echo $row1['hospital']?>">
    <input type="hidden" id="unit" value="<?php echo $row1['unit']?>">
    <input type="hidden" id="reason" value="<?php echo $row1['reason']?>">
    <input type="hidden" id="aname" value="<?php echo $row1['aname']?>">
    <input type="hidden" id="anumber" value="<?php echo $row1['anumber']?>">
    <input type="hidden" id="remarks" value="<?php echo $row1['remarks']?>">
    <?php
    $uid = $row1['uid'];
    // echo $uid;
    $pname = $row1['pname'];
    $age = $row1['age'];
    $hospital = $row1['hospital'];
    $unit = $row1['unit'];
    $reason = $row1['reason'];
    $aname = $row1['aname'];
    $anumber = $row1['anumber'];
    $bgroup = $row1['bgroup'];
    $remarks = $row1['remarks'];
    $rid = $row1['rid'];
    ?>

  <div id="notify" >
    <p>
      <?php echo $pname?> need a help from You!
      <span>
        <input type="button" class="form-control input" id="btn" onclick="Test(this,'<?php echo $pname?>', '<?php echo $age?>', '<?php echo $hospital?>', '<?php echo $unit?>', '<?php echo $reason?>', '<?php echo $aname?>', '<?php echo $anumber?>', '<?php echo $remarks?>' , '<?php echo $rid?>')" value="Request"/>
      </span>
    </p>
  </div>


  <script>

    let Test = (e, pname,age, hospital, unit, reason, aname, anumber, remarks, rid  ) => {
        console.log("Element---->", e, pname, age, hospital, unit, reason, aname, anumber, remarks)
        

    Swal.fire({
        title: 'Are you Ready?',
        // text: ,
        // text: "  is need your Help!",
        html: `
              Patient Name: ${pname} <br/> 
              Age: ${age} <br/> 
              Hospital: ${hospital} <br/> 
              Unit: ${unit} <br/> 
              Reason: ${reason} <br/>
              Attender Name: ${aname} <br/> 
              Attender Number: ${anumber} <br/>
              Remarks: ${remarks}`,

        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ready!'
        }).then((result) => {
          console.log(result);
          if (result.isConfirmed) {
            location.href = `test.php?uname=<?php echo $user_id?>&rid=${rid}`;
            // console.log("tetst");
            // myFunction()
            // <?php
            //   $tempvar = "<script>document.writeln(rid);</script>";
            //   // echo $tempvar;
            //   $sql2="update register set status='".$tempvar."' where id='".$user_id."'";
            //   $result2 = $conn->query($sql2);
            // ?>
 
            // $(document).ready(function(){
            //   $("btn").click(function(){
            //     $("#div1").load("test.php");
            //   });
            // });


          // $.ajax({
          //    url: 'test.php',
          //   // url: '/api.json',
          //   success: function(data) {
          //     $('.result').html(data);
          //     console.log('Test ------->')
          //   }
          // });

            



            Swal.fire(
              
              'Accepted!',
              'Thanks for your Service.',
              'success'
            )
          }
        })
    }

//       $('#btn').on('click',function(){

//       })
        </script>

    <?php
    $i++;
  } 
  ?>

      </body>
</html>

        <!-- <script>
      $('#pp').on('click',function(){
      Swal.fire("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.")
      })
      </script> -->
      <script>
      $('#tc').on('click',function(){
      Swal.fire('Let others benefit from your good health. Do donate blood if you are between age group of 18-60 years.your weight is 45 kgs or more.yourhaemglobin is 12.5 gm% minimum.your last blood donation was 3 months earlier.you are healthy and have not suffered from malaria, typhoid or other transmissible disease in the recent past.There are many, many people who meet these parameters of health and fitness!')
      })
      </script>