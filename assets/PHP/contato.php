<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friendly Clinic</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../CSS/contato.css">
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
                    <li class="dropdown-item"><a href="login.php">Sing-in</a></li>
                    <li class="dropdown-item"><a href="cadastro.php">Sing-up</a></li>
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

    <div class="container">
        <div class="titulo-contato">
            <h1>Mande sua mensagem</h1>
            <hr>
        </div>

        <form action="#">
            <div class="inputs">

                <!-- NOME INPUTS -->

                <div class="name-box">
                    <div class="regular-input-div">
                        <input name="name" type="text" placeholder="Nome completo*" required></input>
                    </div>
                </div>


                <!-- E-MAIL INPUTS -->

                <div class="email-box">
                    <div class="regular-input-div">
                        <input name="email" type="email" placeholder="E-mail*" required></inputs>
                    </div>
                </div>

                <!-- ASSUNTO -->

                <div class="textAssunto-box">
                    <div class="textSubject-input-div">
                        <textarea name="subject" id="area-texto" placeholder="Sua mensagem*" required></textarea>
                    </div>
                </div>

                <div class="btn-contato">
                    <button id="btn-contatoSubject">Enviar mensagem</button>
                </div>

            </div>
        </form>
    </div>

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
                    <li><a href="https://instagram.com/@Friendly_.Clinic"><i class="fa-brands fa-instagram"></i></a></li>

            </div>
        </div>
        <div class="bottom-bar">

            <p>&copy; 2024 Friendly Clinic . Todos direitos reservados</p>

        </div>

    </footer>

    <script src="../JS/contato.js"></script>
</body>

</html>