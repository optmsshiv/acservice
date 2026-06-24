/* ============================================================
   EZAC SERVICE — FORM VALIDATION & SUBMISSION
   forms.js
   ============================================================ */

'use strict';

document.addEventListener('DOMContentLoaded', () => {
    initContactForm();
    initBookingForm();
    initRealtimeValidation();
});

/* ══════════════════════════════════════════
   VALIDATORS
════════════════════════════════════════════ */
const Validators = {
    required: (val) => val.trim() !== '',
    phone: (val) => /^[6-9]\d{9}$/.test(val.replace(/[\s\-\+]/g, '')),
    email: (val) => val === '' || /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(val),
    minLen: (val, n) => val.trim().length >= n,
    pincode: (val) => /^\d{6}$/.test(val.trim()),
};

/* ── Show field error ── */
function showError(field, message) {
    field.classList.add('error');
    field.classList.remove('valid');

    let errEl = field.parentElement.querySelector('.form-error-msg');
    if (!errEl) {
        errEl = document.createElement('div');
        errEl.className = 'form-error-msg';
        field.parentElement.appendChild(errEl);
    }
    errEl.textContent = message;
    errEl.classList.add('show');
}

/* ── Clear field error ── */
function clearError(field) {
    field.classList.remove('error');
    const errEl = field.parentElement.querySelector('.form-error-msg');
    if (errEl) errEl.classList.remove('show');
}

/* ── Mark field valid ── */
function markValid(field) {
    field.classList.add('valid');
    field.classList.remove('error');
    const errEl = field.parentElement.querySelector('.form-error-msg');
    if (errEl) errEl.classList.remove('show');
}

/* ── Set button loading state ── */
function setLoading(btn, loading) {
    if (loading) {
        btn.classList.add('loading');
        btn.disabled = true;
        btn._originalText = btn.innerHTML;
    } else {
        btn.classList.remove('loading');
        btn.disabled = false;
        btn.innerHTML = btn._originalText || btn.innerHTML;
    }
}

/* ══════════════════════════════════════════
   CONTACT FORM
════════════════════════════════════════════ */
function initContactForm() {
    const form = document.getElementById('contact-form-el');
    if (!form) return;

    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        if (!validateContactForm()) return;

        const submitBtn = form.querySelector('[type="submit"]');
        setLoading(submitBtn, true);

        /* Simulate API call — replace with actual fetch() */
        await simulateSubmit(1500);

        setLoading(submitBtn, false);
        showFormSuccess('contact-form-el', 'contact-success');
        showToast('Message sent! We\'ll reply within 4 hours.', 'success');
    });
}

function validateContactForm() {
    let valid = true;

    const name = document.getElementById('c-name');
    const phone = document.getElementById('c-phone');
    const subject = document.getElementById('c-subject');
    const email = document.getElementById('c-email');
    const msg = document.getElementById('c-msg');

    if (name && !Validators.required(name.value)) {
        showError(name, 'Please enter your name.'); valid = false;
    } else if (name) markValid(name);

    if (phone && !Validators.phone(phone.value)) {
        showError(phone, 'Enter a valid 10-digit Indian mobile number.'); valid = false;
    } else if (phone) markValid(phone);

    if (email && !Validators.email(email.value)) {
        showError(email, 'Enter a valid email address.'); valid = false;
    } else if (email) markValid(email);

    if (subject && !Validators.required(subject.value)) {
        showError(subject, 'Please select a subject.'); valid = false;
    } else if (subject) markValid(subject);

    if (msg && !Validators.minLen(msg.value, 10)) {
        showError(msg, 'Please enter at least 10 characters.'); valid = false;
    } else if (msg && Validators.required(msg.value)) markValid(msg);

    /* Scroll to first error */
    if (!valid) {
        const firstError = document.querySelector('.error');
        firstError?.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }

    return valid;
}

/* ══════════════════════════════════════════
   BOOKING FORM
════════════════════════════════════════════ */
function initBookingForm() {
    const form = document.getElementById('booking-form-el');
    if (!form) return;

    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        if (!validateBookingForm()) return;

        const submitBtn = form.querySelector('[type="submit"]');
        setLoading(submitBtn, true);

        /* Simulate API — replace with fetch('/api/book.php', { method:'POST', body: new FormData(form) }) */
        await simulateSubmit(2000);

        setLoading(submitBtn, false);
        showFormSuccess('booking-form-el', 'booking-success');
        showToast('Booking confirmed! We\'ll call you within 30 minutes.', 'success');
    });
}

function validateBookingForm() {
    let valid = true;

    const fields = {
        'b-name': { validator: Validators.required, msg: 'Please enter your full name.' },
        'b-phone': { validator: Validators.phone, msg: 'Enter a valid 10-digit mobile number.' },
        'b-address': { validator: Validators.required, msg: 'Please enter your complete address.' },
        'b-service': { validator: Validators.required, msg: 'Please select a service type.' },
        'b-date': { validator: Validators.required, msg: 'Please choose a preferred date.' },
        'b-time': { validator: Validators.required, msg: 'Please select a time slot.' },
    };

    for (const [id, config] of Object.entries(fields)) {
        const field = document.getElementById(id);
        if (!field) continue;

        const ok = typeof config.validator === 'function'
            ? config.validator(field.value)
            : config.validator;

        if (!ok) {
            showError(field, config.msg);
            valid = false;
        } else {
            markValid(field);
        }
    }

    /* Date must not be in the past */
    const dateField = document.getElementById('b-date');
    if (dateField && dateField.value) {
        const selected = new Date(dateField.value);
        const today = new Date(); today.setHours(0, 0, 0, 0);
        if (selected < today) {
            showError(dateField, 'Date cannot be in the past.');
            valid = false;
        }
    }

    if (!valid) {
        const firstError = document.querySelector('.error');
        firstError?.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }

    return valid;
}

/* ══════════════════════════════════════════
   REALTIME VALIDATION (on blur)
════════════════════════════════════════════ */
function initRealtimeValidation() {
    /* Phone fields */
    document.querySelectorAll('input[type="tel"]').forEach(input => {
        input.addEventListener('blur', () => {
            if (!input.value) return;
            if (Validators.phone(input.value)) {
                markValid(input);
            } else {
                showError(input, 'Enter a valid 10-digit mobile number.');
            }
        });
    });

    /* Email fields */
    document.querySelectorAll('input[type="email"]').forEach(input => {
        input.addEventListener('blur', () => {
            if (!input.value) return;
            if (Validators.email(input.value)) {
                markValid(input);
            } else {
                showError(input, 'Enter a valid email address.');
            }
        });
    });

    /* Clear error on input */
    document.querySelectorAll('input, select, textarea').forEach(field => {
        field.addEventListener('input', () => {
            if (field.classList.contains('error') && field.value.trim()) {
                clearError(field);
            }
        });
    });
}

/* ══════════════════════════════════════════
   HELPERS
════════════════════════════════════════════ */

/* Show success state, hide form */
function showFormSuccess(formId, successId) {
    const form = document.getElementById(formId);
    const success = document.getElementById(successId);
    if (form) form.style.display = 'none';
    if (success) {
        success.style.display = 'block';
        success.classList.add('show');
        success.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }
}

/* Simulate async API delay */
function simulateSubmit(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

/**
 * Actual API submit — use this to replace simulateSubmit
 * @param {string} url
 * @param {FormData} formData
 */
async function submitToServer(url, formData) {
    const response = await fetch(url, {
        method: 'POST',
        body: formData,
    });
    if (!response.ok) throw new Error('Server error: ' + response.status);
    return await response.json();
}