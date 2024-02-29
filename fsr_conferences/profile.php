<?php 
  session_start();
  if(!isset($_SESSION['user'])){echo"<script> window.location = 'login.php'</script>";}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
    <title>profile</title>
</head>
<body>
    <?php include("header_login.php");?>
   
    <div id="content" class="movie-card">
        <?php
    $sql="select * from user where user ='{$_SESSION['user']}'";
     
     $t=$conx->query($sql);
      while($row=$t->fetch(PDO::FETCH_ASSOC)){
   ?>
   
        
           <br/><br/><br/><br/><br/><br/><br/>
 
        
<br/>
          <div class="title-wrapper c">
          <?php if($row["image"]==null){ ?><img src="prof_im.png" alt="profile_img" id="im1" ><?php }else{echo '<img class="rounded-circle" style="height:150px;width:150px;" src="data:image;base64,'.base64_encode($row["image"]).'"/>'; } ?>
      </div>
      <div>
              <h class="card-title h3"><?php echo $row["user"] ?></h>
            

           
          </div>
          <br/><br/>

         
            
                <div class="badge a"><label >nom : </label><?php echo " ". $row["nom"] ?></div>
                <br/>

            

             <div class="badge a"><label >prenom : </label><?php echo  " ".$row["prenom"] ?></div> <br/>
             
             <div class="badge a"><label > Email : </label><?php echo " ". $row["email"] ?></div> <br/>
            
           
<style>
    .a{
        font-size:20px;
    }
    label{
        color:white;
    }
    .button{
        width: 230px;
        margin-left:44%;
    }
    .c{
        margin-left:46%;
    }
    .h3{
        margin-left:48.5%;
        font-size:30px;
    }
</style>
<br/><br/>
          
             
         
          <?php }?>
          <button onclick="   window.location = 'Edit_profile.php'" class=" button btn btn-primary">Edit your profile</button>
       
       
 
</body>
</html>