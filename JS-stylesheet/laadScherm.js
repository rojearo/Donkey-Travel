document.addEventListener("DOMContentLoaded", function () {
    const loadingScreen = document.querySelector('.loading-screen');
    const indexPage = document.querySelector('.index-page');
    const loadingText = document.querySelector('.loading-text');
    const textContainer = document.querySelector('.text-container');

    // Generate a random animation duration between 3 and 5 seconds
    const animationDuration = (3 + Math.random() * 2) + 's';

    // Apply the animation duration to the donkey animation
    document.styleSheets[0].insertRule(`@keyframes moveDonkey { 0% { left: -20%; } 100% { left: 100%; } }`);
    document.styleSheets[0].rules[0].style.animationDuration = animationDuration;

    // Wait for the animation to complete, then transition to the index page
    setTimeout(() => {
        loadingScreen.style.display = 'none';
        indexPage.style.display = 'block';
    }, parseFloat(animationDuration) * 1000);
});