<?php
include_once 'header.php';
?>
<h1>Hello <?php
    if (isset($_SESSION["username"])) {
        echo $_SESSION["username"] . ' !'; 
    } else {
        echo 'user !';
    }
     
     ?></h1>
    <p>Welcome to Samz School</p>

<?php
include_once 'footer.php';
?>