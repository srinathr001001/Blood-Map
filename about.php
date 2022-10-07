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
    <br><br><br>
    <div id="ABT">
      <div id="aboutus">
        <h1>About Us</h1>
        <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, hic distinctio magnam exercitationem dolores fuga recusandae ut quisquam cupiditate. Aliquid laboriosam officiis maxime, libero tempore totam tempora dicta voluptatibus iusto blanditiis eum ipsa reiciendis quas laborum atque quam asperiores magni odit sunt provident aspernatur vero enim ratione! Qui magnam omnis labore nam et iusto quisquam, debitis iure obcaecati non dolores beatae tenetur sunt repellat facilis enim a illo quo at temporibus alias fugiat sequi dolorem. Soluta nobis quia fugit voluptas repellendus vitae quod quaerat, repellat tempora necessitatibus dolorum earum vel quam rem id voluptates inventore facilis recusandae! Iste neque inventore ut quam esse fuga error possimus consectetur non modi deserunt, nobis dolores corrupti explicabo officia dolorum, exercitationem quia facilis, laudantium pariatur minus incidunt. Tempore sequi, exercitationem accusantium saepe vitae cumque nihil, sed provident quod quidem, rem explicabo ipsa harum nemo cum perspiciatis molestiae rerum! Fugit laudantium nobis aliquid repudiandae modi?</p>  
        </div>
        <div id="Mission">
          <h1>Mission</h1>
          <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam qui eaque porro ut, ea quae illum incidunt assumenda tempora sapiente nam dolorem natus, et quasi vel, quod error dolor. Numquam explicabo ipsam dicta amet similique magni quia totam autem ad dolore suscipit quibusdam aliquam, natus tempora et voluptate provident dolores?</p>
    </div>
        <div id="Vision"><h1>Vision</h1>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae repellendus quas esse accusamus dolores incidunt consequatur animi ab odio, corrupti veniam natus? Repellat vitae perspiciatis at voluptatibus consectetur, ullam culpa dolore quod quia exercitationem corporis minima, sunt porro? Suscipit numquam ab magnam error quam corrupti enim, officia nostrum ad? Necessitatibus animi beatae saepe architecto accusamus ipsam soluta repudiandae enim rem? Eveniet harum eaque iste quam ex possimus mollitia nostrum, officia quibusdam velit consequuntur ducimus fuga dolore commodi hic sint consequatur reiciendis quas, earum odit. Dicta non exercitationem, eum ea optio modi, sequi laboriosam itaque, neque quae dolorum. Dolores, impedit cum.</p>
          <ul>
            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque voluptas, natus magni distinctio sed nihil deserunt ipsam eius minima enim tempore excepturi placeat, atque aliquid voluptatum ea delectus molestiae autem non alias praesentium sit! Molestiae fuga sint quis dolores praesentium.</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. At tempora excepturi accusantium quidem placeat commodi ea libero fuga hic voluptates animi provident nesciunt perferendis ex omnis incidunt, cumque doloribus dolor..</li>            
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci consequatur ut, cumque neque error fugit quam voluptate quae unde quisquam officia, eligendi, ullam iusto non. Ullam autem ipsam distinctio in.</li>
          </ul>
          </div>

  </div>
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
</html