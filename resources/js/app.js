const themeToggle = document.getElementById('theme-toggle');

if (themeToggle instanceof HTMLButtonElement) {
    const syncThemeToggle = () => {
        const isDark = document.documentElement.classList.contains('dark');

        themeToggle.setAttribute('aria-pressed', String(isDark));
        themeToggle.setAttribute('aria-label', `Switch to ${isDark ? 'light' : 'dark'} mode`);
    };

    syncThemeToggle();

    themeToggle.addEventListener('click', () => {
        const isDark = document.documentElement.classList.toggle('dark');

        localStorage.setItem('theme', isDark ? 'dark' : 'light');
        syncThemeToggle();
    });
}
