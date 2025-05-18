//our client slider

document.addEventListener("DOMContentLoaded", function () {
  const track1 = document.getElementById('track1');
  const track2 = document.getElementById('track2');

  // Clone logos in the first track
  const logos1 = track1.querySelectorAll('.logo-slide');
  logos1.forEach(logo => {
    const clone = logo.cloneNode(true);
    track1.appendChild(clone);
  });

  // Clone logos in the second track
  const logos2 = track2.querySelectorAll('.logo-slide');
  logos2.forEach(logo => {
    const clone = logo.cloneNode(true);
    track2.appendChild(clone);
  });
});


// Initialize Swiper

const swiper = new Swiper(".mySwiper", {
  loop: true,
  autoplay: {
    delay: 2000, // Change slides every 2 seconds
    disableOnInteraction: false, // Keeps autoplay running even after user interaction
  },
  slidesPerView: 1, // Default to 1 slide visible
  spaceBetween: 20, // Spacing between slides
  breakpoints: {
    640: { slidesPerView: 1 },  // 1 slide for screens 640px and below
    768: { slidesPerView: 2 },  // 2 slides for screens 768px and above
    // 1024: { slidesPerView: 3 }, // 3 slides for screens 1024px and above
  },
});


//back to top button

const scrollTopBtn = document.getElementById("scrollTopBtn");

window.addEventListener("scroll", () => {
  if (window.scrollY > 300) {
    scrollTopBtn.classList.remove("translate-y-[-50px]", "opacity-0");
    scrollTopBtn.classList.add("translate-y-0", "opacity-100");
  } else {
    scrollTopBtn.classList.add("translate-y-[-50px]", "opacity-0");
    scrollTopBtn.classList.remove("translate-y-0", "opacity-100");
  }
});

scrollTopBtn.addEventListener("click", () => {
  window.scrollTo({ top: 0, behavior: "smooth" });
});

function changeImage(thumbnail) {
  const mainImage = document.getElementById('main-image');
  mainImage.src = thumbnail.src; // Update the main display image with the clicked thumbnail
  mainImage.alt = thumbnail.alt; // Optionally update the alt attribute
}