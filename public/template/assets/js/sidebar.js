document.addEventListener('DOMContentLoaded', function () {
    const toggles = document.querySelectorAll('.menu-toggle');

    toggles.forEach(toggle => {
        toggle.addEventListener('click', function () {
            const subMenu = this.nextElementSibling;

            // Tutup dropdown lain
            document.querySelectorAll('.nav-second-level, .nav-third-level').forEach(menu => {
                if (menu !== subMenu) {
                    menu.classList.remove('show');
                }
            });

            // Buka/tutup dropdown yang diklik
            subMenu.classList.toggle('show');
        });
    });
});
