require("./prism.js")

function is_blog_route() {
    const blog_regexp= new RegExp("/blog/\\d+");
    return (
        window.location.pathname == "/blog" || 
        window.location.pathname == "/blog/archive" ||
        window.location.pathname.match(blog_regexp)
    );
}

function is_now_route() {
    return window.location.pathname == "/now";
}

function is_projects_route() {
    return window.location.pathname == "/projects";
}

function is_setups_route() {
    return window.location.pathname == "/setups";
}

function is_about_route() {
    return window.location.pathname == "/about";
}

function highlight_route() {
    if(is_blog_route()){
        document.getElementById("blog-link").classList.add("menu-highlight");
    }else if(is_now_route()){
        document.getElementById("now-link").classList.add("menu-highlight");
    }else if(is_projects_route()){
        document.getElementById("projects-link").classList.add("menu-highlight");
    }else if(is_projects_route()){
        document.getElementById("setup-link").classList.add("menu-highlight");
    }else if(is_about_route()){
        document.getElementById("about-link").classList.add("menu-highlight");
    }

}

function make_images_clickeable() {
    var images = document.getElementsByTagName("img");
    for(i = 0; i < images.length; i++) {
        images[i].onclick = (e) => { window.open(e.target.src, '_blank') }
    }
}

highlight_route();
make_images_clickeable();
