<!-- thathsara hewage
SLIIT
Omobio practical test -->

<?php 
      include('dbconnection.php');
      include('session.php'); 

      $result=mysqli_query($con, "select * from user where id='$session_id'")
      or 
      die('Error In Session');

      $row=mysqli_fetch_array($result);
 ?>

<html>
        <head>
        <link rel="stylesheet" type="text/css" href="deco.css">
        </head>
<body>
          <br/><br/>
          <center><h2 style="color:blue;">Omobio (pvt) Ltd</h2><center>
          <div class="form-wrapper"> 
              <center><h3 style="color:black;">User name : <?php echo $row['name']; ?> </h3></center>
              <center><h3 style="color:black;">User ID : <?php echo $row['id']; ?> </h3></center>
              <center><h3 style="color:black;">User email : <?php echo $row['email']; ?> </h3></center>

            <div class="reminder">
              <p style="color:black;"><a href="logging_out.php">Click here to log out</a></p>
            </div>
          </div>

</body>
</html>