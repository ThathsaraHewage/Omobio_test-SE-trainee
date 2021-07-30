<!-- thathsara hewage
SLIIT
Omobio practical test -->

<!-- logging out session -->
<?php
        session_start();
        session_destroy();
        header('location:index.php');
?>