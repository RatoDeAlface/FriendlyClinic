<?php
session_start();
// print_r($_SESSION);
if ((!isset($_SESSION["email"]) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}
$logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friendly Clinic</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../CSS/sistema.css">
</head>

<body>
    <header>
        <nav class="navegation">
            <a href="sistema.php" class="logo">F<span>riendly</span> C<span>linic</span></a>
            <ul class="nav-menu">
                <li class="nav-item" id="home"><a href="sistema.php">Home</a></li>
                <li class="nav-item"><a href="#">Calendário</a></li>
                <li class="nav-item"><a href="contato.php">Contato</a></li>
                <li class="nav-item"><a href="qmsomos.php">Quem Somos</a></li>
                <li class="nav-item"><a href="#">Perfil</a></li>
            </ul>

            <!-- USUARIO -->

            <div class="perfil-dropdown">
                <div class="perfil-btn" onclick="toggle()">
                    <i id="usuario" class="fa-solid fa-user" style="color: #4a4a4a; "></i>
                </div>

                <ul class="perfil-dropdown-list">
                    <li class="dropdown-item">
                        <a href="#">
                            <i class="fa-regular fa-circle-user"></i>
                            Meu Perfil
                        </a>
                    </li>
                    <li class="dropdown-item">
                        <a href="#">
                            <i class="fa-solid fa-paw"></i>
                            Meu Pet
                        </a>
                    </li>
                    <li class="dropdown-item">
                        <a href="#">
                            <i class="fa-regular fa-circle-question"></i>
                            Procura-se
                        </a>
                    </li>
                    <li class="dropdown-item">
                        <a href="#">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            Log out
                        </a>
                    </li>
                </ul>
            </div>

            <!-- MENU -->

            <div class="menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>
    <section class="section-inicio-homepage">
        <div class="container">
            <div class="left-side">
                <h1>Friendly Clinic</h1>
                <p>Seja muito bem-vindo à Friendly Clinic, aqui você encontrará todos os cuidados ao seu Pet e muito
                    mais.</p>

                <button class="btn-home-fc" id="btn-home">Sobre nós</button>
            </div>
            <div class="right-side">
                <img src="../IMGs/GATO.jpg" alt="Image not found">
            </div>
        </div>
    </section>
    <section class="section-calendario">
        <div class="left-side-calendario">
            <img src="../IMGs/TIGRINHO.jpeg" alt="Image not found">
        </div>
        <div class="right-side-calendario">
            <div class="titulo-calendario">
                <h1>Calendário Pet</h1>
                <hr>
            </div>


            <p>
                O calendário será para você ter um controle sobre seu pet de uma forma mais fácil e objetiva, neste
                calendário você conseguirá colocar todas as informações sobre seu pet, desde nome, idade, peso, raça e
                tudo que você precisa saber sobre seu pet.
            </p>
            <p>
                Nele tanto você quanto o veterinário irão conseguir colocar datas de vacinação, consultas, dias de banho
                e o que tiver para colocar.
            </p>

            <button id="btn-rightside-calendario">Saiba mais</button>
        </div>


    </section>

    <section class="section-gerenciar">
        <div class="left-side-gerenciar">
            <img src="../IMGs/Imagem-paw.jpg" alt="Image not found">
        </div>
        <div class="right-side-gerenciar">
            <div class="titulo-gerenciar">
                <h1>Gerenciar</h1>
                <hr>
            </div>

            <p>
                O nosso sistema de gerenciamento funciona de modo que você possa acompanhar de uma maneira mais
                detalhada sobre a vida do seu pet, diferente do calendário que marca datas e algumas informações básicas
                sobre seu pet, já neste sistema de gerenciamento você vai saber tudo sobre seu pet.
            </p>

            <button id="btn-rightside-gerenciar">Saiba mais</button>
        </div>
    </section>

    <section class="section-quemsomos">

        <div class="left-side-quemsomos">
            <div class="titulo-quemsomos">
                <h1>Quem somos</h1>
                <hr>
            </div>

            <p>
                Somos uma empresa de pet shop virtual, que surgiu a partir de uma conversa entre amigos, essa empresa
                tem como objetivo promover um melhor contato com seu pet fornecendo uma experiência única e inovadora,
                tudo que facilite sua vida com seu pet, como calendário de vacinação, dias de consulta, peso, o’que
                comer, e também contamos com um sistema que unifica todas as clínicas veterinárias do Brasil e etc.
                Vamos utilizar lembretes e coisas importantes para o cuidado com seu pet.
            </p>
            <p style="color: #FFB800; text-shadow: 0px 1px 1px #2e2e2e;">
                Somos uma empresa que se preocupa com seu pet, e iremos trabalhar para que tudo vá bem! 
            </p>
        </div>

    </section>

    <footer>
        <h1><a href="sistema.php" class="logoFooter">F<span>riendly</span> C<span>linic</span></a></h1>
        <div class="container-footer">
            <div class="footer-content">
                <h3>Contact Us</h3>
                <p>Email:Info@example.com</p>
                <p>Phone:+55 12345-6789</p>
                <p>Address:Your Address 123 street</p>
            </div>
            <div class="footer-content">
                <h3>Quick Links</h3>
                <ul class="list">
                    <li><a href="sistema.php">Home</a></li>
                    <li><a href="#">Calendario</a></li>
                    <li><a href="#">Contato</a></li>
                    <li><a href="#">Quem somos</a></li>
                </ul>

            </div>
            <div class="footer-content">

                <h3>Follow Us</h3>
                <ul class="social-icons">
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>

            </div>
        </div>
        <div class="bottom-bar">

            <p>&copy; 2024 Friendly Clinic . Todos direitos reservados</p>

        </div>

    </footer>



    <script src="../JS/sistema.js"></script>
</body>

</html>