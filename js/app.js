document.addEventListener("DOMContentLoaded", function () {
  function toggleMobileMenu() {
  const menu = document.getElementById('mobileMenu');
  menu.classList.toggle('open');
  }
  function toggleDropdown() {
    const menu = document.getElementById('dropdown-menu');
    menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
  }

  // Cerrar si se hace clic fuera del dropdown
  window.addEventListener('click', function (e) {
    const menu = document.getElementById('dropdown-menu');
    if (menu && !e.target.matches('.dropdown-toggle')) {
      menu.style.display = 'none';
    }
  });
});


