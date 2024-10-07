<?php
    include("menu-items.php");

    function setActivePage($fileName)
    {
        if($_SESSION["page"] == $fileName)
        {
            echo "activeNav ";
        }
    }
?>

<nav>
    <h2 id="logo">wirelessvalue</h2>
    <ul>
        <?php
            foreach ($menuItems as $menuItem)
            {
                ?><li class="<?php setActivePage($menuItem["Link"]); echo $menuItem["Hide"] ?>"><a href="<?php echo $menuItem["Link"]; ?>"><i class="<?php echo $menuItem["Icon"]; ?>"></i><h5><?php echo $menuItem["Name"]; ?></h5></a></li><?php
            }
        ?>
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