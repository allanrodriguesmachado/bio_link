export function sidebar() {
    const sidebar = $('#sidebar');
    const mobileMenuButton = $('#mobile-menu-button');
    const sidebarOverlay = $('#sidebar-overlay');

    const toggleMenu = () => {
        sidebar.toggleClass('-translate-x-full');
        sidebarOverlay.toggleClass('hidden');
    };

    mobileMenuButton.on('click', toggleMenu);
    sidebarOverlay.on('click', toggleMenu);
}
