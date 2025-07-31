import Sortable from 'sortablejs';
import jQuery from 'jquery';

// export function link() {
//     window.$ = jQuery;
//     $(document).ready(() => {
//         const sidebar = $('#sidebar');
//         const mobileMenuButon = $('#mobile-menu-button');
//         const sidebarOverlay = $('#sidebar-overlay');
//         const toggleMenu = () => {
//             sidebar.toggleClass('-translate-x-full');
//             sidebarOverlay.toggleClass('hidden');
//         };
//         mobileMenuButon.on('click', toggleMenu);
//         sidebarOverlay.on('click', toggleMenu);
//
//         const linksContainer = $('#links-container');
//         if (linksContainer) {
//             new Sortable(linksContainer, {
//                 animation: 150,
//                 handle: '.drag-handle',
//                 onEnd: function (evt) {
//                     const items = evt.to.children;
//                     const ids = Array.from(items).map(item => item.dataset.id);
//
//                     const reorderUrl = window.reorderUrl;
//                     const csrfToken = window.csrfToken;
//
//                     if (!reorderUrl || !csrfToken) {
//                         console.error('Rota ou token CSRF não definidos.');
//                         return;
//                     }
//
//                     fetch(reorderUrl, {
//                         method: 'POST',
//                         headers: {
//                             'Content-Type': 'application/json',
//                             'X-CSRF-TOKEN': csrfToken
//                         },
//                         body: JSON.stringify({ids: ids})
//                     })
//                         .then(response => response.json())
//                         .then(data => {
//                             if (data.status !== 'success') {
//                                 alert('Ocorreu um erro ao reordenar os links.');
//                             }
//                         })
//                         .catch(error => {
//                             console.error('Erro:', error);
//                             alert('Erro de conexão.');
//                         });
//                 }
//             });
//         }
//     })
//
//     // document.addEventListener('DOMContentLoaded', () => {
//     //     const sidebar = document.getElementById('sidebar');
//     //     const mobileMenuButton = document.getElementById('mobile-menu-button');
//     //     const sidebarOverlay = document.getElementById('sidebar-overlay');
//     //
//     //     const toggleMenu = () => {
//     //         sidebar?.classList.toggle('-translate-x-full');
//     //         sidebarOverlay?.classList.toggle('hidden');
//     //     };
//     //
//     //     mobileMenuButton?.addEventListener('click', toggleMenu);
//     //     sidebarOverlay?.addEventListener('click', toggleMenu);
//     //
//     //     // Ordenação de links
//     //     const linksContainer = document.getElementById('links-container');
//     //     if (linksContainer) {
//     //         new Sortable(linksContainer, {
//     //             animation: 150,
//     //             handle: '.drag-handle',
//     //             onEnd: function (evt) {
//     //                 const items = evt.to.children;
//     //                 const ids = Array.from(items).map(item => item.dataset.id);
//     //
//     //                 // ATENÇÃO: Substitua pelas variáveis JS passadas do Blade para evitar erro!
//     //                 const reorderUrl = window.reorderUrl;
//     //                 const csrfToken = window.csrfToken;
//     //
//     //                 if (!reorderUrl || !csrfToken) {
//     //                     console.error('Rota ou token CSRF não definidos.');
//     //                     return;
//     //                 }
//     //
//     //                 fetch(reorderUrl, {
//     //                     method: 'POST',
//     //                     headers: {
//     //                         'Content-Type': 'application/json',
//     //                         'X-CSRF-TOKEN': csrfToken
//     //                     },
//     //                     body: JSON.stringify({ ids: ids })
//     //                 })
//     //                     .then(response => response.json())
//     //                     .then(data => {
//     //                         if (data.status !== 'success') {
//     //                             alert('Ocorreu um erro ao reordenar os links.');
//     //                         }
//     //                     })
//     //                     .catch(error => {
//     //                         console.error('Erro:', error);
//     //                         alert('Erro de conexão.');
//     //                     });
//     //             }
//     //         });
//     //     }
//     // });
// }



export function link() {
    window.$ = jQuery;

    $(document).ready(() => {
        const sidebar = $('#sidebar');
        const mobileMenuButton = $('#mobile-menu-button');
        const sidebarOverlay = $('#sidebar-overlay');

        const toggleMenu = () => {
            sidebar.toggleClass('-translate-x-full');
            sidebarOverlay.toggleClass('hidden');
        };

        mobileMenuButton.on('click', toggleMenu);
        sidebarOverlay.on('click', toggleMenu);

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
                        body: JSON.stringify({ ids: ids })
                    })
                        .then(response => response.json())
                        .then(data => {
                            if (data.status !== 'success') {
                                alert('Ocorreu um erro ao reordenar os links.');
                            }
                        })
                        .catch(error => {
                            console.error('Erro:', error);
                            alert('Erro de conexão.');
                        });
                }
            });
        }
    });
}
