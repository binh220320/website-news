let wrapperMenu = document.querySelector('.main-menu');
let menuLogo = document.querySelector('.main-menu__item--logo');

window.addEventListener('scroll', scrollMenu);

function scrollMenu() {
    if (pageYOffset > 160) {
        Object.assign(wrapperMenu.style, {
            backgroundColor: '#1f2024',

        })

        wrapperMenu.classList.add('main-menu__scroll');
        Object.assign(menuLogo.style, {
            display: 'block',
        })
    } else {
        Object.assign(wrapperMenu.style, {
            backgroundColor: 'transparent',

        })
        wrapperMenu.classList.remove('main-menu__scroll')
        Object.assign(menuLogo.style, {
            display: 'none',
        })
    }
}
let buttonMenuMobile = document.querySelector('.menu-mobile');
let menuMobile = document.querySelector('.main-menu-mobile');

buttonMenuMobile.addEventListener('click', function() {
    menuMobile.classList.toggle('active-menu');
})