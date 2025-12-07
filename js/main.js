// main.js - Script principal pour toutes les pages

document.addEventListener('DOMContentLoaded', function() {
    // Gestion du menu mobile
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    }
    
    // Gestion des accordéons
    const detailsElements = document.querySelectorAll('details');
    detailsElements.forEach(details => {
        details.addEventListener('toggle', function() {
            if (this.open) {
                // Fermer les autres accordéons dans le même groupe
                const parent = this.closest('.accordion-group');
                if (parent) {
                    parent.querySelectorAll('details').forEach(other => {
                        if (other !== this) {
                            other.open = false;
                        }
                    });
                }
            }
        });
    });
    
    // Smooth scroll pour les ancres
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            
            if (href === '#') return;
            
            e.preventDefault();
            const targetElement = document.querySelector(href);
            
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 100,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Animation au scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);
    
    // Observer les éléments avec la classe fade-in
    document.querySelectorAll('.fade-in').forEach(element => {
        observer.observe(element);
    });
    
    // Initialisation Calendly
    if (typeof Calendly !== 'undefined') {
        // Le badge est déjà initialisé dans la page contact
        // Cette fonction peut être utilisée pour d'autres initialisations
        console.log('Calendly chargé avec succès');
    }
    
    // Gestion du thème sombre (déjà activé par défaut)
    // Pourrait être étendu pour un toggle light/dark
    const themeToggle = document.getElementById('theme-toggle');
    if (themeToggle) {
        themeToggle.addEventListener('click', function() {
            document.documentElement.classList.toggle('light');
            localStorage.setItem('theme', 
                document.documentElement.classList.contains('light') ? 'light' : 'dark'
            );
        });
        
        // Vérifier le thème sauvegardé
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme === 'light') {
            document.documentElement.classList.add('light');
        }
    }
    
    // Effet de parallaxe pour les éléments avec data-parallax
    document.querySelectorAll('[data-parallax]').forEach(element => {
        const speed = parseFloat(element.getAttribute('data-parallax')) || 0.5;
        
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const offset = scrolled * speed;
            element.style.transform = `translateY(${offset}px)`;
        });
    });
});