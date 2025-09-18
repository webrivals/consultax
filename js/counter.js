document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".count");

  const animateCounter = (counter) => {
    const target = parseFloat(counter.textContent); // parse as float
    counter.textContent = "0"; // reset to 0
    const duration = 5000;
    const startTime = performance.now();

    const decimals = target % 1 !== 0 ? 1 : 0; // if decimal, keep 1 digit

    const updateCounter = (currentTime) => {
      const elapsed = currentTime - startTime;
      const progress = Math.min(elapsed / duration, 1);

      const value = progress * target;
      counter.textContent = value.toFixed(decimals); // keep decimals if needed

      if (progress < 1) {
        requestAnimationFrame(updateCounter);
      }
    };

    requestAnimationFrame(updateCounter);
  };

  // Observe when counters come into view
  const observer = new IntersectionObserver(
    (entries, obs) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          obs.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.5 }
  );

  counters.forEach((counter) => observer.observe(counter));
});
