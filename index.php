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
 
  <div class="bienvenue">
 <h3><strong> Pour votre bien-être et votre confort au quotidien !</strong></h3>

  </div>

       <div class="slideshow" >
         <ul>
            <li><img src="images/imgmenu/imagem1.jpeg" alt="" width="1000" height="450" /></li>
            <li><img src="images/imgmenu/imagem2.jpg" alt="" width="1000" height="450" /></li>
            <li><img src="images/imgmenu/imagem3.jpeg" alt="" width="1000" height="450" /></li>
            <li><img src="images/imgmenu/imagem4.jpg" alt="" width="1000" height="450" /></li>
            <li><img src="images/imgmenu/imagem5.jpg" alt="" width="1000" height="450" /></li>
            <li><img src="images/imgmenu/imagem6.jpg" alt="" width="1000" height="450" /></li>
            <li><img src="images/imgmenu/imagem7.jpg" alt="" width="1000" height="450" /></li>
            <li><img src="images/imgmenu/imagem8.jpg" alt="" width="1000" height="450" /></li>
            <li><img src="images/imgmenu/imagem9.jpg" alt="" width="1000" height="450" /></li>
            <li><img src="images/imgmenu/imagem10.jpg" alt="" width="1000" height="450" /></li>
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



</body>
</html>