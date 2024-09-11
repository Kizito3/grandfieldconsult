const loaderContainer = document.querySelector(".loader-container");

window.addEventListener("load", function () {

  // Set a delay to allow the loader to stay for a bit before disappearing
  
    loaderContainer.classList.add("fade-out");
      loaderContainer.style.display = "none";
   
});


document.addEventListener("DOMContentLoaded", function () {
  const scrollToTopButton = document.getElementById("scrollToTopButton");

  // Show/hide the button based on scroll position
  window.addEventListener("scroll", () => {
    if (window.scrollY > 100) {
      scrollToTopButton.style.display = "block";
    } else {
      scrollToTopButton.style.display = "none";
    }
  });

  // Scroll to the top when the button is clicked
  scrollToTopButton.addEventListener("click", () => {
    window.scrollTo({
      top: 0,
      behavior: "smooth", // Smooth scrolling animation
    });
  });
});

AOS.init();