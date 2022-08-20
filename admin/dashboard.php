<?php

include( 'includes/database.php' );
include( 'includes/config.php' );
include( 'includes/functions.php' );

secure();

include( 'includes/header.php' );

?>
<ul id="dashboard">
  <li>
     <a href="projects.php">
       Projects
    </a>
  </li>
  <li>
     <a href="skills.php">
       Skills
    </a>
  </li>
  <li>
     <a href="educational.php">
     Educational
    </a>
  </li>
  <li>
     <a href="socialmedia.php">
      Social-Media
    </a>
  </li>
   <li>
     <a href="logout.php">
      Logout
    </a>
  </li>
  <li>
     <a href="users.php">
      user
    </a>
  </li>
</ul>

<?php

include( 'includes/footer.php' );

?>
