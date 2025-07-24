// Straszny tutaj pierdolnik zrobi³em, sam nie jestem w stanie wyjasnic co mialem na mysli robiac ta strone.
//Mo¿esz na spokojnie uzywac tego kodu
//Author: AsminPL (my_website ver: 1.0)
//Helped me: ChatGPT
const subCountElement = document.getElementById('subCount');

function updateSubscriberCount() {
    const currentSubs = 13; 


    subCountElement.textContent = currentSubs.toLocaleString('pl-PL');
}


document.addEventListener('DOMContentLoaded', updateSubscriberCount);

const sections = document.querySelectorAll('.section');

const observerOptions = {
    root: null,
    rootMargin: '0px',
    threshold: 0.15
};

const sectionObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
        }
    });
}, observerOptions);

sections.forEach(section => {
    section.classList.add('fade-in-section');
    sectionObserver.observe(section);
});
