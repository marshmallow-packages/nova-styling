function darkTheme() {

    var toggle = document.querySelector(".dark-theme-toggle");

    toggle.addEventListener(
        "click",
        function (e) {
            e.stopPropagation();
            var html = document.querySelector("html");
            html.classList.toggle("nova-dark-theme");
        },
        true
    );
}

document.addEventListener("DOMContentLoaded", darkTheme, false);
