document.addEventListener('DOMContentLoaded', iniciarApp);

function iniciarApp() {

    document.querySelectorAll('.nav-sidebar .nav-link:not(.titulo-menu)').forEach(item => {

        const url = location.href;
        const dataLink = item.dataset.link;

        if (url.includes(dataLink)) {

            item.classList.add('active');

            if (item.parentElement.parentElement.classList.contains('nav-treeview')) {

                const liMenu = item.parentElement.parentElement.parentElement;
                liMenu.classList.add('menu-open');
                liMenu.querySelector('a.titulo-menu').classList.add('active');

            }

        }

    });

}