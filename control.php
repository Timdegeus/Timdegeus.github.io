<?php
    session_start();
    $_SESSION["page"] = basename($_SERVER['PHP_SELF']);
    $_SESSION["pageName"] = "Control Room";

    readfile('header.html');
    include('nav.php');
?>
<div id="blok2">
    <?php include("header-content.php"); ?>
</div>
<?php 
    include('pop-up-nav.php');
    readfile('footer.html');
?>