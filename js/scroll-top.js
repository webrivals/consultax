const scrollBtn = document.getElementById("scrollTopBtn");

  window.addEventListener("scroll", () => {
    const scrolled = window.scrollY;
    const totalHeight = document.documentElement.scrollHeight - window.innerHeight;
    const scrolledPercent = (scrolled / totalHeight) * 100;

    if (scrolledPercent > 20) {
      scrollBtn.style.display = "block";
    } else {
      scrollBtn.style.display = "none";
    }
  });

  scrollBtn.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });