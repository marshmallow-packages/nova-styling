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


function load() {
    // Set viewport
    var viewport = document.querySelector("meta[name=viewport]");
    viewport.setAttribute(
        "content",
        "width=device-width, initial-scale=1, shrink-to-fit=no"
    );

    // Add hidden class to sidebar
    var sidebar = document.querySelector(".w-sidebar");
    sidebar.classList.add("sidebar-hidden");

    // Add hamburger menu to header
    var hamburger = document.createElement("span");
    hamburger.className = "hamburger-menu";
    var contentHeader = document.querySelector(".content .h-header");
    contentHeader.prepend(hamburger);

    // Hamburger click event
    hamburger.addEventListener(
        "click",
        function(e) {
            e.stopPropagation();
            var sidebar = document.querySelector(".w-sidebar");
            sidebar.classList.toggle("sidebar-hidden");
        },
        true
    );

    var sidebarLinks = document.querySelectorAll(
        ".w-sidebar a, .w-sidebar .cursor-pointer:not(.nc-head), .w-sidebar .nc-item-link"
    );
    sidebarLinks.forEach(function(sidebarLink) {
        sidebarLink.addEventListener(
            "click",
            function() {
                var sidebar = document.querySelector(".w-sidebar");
                sidebar.classList.add("sidebar-hidden");
            },
            false
        );
    });

    // Hide sidebar when clicking outside
    var rootElements = document.querySelectorAll("body,html");
    rootElements.forEach(function(rootElement) {
        rootElement.addEventListener("click", function(e) {
            var sidebar = document.querySelector(".w-sidebar");
            if (e.target !== sidebar && !sidebar.contains(e.target)) {
                sidebar.classList.add("sidebar-hidden");
            }
        });
    });

    // Config based theme tweaking
    if (Nova.config.mmns) {
        // Hide sidebar headlines
        var sidebarHeadlines = document.querySelectorAll(".w-sidebar h4");
        sidebarHeadlines.forEach(function(sidebarHeadline) {
            if (
                Nova.config.mmns.hide_all_sidebar_headlines ||
                Nova.config.mmns.hidden_sidebar_headlines.indexOf(
                    sidebarHeadline.textContent
                ) !== -1
            ) {
                sidebarHeadline.classList.add("hidden");
            }
        });

        // Sticky resource table actions
        if (Nova.config.mmns.resource_tables_sticky_actions) {
            var contents = document.querySelectorAll(".content");
            contents.forEach(function(content) {
                content.classList.add("sticky-actions");
            });
        }
        if (Nova.config.mmns.resource_tables_sticky_actions_on_mobile) {
            var contents = document.querySelectorAll(".content");
            contents.forEach(function(content) {
                content.classList.add("sticky-actions-on-mobile");
            });
        }

        // Hide "Update & Continue Editing" button
        if (Nova.config.mmns.hide_update_and_continue_editing_button) {
            var contents = document.querySelectorAll(".content");
            contents.forEach(function(content) {
                content.classList.add(
                    "hide-update-and-continue-editing-button"
                );
            });
        }
        if (
            Nova.config.mmns.hide_update_and_continue_editing_button_on_mobile
        ) {
            var contents = document.querySelectorAll(".content");
            contents.forEach(function(content) {
                content.classList.add(
                    "hide-update-and-continue-editing-button-on-mobile"
                );
            });
        }

        // Fixed sidebar on desktop
        if (Nova.config.mmns.fixed_sidebar) {
            document.querySelector("body").classList.add("fixed-sidebar");
        }
    }
}

document.addEventListener("DOMContentLoaded", load, false);
