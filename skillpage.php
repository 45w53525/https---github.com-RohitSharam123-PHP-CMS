<?php

include( 'admin/includes/database.php' );
include( 'admin/includes/config.php' );
include( 'admin/includes/functions.php' );

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
     <script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>
     <title>Skills</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Bungee+Shade&family=Ewert&family=Pacifico&display=swap" rel="stylesheet">




    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   
	<link rel="preconnect" href="https://fonts.gstatic.com">
   
 
</head>

<style>
    
.back{

    height: 100vh;
	width: 100%;
	background-image:url(/img/background.jpg);
	background-size: cover;
	background-position: center; 
	
}
.box{
    margin-left: auto;
    margin-right: auto;
    width: 80%;
   display: flex;
   flex-direction:column;
   text-align: left;
   background-color: #191919;
   opacity: 0.9;
   
 
}
.box2{
    font-size: x-large;
    font-style: normal;
    font-family:Arial, Helvetica, sans-serif;
    color:#aa0bee;
    
}
.Skill{

 text-align:center;
 color:White;
 font-size: xx-large;
 font-family: 'Alfa Slab One', cursive;
 margin: 3.75rem;
  background-color: #191919;
    margin-left: auto;
    margin-right: auto;
    width: 80%;
}




</style>   
   
<body class="back">

<?php
echo '<div class="w3-top">';
echo '<div class="w3-bar w3-white w3-wide w3-padding w3-card">';
echo '<a href="#home" class="w3-bar-item w3-button"><b>Rohit Sharma </b>Skills</a>';
echo '<!-- Float links to the right. Hide them on small screens -->';
echo '<div class="w3-right w3-hide-small">';
echo '<a href="http://rohitsharmawebdeveloper.epizy.com/education.php" class="w3-bar-item w3-button">Education</a>';
echo '<a href="http://rohitsharmawebdeveloper.epizy.com/Project.php"" class="w3-bar-item w3-button">Projects</a>';
echo '<a href="http://rohitsharmawebdeveloper.epizy.com" class="w3-bar-item w3-button">Home</a>';
echo '</div>';
echo '</div>';
echo '</div>';
?>
<?php
$query = 'SELECT *
  FROM Skills
  ORDER BY percent DESC';
$result = mysqli_query( $connect, $query );
?>
<p class="Skill">Skills!</p>

  <?php while( $record = mysqli_fetch_assoc( $result ) ): ?>
    <div class="box">
      <div class="box2"> 
         <?php echo htmlentities( $record['title'] ); ?> 
      </div>
      <div class="box3">
        <a href="<?php echo $record['url']; ?>">
          <img src="<?php echo $record['photo']; ?>"width="150">
        </a> 
      </div>
      <div style=" background-color:#aa0bee;">
      <div style="width:<?php echo $record['percent'] ; ?>%;background-color:#3c41eb; height:20px;">  <?php echo $record['percent'] ; ?>%</div> 
     </div>
  </div>  
    <?php endwhile; ?>

    <footer class="Skill" >
       <p>© copyright Rohit-Sharma </p>
    </footer>
    </body>
</html>
