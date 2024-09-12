<?php
include_once "../assets/php/session.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOBED-SP & VOCÊ</title>
    <meta name="description" content="<?= $_SESSION[NOME_SESSAO]['description'] ?>">
    <meta name="keywords" content="<?= $_SESSION[NOME_SESSAO]['keywords'] ?>">
    <meta name="author" content="TBR Produções">
    <link rel="shortcut icon" href="../assets/img/icone.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $_SESSION[NOME_SESSAO]['sweetalertcss'] ?>">
    <link rel="stylesheet" href="<?= $_SESSION[NOME_SESSAO]['intltelinputcss'] ?>">
    <link rel="stylesheet" href="../assets/css/main.css">
</head>

<body class="bg-image">
    <?php include_once "../resources/header.php"; ?>

    <main id="main">
        <article class="my-5">
            <section class="mb-3">
                <!-- title -->
                <div class="container">
                    <h1 class="text-center fw-bold">
                        ACESSAR
                    </h1>
                    <p class="text-center">
                        Entre com seu email e senha cadastrados
                    </p>
                </div>
            </section>
            <section class="mb-3">
                <!-- form -->
                <div class="container">
                    <form id="form-login">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 mx-auto">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="email" name="email" id="email" readonly="readonly" onfocus="this.removeAttribute('readonly')" class="form-control" required>
                                        </div>
                                    </div>
                                    <!-- <div class="col-12">
                                        <div class="form-group">
                                            <label for="senha">Senha:</label>
                                            <input type="password" name="senha" id="senha" readonly="readonly" onfocus="this.removeAttribute('readonly')" class="form-control" required>
                                        </div>
                                    </div> -->
                                    <div class="col-12">
                                        <!-- control fields -->
                                        <input type="hidden" name="evento" id="evento" value="<?= $_SESSION[NOME_SESSAO]['id'] ?>">
                                        <input type="hidden" name="tipoLogin" id="tipoLogin" value="authentication">
                                        
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-6 d-grid">
                                        <a href="../home/" class="btn btn-secondary bg-gradient">CANCELAR</a>
                                    </div>
                                    <div class="col-6 d-grid">
                                        <button id="btn-submit" class="btn btn-principal bg-gradient">LOGIN</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
            <section class="mb-3">
                <div class="container">
                    <div class="row">
                        <div class="col-12 py-3">
                            <!-- <p class="text-center">
                                Esqueceu sua senha? <a class='text-principal'
                                    href='../password/'>Clique aqui para
                                    redefinir</a>.
                            </p> -->
                            <p class="text-center">
                                Precisa de ajuda? <a class='text-principal' href='../support/'>Clique aqui</a> para entrar em contato com o suporte.
                            </p>
                            <p class="text-center">
                                Ainda não se cadastrou? <a class='text-principal' href='../subscribe/'>Clique aqui</a> para acessar a página de cadastro.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </article>
    </main>

    <?php include_once "../resources/footer.php"; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <script src="<?= $_SESSION[NOME_SESSAO]['jquery'] ?>"></script>
    <script src="<?= $_SESSION[NOME_SESSAO]['sweetalertjs'] ?>"></script>
    <script src="<?= $_SESSION[NOME_SESSAO]['intltelinputjs'] ?>"></script>
    <script src="<?= $_SESSION[NOME_SESSAO]['mask'] ?>"></script>
    <script src="../assets/js/header.js"></script>
    <script src="login.js"></script>
</body>

</html>