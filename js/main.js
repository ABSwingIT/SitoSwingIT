document.addEventListener('DOMContentLoaded', function () {
  const options = document.querySelectorAll('.lang-option');

  options.forEach(option => {
    option.addEventListener('click', function () {
      const lang = this.getAttribute('data-lang');
      const pathParts = window.location.pathname.split('/');
      const currentPage = pathParts[pathParts.length - 1]; // Nome del file corrente
      const currentFolder = pathParts[pathParts.length - 2]; // Cartella corrente

      // Escludi le pagine index
      if (currentPage === 'index.php' || currentPage === 'index_en.php' || currentPage === 'index_de.php') {
        // Gestisci le pagine index separatamente
        if (lang === 'it') {
          window.location.href = 'index.php';
        } else if (lang === 'en') {
          window.location.href = 'index_en.php';
        } else if (lang === 'de') {
          window.location.href = 'index_de.php';
        }
        return;
      }

      let targetPage = currentPage.replace(/(_[a-z]{2})?\.php$/, '');
      let targetFolder = 'IT';

      if (lang === 'en') {
        targetFolder = 'EN';
      } else if (lang === 'de') {
        targetFolder = 'DE';
      }

      if (lang !== 'it') {
        targetPage += '_' + lang;
      }
      targetPage += '.php';

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
    { threshold: 0.05 }
  );

  document.querySelectorAll(".fade-in").forEach((el) => {
    observer.observe(el);
  });
});