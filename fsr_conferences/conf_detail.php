<!DOCTYPE html>
<html lang="en">


<head>
<script src="https://kit.fontawesome.com/d51b4ce042.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>conference detail</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body id="#top">

  <!-- 
    - #HEADER
  -->

  <?php
  
  session_start();
  if(isset($_SESSION['user'])){ include("header_login.php");}

    else{include("header.php");}           
  ?>





  <main>
    <article>

      <!-- 
        - #MOVIE DETAIL
      --></br>
</br>
     
      <section class="movie-detail">
        <div class="container">
        <?php
      
        include("cnx.php");

            $sql1="select * from conference where id ={$_REQUEST["id"]}";
            $t=$conx->query($sql1);
            $rod=$t->fetch(PDO::FETCH_ASSOC);
            
            
             
          ?>

          <figure class="movie-detail-banner">

          <?php if($rod["image_con"]==null){ ?><img  alt="conference" ><?php }else{echo '<img  src="data:image;base64,'.base64_encode($rod["image_con"]).'"/>'; } ?>
            
          </figure>

          <div class="movie-detail-content">

          
            <h1 class="h1 detail-title">
               <strong><?php echo $rod["nom"]?></strong>
            </h1>

            <div class="meta-wrapper">

              <div class="badge-wrapper">
                <div class="badge badge-fill">Type</div>

                <div class="badge badge-outline"><?php echo $rod["type"]?></div>
              </div>

              

              <div class="date-time">

                <div>
                  <ion-icon name="calendar-outline"></ion-icon>

                  <time datetime="2021"><?php echo $rod["date"] ?></time>
                </div>

                <div>
                  <ion-icon name="time-outline"></ion-icon>

                  <time datetime="PT115M"><?php echo $rod["université"] ?> université</time>
                </div>
                <div>
                 

                  
                  <div class="badge badge-fill">Nombre des participants: <?php echo $rod["N_participants"] ?></div>
                </div>
                

              </div>
            
              <p  class="storyline"><strange> faculté :</strange> <?php echo $rod["faculté"] ?></p>
            </div>

            <p class="storyline">
            <?php echo $rod["description"] ?>
            </p>
            <div class="badge badge-fill">organisateur : <?php echo $rod["organis"] ?></div>

           
      </section>
      <section class="tv-series">
        <div class="container">

          <p class="section-subtitle">Conference</p>

          <h2 class="h2 section-title">conference en cours</h2>

          <ul class="movies-list">

          <?php
            $sql="select * from conference where date = CURRENT_DATE; ";
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
           <a href="#">
             <h3 class="card-title"><?php echo $row["nom"] ?></h3>
           </a>

           <time datetime="2022"><?php echo $row["description"] ?></time>
         </div>

        

       </div>
     </li>
            <?php }?>
            
          </ul>

        </div>
      </section>

      

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>