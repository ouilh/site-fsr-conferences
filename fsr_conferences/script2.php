<ul  class="movies-list  ">
    <?php
    include("cnx.php");
   
        
        
    
    
    
    if(isset($_POST['option'])){
      $option = $_POST['option'];
      
     $sql="select * from conference where left(nom,LENGTH('{$option}'))='{$option}' and publier = 1 order by id Desc";
    }
    
     // Build the SQL query based on the filter option
    
     
      $t=$conx->query($sql);
       while($row=$t->fetch(PDO::FETCH_ASSOC)){
    ?>
    

    <li>
       <div id="content" class="movie-card">

         <a href="#">
           <figure class="card-banner">
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