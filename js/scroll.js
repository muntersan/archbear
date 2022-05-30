const addClassOnScroll = () => {

    const header = document.querySelector('.site-header')
    const scrollClass = 'site-header--scrolled'
    const distanceFromTop = 300

    const addClass = () => {
        
        if ( window.scrollY > distanceFromTop ){
            header.classList.add(scrollClass)
        }else {
            header.classList.remove(scrollClass)
        }
    }

    window.addEventListener('scroll', addClass)
}

addClassOnScroll()