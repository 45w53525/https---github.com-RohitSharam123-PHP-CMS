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
  
  <title>Rohit Sharma Portfolio</title>
  
    <link href="style2.css" type="text/css" rel="stylesheet">

   <script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>
  
   <link rel="preconnect" href="https://fonts.gstatic.com">

   <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

</head>
<body>
<?php
echo '';
echo '<div class="hero">';
echo '<nav>';
echo '<h2 class="logo">Portfo<span>lio</span></h2>';
echo '<ul>';
echo '<li><a href="#">Home</a></li>';
echo '<li><a href="http://rohitsharmawebdeveloper.epizy.com/Project.php">Project</a></li>';
echo '<li><a href="http://rohitsharmawebdeveloper.epizy.com/skillpage.php">Skills</a></li>';
echo '<li><a href="http://rohitsharmawebdeveloper.epizy.com/education.php">Education</a></li>';
echo '</ul>';
echo '<a href="#" class="btn"></a>';
echo '</nav>';
?>
<?php
echo '';
echo '<div class="content">';
echo '<h4>Hello, my name is</h4>';
echo '<h1> Rohit <span> Sharma </span></h1>';
echo '<h3>I am a Full-Stack-Web-Developer.</h3>';
echo '<div class="newslatter">';
// echo '<form>';
// echo '<input type="email" name="email" id="mail" placeholder="Enter Your Email">';
// echo '<input type="submit" name="submit" value="Lets Start">';
// echo '</form>';
echo '</div>';
echo '</div>';
echo '</div>';
?>

<?php
//  '<!----About section start---->';
echo '<section class="about">';
echo '<div class="main">';
echo '<div class="about-text">';
echo '<h2>About Me</h2>';
echo '<h5>Developer <span>& Designer</span></h5>';
echo '<p>I am a full Stack web developer. I can provide clean code and pixel perfect design. I also make the website more & more interactive with web animations.I can provide clean code and pixel perfect design. I also make the website more & more interactive with web animations.A responsive design makes your website accessible to all users, regardless of their device.</p>';
echo '<button type="button">Lets Talk</button>';
echo '</div>';
echo '</div>';
echo '</section>';
?>

<?php
echo '<!-----service section start----------->';
echo '<div class="service">';
echo '<div class="title">';
echo '<h2>Services</h2>';
echo '</div>';
echo '';
echo '<div class="box">';
echo '<div class="card">';
echo '<i class="fas fa-bars"></i>';
echo '<h5>Projects</h5>';
echo '<div class="pra">';
echo '<p>Every Project should be built with two primary goals: Firstly, it needs to work across all devices. Secondly, it needs to be fast as possible.</p>';
echo '';
echo '<p style="text-align: center;">';
echo '<a class="button" href="http://rohitsharmawebdeveloper.epizy.com/Project.php">More</a>';
echo '</p>';
echo '</div>';
echo '</div>';
echo '';
echo '<div class="card">';
echo '<i class="far fa-user"></i>';
echo '<h5>Skills</h5>';
echo '<div class="pra">';
echo '<p> Able to create Website Accourding to the different requirements and needs of the Customer with my Skills.</p>';
echo '';
echo '<p style="text-align: center;">';
echo '<a class="button" href="http://rohitsharmawebdeveloper.epizy.com/skillpage.php">More</a>';
echo '</p>';
echo '</div>';
echo '</div>';
echo '';
echo '<div class="card">';
echo '<i class="far fa-bell"></i>';
echo '<h5>Education</h5>';
echo '<div class="pra">';
echo '<p>Every website should be built with two primary goals: Firstly, it needs to work across all devices. Secondly, it needs to be fast as possible.</p>';
echo '';
echo '<p style="text-align: center;">';
echo '<a class="button" href="http://rohitsharmawebdeveloper.epizy.com/education.php">More</a>';
echo '</p>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
?>
<?php
//  '<!------Contact Me------>';
echo '<div class="contact-me">';
echo '<p>Let Me Get You A Beautiful Website.</p>';
echo '<a class="button-two" href="#">Hire Me</a>';
echo '</div>';
echo '';
//  '<!------footer start--------->';
echo '<footer>';
echo '<p>Rohit Sharma</p>';
echo '<p>For more - please click on the link below to subscribe to my channel :</p>';
echo '<div class="social">';
echo '<a href="#"><i class="fab fa-facebook-f"></i></a>';
echo '<a href="#"><i class="fab fa-instagram"></i></a>';
echo '<a href="#"><i class="fab fa-dribbble"></i></a>';
echo '</div>';
echo '<p class="end">CopyRight By Rohit Sharma </p>';
echo '</footer>';
?>

</body>
</html>


<!-- 
  <?php

  $query = 'SELECT *
    FROM projects
    ORDER BY date DESC';
  $result = mysqli_query( $connect, $query );

  ?>

  <p>There are <?php echo mysqli_num_rows($result); ?> projects !</p>

  <hr>

  <?php while($record = mysqli_fetch_assoc($result)): ?>

    <div>

      <h2><?php echo $record['title']; ?></h2>
      <?php echo $record['content']; ?>
      <?php if($record['photo']): ?>

        <p>The image can be inserted using a base64 image:</p>

        <img src="<?php echo $record['photo']; ?>" width="200">

        <p>Or by streaming the image through the image.php file:</p>

        <img src="admin/image.php?type=project&id=<?php echo $record['id']; ?>&width=400&height=00">

      <?php else: ?>

        <p>This record does not have an image!</p>

      <?php endif; ?>

    </div>

    <hr>

  <?php endwhile; ?> -->

<!-- </body>
</html> -->
