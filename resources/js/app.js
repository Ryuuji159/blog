// Highlight links if in his page
if(window.location.pathname == "/blog" || window.location.pathname == "/blog.archive")
    document.getElementById("blog-link").classList.add("pure-menu-highlight");
else if(window.location.pathname == "/now")
    document.getElementById("now-link").classList.add("pure-menu-highlight");
else if(window.location.pathname == "/projects")
    document.getElementById("proyectos-link").classList.add("pure-menu-highlight");
else if(window.location.pathname == "/setup")
    document.getElementById("setup-link").classList.add("pure-menu-highlight");

// Makes all images clickeable
var images = document.getElementsByTagName("img");
for(i = 0; i < images.length; i++) {
    images[i].onclick = (e) => { window.open(e.target.src, '_blank') }
}
