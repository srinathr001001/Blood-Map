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
<div class="msg-container">
        <div id="slider">
            <div class="msg-col">
                <h1>Welcome to Blood Map</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure voluptate odit, est sit eos inventore ducimus ratione incidunt eius nihil, aut quaerat laudantium minima harum delectus exercitationem officia rerum deleniti doloribus rem. Maiores consectetur error aliquam, vero et ratione id veniam sit recusandae atque harum, velit est quidem! Culpa, ex! Minus fugit ullam facilis reprehenderit inventore deleniti, odio impedit quam laudantium est. Quia facere doloribus excepturi earum iusto dignissimos nisi illo. Libero quasi, iure hic temporibus magni laboriosam? Pariatur, at iusto cumque quae voluptatibus quidem, ullam odit illo nobis officiis, recusandae aspernatur porro nisi quos earum? Nesciunt impedit rerum quibusdam! ipsum dolor sit amet consectetur adipisicing elit. Debitis animi cupiditate illo, sint beatae consequatur odio modi minus obcaecati ut! Ex exercitationem quae fuga quos magni quo eos corporis mollitia?</p>
                <a href="">Learn More</a>
            </div>
            <div class="msg-col">
                <h1>Find Donor</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi, deserunt. Eligendi repellat nulla explicabo, dicta minima nobis a fugiat unde animi ipsum, voluptate deleniti dignissimos quia? Officiis repellat saepe cupiditate unde sequi. Non accusamus numquam sequi autem sunt quos ullam obcaecati deserunt similique! Expedita sequi, ab quos accusantium officia tempore animi odit quasi. Ipsam nam deserunt provident omnis, voluptatibus esse mollitia. Natus voluptatem necessitatibus sapiente perspiciatis modi quo laborum quae facere. Non ratione nisi est a modi quam officiis laudantium asperiores eum? Suscipit similique illum quas aliquid possimus quia dolore. Et voluptas temporibus sequi delectus ea, iusto adipisci totam consectetur! ipsum dolor sit amet consectetur adipisicing elit. Debitis animi cupiditate illo, sint beatae consequatur odio modi minus obcaecati ut! Ex exercitationem quae fuga quos magni quo eos corporis mollitia?</p>
                <a href="">Learn More</a>
            </div>
            <div class="msg-col">
                <h1>Notification</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe ullam voluptatibus voluptates iusto, sapiente earum possimus, reiciendis repellendus magnam dolore debitis harum voluptate consequuntur quasi voluptas perferendis inventore eveniet repellat nisi nulla. Aut earum, totam obcaecati architecto incidunt tenetur molestias modi, ab quia cupiditate omnis aperiam explicabo animi. Perferendis ratione eos cum facilis, cupiditate pariatur at ut est, molestiae nisi dolorum neque modi fuga provident quas nemo ullam laboriosam culpa animi. Facere laboriosam consectetur expedita sequi dignissimos adipisci dolores ea explicabo, eius velit suscipit iure illo et esse assumenda voluptatibus temporibus corporis labore eos quod possimus quisquam accusantium. Dolore, distinctio? ipsum dolor sit amet consectetur adipisicing elit. Debitis animi cupiditate illo, sint beatae consequatur odio modi minus obcaecati ut! Ex exercitationem quae fuga quos magni quo eos corporis mollitia?</p>
                <a href="">Learn More</a>
            </div>
            <div class="msg-col">
                <h1>Requested & Accepted List</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure illum fugiat, vero unde voluptatem aut, velit doloremque eum perspiciatis voluptate minima nostrum rem impedit provident exercitationem repellendus nesciunt blanditiis inventore dolor atque accusantium voluptates! Nesciunt amet nemo nulla accusantium accusamus cum reiciendis, quod corrupti aliquam explicabo consectetur, modi eos! Possimus laborum necessitatibus voluptate a quis, corporis velit ipsa eum modi aperiam dignissimos ipsum voluptatem explicabo et iusto quod tenetur eius ipsam incidunt aliquid. Velit officiis sequi suscipit similique non tempora fugiat odio ipsam laboriosam debitis ratione voluptas corporis repellendus laborum, quo doloribus fugit porro recusandae ducimus at facilis commodi fuga. ipsum dolor sit amet consectetur adipisicing elit. Debitis animi cupiditate illo, sint beatae consequatur odio modi minus obcaecati ut! Ex exercitationem quae fuga quos magni quo eos corporis mollitia?</p>
                <a href="">Learn More</a>
            </div>
        </div>
    </div>
    <div class="controller">
        <div id="line1"></div>
        <div id="line2"></div>
        <div id="line3"></div>
        <div id="line4"></div>
        <div id="active"></div>
    </div>
    <script>
        var slider = document.getElementById('slider');
        var active = document.getElementById('active');
        var line1 = document.getElementById('line1');
        var line2 = document.getElementById('line2');
        var line3 = document.getElementById('line3');
        var line4 = document.getElementById('line4');

        line1.onclick = function(){
            slider.style.transform = 'translateX(0)';
            active.style.top = '0px';
        }
        line2.onclick = function(){
            slider.style.transform = 'translateX(-25%)';
            active.style.top = '80px';
        }
        line3.onclick = function(){
            slider.style.transform = 'translateX(-50%)';
            active.style.top = '160px';
        }
        line4.onclick = function(){
            slider.style.transform = 'translateX(-75%)';
            active.style.top = '240px';
        }
    </script>

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