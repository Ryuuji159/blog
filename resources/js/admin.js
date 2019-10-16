function is_admin_post_route() {
    const posts_edit_regexp = new RegExp("/admin/posts/\\d+/edit");
    return (
        window.location.pathname === "/admin/posts" || 
        window.location.pathname === "/admin/posts/create" ||
        window.location.pathname.match(posts_edit_regexp)
    );
}

function is_admin_now_route() {
    const now_edit_regexp = new RegExp("/admin/now/\\d+/edit");
    return (
        window.location.pathname === "/admin/now" ||
        window.location.pathname === "/admin/now/create" ||
        window.location.pathname.match(now_edit_regexp)
    );
}

function is_admin_projects_route() {
    const projects_edit_regexp = new RegExp("/admin/projects/\\d+/edit");
    return (
        window.location.pathname === "/admin/projects" ||
        window.location.pathname === "/admin/projects/create" ||
        window.location.pathname.match(projects_edit_regexp)
    );
}

function is_admin_setups_route() {
    const setups_edit_regexp = new RegExp("/admin/setups/\\d+/edit");
    return (
        window.location.pathname === "/admin/setups" ||
        window.location.pathname === "/admin/setups/create" ||
        window.location.pathname.match(setups_edit_regexp)
    );
}

function admin_highlight() {
    if(is_admin_post_route()){
        document.getElementById("posts-link").classList.add("menu-highlight");
    }
    if(is_admin_now_route()){
        document.getElementById("now-link").classList.add("menu-highlight");
    }
    if(is_admin_projects_route()){
        document.getElementById("projects-link").classList.add("menu-highlight");
    } 
    if(is_admin_setups_route()){
        document.getElementById("setup-link").classList.add("menu-highlight");
    }
}

function preview() {
    const previewButton = document.getElementById("preview");
    const mainButton = document.getElementById("main");

    if(previewButton == null){
        return;
    }

    const form = document.getElementsByTagName("form")[0];

    previewButton.addEventListener("click", (e) => {
        form.setAttribute("target", "_blank");
    });

    mainButton.addEventListener("click", (e) => {
        form.removeAttribute("target");
    });
}

function main() {
    admin_highlight();
    preview();
}

window.onload = main;
