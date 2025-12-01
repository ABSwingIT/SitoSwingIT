document.addEventListener("DOMContentLoaded", () => {
  const toggle = document.querySelector(".nav-toggle");
  const mobileNav = document.querySelector(".nav-mobile");

  if (!toggle || !mobileNav) return;

  toggle.addEventListener("click", () => {
    toggle.classList.toggle("open");
    const isOpen = toggle.classList.contains("open");
    mobileNav.style.display = isOpen ? "flex" : "none";
  });

  mobileNav.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", () => {
      toggle.classList.remove("open");
      mobileNav.style.display = "none";
    });
  });
});
