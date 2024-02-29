
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
   
 session_start();
   
   if(isset($_SESSION['user'])){ include("header_login.php");}
 
     else{echo "<script>window.location = 'login.php'</script>";}
 ?>
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
   <meta name="theme-color" content="#7952b3">
   <link rel="stylesheet" href="style.css">
    
    <title>ajouter conference</title>
</head>
<style>
    body {
  font-family: 'Lato', sans-serif;
  margin: 0;
  background: url('back.jpg') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  color: #0a0a0b;

}
</style>
<body >
    
   
    <div class="container">

<div class="flex-wrapper">
    <form style=" margin-left: 15%;margin-top: 15%;padding-left:40px;border-radius: 15px;padding-right:40px;" method="post" enctype="multipart/form-data" action="conf_ajouter.php" class="for1">
</br>
    <h1 style="color:yellow;font-weight: bolder;">Informations sur la manifestation :</h1></br>
    <table><tr><th>
            <div style="border-style: solid;height:200px;width:250px;">
            
            <img style="margin-left:30px;" id="blah" src="#" onerror="this.src='NEW Conference.jpg'" alt="your image" width="180" height="180"/>
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
         
            <div style="width:400px ">
           
           
        
           <br/>
            <div class="form-floating ">
            </div>
            <label style="color:white;font-weight: bolder;font-size:25px;"  > Nom de conférence</label>
            <input type="text" placeholder="nom de conferences" name="nom" id="First_name" class="form-control"/>
            </br>
            <label style="color:white;font-weight: bolder;font-size:25px;"  for="First_name">Informations sur la manifestation</label>
                    <select class="form-select" aria-label="Default select example" name="type" onchange="showOtherOption(this)">
            <option selected>Choisir ...</option>
            <option value="Colloque">Colloque</option>
            <option value="2">Conférence</option>
            <option value="Conférence">Réunion</option>
            <option value="Congrès">Congrès</option>
            <option value="Journées">Journées</option>
            <option value="Séminaire">Séminaire</option>
            <option value="Workshop">Workshop</option>
            <option value="Activité culturelle">Activité culturelle</option>
            <option value="Activité Sportive">Activité Sportive</option>
            <option value="10">Autres (à préciser) :</option>
        </select> 
        <div id="otherOptionInput" style="display: none;">
            <input type="text" name="otherOptionText" placeholder="Please specify" class="form-control"/>
        </div></br>
        <label style="color:white;font-weight: bolder;font-size:25px;" >Intitulé de la manifestation</label>
            <input type="text" placeholder="Intitulé de la manifestation" name="Idm"  class="form-control"/>
        </br>
        <label style="color:white;font-weight: bolder;font-size:25px;"  >Nature</label>
        <select class="form-select" aria-label="Default select example" name="nature" >
            <option selected>Choisir ...</option>
            <option value="Régionale">Régionale</option>
            <option value="Nationale">Nationale</option>
            <option value="Internationale">Internationale</option>
            
        </select></br>
        <label style="color:white;font-weight: bolder;font-size:25px;"  >Nombre des participants</label>
            <input type="number" placeholder="Nombre des participants" name="n_p"  class="form-control"/>
        </br>
        <label style="color:white;font-weight: bolder;font-size:25px;"  >Présentation de la manifestation </label>
        <textarea  style="width:420px;height:240px;"   class="" id="tx2"  name="mani" required placeholder=" Présentation de la manifestation ..."></textarea>
       
        <br/></th><th>
        <div style="margin-left:-20%; desplay:inline;">
            <div class="form-floating">
             <p style="color:white;font-weight: bolder;font-size:25px;" > Description</p>
              <textarea  style="width:420px;height:240px;"  class="" id="tx2"  name="description" required placeholder="  conférence description ..."></textarea>
            </div>
</br>
            <div class="input-group">
  <span class="input-group-text">Date:</span>
  <input type="date" name="date" class="form-control"> </br>
 
</div></br>
<label style="color:white;font-weight: bolder;font-size:25px;"  for="First_name">Lieu</label>
            <input type="text" placeholder="Lieu" name="lieu" id="First_name" class="form-control"/>
            </br>
            <label style="color:white;font-weight: bolder;font-size:25px;width:420px;"  for="First_name">Université</label>
            <input type="text" placeholder="université" name="uni" class="form-control"/> </br>
            <label style="color:white;font-weight: bolder;font-size:25px;width:400px;"  >Faculté</label>
            <input type="text" placeholder="Faculté" name="uni"  class="form-control"/> </br>
            <label style="color:white;font-weight: bolder;font-size:25px;width:420px;"  >Organisateur</label>
            <input type="text" placeholder="Organisateur" name="uni"  class="form-control"/>
            <label style="color:white;font-weight: bolder;font-size:25px;width:420px;"  >Partenaires Institutionnels</label>
            <input type="text" placeholder="Organisateur" name="p_i"  class="form-control"/>
            </div></tr></th>
            <br />
       

                <script>
                   function showOtherOption(selectElement) {
    var otherOptionInput = document.getElementById("otherOptionInput");
    var selectedValue = selectElement.value;
    if (selectedValue === "10") {
        otherOptionInput.style.display = "block";
        otherOptionInput.querySelector("input").disabled = false;
    } else {
        otherOptionInput.style.display = "none";
        otherOptionInput.querySelector("input").disabled = true;
    }
}
function showOtherOption2(selectElement) {
    var otherOptionInput = document.getElementById("otherOptionInput2");
    var selectedValue = selectElement.value;
    if (selectedValue === "1") {
        otherOptionInput.style.display = "block";
        otherOptionInput.querySelector("input").disabled = false;
    } else {
        otherOptionInput.style.display = "none";
        otherOptionInput.querySelector("input").disabled = true;
    }
}



                </script>
                
     
  
                        
            
           
           <tr><th rowpan="2">
        </div>
        </br><p style="color:yellow;font-weight: bolder;font-size:30px;">Indexation dans les bases de données :</p></br>
        <label style="color:white;font-weight: bolder;font-size:25px;"  >La manifestation est-elle indexée ?</label>
        <select class="form-select" aria-label="Default select example" name="indexed" onchange="showOtherOption2(this)" >
            <option selected>Choisir ...</option>
            <option value="1">oui</option>
            <option value="2">non</option></select> 
           
            <input id="otherOptionInput2" style="display: none;" type="text" name="indexé" placeholder=" préciser le type d’indexation" class="form-control"/>
        </br>
        
            
            
        </select></br>
        <p style="color:yellow;font-weight: bolder;font-size:30px;">Coordonnateur de la manifestation :</p></br>
       
            <label style="color:white;font-weight: bolder;font-size:25px;width:420px;"  >Nom</label>
            <input type="text" placeholder="nom" name="nom_org" class="form-control"/> </br>
            <label style="color:white;font-weight: bolder;font-size:25px;width:400px;"  >Prénom</label>
            <input type="text" placeholder="prénom " name="pre_org"  class="form-control"/> </br>
            <label style="color:white;font-weight: bolder;font-size:25px;width:420px;"  >Email</label>
            <input type="email" placeholder="Email" name="email" class="form-control"/> </br>
            <label style="color:white;font-weight: bolder;font-size:25px;width:400px;"  >Telephone</label>
            <input type="text" placeholder="Telephone " name="tel"  class="form-control"/> </br>
            <p style="color:yellow;font-weight: bolder;font-size:30px;">Comité local d’organisation :</p></br>
            <label style="color:white;font-weight: bolder;font-size:25px;width:400px;"  >Nom et Prénom</label>
            <input type="text" placeholder="Nom et Prénom " name="nom_pre"  class="form-control"/> </br>
            <label style="color:white;font-weight: bolder;font-size:25px;width:400px;"  >Département</label>
            <input type="text" placeholder="Département " name="nom_Départementpre"  class="form-control"/> </br>
            <label style="color:white;font-weight: bolder;font-size:25px;width:400px;"  >Email</label>
            <input type="text" placeholder="Email " name="Email_co"  class="form-control"/> </br>
            <label style="color:white;font-weight: bolder;font-size:25px;"  >Y a-t-il des frais d’inscription ?</label>
        <select class="form-select" aria-label="Default select example" name="frais" onchange="showOtherOption3(this)" >
            <option selected>Choisir ...</option>
            <option value="1">oui</option>
            <option value="2">non</option></select> 
            <select style="display: none;"  id="otherOptionInput3" class="form-select" aria-label="Default select example" name="categorie" onchange="showOtherOption4(this)" >
            <option selected>Choisir ...</option>
            <option value="1">Chercheurs</option>
            <option value="2">Enseignants chercheurs</option>
            <option value="3">Doctorants</option>
            <option value="4">Autres</option></select> 
           
            <input  id="otherOptionInput4" style="display: none;" type="number" name="frais_" placeholder="préciser le montant par catégorie de participants par DH " class="form-control"/>
            <input  id="otherOptionInput5" style="display: none;" type="text" name="nature_mont" placeholder="Préciser la nature et le montant des autres sources de financement" class="form-control"/>
        </br>
        <p style="color:yellow;font-weight: bolder;font-size:30px;">Soutien sollicité de la Faculté :</p></br>
        <label style="color:white;font-weight: bolder;font-size:25px;"  >Nature du soutien</label>
        <select class="form-select" aria-label="Default select example" name="nature_soll" onchange="showOtherOption5(this)" >
            <option selected>Choisir ...</option>
            <option value="1">Locaux</option>
            <option value="2">Autres</option></select> 
            <select style="display: none;"  id="otherOptionInput6" class="form-select" aria-label="Default select example" name="detail"  >
            <option selected>Choisir ...</option>
            <option value="1">Salle(s)…</option>
            <option value="2">Amphithéâtre (s):…</option>
            </select> 
            <input  id="otherOptionInput7" style="display: none;" type="number" name="deatil_autr" placeholder="A préciser :" class="form-control"/></br>
            <label style="color:white;font-weight: bolder;font-size:25px;"  >Fait le :</label>
            <input type="date" class="form-control" id="currentDate" name="fais"readonly>
</br>
        <button  style="height:50px;width:120px;font-weight: bolder;font-size:25px;color:white;" class="btn-outline-primary " type="submit" >ajouter </button></br></br>
</tr></th>
        </table>
        <script>
            function showOtherOption3(selectElement) {
    var otherOptionInput = document.getElementById("otherOptionInput3");
    var otherOptionInput2 = document.getElementById("otherOptionInput4");
    var otherOptionInput3 = document.getElementById("otherOptionInput5");

    var selectedValue = selectElement.value;
    if (selectedValue === "1") {
        otherOptionInput.style.display = "block";
        otherOptionInput.querySelector("input").disabled = false;
        otherOptionInput2.style.display = "none";
        otherOptionInput3.style.display = "none";
        otherOptionInput2.querySelector("input").disabled = true;
        otherOptionInput3.querySelector("input").disabled = true;
    } else {
        otherOptionInput.style.display = "none";
        otherOptionInput2.style.display = "none";
        otherOptionInput3.style.display = "none";
        otherOptionInput.querySelector("input").disabled = true;
        otherOptionInput2.querySelector("input").disabled = true;
        otherOptionInput3.querySelector("input").disabled = true;
    
    }
}
function showOtherOption4(selectElement) {
   
    var otherOptionInput2 = document.getElementById("otherOptionInput4");
    var otherOptionInput3 = document.getElementById("otherOptionInput5");
   
    
        otherOptionInput2.style.display = "block";
        otherOptionInput3.style.display = "block";
        otherOptionInput2.querySelector("input").disabled = false;
        
        otherOptionInput3.querySelector("input").disabled = false;
    
}
   function showOtherOption5(selectElement) {
    var otherOptionInput = document.getElementById("otherOptionInput6");
    var otherOptionInput2 = document.getElementById("otherOptionInput7");

    var selectedValue = selectElement.value;
    if (selectedValue === "1") {
        otherOptionInput.style.display = "block";
        otherOptionInput2.style.display = "none";
        otherOptionInput.querySelector("input").disabled = false;
       
        otherOptionInput2.querySelector("input").disabled = true;
       
    }
    else if(selectedValue === "2"){
        otherOptionInput2.style.display = "block";
        otherOptionInput.style.display = "none";
        otherOptionInput2.querySelector("input").disabled = false;
        
        otherOptionInput.querySelector("input").disabled = true;
    }
     else {
        otherOptionInput.style.display = "none";
        otherOptionInput2.style.display = "none";
        otherOptionInput.querySelector("input").disabled = true;
        
        otherOptionInput2.querySelector("input").disabled = true;
    
    }
}
document.getElementById("currentDate").valueAsDate = new Date();

        </script>
           
            <style>
                textarea {
                     overflow: auto;
                     border-radius:3px;
                     border:1px solid lightgrey;
                }   
                textarea:focus{color:#212529;background-color:#fff;border-color:#86b7fe;outline:0;box-shadow:0 0 0 .25rem rgba(13,110,253,.25)}    
                textarea::placeholder{color:grey;opacity:1}
                textarea::-moz-placeholder{color:#6c757d;opacity:1}
                textarea:hover:not(:disabled):not([readonly])::-webkit-file-upload-button{background-color:#dde0e3}
               
            </style>
            
            <br /><br />
           
           
            
            
            
</form>
</div>
        </div>
       
        <?php
  include("footer.php");
  ?>
</body>
</html>