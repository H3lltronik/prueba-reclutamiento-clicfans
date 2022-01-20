window.initPage = function (params) {
    enableNavActiveToggler();
    enableMenuClickAnim();

    initValues(params);
}

function enableNavActiveToggler () {
    const navItems = document.querySelectorAll('.nav-ul .nav-item');
    
    console.log("navItems", navItems)
    navItems.forEach(navItem => {
        navItem.addEventListener('click', function () {
            navItems.forEach(_navItem => {
                console.log("aaa", _navItem ,navItem, _navItem == navItem)
                if (_navItem == navItem)
                    _navItem.classList.add('nav-item--active');
                else
                    _navItem.classList.remove('nav-item--active');
            })
        });
    });
}

function enableMenuClickAnim () {
    const menu = document.querySelector('.menu');
    menu.addEventListener('click', function () {
        menu.classList.toggle('menu--active');
    })
    
    const menuMobile = document.querySelector('.menu_mobile');
    const mainIcon = document.querySelector('.menu-icon');
    const mainNav = document.querySelector('.main_nav');
    menuMobile.addEventListener('click', function () {
        mainNav.classList.toggle('main_nav--open');

        if (mainNav.classList.contains('main_nav--open')) {
            mainIcon.innerHTML = 'close';
        } else {
            mainIcon.innerHTML = 'menu';
        }
    });
}

function initValues (values) {
    const embudoItem = document.getElementById('embudo-item');
    const embudoQnt = document.getElementById('embudo-qnt');

    const mailItem = document.getElementById('mail-item');
    const mailQnt = document.getElementById('mail-qnt');

    const contactItem = document.getElementById('contact-item');
    const contactQnt = document.getElementById('contact-qnt');

    const workflowItem = document.getElementById('workflow-item');
    const workflowQnt = document.getElementById('workflow-qnt');

    embudoQnt.innerHTML = values.embudos;
    mailQnt.innerHTML = values.correos;
    contactQnt.innerHTML = values.contactos;
    workflowQnt.innerHTML = values.workflows;

}