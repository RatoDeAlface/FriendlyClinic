function showHide() {
    var senhaInput = document.getElementById('senha'); // Pegando o campo de senha
    var toggleIcon = document.getElementById('toggle'); // Pegando o ícone de olho

    // Verifica o tipo do campo de senha e alterna
    if (senhaInput.type === "password") {
        senhaInput.type = "text"; // Exibe a senha em texto
        toggleIcon.classList.remove("fa-eye"); // Remove o ícone de olho
        toggleIcon.classList.add("fa-eye-slash"); // Adiciona o ícone de olho riscado
    } else {
        senhaInput.type = "password"; // Oculta a senha
        toggleIcon.classList.remove("fa-eye-slash"); // Remove o ícone de olho riscado
        toggleIcon.classList.add("fa-eye"); // Adiciona o ícone de olho
    }
}
