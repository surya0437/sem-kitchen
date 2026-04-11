document.addEventListener("DOMContentLoaded", function () {
  const track1 = document.getElementById('track1');
  const track2 = document.getElementById('track2');

  if (track1) {
    const logos1 = track1.querySelectorAll('.logo-slide');
    logos1.forEach(logo => {
      const clone = logo.cloneNode(true);
      track1.appendChild(clone);
    });
  }

  if (track2) {
    const logos2 = track2.querySelectorAll('.logo-slide');
    logos2.forEach(logo => {
      const clone = logo.cloneNode(true);
      track2.appendChild(clone);
    });
  }
});

const swiper = new Swiper(".mySwiper", {
  loop: true,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },
  slidesPerView: 1,
  spaceBetween: 20,
  breakpoints: {
    640: { slidesPerView: 1 },
    768: { slidesPerView: 2 },
  },
});

const scrollTopBtn = document.getElementById("scrollTopBtn");

if (scrollTopBtn) {
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
}

function changeImage(thumbnail) {
  const mainImage = document.getElementById('main-image');
  if (!mainImage) return;
  mainImage.src = thumbnail.src;
  mainImage.alt = thumbnail.alt;
}

document.addEventListener('DOMContentLoaded', function () {

  function validateForm(formId, rules) {
    const form = document.getElementById(formId);
    if (!form) return;

    form.addEventListener('submit', function (e) {
      let isValid = true;

      form.querySelectorAll('.client-error').forEach(el => el.remove());

      function showError(input, message) {
        const error = document.createElement('span');
        error.className = 'text-red-500 text-sm mt-1 block client-error';
        error.innerText = message;
        input.classList.add('border-red-500');
        input.parentNode.appendChild(error);
        isValid = false;
      }

      form.querySelectorAll('input, select, textarea').forEach(el => {
        el.classList.remove('border-red-500');
      });

      rules.forEach(rule => {
        const input = form.querySelector(rule.selector);
        if (!input) return;

        if (rule.type === 'file') {
          const files = input.files;

          if (rule.required && files.length === 0) {
            showError(input, rule.message || 'File is required');
            return;
          }

          if (rule.maxFiles && files.length > rule.maxFiles) {
            showError(input, `Maximum ${rule.maxFiles} files allowed`);
            return;
          }

          return;
        }

        const value = input.value.trim();

        if (rule.required && !value) {
          showError(input, rule.message || 'This field is required');
          return;
        }

        if (rule.pattern && value && !rule.pattern.test(value)) {
          showError(input, rule.patternMessage || 'Invalid format');
        }

        if (rule.minLength && value.length < rule.minLength) {
          showError(input, rule.minMessage || `Minimum ${rule.minLength} characters required`);
        }
      });

      if (!isValid) {
        e.preventDefault();
        const firstError = form.querySelector('.client-error');
        if (firstError) {
          firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
      }
    });
  }

  const emailPattern = /^\S+@\S+\.\S+$/;
  const phonePattern = /^[0-9+\- ]{7,15}$/;

  validateForm('sellForm', [
    { selector: '#name', required: true, message: 'Name is required' },
    { selector: '#phone', required: true, pattern: phonePattern, patternMessage: 'Invalid phone number' },
    { selector: '#email', required: true, pattern: emailPattern, patternMessage: 'Invalid email address' },
    { selector: '#equipment-type', required: true, message: 'Select equipment type' },
    { selector: '#equipment-name', required: true, message: 'Equipment name is required' },
    { selector: '#condition', required: true, message: 'Select condition' },
    { selector: '#images', type: 'file', required: true, maxFiles: 5, message: 'At least one image is required' },
  ]);

  validateForm('inquiryForm', [
    { selector: '#name', required: true, message: 'Name is required' },
    { selector: '#email', required: true, pattern: emailPattern, patternMessage: 'Invalid email address' },
    { selector: '#phone', required: true, pattern: phonePattern, patternMessage: 'Invalid phone number' },
    { selector: '#subject', required: true, message: 'Select a subject' },
    { selector: '#message', required: true, minLength: 10, minMessage: 'Minimum 10 characters required' },
  ]);

});