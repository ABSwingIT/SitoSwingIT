document.addEventListener('DOMContentLoaded', function () {
  const options = document.querySelectorAll('.lang-option');

  options.forEach(option => {
    option.addEventListener('click', function () {
      const lang = this.getAttribute('data-lang');
      const pathParts = window.location.pathname.split('/');
      const currentPage = pathParts[pathParts.length - 1]; // Nome del file corrente
      const currentFolder = pathParts[pathParts.length - 2]; // Cartella corrente

      // Escludi le pagine index
      if (currentPage === 'index.html' || currentPage === 'index_en.html' || currentPage === 'index_de.html') {
        // Gestisci le pagine index separatamente
        if (lang === 'it') {
          window.location.href = 'index.html';
        } else if (lang === 'en') {
          window.location.href = 'index_en.html';
        } else if (lang === 'de') {
          window.location.href = 'index_de.html';
        }
        return;
      }

      let targetPage = currentPage.replace(/(_[a-z]{2})?\.html$/, '');
      let targetFolder = 'IT';

      if (lang === 'en') {
        targetFolder = 'EN';
      } else if (lang === 'de') {
        targetFolder = 'DE';
      }

      if (lang !== 'it') {
        targetPage += '_' + lang;
      }
      targetPage += '.html';

      // Ricostruisci il percorso relativo corretto
      let relativePath = '../' + targetFolder + '/' + targetPage;

      window.location.href = relativePath;
    });
  });
});




document.addEventListener("DOMContentLoaded", () => {
  const toggle = document.querySelector(".nav-toggle");
  const mobileNav = document.querySelector(".nav-mobile");

  if (toggle && mobileNav) {
    toggle.addEventListener("click", () => {
      toggle.classList.toggle("open");
      const open = toggle.classList.contains("open");
      mobileNav.style.display = open ? "flex" : "none";
    });

    mobileNav.querySelectorAll("a").forEach((link) => {
      link.addEventListener("click", () => {
        toggle.classList.remove("open");
        mobileNav.style.display = "none";
      });
    });
  }

  const yearSpan = document.getElementById("year");
  if (yearSpan) {
    yearSpan.textContent = new Date().getFullYear();
  }

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.2 }
  );

  document.querySelectorAll(".fade-in").forEach((el) => {
    observer.observe(el);
  });
});

// JS per animare l’orbita dei nodi
// Parametri dinamici (in base al CSS)
const main = document.querySelector('.hero-card-main');
const orbit = main.querySelector('.hero-orbit');
const nodes = main.querySelectorAll('.hero-node');

// Dimensioni calcolate dal CSS
const width = main.offsetWidth || 180; // fallback se non presente
const height = main.offsetHeight || 180;

// Calcolo raggio orbitale (14% di inset)
const orbitInset = 0.14;
const orbitWidth = width * (1 - 2 * orbitInset);
const orbitHeight = height * (1 - 2 * orbitInset);
const centerX = width / 2;
const centerY = height / 2;
const radiusX = orbitWidth / 2;
const radiusY = orbitHeight / 2;

function animateNodes() {
  const t = Date.now() * 0.001; // velocità regolabile
  nodes.forEach((node, i) => {
    const angle = t + i * (2 * Math.PI / nodes.length);
    const x = centerX + radiusX * Math.cos(angle);
    const y = centerY + radiusY * Math.sin(angle);
    node.style.left = `${x - 6}px`; // 6px = metà larghezza nodo
    node.style.top = `${y - 6}px`;  // 6px = metà altezza nodo
  });
  requestAnimationFrame(animateNodes);
}
animateNodes();







