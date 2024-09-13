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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/main.css">
</head>
<body class="bg-image">
    <?php include_once "../resources/header.php"; ?>

    <main id="main">

        <!-- control fields -->
        <input type="hidden" id="ip" value="<?= $_SERVER['REMOTE_ADDR'] ?>">
        <input type="hidden" id="tbreadid" value="<?= $_SESSION[NOME_SESSAO]['tbread'] ?>">
        <!-- control fields -->

        <section>
            <?php if(date('Y-m-d') == "2024-09-21"){ ?>
            <div class="container my-5">
                <h4 class="text-principal mb-3">
                    Curso Interativo: Caracterização e Indicação Terapêutica de Lesões Colorretais
                </h4>
                <div class="row mb-3">
                    <div class="col-xl-9">
                        <div class="row">
                            <div class="col ratio ratio-16x9 rounded border border-dark" id="video-space">
                                <iframe id="activeVideo" class="bg-white player" src="" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="row">
                            <div class="col-12 bg-white rounded border border-dark" id="chat-space">
                                <iframe id="activeChat" width="100%" height="100%" src="" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-3">
                    <p class="fs-5">
                        Para votar, utilize o sistema abaixo:
                    </p>
                    <div class="col-12 px-0">
                        <iframe width="100%" height="600px" src="https://votoremoto.com.br/app/SOBED24/login?url=" frameborder="0" class="rounded-3 border border-dark shadow"></iframe>
                    </div>
                </div>
            </div>
            <?php }else{ ?>
            <div class="container my-5">
                <h4 class="fw-bold text-center py-5">
                    O curso será transmitido ao vivo no dia 21/09/2024.<br> A partir das 08h00 (Horário de Brasília).
                </h4>
            </div>
            <?php } ?>
        </section>
    </main>

    <?php include_once "../resources/footer.php"; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="<?= $_SESSION[NOME_SESSAO]['sweetalertjs'] ?>"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-database.js"></script>
    <script src="<?= $_SESSION[NOME_SESSAO]['jquery'] ?>"></script>
    <script src="../assets/js/header.js"></script>
    <script src="live.js"></script>
</body>
</html>