<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Service d'aide à domicile</title>
	<meta charset="utf-8">
  <link rel="icon" type="image/jpg" href="favicon.png" />


   <meta name="viewport" content="width=device-width, initial-scale=1">

   
<!--    <script type="text/javascript" src="js/script.js"></script> -->
   <script type="text/javascript" src="js/jquery.min.js"></script>
   <script type="text/javascript" src="js/zepto.min.js"></script>
   <script type="text/javascript" src="js/lodash.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  
  <!--  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
   <link rel="stylesheet" type="text/css" href="stylesheet/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="stylesheet/biblio.css">

</head>
<body >
  <header>
   <div id="container">

    <div class="logo"><img src="images/imgmenu/logo.PNG" width="790" height="110" />
    </div>

   <!--  <div class="bgtittre"  background="../images/bgtittre.jpg">
       
    </div > -->
    <br>
   
   

    <!--  <button type="button" class="btn btn-default btn-sm" 
     onclick="javascript:location.href=''" style="float: right;">
        <span class="glyphicon glyphicon-user"></span> 
         <?php 
        /* var_dump($_SESSION['user']);*/
            if (isset($_SESSION['user']))
            { echo '<a href="logout.php">Deconnexion</a>';}
            else{echo '<a href="seConnecter.php">Se connecter</a>';}
          ?>
       </button> -->
  <!--  <h1 class="tittre">NAFASERVICES </h1>
  <h1 class="soustittre">Service d'aide à domicile</h1> -->
   <nav class="menu">
   <ul >
      <li>
      	<a href="index.php">Accueil</a>
      	<!-- <ul class="sousmenu">
      		<li><a href="">Bonjour</a></li>
      		<li><a href="">Merci</a></li>
      		<li><a href="">maman</a></li>
      		<li><a href="">bye</a></li>
      	</ul> -->
      </li>
      <li>
      	<a href="">Services</a>
      	<ul class="sousmenu">
      		<li><a href="presentation.php">Presentation</a></li>
      		<li><a href="prestation.php">Nos prestations</a></li>
      		<li><a href="encadrement.php">Encadrement</a></li>
      		
      	</ul>
      </li>
      <li>
      	<a href="tarif.php">Tarifs</a>
      	<ul  class="sousmenu">
      	<!--	<li><a href="tarif.php">Nos tarifs</a></li>
      		 <li><a href="">Mardi</a></li>
      		<li><a href="">Mercredi</a></li>
      		<li><a href="">Jeudi</a></li> -->
      	</ul>
      </li>
      <li>
      	<a href="fiscalite.php">Fiscalité</a>
      	<ul  class="sousmenu">
      	<!-- 	<li><a href="fiscalite.php">Information fiscale</a></li>
      		<li><a href="">Fevrier</a></li>
      		<li><a href="">Mars</a></li>
      		<li><a href="">Avril</a></li> -->
      	</ul>
      </li>
      <li>
      	<a href="">Contact</a>
      	<ul  class="sousmenu">
      		<li><a href="contact.php">Nous contacter</a></li>
      		<li><a href="plan.php">Nous trouver</a></li>
      		<!-- <li><a href="">bbbbbbb</a></li>
      		<li><a href="">xxxxxx</a></li> -->
      	</ul>
      </li>
   	
   </ul>
   </nav>	
 
       

   </div>

 </header>

</body>
</html>