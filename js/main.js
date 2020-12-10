feather.replace();

/* ===================
 FAQ Accordions
=================== */

const faqs = Array.from(document.querySelectorAll(".faq"));

const toggleFaq = function (e) {
  e.currentTarget.classList.toggle("open");
};

faqs.forEach(function (faq) {
  faq.addEventListener("click", toggleFaq);
});
