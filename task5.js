var overlay = document.getElementById('overlay');
var btn = document.getElementById("myBtn");
var close = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    overlay.style.display = "block";
};

close.onclick = function() {
    overlay.style.display = "none";
};

window.onclick = function(event) {
    if (event.target == overlay) {
        overlay.style.display = "none";
    }
};