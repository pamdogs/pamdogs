/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
function openNav() {
    document.getElementById("mySidenav").style.width = "300px";
    document.getElementById("nav-top").style.marginLeft = "300px";
    document.getElementById("main").style.marginLeft = "300px";

}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("nav-top").style.marginLeft = "0";
    document.getElementById("main").style.marginLeft = "0";

}