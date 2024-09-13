<?php
include_once "../assets/php/session.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOBED-SP Curso Interativo</title>
    <meta name="description" content="<?= $_SESSION[NOME_SESSAO]['description'] ?>">
    <meta name="keywords" content="<?= $_SESSION[NOME_SESSAO]['keywords'] ?>">
    <meta name="author" content="TBR Produções">
    <link rel="shortcut icon" href="../assets/img/icone.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/main.css">
</head>

<body class="bg-image">
    <?php include_once "../resources/header.php"; ?>

    <main id="main">
        <section>
            <!-- header -->
            <img src="../assets/img/banner.png" alt="" class="w-100" onclick="window.location.href='../subscribe'">
        </section>
        <!-- o evento -->
        <section class="bg-light py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 mb-3">
                        <h2 class="text-principal text-center fw-bold pt-5">Curso Interativo: Caracterização e Indicação Terapêutica de Lesões Colorretais</h2>
                    </div>
                    <div class="col-lg-9">
                        <p class="fs-5">
                            <b>Data:</b> 21 de setembro;
                            <br>
                            <b>Horário:</b> 08h00 (Horário de Brasília);
                            <br>
                            <b>Tipo:</b> Curso Online;
                            <!-- O curso será realizado no dia <b>21 de setembro</b> de 2024 de forma online, a partir das <b>08h00</b> (horário de Brasília). -->
                            <br>
                            O curso será realizado de modo interativo, contando com a participação dos inscritos.
                            <br>
                            <b>AS INSCRIÇÕES ESTÃO ABERTAS.</b>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- inscrição -->
        <section class="py-5" id="subscribe">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <!-- <h3 class="text-principal text-center fw-bold pt-5">INSCRIÇÃO</h3>
                        <p class="fs-5">
                            Curso Interativo: Caracterização e Indicação Terapêutica de Lesões Colorretais
                            <br>
                            Evento online com transmissão ao vivo no dia 21 de setembro de 2024 a partir das 08h00
                            (horário de Brasília)
                        </p> -->

                        <p class="text-center py-5">
                            <a href="../subscribe" class="btn btn-principal fs-2 px-5 py-3 pulsing rounded-pill fw-bold">INSCREVER-SE</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- fotos / mini currículo -->
        <section class="py-5 bg-light" id="speakers">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <h2 class="text-principal text-center fw-bold py-5">PARTICIPANTES</h2>
                        <!-- <p class="fs-5 py-3">
                            Confira abaixo os participantes do evento
                        </p> -->
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="row mb-3 g-3">
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="p-3 rounded-pill bg-box shadow">
                                    <figure class="mb-0 rounded-pill">
                                        <img src="../assets/img/participantes/adriana.png" alt="foto do palestrante" class="w-100">
                                    </figure>
                                </div>
                                <p class="text-principal mb-0 pb-3 fs-5 fw-bold text-center">
                                    Adriana Costa Genzini
                                </p>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="p-3 rounded-pill bg-box shadow">
                                    <figure class="mb-0 rounded-pill">
                                        <img src="../assets/img/participantes/claudio.png" alt="foto do palestrante" class="w-100">
                                    </figure>
                                </div>
                                <p class="text-principal mb-0 pb-3 fs-5 fw-bold text-center">
                                    Cláudio Hashimoto
                                </p>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="p-3 rounded-pill bg-box shadow">
                                    <figure class="mb-0 rounded-pill">
                                        <img src="../assets/img/participantes/elisa.png" alt="foto do palestrante" class="w-100">
                                    </figure>
                                </div>
                                <p class="text-principal mb-0 pb-3 fs-5 fw-bold text-center">
                                    Elisa Baba
                                </p>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="p-3 rounded-pill bg-box shadow">
                                    <figure class="mb-0 rounded-pill">
                                        <img src="../assets/img/participantes/eduardo.png" alt="foto do palestrante" class="w-100">
                                    </figure>
                                </div>
                                <p class="text-principal mb-0 pb-3 fs-5 fw-bold text-center">
                                    Eduardo Ogawa
                                </p>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="p-3 rounded-pill bg-box shadow">
                                    <figure class="mb-0 rounded-pill">
                                        <img src="../assets/img/participantes/fabio.png" alt="foto do palestrante" class="w-100">
                                    </figure>
                                </div>
                                <p class="text-principal mb-0 pb-3 fs-5 fw-bold text-center">
                                    Fábio Kawaguti
                                </p>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="p-3 rounded-pill bg-box shadow">
                                    <figure class="mb-0 rounded-pill">
                                        <img src="../assets/img/participantes/francisco.png" alt="foto do palestrante" class="w-100">
                                    </figure>
                                </div>
                                <p class="text-principal mb-0 pb-3 fs-5 fw-bold text-center">
                                    Francisco Susumu
                                </p>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="p-3 rounded-pill bg-box shadow">
                                    <figure class="mb-0 rounded-pill">
                                        <img src="../assets/img/participantes/graziela.png" alt="foto do palestrante" class="w-100">
                                    </figure>
                                </div>
                                <p class="text-principal mb-0 pb-3 fs-5 fw-bold text-center">
                                    Graziela Bomfim
                                </p>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="p-3 rounded-pill bg-box shadow">
                                    <figure class="mb-0 rounded-pill">
                                        <img src="../assets/img/participantes/jose.png" alt="foto do palestrante" class="w-100">
                                    </figure>
                                </div>
                                <p class="text-principal mb-0 pb-3 fs-5 fw-bold text-center">
                                    José Olympio Meirelles
                                </p>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="p-3 rounded-pill bg-box shadow">
                                    <figure class="mb-0 rounded-pill">
                                        <img src="../assets/img/participantes/renata.png" alt="foto do palestrante" class="w-100">
                                    </figure>
                                </div>
                                <p class="text-principal mb-0 pb-3 fs-5 fw-bold text-center">
                                    Renata Nobre
                                </p>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="p-3 rounded-pill bg-box shadow">
                                    <figure class="mb-0 rounded-pill">
                                        <img src="../assets/img/participantes/renato.png" alt="foto do palestrante" class="w-100">
                                    </figure>
                                </div>
                                <p class="text-principal mb-0 pb-3 fs-5 fw-bold text-center">
                                    Renato Hassegawa
                                </p>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="p-3 rounded-pill bg-box shadow">
                                    <figure class="mb-0 rounded-pill">
                                        <img src="../assets/img/participantes/tomazo.png" alt="foto do palestrante" class="w-100">
                                    </figure>
                                </div>
                                <p class="text-principal mb-0 pb-3 fs-5 fw-bold text-center">
                                    Tomazo Franzini
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- programação -->
        <section class="py-5" id="schedule">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-principal text-center fw-bold pt-5">PROGRAMAÇÃO</h2>
                    </div>
                </div>
            </div>
            <div class="container p-lg-3 d-flex align-items-start">
                <ul class="nav nav-pills flex-column nav-pills border-end border-3 me-3 align-items-end" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-dark fw-semibold active position-relative fs-5 btn btn-outline-principal" id="pills-pgm1-tab" data-bs-toggle="pill" data-bs-target="#pills-pgm1" type="button" role="tab" aria-controls="pills-pgm1" aria-selected="true">Abertura</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-dark fw-semibold position-relative fs-5 btn btn-outline-principal" id="pills-pgm2-tab" data-bs-toggle="pill" data-bs-target="#pills-pgm2" type="button" role="tab" aria-controls="pills-pgm2" aria-selected="false">Módulo 1</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-dark fw-semibold position-relative fs-5 btn btn-outline-principal" id="pills-pgm3-tab" data-bs-toggle="pill" data-bs-target="#pills-pgm3" type="button" role="tab" aria-controls="pills-pgm3" aria-selected="false">Módulo 2</button>
                    </li>
                </ul>
                <div class="tab-content bg-white border rounded-3 border-secondary-subtle shadow p-3 text-dark w-100" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-pgm1" role="tabpanel" aria-labelledby="pills-pgm1-tab">
                        <div class="row">
                            <div class="row p-3">
                                <div class="col-9 mx-auto col-md-2 align-self-center relative-element">
                                    
                                </div>
                                <div class="col-md-10 align-self-center">
                                    <p class="fs-4 fw-bold fst-italic">
                                        Abertura e Apresentação dos palestrantes
                                    </p>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-9 mx-auto col-md-2 align-self-center relative-element">
                                    <img src="../assets/img/participantes/tomazo.png" alt="" class="w-100 rounded-pill border border-2 bg-box">
                                </div>
                                <div class="col-md-10 align-self-center">
                                    <p class="fs-5 fw-bold fst-italic">
                                        Explicação sobre atividade interativa
                                    </p>
                                    <p class="fs-5">
                                        <b>Apresentação: </b> Tomazo Franzini
                                    </p>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-9 mx-auto col-md-2 align-self-center relative-element">
                                    <img src="../assets/img/participantes/adriana.png" alt="" class="w-100 rounded-pill border border-2 bg-box">
                                </div>
                                <div class="col-md-10 align-self-center">
                                    <p class="fs-5 fw-bold fst-italic">
                                        Explicação sobre atividade interativa
                                    </p>
                                    <p class="fs-5">
                                        <b>Apresentação: </b> Adriana Costa Genzini
                                    </p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-pgm2" role="tabpanel" aria-labelledby="pills-pgm2-tab">
                        <div class="row">
                            <div class="row p-3">
                                <div class="col-9 mx-auto col-md-2 align-self-center relative-element">
                                    
                                </div>
                                <div class="col-md-10 align-self-center">
                                    <p class="fs-4 fw-bold fst-italic">
                                        CARACTERIZAÇÃO E INTERPRETAÇÃO DOS ACHADOS ENDOSCÓPICOS
                                    </p>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-9 mx-auto col-md-2 align-self-center relative-element">
                                    <img src="../assets/img/participantes/graziela.png" alt="Graziela Bomfim" class="w-100 rounded-pill border border-2 bg-box">
                                </div>
                                <div class="col-md-10 align-self-center">
                                    <p class="fs-5 fw-bold fst-italic">
                                        08:10 - PRÉ TESTE Apresentação de imagens de casos clínicos para votação inicial dos participantes (4 casos clínicos)
                                    </p>
                                    <p class="fs-5">
                                        <b>Palestrante: </b> Graziela Bomfim
                                    </p>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-9 mx-auto col-md-2 align-self-center relative-element">
                                    <img src="../assets/img/participantes/renata.png" alt="Renata Nobre" class="w-100 rounded-pill border border-2 bg-box">
                                </div>
                                <div class="col-md-10 align-self-center">
                                    <p class="fs-5 fw-bold fst-italic">
                                        08:20 - Classificação Morfológica das Lesoes Colorretais
                                    </p>
                                    <p class="fs-5">
                                        <b>Palestrante: </b> Renata Nobre
                                    </p>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-9 mx-auto col-md-2 align-self-center relative-element">
                                    <img src="../assets/img/participantes/eduardo.png" alt="Eduardo" class="w-100 rounded-pill border border-2 bg-box">
                                </div>
                                <div class="col-md-10 align-self-center">
                                    <p class="fs-5 fw-bold fst-italic">
                                        08:40 - Classificação padrão de Criptas e padrão Vascular
                                    </p>
                                    <p class="fs-5">
                                        <b>Palestrante: </b> Eduardo Ogawa
                                    </p>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-9 mx-auto col-md-2 align-self-center relative-element">
                                    <img src="../assets/img/participantes/renato.png" alt="Renato" class="w-100 rounded-pill border border-2 bg-box">
                                </div>
                                <div class="col-md-10 align-self-center">
                                    <p class="fs-5 fw-bold fst-italic">
                                        09:10 - Lesões Serrilhadas - identificação de displasias
                                    </p>
                                    <p class="fs-5">
                                        <b>Palestrante: </b> Renato Hassegawa
                                    </p>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-9 mx-auto col-md-2 align-self-center relative-element">
                                    <img src="../assets/img/participantes/claudio.png" alt="Cláudio" class="w-100 rounded-pill border border-2 bg-box">
                                </div>
                                <div class="col-md-10 align-self-center">
                                    <p class="fs-5 fw-bold fst-italic">
                                        09:30 - Dicas para boa documentação de imagens
                                    </p>
                                    <p class="fs-5">
                                        <b>Palestrante: </b> Cláudio Hashimoto
                                    </p>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-9 mx-auto col-md-2 align-self-center relative-element">
                                    <!-- <img src="../assets/img/participantes/claudio.png" alt="Graziela Bomfim" class="w-100 rounded-pill border border-2 bg-box"> -->
                                </div>
                                <div class="col-md-10 align-self-center">
                                    <p class="fs-5 fw-bold fst-italic">
                                        09:50 - PÓS TESTE - Reapresentação de Imagens para nova votação (casos clínicos)
                                    </p>
                                    <!-- <p class="fs-5">
                                        <b>Palestrante: </b> Cláudio Hashimoto
                                    </p> -->
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-9 mx-auto col-md-2 align-self-center relative-element">
                                    <img src="../assets/img/participantes/elisa.png" alt="Elisa" class="w-100 rounded-pill border border-2 bg-box">
                                </div>
                                <div class="col-md-10 align-self-center">
                                    <p class="fs-5 fw-bold fst-italic">
                                        10:00 - PAINEL DE DISCUSSÃO (Perguntas e respostas)
                                    </p>
                                    <p class="fs-5">
                                        <b>Moderadora: </b> Elisa Ryoka Baba
                                    </p>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-9 mx-auto col-md-2 align-self-center relative-element">
                                    <img src="../assets/img/participantes/francisco.png" alt="Francisco" class="w-100 rounded-pill border border-2 bg-box">
                                </div>
                                <div class="col-md-10 align-self-center">
                                    <p class="fs-5 fw-bold fst-italic">
                                        
                                    </p>
                                    <p class="fs-5">
                                        <b>Moderador: </b> Francisco Susumu
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-pgm3" role="tabpanel" aria-labelledby="pills-pgm3-tab">
                        <div class="row p-3">
                                <div class="col-9 mx-auto col-md-2 align-self-center relative-element">
                                    
                                </div>
                                <div class="col-md-10 align-self-center">
                                    <p class="fs-4 fw-bold fst-italic">
                                        TRATAMENTO ENDOSCÓPICO
                                    </p>
                                </div>
                            </div>
                        <div class="row">
                            <div class="row p-3">
                                <div class="col-9 mx-auto col-md-2 align-self-center relative-element">
                                    <img src="../assets/img/participantes/graziela.png" alt="Graziela" class="w-100 rounded-pill border border-2 bg-box">
                                </div>
                                <div class="col-md-10 align-self-center">
                                    <p class="fs-5 fw-bold fst-italic">
                                        10:20 - Apresentação 4 lesões para votação da terapia de escolha
                                    </p>
                                    <p class="fs-5">
                                        <b>Palestrante: </b> Graziela Bomfim
                                    </p>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-9 mx-auto col-md-2 align-self-center relative-element">
                                    <img src="../assets/img/participantes/fabio.png" alt="Fábio" class="w-100 rounded-pill border border-2 bg-box">
                                </div>
                                <div class="col-md-10 align-self-center">
                                    <p class="fs-5 fw-bold fst-italic">
                                        10:30 - MUCOSECTOMIA e ESD - diferentes técnicas, dicas práticas para sua realização e profilaxia complicações
                                    </p>
                                    <p class="fs-5">
                                        <b>Palestrante: </b> Fábio Kawaguti
                                    </p>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-9 mx-auto col-md-2 align-self-center relative-element">
                                    <img src="../assets/img/participantes/adriana.png" alt="Adriana" class="w-100 rounded-pill border border-2 bg-box">
                                </div>
                                <div class="col-md-10 align-self-center">
                                    <p class="fs-5 fw-bold fst-italic">
                                        11:00 - Atualização Guideline sobre Indicação Terapêutica de LST colorretais
                                    </p>
                                    <p class="fs-5">
                                        <b>Palestrante: </b> Adriana Costa
                                    </p>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-9 mx-auto col-md-2 align-self-center relative-element">
                                    
                                </div>
                                <div class="col-md-10 align-self-center">
                                    <p class="fs-5 fw-bold fst-italic">
                                        Nova votação
                                    </p>
                                    <p class="fs-5">
                                        
                                    </p>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-9 mx-auto col-md-2 align-self-center relative-element">
                                    <img src="../assets/img/participantes/jose.png" alt="José" class="w-100 rounded-pill border border-2 bg-box">
                                </div>
                                <div class="col-md-10 align-self-center">
                                    <p class="fs-5 fw-bold fst-italic">
                                        11:30 - PAINEL DE DISCUSSÃO (perguntas e respostas)
                                    </p>
                                    <p class="fs-5">
                                        <b>Moderador: </b> José Olympio Meirelles
                                    </p>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-9 mx-auto col-md-2 align-self-center relative-element">
                                    <img src="../assets/img/participantes/tomazo.png" alt="Tomazo" class="w-100 rounded-pill border border-2 bg-box">
                                </div>
                                <div class="col-md-10 align-self-center">
                                    <p class="fs-5 fw-bold fst-italic">
                                        
                                    </p>
                                    <p class="fs-5">
                                        <b>Moderador: </b> Tomazo Franzini
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </section>

        <?php /* ?>
        <!-- localização -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <h3 class="text-principal text-center fw-bold pt-5">COMO CHEGAR</h3>
                        <p class="fs-5 mb-3">
                            A sede da Sociedade de Medicina e Cirurgia de Campinas - SMCC, está localizada na rua: Dr. Delfino Cintra, 63 - Centro, Campinas - SP, 13013-055.
                        </p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6188.81113697643!2d-47.06615009981697!3d-22.900559303726812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8c940b04dd79b%3A0x5f210afc7dd050d8!2sSEDE%20SOCIAL%20DA%20SOCIEDADE%20DE%20MEDICINA%20E%20CIRURGIA%20DE%20CAMPINAS%20-%20SMCC!5e0!3m2!1spt-BR!2sbr!4v1724868208565!5m2!1spt-BR!2sbr" width="100%" height="450" class="border border-3 border-secondary rounded" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <?php */ ?>

        <!-- organização e apoio -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <h2 class="text-principal text-center fw-bold pt-5">
                            REALIZAÇÃO
                        </h2>
                        <div class="row my-5 justify-content-center gap-5">
                            <div class="col-4 col-lg-2 align-self-center">
                                <img src="../assets/img/logo.png" alt="" class="w-100">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center pt-3">
                    <div class="col-lg-9">
                        <h2 class="text-principal text-center fw-bold">
                            APOIO
                        </h2>
                        <div class="row my-5 justify-content-center">
                            <div class="col-6 col-md-4 col-lg-3 pb-3 mb-3">
                                <a target="_blank" href="https://avanos.com/">
                                    <div class="card tamanho shadow-sm">
                                        <img class="card-img-top p-2"
                                            src="https://sobedsp.org.br/image/patrocinio/avanos.png" alt="Logo Avanos">
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 pb-3 mb-3">
                                <a target="_blank" href="https://www.biocam.com.br/">
                                    <div class="card tamanho shadow-sm">
                                        <img class="card-img-top p-2"
                                            src="https://sobedsp.org.br/image/patrocinio/biocam.png" alt="Logo Biocam">
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 pb-3 mb-3">
                                <a target="_blank" href="https://www.bostonscientific.com/content/gwc/pt-BR/home.html">
                                    <div class="card tamanho shadow-sm">
                                        <img class="card-img-top p-2"
                                            src="https://sobedsp.org.br/image/patrocinio/boston.png" alt="Logo Boston">
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 pb-3 mb-3">
                                <a target="_blank" href="https://endotech.com.br/">
                                    <div class="card tamanho shadow-sm">
                                        <img class="card-img-top p-2"
                                            src="https://sobedsp.org.br/image/patrocinio/endotech.png"
                                            alt="Logo Endotech">
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 pb-3 mb-3">
                                <a target="_blank" href="https://www.tamussino.com.br/pt/">
                                    <div class="card tamanho shadow-sm">
                                        <img class="card-img-top p-2"
                                            src="https://eventos.tbr.com.br/encontrohemorragia/assets/img/etamussinoCompleto.png"
                                            alt="Logo Etamussino">
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 pb-3 mb-3">
                                <a target="_blank" href="https://loja.fujifilm.com.br/">
                                    <div class="card tamanho shadow-sm">
                                        <img class="card-img-top p-2"
                                            src="https://eventos.tbr.com.br/encontrohemorragia/assets/img/fujifilmLabormed.png"
                                            alt="Logo FujiFilm">
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 pb-3 mb-3">
                                <a target="_blank" href="https://gfedobrasil.com.br/">
                                    <div class="card tamanho shadow-sm">
                                        <img class="card-img-top p-2"
                                            src="https://eventos.tbr.com.br/encontrohemorragia/assets/img/sponsor_15.png"
                                            alt="Logo Gfe">
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 pb-3 mb-3">
                                <a target="_blank" href="https://www.gmimedicall.com/">
                                    <div class="card tamanho shadow-sm">
                                        <img class="card-img-top p-2"
                                            src="https://sobedsp.org.br/image/patrocinio/gabisa.png" alt="Logo Gabisa">
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 pb-3 mb-3">
                                <a target="_blank" href="https://www.mediglobe-brasil.com/br/">
                                    <div class="card tamanho shadow-sm">
                                        <img class="card-img-top p-2"
                                            src="https://sobedsp.org.br/image/patrocinio/mediglobe.png"
                                            alt="Logo Medi-Globe">
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 pb-3 mb-3">
                                <a target="_blank" href="https://www.scitechmed.com/">
                                    <div class="card tamanho shadow-sm">
                                        <img class="card-img-top p-2"
                                            src="https://sobedsp.org.br/image/patrocinio/scitech.png"
                                            alt="Logo Scitech">
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 pb-3 mb-3">
                                <a target="_blank" href="https://www.sonoscape.com/">
                                    <div class="card tamanho shadow-sm">
                                        <img class="card-img-top p-2"
                                            src="https://sobedsp.org.br/image/patrocinio/sonoscape.png"
                                            alt="Logo sonoscape">
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 pb-3 mb-3">
                                <a target="_blank" href="https://www.steris.com/">
                                    <div class="card tamanho shadow-sm">
                                        <img class="card-img-top p-2"
                                            src="https://sobedsp.org.br/image/patrocinio/steris.png" alt="Logo Steris">
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 pb-3 mb-3">
                                <a target="_blank" href="https://shop.promedon.com/br/pt/">
                                    <div class="card tamanho shadow-sm">
                                        <img class="card-img-top p-2"
                                            src="https://sobedsp.org.br/image/patrocinio/promedon-microtech.png"
                                            alt="Logo Promedon-microtech">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <a href="../login" class="btn btn-principal px-5 fs-5 pulsing" id="floating-btn">ACESSAR</a>
    </main>

    <?php include_once "../resources/footer.php"; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="<?= $_SESSION[NOME_SESSAO]['jquery'] ?>"></script>
    <script src="../assets/js/header.js"></script>
    <script src="home.js"></script>
</body>

</html>