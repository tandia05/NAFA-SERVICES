<?php

include "includes/header.php"


?>
<!DOCTYPE html>
<html>
<head>
  <title>menu</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="">
  <link rel="stylesheet" type="text/css" href="stylesheet/biblio.css">
</head>
<body >
 
  <p class="bienvenue">
  Bienvenue sur le site de NAFASERVICES  <br>
     
     
  </p>
  <br>
       <div class="slideshow" >
         <ul>
            <li><img src="images/imgmenu/imagem1.jpeg" alt="" width="1000" height="450" /></li>
            <li><img src="images/imgmenu/imagem2.jpg" alt="" width="1000" height="450" /></li>
            <li><img src="images/imgmenu/imagem3.jpeg" alt="" width="1000" height="450" /></li>
            <li><img src="images/imgmenu/imagem4.jpeg" alt="" width="1000" height="450" /></li>
            <li><img src="images/imgmenu/imagem5.jpeg" alt="" width="1000" height="450" /></li>
            <li><img src="images/imgmenu/imagem6.jpeg" alt="" width="1000" height="450" /></li>
            <li><img src="images/imgmenu/imagem7.jpeg" alt="" width="1000" height="450" /></li>
             <li><img src="images/imgmenu/imagem8.jpeg" alt="" width="1000" height="450" /></li>
              <li><img src="images/imgmenu/imagem9.jpeg" alt="" width="1000" height="450" /></li>
               <li><img src="images/imgmenu/imagem10.jpeg" alt="" width="1000" height="450" /></li>
         </ul>
    </div>



 <script type="text/javascript" src="js/jquery.min.js"></script>
 
<script type="text/javascript">
   $(function(){
      setInterval(function(){
         $(".slideshow ul").animate({marginLeft:-350},800,function(){
            $(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
         })
      }, 3500);
   });
</script>


<?php include "includes/footer.php" ?>
</body>
</html>