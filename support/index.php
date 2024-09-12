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
                        SUPORTE
                    </h1>
                    <p class="text-center">
                        Entre em contato com o suporte utilizando o formulário abaixo
                    </p>
                </div>
            </section>
            <section class="mb-3">
                <!-- form -->
                <div class="container">
                    <form id="form-support">
                        <div class="row">
                            <div class="col-lg-9 mx-auto">
                                <p class="small">
                                    Campos marcados com (*) são obrigatórios.
                                </p>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="tratamento">* Tratamento:</label>
                                            <select name="tratamento" id="tratamento" class="form-select">
                                                <option value="" disabled selected>Selecione</option>
                                                <option value="Dr.">Dr.</option>
                                                <option value="Dra.">Dra.</option>
                                                <option value="Prof.">Prof.</option>
                                                <option value="Profa.">Profa.</option>
                                                <option value="Sr.">Sr.</option>
                                                <option value="Sra.">Sra.</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="nome">* Nome:</label>
                                            <input type="text" name="nome" id="nome" class="form-control" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="email">* Email:</label>
                                            <input type="email" name="email" id="email" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="mensagem">* Mensagem:</label>
                                            <textarea name="mensagem" id="mensagem" class="form-control" rows="7" required></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- control fields -->
                                <input type="hidden" name="pagina" id="pagina" value="<?= $_SESSION[NOME_SESSAO]['pagina'] ?>">
                                <input type="hidden" name="idevento" id="idevento" value="<?php echo $_SESSION[NOME_SESSAO]['id']; ?>">
                                <!-- fim cf -->

                                <div class="row pt-3">
                                    <div class="col-auto mx-auto">
                                        <button id="btn-submit" type="submit" class="btn btn-principal px-5 bg-gradient">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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
    <script src="support.js"></script>
</body>

</html>