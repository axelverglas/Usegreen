"use strict";

let advicesCards = document.querySelectorAll(".advices__card");

advicesCards[0].classList.add("active");

for (let i = 0; i < advicesCards.length; i++) {
  advicesCards[i].addEventListener("click", function () {
    if (this.classList.contains("active")) {
      return false;
    }

    document.querySelector(".advices__card.active").classList.remove("active");
    this.classList.add("active");
  });
}

let scrollToTop = document.querySelector(".scroll-to-top");

window.addEventListener("scroll", function () {
  if (window.pageYOffset > 100) {
    scrollToTop.classList.add("active");
  } else {
    scrollToTop.classList.remove("active");
  }
});

scrollToTop.addEventListener("click", function () {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});
