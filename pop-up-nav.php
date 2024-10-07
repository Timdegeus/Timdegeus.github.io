<?php
    function setActivePopUpMenuPage($fileName)
    {
        if(str_contains($_SESSION['page'], $fileName))
        {
            echo "activePopUp ";
        }
    }

    function setActiveSubmenu($fileName)
    {
        if (str_contains($_SESSION['page'], $fileName))
        {
            echo "selectedSubmenu";
        }
    }
?>

<div id="popUpNav">
    <ul>
        <?php
            foreach ($menuItems as $menuItem)
            {
                if ($menuItem["Submenu"] == null)
                {
                    ?><li class="<?php setActivePopUpMenuPage($menuItem["Link"]); ?>" id="<?php echo $menuItem["Name"]; ?>">
                        <a href="<?php echo $menuItem["Link"]; ?>" class="pageTitle"><i class="<?php echo $menuItem["Icon"]; ?>"></i></i><h5><?php echo $menuItem["Name"]; ?></h5></a>
                    </li><?php
                }
                else
                {
                    ?><li class="<?php setActivePopUpMenuPage($menuItem["Link"]); ?>" id="<?php echo $menuItem["Name"]; ?>">
                        <input type="checkbox" class="hide" id="<?php echo $menuItem["Name"] . "Check"; ?>" onclick="showSubMenu('<?php echo $menuItem['Name'] . 'Check'; ?>', '<?php echo $menuItem['Name']; ?>', '<?php echo $menuItem['Name'] . 'Sub'; ?>')">
                        <script>setDropdownButtons("<?php echo $menuItem['Name'] . "Check"; ?>");</script>
                        <label for="<?php echo $menuItem["Name"] . "Check"; ?>" class="checkbutton pageTitle">
                            <h5><i class="<?php echo $menuItem["Icon"]; ?>"></i><?php echo $menuItem["Name"]; ?></h5>
                            <i class="fa-solid fa-chevron-down gray"></i>
                        </label>
                        <ul class="subMenu " id="<?php echo $menuItem["Name"] . "Sub"; ?>">
                            <?php
                                foreach ($menuItem["Submenu"] as $subMenu)
                                {
                                    ?><li><a href="<?php echo $subMenu["Link"]; ?>" class="subMenuTitle <?php setActiveSubmenu($subMenu["Link"]); ?>"><i class="fa-solid fa-circle"></i><?php echo $subMenu["Name"]; ?></a></li><?php
                                }
                            ?>
                        </ul>
                    </li><?php
                }
            }
        ?>
    </ul>
</div>