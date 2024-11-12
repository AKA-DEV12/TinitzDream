document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll(".effect");

    // Crée un observer pour surveiller quand les éléments entrent dans le viewport
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                // Ajoute de la classe qui déclenche l'animation
                setTimeout(() => {
                    entry.target.classList.add("visible");
                }, index * 400); // Décalage de 300ms entre les éléments

                // Déconnecte l'observer pour éviter de répéter l'animation
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 }); // 20% de l'élément visible pour déclencher l'animation

    // Surveille chaque élément avec la classe .effect
    elements.forEach((el) => observer.observe(el));
});

/* ---------------------------------------- Partie Animation ------------------------------*/
document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll(".effectH");

    // Crée un observer pour surveiller quand les éléments entrent dans le viewport
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                // Ajoute de la classe qui déclenche l'animation
                setTimeout(() => {
                    entry.target.classList.add("visible");
                }, index * 400); // Décalage de 300ms entre les éléments

                // Déconnecte l'observer pour éviter de répéter l'animation
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 }); // 20% de l'élément visible pour déclencher l'animation

    // il me permet de surveille chaque élément contenant ma classe effet 
    elements.forEach((el) => observer.observe(el));
});


/*-----------------Menu deroulant avec les information specifique a chaquer menu ------------*/
function showForm(formId) {
    // Masquer tous les formulaires quand il n'y a pas de clique
    document.getElementById('projet-digital').classList.add('hidden');
    document.getElementById('maison-connectee').classList.add('hidden');
    document.getElementById('gps-tracking').classList.add('hidden');

    
    // Afficher le formulaire selectionne quand on clique dessus
    document.getElementById(formId).classList.remove('hidden');
}