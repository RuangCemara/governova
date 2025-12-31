/**
 * GOVERNOVA Theme - Custom JavaScript
 */

(function() {
    'use strict';

    // Add active class to current navigation item
    function setActiveNavigation() {
        const currentPath = window.location.pathname;
        const navLinks = document.querySelectorAll('.pkp_navigation_primary a');

        navLinks.forEach(link => {
            if (link.getAttribute('href') === currentPath) {
                link.classList.add('active');
            }
        });
    }

    // Smooth scroll for anchor links
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const targetId = this.getAttribute('href');
                if (targetId !== '#') {
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        e.preventDefault();
                        targetElement.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                }
            });
        });
    }

    // Add Open Access badge to articles
    function addOpenAccessBadges() {
        const articles = document.querySelectorAll('.obj_article_summary');
        articles.forEach(article => {
            const galleys = article.querySelector('.galleys_links');
            if (galleys && !article.querySelector('.btn-open-access')) {
                const badge = document.createElement('span');
                badge.className = 'btn-open-access';
                badge.innerHTML = '🔓 Open Access';
                galleys.insertBefore(badge, galleys.firstChild);
            }
        });
    }

    // Initialize when DOM is ready
    document.addEventListener('DOMContentLoaded', function() {
        setActiveNavigation();
        initSmoothScroll();
        addOpenAccessBadges();
    });

})();
