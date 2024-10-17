document.addEventListener('DOMContentLoaded', (event) => {
    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Login button click event
    document.querySelector('.login-btn').addEventListener('click', () => {
        alert('Login functionality would be implemented here.');
    });

    // Sign up button click event
    document.querySelector('.signup-btn').addEventListener('click', () => {
        alert('Sign up functionality would be implemented here.');
    });

    // Apply button click event
    document.querySelector('.apply-btn').addEventListener('click', () => {
        alert('Application process would be implemented here.');
    });

    // Form submission
    const form = document.getElementById('order-form');
    if (form) {
        form.addEventListener('submit', (e) => {
            // Form will be handled by PHP, so we don't need to prevent default
            // or handle the submission here
        });
    }
});