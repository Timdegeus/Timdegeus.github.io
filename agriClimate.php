<?php
    session_start();
    $_SESSION["page"] = basename($_SERVER['PHP_SELF']);

    readfile('header.html');
    include('nav.php');

    function setActiveSelected($fileName)
    {
        if(str_contains($_SESSION['page'], $fileName))
        {
            echo "selectedDropdown";
        }
        else
        {
            echo "black";
        }
    }
?>
<div id="blok2">
    <div class="header">
        <div class="headerContent">
            <i class="fa-solid fa-layer-group blue headerIcon"></i>
            <div>
                <h6>Agri</h6>
                <button onclick="showDropdown()" class="dropdownButton">Climate<i class="fa-solid fa-chevron-down"></i></button>
            </div>
        </div>
        <div id="dropdownMenu" class="dropdownContent">
            <?php 
                // Add all submenu's to this array
                $subMenus = array("Climate", "Homogenity", "Weight", "Soil", "Light");

                foreach ($subMenus as $subMenu)
                {
                    ?>
                    <a href="agri<?php echo $subMenu; ?>.php" class="<?php echo setActiveSelected($subMenu); ?>"><i class="fa-solid fa-circle"></i><?php echo $subMenu; ?></a>
                    <?php
                }
            ?>
        </div>
    </div> 
</div>
<?php 
    include('pop-up-nav.php');
    readfile('footer.html');
?>