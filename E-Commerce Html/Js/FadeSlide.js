  // JavaScript code to control the slider functionality
  const slides = document.querySelectorAll('.slider .item');
  const dots = document.querySelectorAll('.dots .dot');
  let currentIndex = 0;

  function showSlide(index) {
    // Remove "current" class from all slides and dots
    slides.forEach(slide => slide.classList.remove('current'));
    dots.forEach(dot => dot.classList.remove('current'));

    // Add "current" class to the new active slide and dot
    slides[index].classList.add('current');
    dots[index].classList.add('current');
  }

  function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    showSlide(currentIndex);
  }

  function prevSlide() {
    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
    showSlide(currentIndex);
  }

  function goToSlide(index) {
    currentIndex = index;
    showSlide(currentIndex);
  }

  // Attach event listeners for navigation buttons
  document.getElementById('next').addEventListener('click', nextSlide);
  document.getElementById('prev').addEventListener('click', prevSlide);

  // Attach event listeners to dots for direct navigation
  dots.forEach((dot, index) => {
    dot.addEventListener('click', () => goToSlide(index));
  });

  // Auto-slide every 4 seconds
  setInterval(nextSlide, 4000);
