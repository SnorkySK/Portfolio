const carousel = document.querySelector('.carousel');
const slides = carousel.querySelectorAll('.slide');
const prevButton = carousel.querySelector('.prev');
const nextButton = carousel.querySelector('.next');

let currentIndex = 0;
let isTransitioning = false;

function showSlide(index) {
  slides.forEach((slide) => {
    slide.style.display = 'none';
  });

  slides[index].style.display = 'block';

  currentIndex = index;
}

function showNextSlide() {
  if (isTransitioning) {
    return;
  }

  isTransitioning = true;
  let index = currentIndex + 1;

  if (index >= slides.length) {
    index = 0;
  }

  showSlide(index);

  isTransitioning = false;
}

prevButton.addEventListener('click', () => {
  let index = currentIndex - 1;

  if (index < 0) {
    index = slides.length - 1;
  }

  showSlide(index);
});

nextButton.addEventListener('click', () => {
  showNextSlide();
});

showSlide(currentIndex);

function showImagePopupMyMeetic() {
  var popup = document.getElementById("myMeeticPopup");
  popup.style.display = "block";
}

function showImagePopupMyTwitter() {
  var popup = document.getElementById("myTwitterPopup");
  popup.style.display = "block";
}

function hideImagePopup(popupId) {
  var popup = document.getElementById(popupId);
  popup.style.display = "none";
}

document.addEventListener("click", function(event) {
  var popupContainers = document.getElementsByClassName("image-popup-container");
  for (var i = 0; i < popupContainers.length; i++) {
    var popupContainer = popupContainers[i];
    if (event.target === popupContainer) {
      popupContainer.style.display = "none";
    }
  }
});

// ...

function hideImagePopup(popupId) {
  var popup = document.getElementById(popupId);
  popup.style.display = "none";
}

// ...
