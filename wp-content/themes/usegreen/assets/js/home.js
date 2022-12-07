"use strict";

let advicesCards = document.querySelectorAll(".advices__card");

advicesCards[0].classList.add("active");
advicesCards[0].querySelector(".fas").className =
  "fas fa-chevron-up advices__icon";

for (let i = 0; i < advicesCards.length; i++) {
  advicesCards[i].addEventListener("click", function () {
    if (this.classList.contains("active")) {
      return false;
    }

    document.querySelector(".advices__card.active").classList.remove("active");
    this.classList.add("active");
    document.querySelector(".advices__icon").className = "fas fa-chevron-down";
    this.querySelector(".fas").className = "fas fa-chevron-up advices__icon";
  });
}
