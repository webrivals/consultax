document.addEventListener("DOMContentLoaded", function() {
  let breadcrumb = document.querySelector(".breadcrumb-item.active");
  if(breadcrumb) breadcrumb.textContent = document.title;
});
