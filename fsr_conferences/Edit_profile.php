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
    
    <title>editUser</title>
</head>
<body>
    <?php include("header_login.php");?>
   
    <div class="container">

<div class="flex-wrapper">
    <form style=" margin-left: 15%;margin-top: 15%;" method="post" enctype="multipart/form-data" action="conf_edituser.php">
         
            <div style="border-style: solid;height:200px;width:250px;">
            <img style="margin-left:30px;" id="blah" src="#" onerror="this.src='prof_im.png'" alt="your image" width="180" height="180"/>
            <div class="ProfileDetailsPhotoAndName-photo">
            <label class="custom-file-upload">
            <input name="pic" type="file" id="imgInp"/>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera" viewBox="0 0 16 16">
            <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z"/>
            <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
            </svg>
            </label>
            <br />
            </div>
            </div>
            <script>
                 let fileInput = document.getElementById("imgInp");
                let img = document.getElementById("blah");

                fileInput.addEventListener("change", function(){
                    let file = fileInput.files[0];
                    let reader = new FileReader();
                    reader.onloadend = function(){
                        img.src = reader.result;
                    }
                    if(file){
                        reader.readAsDataURL(file);
                    }
                });
            </script>
            <style>
                 
            input[type="file"] {
             display: none;
            }
            .custom-file-upload {
                border: 1px solid #ccc;
                display: inline-block;
                padding: 6px 12px;
                cursor: pointer;
                background-color:#f0f0f0;
            }
            </style>
            <br />
            <br />
            <div style="width:400px ">
            <h4 style="color:#0D6EFD;font-weight: bolder;font-size:25px;"  class="h3 mb-3 fw-normal">Quel est ton nom?</h4>
            <p style="color:white;">Veuillez utiliser votre vrai nom car cela sera nécessaire pour la vérification d'identité</p>
        
           <br/>
            <div class="form-floating">
            </div>
            <label style="color:#0D6EFD;font-weight: bolder;font-size:25px;"  for="First_name"> First name</label>
            <input type="text" placeholder="Enter your first name" name="nom" id="First_name" class="form-control"/>
           
            <br/>
            <label style="color:#0D6EFD;font-weight: bolder;font-size:25px;" for="Last_name"> Last name</label>
            <input type="text" placeholder="Enter your Last name" name="prenom" id="Last_name" class="form-control"/>
            <br/>
           
       
            
        </div>
           
            <br />
           
        
            <button  style="height:50px;width:120px;font-weight: bolder;font-size:25px;" class="btn-outline-primary " type="submit" >Update</button><br/><br/><br/>
            
</form>
</div>
        </div>
       
 
</body>
</html>