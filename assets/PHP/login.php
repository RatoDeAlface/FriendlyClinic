<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friendly Clinic</title>
    <link rel="stylesheet" href="../CSS/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">

        <!-- DIV LEFTSIDE IMAGE -->

        <div class="left-side">
            <img src="../IMGs/GatoeDog.png" alt="">
        </div>


        <!-- DIV RIGHTSIDE CONTENT -->

        <div class="right-side">
            <!-- TITLE FORM -->
            <div class="header-right">
                <h1>LOGIN</h1>
                <hr>
            </div>
            <form class="formulario" action="login-config.php" method="POST">
                



                <!-- INPUTS -->

                <div class="inputs">

                    <!-- E-MAIL INPUTS -->

                    <label for="email">E-mail</label><br>

                    <div class="email-box">
                        <div class="regular-input-div">
                            <input name="email" type="email" placeholder="Digite aqui..." required><i
                                class="fa-solid fa-envelope" style="color: #b78c1e;"></i></input>
                        </div>
                    </div>


                    <!-- PASSWORD INPUTS -->

                    <label for="password">Senha</label>
                    <div class="password-box">
                        <div class="password-input">
                            <input name="senha" type="password" id="senha" placeholder="Digite aqui..." required><i id="toggle" class="fa-solid fa-eye" style="color: #b78c1e; cursor: pointer;" onclick="showHide()"></i></inputs>
                        </div>
                    </div>

                    <?php
                    session_start();
                    if (isset($_SESSION['erro_login'])) {
                        echo '<p style="color: red; font-size: 10px; text-transform: uppercase; font-weight: bold; margin-left: 10px ">' . $_SESSION['erro_login'] . '</p>';
                        unset($_SESSION['erro_login']); // Limpa a mensagem de erro após exibição
                    }
                    ?>

                    <!-- FORGOT PASSWORD/EMAIL -->

                    <div class="forgot-passwordEmail">
                        <a href="#">Esqueceu sua senha/e-mail?</a>
                    </div>


                    <!-- BUTTON LOGIN -->

                    <div class="btn-singup">
                        <button id="btn-singup" name="submit">Entrar</button>
                        <p>Ainda não tem uma conta? <a href="cadastro.php">Cadastrar-se</a></p>
                    </div>

                </div>
            </form>
        </div>





    </div>
    <script src="../JS/login.js"></script>
</body>

</html>