const siteMenu = () => {

    const menuButton = document.querySelector('.menu-button')
    const menuButtonClass = 'menu-button--active'
    const menu = document.querySelector('.site-menu')
    const menuClass = 'site-menu--visible'
    const header = document.querySelector('.site-header')
    const headerClass = 'site-header--menu-opened'

    const toggleMenu = () => {
        menu.classList.toggle(menuClass)
        header.classList.toggle(headerClass)
        menuButton.classList.toggle(menuButtonClass)
    }

    menuButton.addEventListener('click', toggleMenu)

    //add count to menu items
    const menuItems = menu.querySelectorAll('.menu .menu-item')
    let i = 1

    menuItems.forEach(item => {

        const countEl = document.createElement('span')
        countEl.classList.add('menu__count')
        countEl.innerText = `0${i}.`
        const linkEl = item.querySelector('a')

        item.insertBefore(countEl, linkEl)

        i++

    })

}

siteMenu()