document.addEventListener("DOMContentLoaded", function () {
  const currentUrl = window.location.href;
  const homeLink = document.getElementById("home-link");
  const categoryLinks = document.querySelectorAll("nav ul li a");

  // Remove 'active' class from all links
  homeLink.classList.remove("active");
  categoryLinks.forEach((link) => link.classList.remove("active"));

  // Check if there is a category parameter in the URL
  const urlParams = new URLSearchParams(window.location.search);
  const categoryId = urlParams.get("categorie");

  if (categoryId) {
    // Highlight the corresponding category link
    const activeLink = document.getElementById("category-" + categoryId);
    if (activeLink) {
      activeLink.classList.add("active");
    }
  } else {
    // Highlight the home link
    homeLink.classList.add("active");
  }
});
