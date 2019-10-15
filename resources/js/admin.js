posts_edit_regexp = new RegExp("/admin/posts/\\d+/edit");
now_edit_regexp = new RegExp("/admin/now/\\d+/edit");
projects_edit_regexp = new RegExp("/admin/projects/\\d+/edit");
setups_edit_regexp = new RegExp("/admin/setups/\\d+/edit");

if(
    window.location.pathname === "/admin/posts" || 
    window.location.pathname === "/admin/posts/create" ||
    window.location.pathname.match(posts_edit_regexp)
)
    document.getElementById("posts-link").classList.add("pure-menu-highlight");

else if(
    window.location.pathname === "/admin/now" ||
    window.location.pathname === "/admin/now/create" ||
    window.location.pathname.match(now_edit_regexp)
)
    document.getElementById("now-link").classList.add("pure-menu-highlight");

else if(
    window.location.pathname === "/admin/projects" ||
    window.location.pathname === "/admin/projects/create" ||
    window.location.pathname.match(projects_edit_regexp)
)
    document.getElementById("projects-link").classList.add("pure-menu-highlight");

else if(
    window.location.pathname === "/admin/setups" ||
    window.location.pathname === "/admin/setups/create" ||
    window.location.pathname.match(setups_edit_regexp)
)
    document.getElementById("setup-link").classList.add("pure-menu-highlight");
