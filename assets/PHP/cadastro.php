<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friendly Clinic</title>
    <link rel="stylesheet" href="../CSS/cadastro.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <form action="cadastro-config.php" method="POST">
            <div class="left-side">
                <div class="header-left">
                    <h1>CADASTRAR</h1>
                    <hr>
                </div>

                <!-- INPUTS SESSION -->

                <div class="inputs">
                    <label for="name">Nome Completo</label><br>

                    <div class="name-box">
                        <div class="regular-input-div">
                            <input name="nome" type="text" placeholder="Digite aqui..." required> <i
                                class="fa-solid fa-user fa-rotate-by" id="user-icon"
                                style="color: #b78c1e; --fa-rotate-angle: 0deg;"></i></input>
                        </div>
                    </div>

                    <label for="email">E-mail</label><br>

                    <div class="email-box">
                        <div class="regular-input-div">
                            <input name="email" type="email" placeholder="Digite aqui..." required><i
                                class="fa-solid fa-envelope" style="color: #b78c1e;"></i></input>
                        </div>
                    </div>

                    <!-- SENHA INPUTS -->

                    <label for="password">Senha</label>
                    <div class="password-box">
                        <div class="password-input">
                            <input name="senha" id="senha"type="password" placeholder="Digite aqui..." required><i id="toggle" class="fa-solid fa-eye" style="color: #b78c1e; cursor: pointer;" onclick="showHide1()"></i></inputs>
                        </div>
                        <div class="password-input-2">
                            <input id="confirm" name="confirm" type="password"
                                placeholder="Confirmar senha..." required><i id="toggleConfirm" class="fa-solid fa-eye" style="color: #b78c1e; cursor: pointer;" onclick="showHide2()"></i></input>
                        </div>
                    </div>

                    <!-- Mensagem de erro, se houver necessidade -->
                    <?php
                    session_start();
                    if (isset($_SESSION['erro_senhas'])) {
                        echo '<p style="color: red; font-size: 12px;">' . $_SESSION['erro_senhas'] . '</p>';
                        unset($_SESSION['erro_senhas']); // Limpa a mensagem de erro após exibição
                    }
                    ?>

                    <div class="btn-singup">
                        <button name="submit" id="btn-singup">Cadastrar</button>
                        <p>Já tem uma conta? <a href="login.php">Entrar</a></p>
                    </div>
                </div>

            </div>

        </form>

        <div class="right-side">
            <img src="../IMGs/GatoeDog.png" alt="">
        </div>

    </div>    
    <script src="../JS/cadastro.js"></script>
</body>

</html>