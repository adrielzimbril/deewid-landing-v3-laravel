function init() {

    // Topnav Active Menu
    function initTopnav() {

        // Menu Active
        const pageUrl = window.location.href.split(/[?#]/)[0]
        const navbarLinks = Array.from(document.querySelectorAll('#navbar .navbar-nav a'))

        navbarLinks.forEach((link) => {
            if (link.href === pageUrl) {
                link.classList.add('active')

                const parentMenu = link.parentElement.parentElement.parentElement
                if (parentMenu?.classList.contains('nav-item')) {
                    const dropdownElement = parentMenu.querySelector('[data-fc-type="dropdown"]')
                    dropdownElement?.classList.add('active')
                }

                const parentParentMenu = link.parentElement.parentElement.parentElement.parentElement.parentElement
                if (parentParentMenu?.classList.contains('nav-item')) {
                    const dropdownElement = parentParentMenu.querySelector('[data-fc-type="dropdown"]')
                    dropdownElement?.classList.add('active')
                }
            }
        })
    }

    // Mobile Menu Active
    function initMobileNav() {
        const pageUrl = window.location.href.split(/[?#]/)[0]
        const navbarLinks = Array.from(document.querySelectorAll('#mobileMenu .navbar-nav a'))

        navbarLinks.forEach((link) => {
            if (link.href === pageUrl) {
                link.classList.add('active')
                const parentMenu = link.parentElement.parentElement.parentElement
                const parentCollapse = link.parentElement.parentElement
                if (parentMenu?.classList.contains('nav-item')) {
                    const collapseElement = parentMenu.querySelector('[data-fc-type="collapse"]')
                    collapseElement.classList.add('active')
                    if (collapseElement) {
                        const collapse = frost.Collapse.getInstanceOrCreate(collapseElement)
                        collapse.show()
                        if (parentCollapse) {
                            parentCollapse.style.height = null
                        }
                    }
                }
            }
        })
    }

    // Topbar Sticky
    function initStickyNav() {
        // Sticky Navbar
        function windowScroll() {
            const navbar = document.getElementById('navbar')
            if (navbar) {
                if (document.body.scrollTop >= 75 || document.documentElement.scrollTop >= 75) {
                    navbar.classList.add('nav-sticky')

                } else {
                    navbar.classList.remove('nav-sticky')
                }
            }
        }

        window.addEventListener('scroll', (ev) => {
            ev.preventDefault()
            windowScroll()
        })

    }

    // Back To Top
    function initBacktoTop() {

        const mybutton = document.querySelector('[data-toggle="back-to-top"]')

        window.addEventListener('scroll', function () {
            if (window.pageYOffset > 72) {
                mybutton.classList.add('flex')
                mybutton.classList.remove('hidden')

            } else {
                mybutton.classList.remove('flex')
                mybutton.classList.add('hidden')
            }
        })

        if (mybutton) {
            mybutton.addEventListener('click', function (e) {
                e.preventDefault()
                window.scrollTo({top: 0, behavior: 'smooth'})
            })
        }
    }

    initMobileNav()
    initTopnav()
    initStickyNav()
    initBacktoTop()
}

init()