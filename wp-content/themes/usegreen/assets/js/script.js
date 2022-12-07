"use strict";

let toggle = document.querySelector(".nav__toggle");
let body = document.querySelector("body");

toggle.addEventListener("click", function () {
  body.classList.toggle("open");
  body.classList.toggle("overflow");
});

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
