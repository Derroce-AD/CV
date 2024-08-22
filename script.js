document.addEventListener("DOMContentLoaded", function() {
    const progresses = document.querySelectorAll('.progress');

    progresses.forEach(progress => {
        let value = progress.getAttribute('data-value');
        progress.style.width = value + '%';
        
        // Mettre à jour le texte à l'intérieur de la barre de progression
        const progressText = progress.querySelector('.progress-text');
        if (progressText) {
            progressText.textContent = value + '%';
        }
    });
});
