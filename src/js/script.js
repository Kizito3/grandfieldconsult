const navItems = document.querySelector(".nav_items"),
  openNavBtn = document.querySelector("#open__nav-btn"),
  closeNavBtn = document.querySelector("#close__nav-btn");

const openNav = () => {
  navItems.style.display = "flex";
  openNavBtn.style.display = "none";
  closeNavBtn.style.display = "inline-block";
};

const closeNav = () => {
  navItems.style.display = "none";
  openNavBtn.style.display = "inline-block";
  closeNavBtn.style.display = "none";
};

openNavBtn.addEventListener("click", openNav);

closeNavBtn.addEventListener("click", closeNav);

function handleScroll() {
  const navbar = document.querySelector(".nav_bg");

  if (window.scrollY > 0) {
    navbar.style.backgroundImage =
      "linear-gradient(207.31deg, #4caadd 17.03%, #d6c9b7 97.99%)";
  } else {
    navbar.style.backgroundColor = "transparent";
  }
}

if (window.matchMedia("(max-width: 1024px)").matches) {
  window.addEventListener("scroll", handleScroll);
}


const faqs = document.querySelectorAll(".question");
const btns = document.querySelectorAll(".faq-button button");

faqs.forEach((faq, index) => {
  faq.addEventListener("click", function (e) {
    const answer = e.target.nextElementSibling;
    answer.classList.toggle("active");

    btns[index].classList.toggle("active"); 
  });
});








