<?php
    session_start();

    $_SESSION["page"] = basename($_SERVER['PHP_SELF']);

    readfile('header.html');
    include('nav.php');
?>
<div id="blok2">
    <div class="header">
        <div class="headerContent">
            <i class="fa-solid fa-layer-group blue headerIcon"></i>
            <div>
                <h6>Dashboard</h6>
                <button onclick="showDropdown()" class="dropdownButton">Dashboard 1<i class="fa-solid fa-chevron-down"></i></button>
            </div>
        </div>
        <div id="dropdownMenu" class="dropdownContent">
            <a href="#" class="selectedDropdown"><i class="fa-solid fa-circle"></i>Dashboard 1</a>
            <a href="#" class="black"><i class="fa-solid fa-circle"></i>Dashboard 2</a>
            <a href="#" class="black"><i class="fa-solid fa-circle"></i>Dashboard 3</a>
        </div>
    </div> 
    <div id="pageContent">
        <div class="contentChanger">
            <select name="teelt" id="teeltSelector">
                <option value="teelt1">Teelt 1</option>
                <option value="teelt2">Teelt 2</option>
                <option value="teelt3">Teelt 3</option>
            </select> 
            <label for="refreshData" class="refreshCheck">
                <input type="checkbox" id="refreshData">
                <p>Refresh data</p>
            </label>
        </div>
        <div class="widgetContent">
            <div class="widget marginRight">
                <h4><i class="fa-solid fa-temperature-three-quarters"></i>24h Temperature</h4>
                <img src="img/temperature.PNG" alt="Temperature"> 
            </div> 
            <div class="widget marginLeft">
                <h4><i class="fa-solid fa-droplet"></i>Water Management</h4>
                <img src="img/water.PNG" alt="Water management">  
            </div>
        </div>
    </div>   
</div>
<?php 
    include('pop-up-nav.php');
    readfile('footer.html');
?>
                