<?php

include( 'admin/includes/database.php' );
include( 'admin/includes/config.php' );
include( 'admin/includes/functions.php' );

?>

<!doctype html>
<html>
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
  
   <title> Projects </title>
 
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Bungee+Shade&family=Ewert&family=Pacifico&display=swap" rel="stylesheet">


  <script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>
 <style>
  .Box{
    margin-left: auto;
    margin-right: auto;
    width: 60%;
    display: flex;
    flex-direction: row;

    text-align: center;
   background-color:#F9004D;
 
}
.Head{
  text-align: center;
   color:White;
   font-family: 'Alfa Slab One', cursive;
}
.back{
  
   background-color: #191919;
}
.img{
  height: 100vh;
	width: 100%;
	background-image:url(/img/background.jpg);
	background-size: cover;
	background-position: center;
  opacity: 0.9;
}


.three{
  color:black;
  text-align: center;
  font-size: large;
  font-family: Arial, Helvetica, sans-serif;
}
.Project{
  padding: 1.875rem;
 text-align: center;
 color:White;
 font-size: xx-large;
 font-family: 'Alfa Slab One', cursive;
 margin: 3.75rem;
 background-color: #191919;
    
}
 

.Skill{

 text-align:center;
  color:White;
 font-size: xx-large;
 font-family: 'Alfa Slab One', cursive;
 margin: 3.75rem;
  background-color: #191919;
    
}

</style>
  
</head>

<body class="img">
<?php
echo '<div class="w3-top">';
echo '<div class="w3-bar w3-white w3-wide w3-padding w3-card">';
echo '<a href="#home" class="w3-bar-item w3-button"><b>Rohit Sharma </b>Projects</a>';
echo '<div class="w3-right w3-hide-small">';
echo '<a href="http://rohitsharmawebdeveloper.epizy.com/education.php" class="w3-bar-item w3-button">Education</a>';
echo '<a href="http://rohitsharmawebdeveloper.epizy.com/skillpage.php"" class="w3-bar-item w3-button">Skills</a>';
echo '<a href="http://rohitsharmawebdeveloper.epizy.com" class="w3-bar-item w3-button">Home</a>';

echo '</div>';
echo '</div>';
echo '</div>';
?>
 <?php

  $query = 'SELECT *
    FROM projects
    ORDER BY date DESC';
  $result = mysqli_query( $connect, $query );
?>
  <p class="Project">There Are <?php echo mysqli_num_rows($result); ?> Projects!</p>
  <hr>

  <?php while($record = mysqli_fetch_assoc($result)): ?>

      <h2 class="Head"><?php echo $record['title']; ?> </h2>

  <div class="Box">
        <div class="two">
          <?php if($record['photo']): ?>
          <img src="<?php echo $record['photo']; ?>" width="400">
        </div>
        <div class="three">
          <p><?php echo $record['content']; ?> </p>
        </div>
   </div>

        <!-- <img src="<?php echo $record['photo']; ?>" width="400"> -->

        <!-- <img src="admin/image.php?type=project&id=<?php echo $record['id']; ?>&width=600"> -->

      <?php else: ?>

        <p>This record does not have an image!</p>
      <?php endif; ?>
    </div>
    <hr>

  <?php endwhile; ?>
  <footer class="Skill" >
       <p>© copyright Rohit-Sharma </p>
  </footer>
 </body>
</html>