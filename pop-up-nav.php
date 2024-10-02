<?php
    function setActivePopUpMenuPage($fileName)
    {
        if(str_contains($_SESSION['page'], $fileName))
        {
            echo "activePopUp";
        }
    }
?>

<div id="popUpNav">
    <ul>
        <li class="<?php setActivePopUpMenuPage('index.php'); ?>" id="dashboard">
            <a href="index.php" class="pageTitle"><i class="fa-solid fa-layer-group"></i><h5>Dashboard</h5></a>
        </li>
        <li class="<?php setActivePopUpMenuPage('agri'); ?>" id="agri">
            <input type="checkbox" id="agriCheck" onclick="showSubMenu('agriCheck' ,'agri', 'agriSub')">
            <label for="agriCheck" class="checkbutton pageTitle">
                <h5><i class="fa-solid fa-seedling"></i>Agri</h5>
                <i class="fa-solid fa-chevron-down gray"></i>
            </label>
            <ul class="subMenu " id="agriSub">
                <li><a href="agriClimate.php" class="subMenuTitle"><i class="fa-solid fa-circle"></i>Climate</a></li>
                <li><a href="#" class="subMenuTitle selectedSubmenu"><i class="fa-solid fa-circle"></i>Homogenity</a></li>
                <li><a href="#" class="subMenuTitle"><i class="fa-solid fa-circle"></i>Weight</a></li>
                <li><a href="#" class="subMenuTitle"><i class="fa-solid fa-circle"></i>Soil</a></li>
                <li><a href="#" class="subMenuTitle"><i class="fa-solid fa-circle"></i>Light</a></li>
            </ul>
        </li>
        <li class="<?php setActivePopUpMenuPage('devices'); ?>" id="devices">
            <input type="checkbox" id="devicesCheck" onclick="showSubMenu('devicesCheck' ,'devices', 'devicesSub')">
            <label for="devicesCheck" class="checkbutton pageTitle">
                <h5><i class="fa-solid fa-tower-cell"></i>Devices</h5>
                <i class="fa-solid fa-chevron-down gray"></i>
            </label>
            <ul class="subMenu " id="devicesSub">
                <li><a href="devicesCards.php" class="subMenuTitle"><i class="fa-solid fa-circle"></i>Cards</a></li>
                <li><a href="#" class="subMenuTitle"><i class="fa-solid fa-circle"></i>List</a></li>
                <li><a href="#" class="subMenuTitle"><i class="fa-solid fa-circle"></i>Maps</a></li>
                <li><a href="#" class="subMenuTitle"><i class="fa-solid fa-circle"></i>Connections</a></li>
            </ul>
        </li>
        <li class="<?php setActivePopUpMenuPage('analyse'); ?>" id="analyse">
            <input type="checkbox" id="analyseCheck" onclick="showSubMenu('analyseCheck' ,'analyse', 'analyseSub')">
            <label for="analyseCheck" class="checkbutton pageTitle">
                <h5><i class="fa-solid fa-chart-simple"></i>Analyse</h5>
                <i class="fa-solid fa-chevron-down gray"></i>
            </label>
            <ul class="subMenu " id="analyseSub">
                <li><a href="analyseGraph.php" class="subMenuTitle"><i class="fa-solid fa-circle"></i>Graph</a></li>
                <li><a href="#" class="subMenuTitle"><i class="fa-solid fa-circle"></i>List</a></li>
            </ul>
        </li>
        <li class="<?php setActivePopUpMenuPage('alarms'); ?>" id="alarms">
            <input type="checkbox" id="alarmsCheck" onclick="showSubMenu('alarmsCheck' ,'alarms', 'alarmsSub')">
            <label for="alarmsCheck" class="checkbutton pageTitle">
                <h5><i class="fa-solid fa-bell"></i>Alarms</h5>
                <i class="fa-solid fa-chevron-down gray"></i>
            </label>
            <ul class="subMenu " id="alarmsSub">
                <li><a href="alarmsAlarms.php" class="subMenuTitle"><i class="fa-solid fa-circle"></i>Alarms</a></li>
                <li><a href="#" class="subMenuTitle"><i class="fa-solid fa-circle"></i>Logbook</a></li>
                <li><a href="#" class="subMenuTitle"><i class="fa-solid fa-circle"></i>Settings</a></li>
            </ul>
        </li>
        <li class="<?php setActivePopUpMenuPage('control.php'); ?>" id="reports">
            <a href="control.php" class="pageTitle"><i class="fa-solid fa-display"></i></i><h5>Control Room</h5></a>
        </li>
        <li class="<?php setActivePopUpMenuPage('settings.php'); ?>" id="settings">
            <a href="settings.php" class="pageTitle"><i class="fa-solid fa-gear"></i><h5>Settings</h5></a>
        </li>   
    </ul>
</div>