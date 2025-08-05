document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll(".elementor-nav-menu > li > a");

    navLinks.forEach(link => {
      link.addEventListener("click", function () {
        // Remove active class from all main links
        navLinks.forEach(l => l.classList.remove("elementor-item-active"));

        // Add active class to the clicked one
        this.classList.add("elementor-item-active");
      });
    });
  });