<?php
session_start();
if(!isset($_SESSION["user"])){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <style>
   
.img1:hover{
  filter: brightness(140%);
  transform: scale(1.1);
}
.text{
  font-size: 70px;
  margin-left: -100px;
font-family: 'Sedgwick Ave Display', cursive;

}
.container2{
  display: flex;
  justify-content:space-around;
  width: 30%;
  float:inline-end;
  margin-left: 475px;
}
.popular{
  margin-left: 20px;
  font-family: 'Quicksand', sans-serif;
  font-size: 45px;
  font-weight:bolder;
  text-decoration: underline;
}
.swiper{
  margin-top: 20px;
  width: 100%;
  height: 550px;
}
.swiper-button-prev,.swiper-button-next{
  color: white;
  transition: 0.2s linear;
}
.swiper-button-prev:hover,.swiper-button-next:hover{
  transform: scale(1.2);
}
#remove{
  font-weight: bold;
  border: 0;
  border-radius: 20px;
  cursor: pointer;
}
#table{
  border-collapse: collapse;
  box-shadow: 1px 1px 1px 1px 1px black;
  
}
table, td, th {
  border: 1px solid white;
}
#add{
  cursor: pointer;
  background-color: white;
  border: 2px;
  font-weight: bold;
  margin: 10px;
  border-radius: 10px;
  transition: 0.3s;
}
#add:active{
  opacity: 0.3;
}
td,th{
  font-family: 'Quicksand', sans-serif;
  text-align: center;
  color: white;
  padding: 10px;
  
}
#text{
  padding: 10px;
  margin-bottom: 10px;
}
@media screen and (max-width:900px){
  .swiper-slide img{
    width: 100%;
  }
  .popular{
    text-align:center;
    width: 100%;
  }
  .container2{
    margin-left: 10px;
    width: 100%;
  }
  .img2,.img1{
    width: 100%;
  }
  .container3{
    width: 100%;
  }
  .text{
    margin-left: 0;
  }
}
@media screen and (max-width:780px) and (max-width:714px) and
(max-width:690px) and (max-width:670px) and (max-width:640px) {
  .text{
    margin-left: 70px;
  }
  .img1{
    margin-right: 70px;
  }
}

  </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sneaker Spot</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="icon" type="image/x-icon" href="favicon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="favicon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<body>
<section class="top-nav">
    <div class="logo" style="font-family:'Sedgwick Ave Display'";>
      Sneaker Spot
    </div>
    <input id="menu-toggle" type="checkbox" />
    <label class='menu-button-container' for="menu-toggle">
    <div class='menu-button'></div>
  </label>
    <ul class="menu">
      <li><a href="index.php"><span class="material-symbols-outlined">home</span></a></li>
      <li><a href="store.html"><span class="material-symbols-outlined">store</span></a></li>
      <li><a href="info.html"><span class="material-symbols-outlined">info</span></a></li>
    </ul>
  </section>
  <h2 class="slogan" style="font-family: 'Quicksand', sans-serif;width:100%;color: rgb(255, 255, 255);margin-top:40px;text-align:center;word-spacing:8px;margin-bottom:0px;">WE MAKE YOUR MOVES</h2>
  <div class="container" style="width:100%;" >
    <h4 style="font-family: 'Quicksand', sans-serif;color:white;text-align:center;margin-right:15px;margin-top:5px;margin-bottom:0px"><span style="color: 	white;"  class="material-symbols-outlined">electric_bolt</span><span style="font-size:x-large;letter-spacing:3px;">Fast</span></h4>
  </div>
  
  
  <div class="container3" style="display:flex;justify-content:center;width:100%;">
  <p class="text" >ACTIVE <br>RUN <span style="font-size:small;font-family:'cairo'">4.0</span></p>
    <img class="img2"src="images/logo.png" style="position:absolute;z-index:-1;height:400px;width:400px;">
    <div><img class="img1" src="images/rename.png" style="height:375px;width:450px;margin-top:30px;margin-left:70px;transition:0.3s;cursor:pointer;"></div>
  </div>
  
    <div class="container2">
      <span class="material-symbols-outlined">sports_handball<span style="font-size:15px;margin-right:15px;">flexable</span></span>
      <span class="material-symbols-outlined">fitness_center<span style="font-size:15px;margin-right:15px;">Athletic</span></span>
      <span class="material-symbols-outlined">humidity_high<span style="font-size:15px;margin-right:15px;">Smooth</span></span>
    </div>
    <p class="popular">WHATS <span style="color:#ebebeb">POPULAR!</span></p>
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="images/card1.png" alt="">
            </div>
            <div class="swiper-slide">
                <img src="images/card2.png" alt="">
            </div>
            <div class="swiper-slide">
                <img src="images/card3.png" alt="">
            </div>
            
            
        </div>

        <div class="swiper-pagination"></div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper(".swiper", {
            navigation:{
                prevEl: ".swiper-button-prev",
                nextEl: ".swiper-button-next"
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            effect: "coverflow"
        });
    </script>
    <script>
      
        function success(id){
            if(document.getElementById(id).value==""){
                document.getElementById("add").disabled = true;
            }
            else{
                document.getElementById("add").disabled = false;
            }
        }
        
    </script>
    
</body>
</html>