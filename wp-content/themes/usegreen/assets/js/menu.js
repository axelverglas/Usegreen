"use strict";

let toggle = document.querySelector(".nav__toggle");
let body = document.querySelector("body");
let nav__menu = document.querySelector(".nav__menu");

toggle.addEventListener("click", function () {
  body.classList.toggle("open");
  nav__menu.classList.add("open");
  body.style.overflowY = "hidden";
});