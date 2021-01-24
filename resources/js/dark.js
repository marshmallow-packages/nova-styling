Nova.booting((Vue, router) => {
    Vue.component(
        "nova-dark-theme-toggle",
        require("./components/NovaDarkThemeToggle")
    );
});

if (localStorage.darkThemeOn === "true") {
    document.querySelector("html").classList.add("nova-dark-theme");
    document.querySelector("body").classList.add("nova-dark-theme");
} else {
    document.querySelector("html").classList.remove("nova-dark-theme");
    document.querySelector("body").classList.remove("nova-dark-theme");
}