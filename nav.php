<?php
    function setActivePage($fileName)
    {
        if($_SESSION["page"] == $fileName)
        {
            echo "activeNav";
        }
    }
?>

<nav>
    <h2 id="logo">wirelessvalue</h2>
    <ul>
        <li class="<?php setActivePage('index.php'); ?>"><a href="index.php"><i class="fa-solid fa-layer-group"></i><h5>Dashboard</h5></a></li>
        <li class="<?php setActivePage('agriClimate.php'); ?>"><a href="agriClimate.php"><i class="fa-solid fa-seedling"></i><h5>Agri</h5></a></li>
        <li class="<?php setActivePage('devicesCards.php'); ?>"><a href="devicesCards.php"><i class="fa-solid fa-tower-cell"></i><h5>Devices</h5></a></li>
        <li class="<?php setActivePage('analyseGraph.php'); ?> hide"><a href="analyseGraph.php"><i class="fa-solid fa-chart-simple"></i><h5>Analyse</h5></a></li>
        <li class="<?php setActivePage('alarmsAlarms.php'); ?> hide"><a href="alarmsAlarms.php"><i class="fa-solid fa-bell"></i><h5>Alarms</h5></a></li>
        <li class="<?php setActivePage('control.php'); ?> hide"><a href="control.php"><i class="fa-solid fa-display"></i><h5>Control Room</h5></a></li>
        <li class="<?php setActivePage('settings.php'); ?> hide"><a href="settings.php"><i class="fa-solid fa-gear"></i><h5>Settings</h5></a></li>  
        <li>
            <input type="checkbox" id="check" onclick="showNavbar()">
            <label for="check" class="checkbutton">
                <i id="menuIcon" class="fas fa-bars"></i>
            </label>
        </li>     
    </ul>
    <div class="userInfo">
        <div class="name">
            <p><b>Account name</b></p>
            <p class="role">Account role</p>
        </div>
        <img src="img/userplaceholder.jpg" alt="User profile picture">
        <i class="fa-solid fa-chevron-up"></i>
    </div>
</nav>