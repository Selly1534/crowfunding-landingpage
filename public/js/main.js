let currentIndex = 0;

function moveSlide(direction) {
  const slides = document.querySelectorAll('.carousel-images img');
  currentIndex = (currentIndex + direction + slides.length) % slides.length; 
  const offset = -currentIndex * 100; 
  document.querySelector('.carousel-images').style.transform = `translateX(${offset}%)`; 
}

// Get modal element
const modal = document.getElementById('qr-modal');
const supportButton = document.getElementById('support-button');
const closeButton = document.getElementById('close-button');

supportButton.addEventListener('click', () => {
  modal.style.display = 'block';
});

closeButton.addEventListener('click', () => {
  modal.style.display = 'none';
});

window.addEventListener('click', (event) => {
  if (event.target === modal) {
    modal.style.display = 'none';
  }
});
