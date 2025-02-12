
document.addEventListener("DOMContentLoaded", function() {
    const params = new URLSearchParams(window.location.search);
    const category = params.get("category");
    
    if (category) {
        const section = document.getElementById(category);
        if (section) {
            section.scrollIntoView({ behavior: "smooth" });
        }
    }
});

function scrollToSection(sectionId) {
    document.getElementById(sectionId).scrollIntoView({ behavior: 'smooth' });
}