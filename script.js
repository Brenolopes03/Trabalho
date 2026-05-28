
const trilho = document.getElementById('trilho');
const body = document.body; // Mais direto!
const icone = document.getElementById('icone');

// 1. Verifica no localStorage se o usuário já havia escolhido o tema escuro antes
if (localStorage.getItem('tema') === 'escuro') {
    trilho.classList.add('dark');
    body.classList.add('dark');
    icone.classList.replace('bi-brightness-high-fill', 'bi-moon-fill');
}

if (trilho) {
    trilho.addEventListener('click', () => {
        trilho.classList.toggle('dark');
        body.classList.toggle('dark');

        // 2. Troca o ícone e salva a preferência no localStorage
        if (body.classList.contains('dark')) {
            icone.classList.replace('bi-brightness-high-fill', 'bi-moon-fill');
            localStorage.setItem('tema', 'escuro'); // Salva como escuro
        } else {
            icone.classList.replace('bi-moon-fill', 'bi-brightness-high-fill');
            localStorage.setItem('tema', 'claro'); // Salva como claro
        }
    });
}
