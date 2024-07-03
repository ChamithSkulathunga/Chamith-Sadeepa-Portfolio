document.addEventListener('DOMContentLoaded', () => {
    const modetoggle = document.getElementById('modetoggle');
    const lightModeStyle = document.getElementById('light-mode-style');
    const darkModeStyle = document.getElementById('dark-mode-style');

    // Function to update styles based on mode
    function updateMode() {
        if (modetoggle.checked) {
            // Dark mode
            darkModeStyle.removeAttribute('disabled');
            lightModeStyle.setAttribute('disabled', 'disabled');
            localStorage.setItem('mode', 'dark');
        } else {
            // Light mode
            lightModeStyle.removeAttribute('disabled');
            darkModeStyle.setAttribute('disabled', 'disabled');
            localStorage.setItem('mode', 'light');
        }
    }

    // Initial setup based on stored mode
    const storedMode = localStorage.getItem('mode');
    if (storedMode === 'dark') {
        modetoggle.checked = true;
    } else {
        modetoggle.checked = false;
    }
    updateMode();

    modetoggle.addEventListener('change', function () {
        // Update mode on toggle change
        updateMode();
    });
});
