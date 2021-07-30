<!-- thathsara hewage
SLIIT
Omobio practical test -->


<!-- establish the db connection  -->
<?php
    $con = mysqli_connect("localhost","root","","omobio");
          if (mysqli_connect_errno())
          {
              //db con fail
                echo "Failed db connect: " . mysqli_connect_error();
          }
?>
