window.addEventListener('load', function () {
    enableNavActiveToggler();
    enableMenuClickAnim();
})

function enableNavActiveToggler () {
    const navItems = document.querySelectorAll('.nav-item');
    let currSelected = 'correos';
    
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
}