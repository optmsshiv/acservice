/* ============================================================
   EZAC SERVICE — FAQ ACCORDION
   faq.js
   ============================================================ */

'use strict';

document.addEventListener('DOMContentLoaded', initFAQ);

function initFAQ() {
    const faqItems = document.querySelectorAll('.faq-item');
    if (!faqItems.length) return;

    /* Open first item by default */
    openItem(faqItems[0]);

    faqItems.forEach((item, index) => {
        const question = item.querySelector('.faq-q');
        const answer = item.querySelector('.faq-a');
        if (!question || !answer) return;

        /* Accessibility attributes */
        const qId = `faq-q-${index}`;
        const aId = `faq-a-${index}`;
        question.setAttribute('id', qId);
        question.setAttribute('role', 'button');
        question.setAttribute('tabindex', '0');
        question.setAttribute('aria-expanded', 'false');
        question.setAttribute('aria-controls', aId);
        answer.setAttribute('id', aId);
        answer.setAttribute('role', 'region');
        answer.setAttribute('aria-labelledby', qId);

        /* Click handler */
        question.addEventListener('click', () => toggleItem(item, faqItems));

        /* Keyboard: Enter / Space */
        question.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                toggleItem(item, faqItems);
            }
            /* Arrow navigation */
            if (e.key === 'ArrowDown') {
                e.preventDefault();
                const next = faqItems[index + 1];
                if (next) next.querySelector('.faq-q')?.focus();
            }
            if (e.key === 'ArrowUp') {
                e.preventDefault();
                const prev = faqItems[index - 1];
                if (prev) prev.querySelector('.faq-q')?.focus();
            }
        });
    });
}

function toggleItem(item, allItems) {
    const isOpen = item.classList.contains('open');

    /* Close all others (accordion behaviour) */
    allItems.forEach(i => {
        if (i !== item) closeItem(i);
    });

    /* Toggle clicked item */
    isOpen ? closeItem(item) : openItem(item);
}

function openItem(item) {
    if (!item) return;
    const q = item.querySelector('.faq-q');
    item.classList.add('open');
    q?.setAttribute('aria-expanded', 'true');
}

function closeItem(item) {
    if (!item) return;
    const q = item.querySelector('.faq-q');
    item.classList.remove('open');
    q?.setAttribute('aria-expanded', 'false');
}