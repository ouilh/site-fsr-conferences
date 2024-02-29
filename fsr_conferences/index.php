<!DOCTYPE html>
<html lang="en">

 


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">
   <link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <!-- Favicons -->
   <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
   <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
   <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
   <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
   <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
   <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
   <link rel="icon_avatar" href="./assets/images/pic_acc.ico">
   <link rel='stylesheet' type='text/css' media='screen' href='Search.css'>
   <meta name="theme-color" content="#7952b3">
   <link rel="stylesheet" href="style.css">
  <title>Home</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="logo.png" type="image/x-icon">

  <!-- 
    - custom css link
  -->


  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body id="top">
<?php
   
 session_start();
   
   if(isset($_SESSION['user'])){ include("header_login.php");}
 
     else{include("header.php");}
 ?>

 <section class="hero">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">UM5 Rabat</p>

            <h1 class="h1 hero-title">
             université du future <strong>vision</strong>.
            </h1>

            
             

            <button class="btn btn-primary" onclick="window.location='create_con.php'">
              <ion-icon name="play"></ion-icon>

              <span>Créer une conférence</span>
            </button>

          </div>

        </div>
      </section>
      <?php
 
 include("cnx.php");

?>
<div style="height:130px"action="" class="c a search-bar">
 <input id="in" class="in" onchange(handlesrearch())  name="search" pattern=".*\S.*" required>
 <button onclick="send1(value=document.getElementById('in').value)" class="b search-btn" >
   <span>Search</span>
 </button>
        </div>
        <section class="upcoming">

    
     
<div id="filter2">
<ul class="movies-list">
<?php
$sql="select * from conference where publier = 1  ";
     
     $t=$conx->query($sql);
      while($row=$t->fetch(PDO::FETCH_ASSOC)){
   ?>
   

     <li>
       <div id="content" class="movie-card">

         <a   href="conf_detail.php?id=<?php echo $row["id"] ?>" class="card-banner">
           <?php if($row["image_con"]==null){ ?><img  alt="image" ><?php }else{echo '<img  src="data:image;base64,'.base64_encode($row["image_con"]).'"/>'; } ?>
           </figure>
         </a>

         <div class="title-wrapper">
           <a href="conf_detail.php?id=<?php echo $row["id"] ?>">
             <h3 class="card-title"><?php echo $row["nom"] ?></h3>
           </a>

           <time datetime="2022"><?php echo $row["description"] ?></time>
         </div>

        

       </div>
     </li>
     <?php }?>
      </ul>
</div>
 
      
     

      

    

  </div>
</section>
      
      </script>
        
     
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <script>
              
             
              function send1(value) {
      
                $.ajax({
                method: 'POST',
                url: 'script2.php',
                data: { option: value },
                success: function(data) {
                  var container = document.getElementById('filter2');
                  container.innerHTML =data;
                }
              });
            }
            let input = document.getElementById("in");
          input.addEventListener("keyup", function(event) {
            send1(input.value);
    });
      
      
      
      
      
      
      
      
      
      </script>
        



  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <?php
  include("footer.php");
  ?>


</body>

</html>