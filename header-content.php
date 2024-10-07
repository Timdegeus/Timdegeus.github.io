<?php
    $page = null;
    $pageName = null;

    foreach ($menuItems as $menuItem)
    {
        if ($menuItem["Name"] == $_SESSION["pageName"])
        {
            $page = $menuItem;
        }
    }
?>

<div class="header">
    <div class="headerContent">
        <i class="fa-solid fa-layer-group blue headerIcon"></i>
        <div>
            <h6><?php echo $page["Name"]; ?></h6>
            <?php
                if ($page["Submenu"] != null)
                {
                    foreach ($page["Submenu"] as $subMenu)
                    {
                        if ($subMenu["Link"] == $_SESSION["page"])
                        {
                            $pageName = $subMenu["Name"];
                        }
                    }
                    ?>
            <button onclick="showDropdown()" class="dropdownButton"><?php echo $pageName; ?><i class="fa-solid fa-chevron-down"></i></button>
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

            foreach ($page["Submenu"] as $subMenu)
            {
                ?><a href="<?php echo $subMenu["Link"]; ?>" class="<?php echo setActiveSelected($subMenu["Link"]); ?>"><i class="fa-solid fa-circle"></i><?php echo $subMenu["Name"]; ?></a><?php
            }
        ?>
    </div>
<?php
}
else
{
    ?>
        </div>
    </div>
    <?php
}
?>
</div>

