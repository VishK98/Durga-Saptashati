/**
 * Enhanced Navbar Functionality
 * Professional mega dropdown and interactions
 */

document.addEventListener('DOMContentLoaded', function() {
    
    // Sticky Navbar on Scroll
    const navbar = document.querySelector('.navbar.navbar-modern');
    const topBar = document.querySelector('.top-bar');
    let lastScroll = 0;
    
    window.addEventListener('scroll', function() {
        const currentScroll = window.pageYOffset;
        
        if (currentScroll > 100) {
            navbar.classList.add('nav-sticky');
            navbar.classList.add('scrolled');
            if (topBar) {
                topBar.style.transform = 'translateY(-100%)';
            }
        } else {
            navbar.classList.remove('nav-sticky');
            navbar.classList.remove('scrolled');
            if (topBar) {
                topBar.style.transform = 'translateY(0)';
            }
        }
        
        // Hide/Show navbar on scroll
        if (currentScroll > lastScroll && currentScroll > 300) {
            navbar.style.transform = 'translateY(-100%)';
        } else {
            navbar.style.transform = 'translateY(0)';
        }
        
        lastScroll = currentScroll;
    });
    
    // Enhanced Dropdown Interactions
    const dropdowns = document.querySelectorAll('.navbar .dropdown');
    
    dropdowns.forEach(dropdown => {
        const menu = dropdown.querySelector('.dropdown-menu');
        const toggle = dropdown.querySelector('.dropdown-toggle');
        let closeTimer;
        
        // Function to open dropdown
        const openDropdown = () => {
            clearTimeout(closeTimer);
            
            // Close other dropdowns
            dropdowns.forEach(other => {
                if (other !== dropdown) {
                    other.classList.remove('show');
                    const otherMenu = other.querySelector('.dropdown-menu');
                    if (otherMenu) {
                        otherMenu.classList.remove('show');
                        otherMenu.style.opacity = '0';
                        otherMenu.style.visibility = 'hidden';
                    }
                }
            });
            
            // Open this dropdown
            dropdown.classList.add('show');
            if (menu) {
                menu.classList.add('show');
                menu.style.opacity = '1';
                menu.style.visibility = 'visible';
                menu.style.display = 'block';
            }
        };
        
        // Function to close dropdown
        const closeDropdown = () => {
            closeTimer = setTimeout(() => {
                dropdown.classList.remove('show');
                if (menu) {
                    menu.style.opacity = '0';
                    menu.style.visibility = 'hidden';
                    setTimeout(() => {
                        menu.classList.remove('show');
                        menu.style.display = '';
                    }, 300);
                }
            }, 100);
        };
        
        // Mouse events on dropdown toggle
        dropdown.addEventListener('mouseenter', openDropdown);
        dropdown.addEventListener('mouseleave', closeDropdown);
        
        // Keep dropdown open when hovering on menu
        if (menu) {
            menu.addEventListener('mouseenter', () => {
                clearTimeout(closeTimer);
                openDropdown();
            });
            menu.addEventListener('mouseleave', closeDropdown);
        }
        
        // Click toggle for mobile
        if (toggle) {
            toggle.addEventListener('click', function(e) {
                if (window.innerWidth < 992) {
                    e.preventDefault();
                    dropdown.classList.toggle('show');
                    if (menu) {
                        menu.classList.toggle('show');
                    }
                }
            });
        }
    });
    
    // Smooth Scroll for Anchor Links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            if (targetId !== '#' && targetId.length > 1) {
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    e.preventDefault();
                    const navbarHeight = navbar.offsetHeight;
                    const targetPosition = targetElement.offsetTop - navbarHeight - 20;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
    
    // Mobile Menu Enhancements
    const mobileToggle = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('#navbarCollapse');
    const mobileClose = document.querySelector('.mobile-close');
    
    if (mobileToggle) {
        mobileToggle.addEventListener('click', function() {
            this.classList.toggle('active');
            document.body.classList.toggle('mobile-menu-open');
        });
    }
    
    if (mobileClose) {
        mobileClose.addEventListener('click', function() {
            navbarCollapse.classList.remove('show');
            mobileToggle.classList.remove('active');
            document.body.classList.remove('mobile-menu-open');
        });
    }
});

// Close mobile menu function for onclick
function closeMobileMenu() {
    const navbarCollapse = document.querySelector('#navbarCollapse');
    const mobileToggle = document.querySelector('.navbar-toggler');
    
    if (navbarCollapse) {
        navbarCollapse.classList.remove('show');
    }
    if (mobileToggle) {
        mobileToggle.classList.remove('active');
    }
    document.body.classList.remove('mobile-menu-open');
}