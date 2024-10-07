<div class="header">
    <div class="headerContent">
        <i class="fa-solid fa-layer-group blue headerIcon"></i>
        <div>
            <h6>Dashboard</h6>
            <button onclick="showDropdown()" class="dropdownButton"><?php echo $_SESSION["pageName"]; ?><i class="fa-solid fa-chevron-down"></i></button>
        </div>
    </div>
    <div id="dropdownMenu" class="dropdownContent">
        <?php 
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

            // Add all submenu's to this array
            $subMenus = array("index", "Dashboard2");
            foreach ($subMenus as $subMenu)
            {
                ?>
                <a href="<?php echo $subMenu; ?>.php" class="<?php echo setActiveSelected($subMenu); ?>"><i class="fa-solid fa-circle"></i><?php echo $subMenu; ?></a>
                <?php
            }
        ?>
    </div>
</div>