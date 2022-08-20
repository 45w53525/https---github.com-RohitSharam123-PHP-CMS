<?php

include( 'admin/includes/database.php' );
include( 'admin/includes/config.php' );
include( 'admin/includes/functions.php' );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Bungee+Shade&family=Ewert&family=Pacifico&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Education</title>
    <style>
* {
  box-sizing: border-box;
}

.back{
 height: 100vh;
	width: 100%;
	background-image:url(/img/Pro.jpg);
	background-size: cover;
	background-position: center;
  opacity: 1;
}

.menu {
  float: left;
  width: 20%;
  text-align: center;
}

.menu a {
  background-color:#F9004D;
  padding: 8px;
  margin-top: 7px;
  display: block;
  width: 100%;
   color:#191919;
   font-family: 'Alfa Slab One', cursive;
   text-decoration:none;
}

.main {
  margin-top: 1.25rem;
  float: left;
  width: 60%;
  padding: 0 20px;
  
}
.ED{
 color:White;
  margin-top: 1.15rem;
  padding:12px;
  text-align:center;
  background-color:#191919;
  font-family: 'Alfa Slab One', cursive;
}
.head{
   margin-left: auto;
   margin-right: auto;
   width:80%;
   background-color:#191919;
   padding:0.9375rem;
   margin-top:1.875rem;
    
}
.right {
  background-color: #F9004D;
  float: left;
  width: 20%;
  padding: 10px;
  margin-top: 9px;
 
}
.font{
   text-align:center;
   color:White;
  font-family: 'Alfa Slab One', cursive;
}
.fontright{
 text-align: center;
  color:#191919;
  font-family: 'Alfa Slab One', cursive;
}
.footer{
   margin-left: auto;
   margin-right: auto;
   width:80%;
   background-color:#191919;
   text-align:center;
   padding:10px;
   margin-top:28rem;
   font-family: 'Alfa Slab One', cursive; 
   color:White;
}




@media only screen and (max-width: 620px) {
  /* For mobile phones: */
  .menu, .main, .right {
    width: 100%;
  }
}
</style>
</head>
<body class="back">
  <?php
echo '<div class="w3-top">';
echo '<div class="w3-bar w3-white w3-wide w3-padding w3-card">';
echo '<a href="#home" class="w3-bar-item w3-button"><b>Rohit Sharma </b>Education</a>';
echo '<div class="w3-right w3-hide-small">';
echo '<a href="http://rohitsharmawebdeveloper.epizy.com/skillpage.php"" class="w3-bar-item w3-button">Skills</a>';
echo '<a href="http://rohitsharmawebdeveloper.epizy.com" class="w3-bar-item w3-button">Home</a>';
echo '<a href="http://rohitsharmawebdeveloper.epizy.com/Project.php" class="w3-bar-item w3-button">Projects</a>';
echo '</div>';
echo '</div>';
echo '</div>';
?>

<?php   
    $query = 'SELECT *
  FROM educational
  ORDER BY year DESC';
$result = mysqli_query( $connect, $query );
?>

 <div class="head">
     <h1 class="ED">Education</h1>
</div>
<div style="overflow:auto">
  <div class="menu">
    <a href="https://www.linkedin.com/in/rohit-sharma-594200127/">LinkedIN</a>
    <a href="#">Facebook</a>
    <a href="#">Instagram</a>
    <a href="#">Linkedin</a>
    <a href="#">Twitter</a>
    <a href="#">Tumblr</a>
    <a href="#">Reddit</a>
  </div>

  <?php while( $record = mysqli_fetch_assoc( $result ) ): ?>
   <div class="main">
       <div class="font">
          <h1><?php echo $record['credential']; ?></h1>
       </div>
        <div class="font">
           <h2><?php echo $record['institution']; ?></h2>
        </div>
        <div class="font">
           <h2><?php echo $record['year']; ?></h2>
        </div>
   </div>
   <div class="right">
     <h2 class="fontright"><?php echo $record['institution']; ?></h2>
   </div>
      <?php endwhile; ?>
</div>
       <div class ="footer">© copyright Rohit-Sharma</div>
</body>
</html>