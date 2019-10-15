// Highlight links if in his page
switch(window.location.pathname){
    case "/":
        document.getElementById("title-link").classList.add("pure-menu-highlight");
        break;
    case "/blog":
    case "/blog/archive":
        document.getElementById("blog-link").classList.add("pure-menu-highlight");
        break;
    case "/now":
        document.getElementById("now-link").classList.add("pure-menu-highlight");
        break;
    case "/projects":
        document.getElementById("proyectos-link").classList.add("pure-menu-highlight");
        break;
    case "/setup":
        document.getElementById("setup-link").classList.add("pure-menu-highlight");
        break;
}

// Makes all images clickeable
var images = document.getElementsByTagName("img");
for(i = 0; i < images.length; i++) {
    images[i].onclick = (e) => { window.open(e.target.src, '_blank') }
}
