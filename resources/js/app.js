// Highlight links if in his page
if(window.location.pathname == "/blog" || window.location.pathname == "/blog.archive")
    document.getElementById("blog-link").classList.add("menu-highlight");
else if(window.location.pathname == "/now")
    document.getElementById("now-link").classList.add("menu-highlight");
else if(window.location.pathname == "/projects")
    document.getElementById("projects-link").classList.add("menu-highlight");
else if(window.location.pathname == "/setups")
    document.getElementById("setup-link").classList.add("menu-highlight");

// Makes all images clickeable
var images = document.getElementsByTagName("img");
for(i = 0; i < images.length; i++) {
    images[i].onclick = (e) => { window.open(e.target.src, '_blank') }
}
