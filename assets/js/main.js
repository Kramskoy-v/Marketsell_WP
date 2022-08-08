//Hamburger menu
let hamburger = document.querySelector('.hamburger');
let mobileMenu = document.querySelector('.menu');
let linkClose = document.querySelector('.menu__list');
let crossClose = document.querySelector('.cross-close');

hamburger.addEventListener('click', function () {
   mobileMenu.classList.toggle('menu--active')
});

function closeMenu() {
   mobileMenu.classList.remove('menu--active');
}

crossClose.addEventListener('click', function () {
   closeMenu()
});

linkClose.addEventListener('touchstart', function (event) {
   if (event.target.closest('.menu__link')) {
      closeMenu(), closeHam();
   }
});

jQuery(document).ready(function ($) {
   if ($("#scene").length > 0) {
      var scene = document.getElementById('scene');
      var parallax = new Parallax(scene);
   }

   if ($("#scene1").length > 0) {
      var scene1 = document.getElementById('scene1');
      var parallax1 = new Parallax(scene1);
   }

   if ($("#scene2").length > 0) {
      var scene2 = document.getElementById('scene2');
      var parallax2 = new Parallax(scene2);
   }

   if ($("#scene3").length > 0) {
      var scene3 = document.getElementById('scene3');
      var parallax3 = new Parallax(scene3);
   }

   if ($("#scene4").length > 0) {
      var scene4 = document.getElementById('scene4');
      var parallax4 = new Parallax(scene4);
   }

   if ($("#scene5").length > 0) {
      var scene5 = document.getElementById('scene5');
      var parallax5 = new Parallax(scene5);
   }

   if ($("#scene6").length > 0) {
      var scene6 = document.getElementById('scene6');
      var parallax6 = new Parallax(scene6);
   }

   if ($("#scene7").length > 0) {
      var scene7 = document.getElementById('scene7');
      var parallax7 = new Parallax(scene7);
   }

   if ($("#scene8").length > 0) {
      var scene8 = document.getElementById('scene8');
      var parallax8 = new Parallax(scene8);
   }

   if ($("#scene9").length > 0) {
      var scene9 = document.getElementById('scene9');
      var parallax9 = new Parallax(scene9)
   }

   if ($("#scene10").length > 0) {
      var scene10 = document.getElementById('scene10');
      var parallax10 = new Parallax(scene10);
   }

});




















