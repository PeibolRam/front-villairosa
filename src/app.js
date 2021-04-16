// styles
import "@src/app.css";

// Dom Constants
const isHome = document.body.classList.contains("home");

require.context("@components/", true, /\.css$/);

// remove .no-js from html tag
document.querySelector("html").classList.remove("no-js");


//count numbers

function animateValue(id, start, end, duration) {
    var range = end - start;
    var current = start;
    var increment = end > start? 1 : -1;
    var stepTime = Math.abs(Math.floor(duration / range));
    var obj = document.getElementById(id);
    var timer = setInterval(function() {
        current += increment;
        obj.innerHTML = current;
        if (current == end) {
            clearInterval(timer);
        }
    }, stepTime);
}

animateValue("cluster", 0, 3, 2000);
animateValue("lote", 0, 600, 2000);
animateValue("torres", 0, 8, 2000);
animateValue("casa", 0, 1, 2000);