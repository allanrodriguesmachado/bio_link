import Sortable from 'sortablejs';

export function reorder() {
    // const sidebar = $('#sidebar');
    // const mobileMenuButton = $('#mobile-menu-button');
    // const sidebarOverlay = $('#sidebar-overlay');
    //
    // const toggleMenu = () => {
    //     sidebar.toggleClass('-translate-x-full');
    //     sidebarOverlay.toggleClass('hidden');
    // };
    //
    // mobileMenuButton.on('click', toggleMenu);
    // sidebarOverlay.on('click', toggleMenu);

    const linksContainer = document.getElementById('links-container');
    if (linksContainer) {
        new Sortable(linksContainer, {
            animation: 150,
            handle: '.drag-handle',
            onEnd: function (evt) {
                const items = evt.to.children;
                const ids = Array.from(items).map(item => item.dataset.id);

                const reorderUrl = window.reorderUrl;
                const csrfToken = window.csrfToken;

                if (!reorderUrl || !csrfToken) {
                    console.error('Rota ou token CSRF não definidos.');
                    return;
                }

                fetch(reorderUrl, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({ids: ids})
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.status !== 'success') {
                            return alert('Ocorreu um erro ao reordenar os links.');
                        }

                    })
                    .catch(error => {
                        console.error('Erro:', error);
                        alert('Erro de conexão.');
                    });
            }
        });
    }
}
