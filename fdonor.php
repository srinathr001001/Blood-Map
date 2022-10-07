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
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="Jquery/jquery-3.6.0.min.js"></script>
    <script src="Jquery/sweetalert2.all.min.js"></script>
    <link rel="shortcut icon" type="image/png" href="images/logopng.png">
</head>
<body>
<div id="header">
        <!-- <a  id="pp">Privacy Policy</a> -->
        <a  id="tc">Terms and Conditions</a>
        <a href="Profile.php?uname=<?php echo $user_id?>">
            <button type="button">Profile</button>
            </a>
    </div>
    </div>
    <div id="logo-section">
        <div id="logo">
            <img src="images/photo_6251103116263011549_x.jfif" width="150px" height="150px"/>
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
    <br>
    <br>

<div class="container">
    <div class="title">Request Here</div>
    <div class="content">
      <form action= "fdonor1.php?uname=<?php echo $user_id?>" method="post" >
        <div class="user-details">
          <div class="input-box1">
            <span class="details">Patient Name</span>
            <input type="text" name="pname" placeholder="Enter Patient name" required="">
          </div>
          <div class="input-box1">
            <span class="details">Age</span>
            <input type="number" min="0" max="120" name="age" placeholder="Enter Patient's age" required="">
          </div>
          <div class="input-box1">
            <span class="details">No of Units Required</span>
            <input type="number" min="1" max="4" name="unit"  placeholder="No of Units Required" required="">
          </div>
          <div class="input-box1">
            <span class="details">Reason for Blood</span>
            <input type="text" name="reason" placeholder="Enter the Reason" required="">
          </div>
          
          <div class="input-box1">
            <span class="details">Attender Name</span>
            <input type="text" name="aname" placeholder="Attender Name" required="">
          </div>
          <div class="input-box1">
            <span class="details">Attender Number</span>
            <input type="tel" name="anumber"  placeholder="Attender Number" required="">
          </div>
          <div class="input-box1">
            <span class="details">Hospital</span>
            <input type="text" name="hospital"  placeholder="Enter Hospital Name" required="">
          </div>
          <div class="input-box1">
            <span class="details">Blood Group</span>
            <!-- <input type="text" placeholder="Blood Group" required> -->
            <select name="bgroup" id="" required="">
              <option value="A+">A+</option>
              <option value="A-">A-</option>
              <option value="B+">B+</option>
              <option value="B-">B-</option>
              <option value="O+">o+</option>
              <option value="O-">o-</option>
              <option value="AB+">AB+</option>
              <option value="AB-">AB-</option>
          </select>
          </div>
        <div class="input-box2">
          <span class="details">Remarks</span>
          <input type="text" name="remarks" placeholder="Remarks" required="">
        </div>
      </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1" value="Male">
          <input type="radio" name="gender" id="dot-2" value="Female">
          <input type="radio" name="gender" id="dot-3" value="Transgender">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Transgender</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Submit">
        </div>
      </form>
    </div>
  </div>
</div>
<br><br><br>
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
<input type="hidden" value="<?php echo $user_id?>">
</body>
</html>