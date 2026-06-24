/* ============================================================
   EZAC SERVICE — MAIN JS
   main.js → Navbar, Mobile Menu, Back-to-Top, Service Tabs
   ============================================================ */

'use strict';

/* ── DOM READY ── */
document.addEventListener('DOMContentLoaded', () => {
    initNavbar();
    initMobileMenu();
    initBackToTop();
    initServiceTabs();
    initSmoothScroll();
    initLazyImages();
    setBookingMinDate();
});

/* ══════════════════════════════════════════
   1. NAVBAR — scroll shadow + active link
════════════════════════════════════════════ */
function initNavbar() {
    const navbar = document.getElementById('navbar');
    if (!navbar) return;

    /* Scroll shadow */
    const onScroll = () => {
        navbar.classList.toggle('scrolled', window.scrollY > 10);
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll(); // run once on load

    /* Highlight active nav link from URL */
    const currentPath = window.location.pathname.replace(/\/$/, '') || '/';
    document.querySelectorAll('.nav-link').forEach(link => {
        const href = link.getAttribute('href')?.replace(/\/$/, '') || '';
        if (href === currentPath || (currentPath === '/' && href === '/')) {
            link.classList.add('active');
            link.setAttribute('aria-current', 'page');
        }
    });
}

/* ══════════════════════════════════════════
   2. MOBILE MENU
════════════════════════════════════════════ */
function initMobileMenu() {
    const btn = document.getElementById('hamburgerBtn');
    const menu = document.getElementById('mobileMenu');
    const close = document.getElementById('mobileClose');
    const overlay = document.getElementById('mobileOverlay');

    if (!btn || !menu) return;

    const openMenu = () => {
        menu.classList.add('open');
        overlay?.classList.add('active');
        btn.classList.add('open');
        btn.setAttribute('aria-expanded', 'true');
        menu.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
    };

    const closeMenu = () => {
        menu.classList.remove('open');
        overlay?.classList.remove('active');
        btn.classList.remove('open');
        btn.setAttribute('aria-expanded', 'false');
        menu.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
    };

    btn.addEventListener('click', () => {
        menu.classList.contains('open') ? closeMenu() : openMenu();
    });

    close?.addEventListener('click', closeMenu);
    overlay?.addEventListener('click', closeMenu);

    /* Close on Escape key */
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && menu.classList.contains('open')) closeMenu();
    });

    /* Close when a menu link is clicked (exclude the services toggle) */
    menu.querySelectorAll('a:not(#servicesToggle)').forEach(link => {
        link.addEventListener('click', closeMenu);
    });
}

/* ══════════════════════════════════════════
   3. BACK TO TOP BUTTON
════════════════════════════════════════════ */
function initBackToTop() {
    const btn = document.getElementById('backToTop');
    if (!btn) return;

    const onScroll = () => {
        btn.style.display = window.scrollY > 400 ? 'flex' : 'none';
    };
    window.addEventListener('scroll', onScroll, { passive: true });

    btn.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
}

/* ══════════════════════════════════════════
   4. SERVICE DETAIL TABS
════════════════════════════════════════════ */
function initServiceTabs() {
    document.querySelectorAll('.service-tab').forEach(tab => {
        tab.addEventListener('click', () => {
            const targetId = tab.dataset.target;
            if (!targetId) return;

            /* Tabs within the same container */
            const container = tab.closest('.service-tabs-wrapper') || document;

            container.querySelectorAll('.service-tab').forEach(t => t.classList.remove('active'));
            container.querySelectorAll('.service-tab-content').forEach(c => c.classList.remove('active'));

            tab.classList.add('active');
            const content = document.getElementById(targetId);
            if (content) {
                content.classList.add('active');
                content.style.animation = 'fadeIn 0.3s ease';
            }
        });
    });
}

/* ══════════════════════════════════════════
   5. SMOOTH SCROLL for anchor links
════════════════════════════════════════════ */
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', (e) => {
            const targetId = anchor.getAttribute('href').slice(1);
            const target = document.getElementById(targetId);
            if (!target) return;

            e.preventDefault();
            const navHeight = document.getElementById('navbar')?.offsetHeight || 0;
            const top = target.getBoundingClientRect().top + window.scrollY - navHeight - 16;
            window.scrollTo({ top, behavior: 'smooth' });
        });
    });
}

/* ══════════════════════════════════════════
   6. LAZY IMAGE LOADING
════════════════════════════════════════════ */
function initLazyImages() {
    if (!('IntersectionObserver' in window)) return;

    const imgs = document.querySelectorAll('img[data-src]');
    if (!imgs.length) return;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;
            const img = entry.target;
            img.src = img.dataset.src;
            if (img.dataset.srcset) img.srcset = img.dataset.srcset;
            img.removeAttribute('data-src');
            img.removeAttribute('data-srcset');
            observer.unobserve(img);
        });
    }, { rootMargin: '100px' });

    imgs.forEach(img => observer.observe(img));
}

/* ══════════════════════════════════════════
   7. BOOKING — set min date to today
════════════════════════════════════════════ */
function setBookingMinDate() {
    const dateInput = document.getElementById('b-date');
    if (!dateInput) return;
    const today = new Date().toISOString().split('T')[0];
    dateInput.min = today;
    /* Default to tomorrow */
    const tomorrow = new Date();
    tomorrow.setDate(tomorrow.getDate() + 1);
    dateInput.value = tomorrow.toISOString().split('T')[0];
}

/* ══════════════════════════════════════════
   8. UTILITY FUNCTIONS (exported for other JS)
════════════════════════════════════════════ */

/**
 * Show a toast notification
 * @param {string} message
 * @param {'success'|'error'|'info'|'warning'} type
 * @param {number} duration ms
 */
window.showToast = function (message, type = 'info', duration = 4000) {
    const existing = document.getElementById('ezac-toast');
    if (existing) existing.remove();

    const colors = {
        success: { bg: 'var(--green)', icon: 'fa-check-circle' },
        error: { bg: 'var(--red)', icon: 'fa-exclamation-circle' },
        warning: { bg: 'var(--amber-dark)', icon: 'fa-exclamation-triangle' },
        info: { bg: 'var(--blue)', icon: 'fa-info-circle' },
    };
    const c = colors[type] || colors.info;

    const toast = document.createElement('div');
    toast.id = 'ezac-toast';
    toast.style.cssText = `
    position:fixed; bottom:100px; right:20px; z-index:9999;
    background:${c.bg}; color:#fff;
    padding:14px 20px; border-radius:10px;
    display:flex; align-items:center; gap:10px;
    font-size:14px; font-weight:600;
    box-shadow:0 8px 24px rgba(0,0,0,0.2);
    animation:fadeInUp 0.3s ease;
    max-width:340px; line-height:1.4;
  `;
    toast.innerHTML = `<i class="fas ${c.icon}" style="font-size:18px;flex-shrink:0"></i><span>${message}</span>`;
    document.body.appendChild(toast);
    setTimeout(() => toast.remove(), duration);
};

/**
 * Debounce utility
 */
window.debounce = function (fn, delay = 300) {
    let timer;
    return (...args) => { clearTimeout(timer); timer = setTimeout(() => fn(...args), delay); };
};

/**
 * Format Indian currency
 */
window.formatINR = function (amount) {
    return '₹' + Number(amount).toLocaleString('en-IN');
};