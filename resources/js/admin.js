switch(window.location.pathname){
    case "/admin":
        document.getElementById("title-link").classList.add("pure-menu-highlight");
        break;
    case "/admin/posts":
        document.getElementById("posts-link").classList.add("pure-menu-highlight");
        break;
    case "/admin/now":
        document.getElementById("now-link").classList.add("pure-menu-highlight");
        break;
    case "/admin/projects":
        document.getElementById("proyectos-link").classList.add("pure-menu-highlight");
        break;
    case "/admin/setup":
        document.getElementById("setup-link").classList.add("pure-menu-highlight");
        break;
}
