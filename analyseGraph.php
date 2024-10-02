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
                <h6>Analyse</h6>
                <button onclick="showDropdown()" class="dropdownButton">Dashboard 1<i class="fa-solid fa-chevron-down"></i></button>
            </div>
        </div>
        <div id="dropdownMenu" class="dropdownContent">
            <a href="#" class="selectedDropdown"><i class="fa-solid fa-circle"></i>Dashboard 1</a>
            <a href="#" class="black"><i class="fa-solid fa-circle"></i>Dashboard 2</a>
            <a href="#" class="black"><i class="fa-solid fa-circle"></i>Dashboard 3</a>
        </div>
    </div> 
</div>
<?php 
    include('pop-up-nav.php');
    readfile('footer.html');
?>