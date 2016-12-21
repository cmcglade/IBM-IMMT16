function myFunction() {
    var x = document.getElementById("myNavBar");
    if (x.className === "navbar-toggle collapsed") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}