//! New Project Code Below
//!--------------------------------------------------------------------------

var popup = document.querySelector(`#popup`);
var close = document.querySelector(`#popup-close`);
var fog = document.querySelector(`#popup-fog`);
var yt = document.querySelector(`#yt-intro`);
var rc = document.querySelector(`#rebelcounter`);

var videos = [
    "NFUgWBP3s6g",
    "GTWcmeLGb_I",
    "15OA9f4kvpM",
    "w_F4F7q0Gko",
    "6aMVnZlabdo",
    "GDDCiaTiyos"
]
const random = Math.floor(Math.random() * videos.length);

$(document).ready(function() {
    rebelKiller();
    if (typeof $.cookie('intro') === 'undefined') {
        popup.style.display = `inline`;
        fog.style.display = `inline`;
        yt.src = `https://www.youtube.com/embed/${videos[random]}?autoplay=1&origin=https://paarmy.com`;
    } else {
        popup.style.display = `none`;
        fog.style.display = `none`;
        yt.src = "";
        popup.innerHTML = ``;
    }
});
close.addEventListener(`click`, () => {
    popup.style.display = `none`;
    yt.src = "";
    popup.innerHTML = ``;
    fog.style.display = `none`;
    $.cookie("intro", "viewed", { expires: 20 * 365 });
});

fog.addEventListener(`click`, () => {
    popup.style.display = `none`;
    fog.style.display = `none`;
    yt.src = "";
    popup.innerHTML = ``;
    $.cookie("intro", "viewed", { expires: 20 * 365 });
});

//rebel easter egg
var intervalID

function rebelKiller() {
    intervalID = window.setInterval(function() {
        const d = new Date();
        const d1 = new Date(2020, 2, 24, 5, 20, 23);
        const d2 = new Date(d.getFullYear(), d.getMonth() + 1, d.getDate(), d.getHours(), d.getMinutes(), d.getSeconds());
        const diffMs = +d2 - +d1;
        const diffMins = Math.floor((diffMs / 1000) / 60);
        console.log(diffMins)

        rc.innerHTML = `Rebels Killed: ${diffMins.toLocaleString('en-US')}`

    }, 1000);

}

rc.addEventListener("click", () => {
    if (rc.innerHTML === "February 24th 2020, 5:20:23") {
        rebelKiller();
    } else {
        clearInterval(intervalID)
        rc.innerHTML = "February 24th 2020, 5:20:23";
    }
})



//! Molex JS Template
//!--------------------------------------------------------------------------

//! PrototypeJS dom selector
//? $('div') // document.querySelector('div') <----single first element in collection
//? $$('div') // document.querySelectorAll('div') <----collection of all divs
//! simple service registration

if ("serviceWorker" in navigator) {
    navigator.serviceWorker.register("sw.js").then(function() {
        console.log("SW Registered.");
    });
}

const toggle = document.querySelector(".toggle");
const menu = document.querySelector(".menu");
const items = document.querySelectorAll(".item");

/* Toggle mobile menu */
function toggleMenu() {
    if (menu.classList.contains("active")) {
        menu.classList.remove("active");
        toggle.querySelector("a").innerHTML = "<i class='fas fa-bars'></i>";
    } else {
        menu.classList.add("active");
        toggle.querySelector("a").innerHTML = "<i class='fas fa-times'></i>";
    }
}

function toggleItem() {
    if (this.classList.contains("submenu-active")) {
        this.classList.remove("submenu-active");
    } else if (menu.querySelector(".submenu-active")) {
        menu.querySelector(".submenu-active").classList.remove("submenu-active");
        this.classList.add("submenu-active");
    } else {
        this.classList.add("submenu-active");
    }
}

function closeSubmenu(e) {
    if (menu.querySelector(".submenu-active")) {
        let isClickInside = menu
            .querySelector(".submenu-active")
            .contains(e.target);

        if (!isClickInside && menu.querySelector(".submenu-active")) {
            menu.querySelector(".submenu-active").classList.remove("submenu-active");
        }
    }
}
toggle.addEventListener("click", toggleMenu, false);
for (let item of items) {
    if (item.querySelector(".submenu")) {
        item.addEventListener("click", toggleItem, false);
    }
    item.addEventListener("keypress", toggleItem, false);
}
document.addEventListener("click", closeSubmenu, false);

//! end js template