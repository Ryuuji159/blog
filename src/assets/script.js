function makeImagesClickeable() {
  document.querySelectorAll("img").forEach(img => {
    img.addEventListener("click", e => window.open(e.target.src))
  });
}

window.addEventListener('load', (event) => {
  makeImagesClickeable();
});
