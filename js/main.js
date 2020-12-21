(function () {
  /* ===================
  FAQ Accordions
  =================== */
  const faqAccordion = function () {
    const faqs = Array.from(document.querySelectorAll(".faq"));
    const toggleFaq = function (e) {
      e.currentTarget.classList.toggle("open");
    };

    faqs.forEach(function (faq) {
      faq.addEventListener("click", toggleFaq);
    });
  };

  /* ===================
  Navbar on Scroll
  =================== */

  const handleNavbar = function () {
    const navbar = document.querySelector(".navigation");
    if (window.scrollY >= navbar.clientHeight / 3) {
      navbar.classList.add("scrolled");
    } else {
      navbar.classList.remove("scrolled");
    }
  };

  /* ===================
  Mobile Navbar
  =================== */

  const toggleMobileNav = function () {
    const navbar = document.querySelector(".navigation");
    const navList = document.querySelector(".navigation__list");
    const openMenuButton = navbar.querySelector(".menu-button__open");
    const closeMenuButton = navbar.querySelector(".menu-button__close");

    const tl = gsap.timeline();

    tl.paused(true);
    tl.to(navList, {
      duration: 0,
      display: "flex",
      position: "absolute",
      top: "10%",
      right: 0,
      bottom: 0,
      left: 0,
      opacity: 1,
      flexDirection: "column",
      alignItems: "center",
      zIndex: -1,
    });
    tl.to(navbar, {
      duration: 0.05,
      height: 100 + "%",
      backgroundColor: "rgb(249, 244, 251)",
    });
    tl.to(".navigation__item", {
      opacity: 1,
      duration: 0.1,
      marginBottom: "4rem",
      y: "4rem",
      stagger: 0.1,
    });

    openMenuButton.addEventListener("click", function () {
      tl.play();
      openMenuButton.style.display = "none";
      closeMenuButton.style.display = "flex";
    });
    closeMenuButton.addEventListener("click", function () {
      navbar.style.backgroundColor = "#ffffff";
      closeMenuButton.style.display = "none";
      openMenuButton.style.display = "flex";
      tl.reverse();
    });
  };

  AOS.init();
  feather.replace();
  window.addEventListener("scroll", handleNavbar);
  faqAccordion();
  toggleMobileNav();
})();
