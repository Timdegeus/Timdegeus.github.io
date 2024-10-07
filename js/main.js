const dropdownButtons = [];

function setDropdownButtons(button)
{
    dropdownButtons.push(document.getElementById(button));
}

function showNavbar() 
{
    const menuButton = document.getElementById("check");
    const menuIcon = document.getElementById("menuIcon");
    const popUpNav = document.getElementById("popUpNav");

    if (menuButton.checked) 
    {
        popUpNav.classList.add("openNav");
        menuIcon.classList.remove("fas", "fa-bars");
        menuIcon.classList.add("fa-solid", "fa-xmark", "blue");
    }
    else 
    {
        popUpNav.classList.remove("openNav");
        menuIcon.classList.remove("fa-solid", "fa-xmark", "blue");
        menuIcon.classList.add("fas", "fa-bars");
    }
}

function showSubMenu(pressedButton, pageTitle, subList) 
{
    var open = false;

    dropdownButtons.forEach(button => {
        if (button.checked && button != document.getElementById(pressedButton)) 
        {
            button.parentElement.classList.remove("selected");
            button.nextElementSibling.nextElementSibling.nextElementSibling.classList.remove("open");
            button.checked = false;
        }

        if (!button.checked && button == document.getElementById(pressedButton))
        {
            open = true;

            return;
        }
    });

    if (!open)
    {
        document.getElementById(pageTitle).classList.add("selected");
        document.getElementById(subList).classList.add("open");
    }
    else
    {
        document.getElementById(pageTitle).classList.remove("selected");
        document.getElementById(subList).classList.remove("open");
    }
    
}

function showDropdown() {
    document.getElementById("dropdownMenu").classList.toggle("show");
}
  
window.onclick = function(event) {
    const menuButton = document.getElementById("check");

    if (!event.target.matches('.dropdownButton')) {
        var dropdowns = document.getElementsByClassName("dropdownContent");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
            }
        }
    }

    if (!event.target.closest('#popUpNav, #menuIcon, #check')) {
        if (menuButton.checked) {
            menuButton.checked = false;
            showNavbar();
        }
    }
}

function checkScreenRes(mediaQuery) 
{
    if (mediaQuery.matches && menuButton.checked) 
    {
        menuButton.checked = false;
        showNavbar();
    }
}

var mediaQuery = window.matchMedia("(min-width: 768px)")

checkScreenRes(mediaQuery);

mediaQuery.addEventListener("change", function() 
{
    checkScreenRes(mediaQuery);
})

