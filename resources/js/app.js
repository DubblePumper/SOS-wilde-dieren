import './bootstrap';

const focusableContactTarget = document.querySelector(
    `${window.location.hash === '#contact-form' ? '#subject' : '.form-status, .form-errors'}`
);

if (focusableContactTarget instanceof HTMLElement) {
    queueMicrotask(() => {
        focusableContactTarget.focus();
    });
}

document.querySelectorAll('form.contact-form').forEach((form) => {
    form.addEventListener('submit', () => {
        const button = form.querySelector('button[type="submit"]');

        if (!button) {
            return;
        }

        button.dataset.originalText = button.textContent;
        button.textContent = 'Bezig met versturen...';
        button.disabled = true;
        form.classList.add('is-submitting');
    });
});
