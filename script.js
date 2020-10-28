var toggler = document.getElementById("toggle");
var barr = document.getElementById("bar");
var overlayr = document.getElementById("overlay");
var closer = document.getElementById("close");

toggler.onclick = function() {
    barr.style.visibility = "visible"
    overlayr.style.visibility = "visible"
}
closer.onclick = function() {
    barr.style.visibility = "hidden"
    overlayr.style.visibility = "hidden"
}