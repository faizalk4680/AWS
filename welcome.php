<?php
   include('session.php');
?>
<html">

   <head>
      <title>Welcome </title>
   </head>

   <body>
      <h1>Welcome <?php echo $login_session; ?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
      <h3><a href = "upload.php">Upload Photo</a></h3>
   </body>

</html>
