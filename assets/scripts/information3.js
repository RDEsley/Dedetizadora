document.addEventListener('DOMContentLoaded', function () {
    const navbar = document.getElementById('navbar-fixed');
    let lastScrollTop = 0;

    window.addEventListener('scroll', function() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > lastScrollTop) {
            navbar.style.top = '-60px'; // Esconde a navbar ao rolar para baixo
        } else {
            navbar.style.top = '0'; // Mostra a navbar ao rolar para cima
        }
        lastScrollTop = scrollTop;
    });

    document.getElementById('contactForm').addEventListener('submit', function (event) {
        event.preventDefault();
        alert('Formulário enviado com sucesso!');
    });
});
