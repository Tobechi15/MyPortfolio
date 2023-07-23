const prev = document.querySelector(".left");
const next = document.querySelector(".right");
const images = document.querySelectorAll(".cards");
let counter = 0;

next.addEventListener("click", () => {
  changeInCounter();
  changeImage();
});

prev.addEventListener("click", () => {
  changeDecCounter();
  changeImage();
});

function changeInCounter() {
  if (counter >= 4) {
    counter = -1;
  }
  counter++;
  console.log(counter);
}

function changeDecCounter() {
  if (counter <= 0) {
    counter = 5;
  }
  counter--;
  console.log(counter);
}

function changeImage() {
  images.forEach((elem) => {
    elem.style.transform = `translate(-${counter * 100}%`;
  });
}

/* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].style.display = "block";
  setTimeout(carousel, 6000); // Change image every 2 seconds
}

var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("coo").style.top = "0";
  } else {
    document.getElementById("coo").style.top = "-65px";
  }
  prevScrollpos = currentScrollPos;
}

/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
  var x = document.getElementById("coo");
  if (x.className === "header") {
    x.className += " responsive";
  } else {
    x.className = "header";
  }
}
// Code By Webdevtrick ( https://webdevtrick.com )
$(document).ready(function () {
  $(".single-image").click(function(){
    var t = $(this).attr("src");
    $(".modal-body").html("<img src='"+t+"' class='modal-img'>");
    $("#myModal").modal();
  });
});