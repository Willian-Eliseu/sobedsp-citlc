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
    <link rel="stylesheet" href="../assets/css/main.css">
</head>

<body class="bg-image">
    <?php include_once "../resources/header.php"; ?>

    <main id="main">
        <section>
            <!-- header -->
            <img src="../assets/img/banner.png" alt="" class="w-100">
        </section>
        <!-- o evento -->
        <section class="bg-light py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <h3 class="text-principal text-center fw-bold pt-5">DESAFIOS DA GESTÃO DA CARREIRA EM ENDOSCOPIA</h3>
                        <p class="fs-5">
                            O curso será realizado no dia 28 de setembro de 2024 na sede da Sociedade de Medicina e
                            Cirurgia de Campinas (SMCC).
                            <br>
                            As inscrições estão abertas para as modalidades: presencial e online.
                            <br>
                            Há limite de 106 vagas para participação presencial.
                            <br>
                            Após esta quantidade, estará disponível apenas a inscrição online.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- inscrição -->
        <section class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <h3 class="text-principal text-center fw-bold pt-5">INSCRIÇÃO</h3>
                        <p class="fs-5">
                            SOBED-SP & VOCÊ: Desafios da gestão da carreira em endoscopia
                            <br>
                            Evento misto com transmissão ao vivo no dia 28 de setembro de 2024 a partir das 08h00
                            (horário de Brasília)
                        </p>

                        <p class="text-center pt-5">
                            <a href="../subscribe" class="btn btn-principal fs-4 px-3 pulsing">INSCREVER-SE</a>
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
                        <h3 class="text-principal text-center fw-bold pt-5">PARTICIPANTES</h3>
                        <p class="fs-5">
                            Confira abaixo os participantes do evento
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="row mb-3 g-3">
                            <div class="col-md-6 col-lg-4">
                                <div class="p-3 rounded-3 bg-box hover-effect participants">
                                    <figure class="mb-0">
                                        <img src="../assets/img/participantes/tomazo_franzini.webp" alt="foto do palestrante" class="w-100">
                                        <p class="bg-secondary bg-opacity-50 text-white mb-0 py-3 fs-5 fw-bold floating-name text-center">
                                            Tomazo Franzini
                                        </p>
                                        <figcaption class="overlay d-flex">
                                            <div class="row">
                                                <div class="col-12">
                                                    <p class="m-0">
                                                    <ul>
                                                        <li>Doutor em Ciências em Gastroenterologia;</li>
                                                        <li>MBA em Gestão de Saúde;</li>
                                                        <li>Coordenador Médico Gastro/Endoscopia Dasa;</li>
                                                        <li>Presidente da SOBED-SP;</li>
                                                    </ul>
                                                    </p>
                                                </div>
                                                <div class="col-12 align-self-end">
                                                    <p class="m-0 golden fs-5 fw-bold">
                                                        Tomazo Franzini
                                                    </p>
                                                    <!-- <p class="m-0">
                                                        Presidente da SOBED-SP
                                                    </p> -->
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="p-3 rounded-3 bg-box hover-effect participants">
                                    <figure class="mb-0">
                                        <img src="../assets/img/participantes/rodrigo_azevedo.webp" alt="foto do palestrante" class="w-100">
                                        <p class="bg-secondary bg-opacity-50 text-white mb-0 py-3 fs-5 fw-bold floating-name text-center">
                                            Rodrigo A. de Oliveira
                                        </p>
                                        <figcaption class="overlay d-flex">
                                            <div class="row">
                                                <div class="col-12">
                                                    <p class="m-0">
                                                    <ul>
                                                        <li>Coordenador médico do Serviço de Endoscopia do Hospital
                                                            Regional de Piracicaba / Unicamp</li>
                                                        <li>Título de especialista da Sociedade Brasileira de Endoscopia
                                                            Digestiva;</li>
                                                        <li>Especialização em Endoscopia Digestiva;</li>
                                                        <li>Mestrado em andamento pelo Hospital Sírio-Libanês;</li>
                                                    </ul>
                                                    </p>
                                                </div>
                                                <div class="col-12 align-self-end">
                                                    <p class="m-0 golden fs-5 fw-bold">
                                                        Rodrigo A. de Oliveira
                                                    </p>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="p-3 rounded-3 bg-box hover-effect participants">
                                    <figure class="mb-0">
                                        <img src="../assets/img/participantes/marcelo_camargo.webp" alt="foto do palestrante" class="w-100">
                                        <p class="bg-secondary bg-opacity-50 text-white mb-0 py-3 fs-5 fw-bold floating-name text-center">
                                            Marcelo Amade
                                        </p>
                                        <figcaption class="overlay d-flex">
                                            <div class="row">
                                                <div class="col-12">
                                                    <p class="m-0">
                                                    <ul>
                                                        <li>Professor Faculdade de Medicina São Leopoldo Mandic;</li>
                                                        <li>Coordenador do Serviço de Endoscopia Digestiva do Hospital
                                                            São Luiz;</li>
                                                        <li>Vice Presidente da Sociedade de Medicina e Cirurgia de Campinas;</li>
                                                    </ul>
                                                    </p>
                                                </div>
                                                <div class="col-12 align-self-end">
                                                    <p class="m-0 golden fs-5 fw-bold">
                                                        Marcelo Amade
                                                    </p>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="p-3 rounded-3 bg-box hover-effect participants">
                                    <figure class="mb-0">
                                        <img src="../assets/img/participantes/bruno_falascina.webp" alt="foto do palestrante" class="w-100">
                                        <p class="bg-secondary bg-opacity-50 text-white mb-0 py-3 fs-5 fw-bold floating-name text-center">
                                            Bruno Falascina
                                        </p>
                                        <figcaption class="overlay d-flex">
                                            <div class="row">
                                                <div class="col-12">
                                                    <p class="m-0">
                                                    <ul>
                                                        <li>Graduado em Medicina pela Faculdade de Ciências Médicas de
                                                            Santos, Residência Médica em Cirurgia Geral pela Faculdade
                                                            de Medicina de Jundiaí, Residência Médica em Endoscopia
                                                            Digestiva pelo Hospital Nove de Julho e Hospital Ipiranga em
                                                            São Paulo/SP;</li>
                                                        <li>MBA Gestão em Saúde pela Fundação Getúlio Vagas;</li>
                                                    </ul>
                                                    </p>
                                                </div>
                                                <div class="col-12 align-self-end">
                                                    <p class="m-0 golden fs-5 fw-bold">
                                                        Bruno Falascina
                                                    </p>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="p-3 rounded-3 bg-box hover-effect participants">
                                    <figure class="mb-0">
                                        <img src="../assets/img/participantes/anderson_freitas.webp" alt="foto do palestrante" class="w-100">
                                        <p class="bg-secondary bg-opacity-50 text-white mb-0 py-3 fs-5 fw-bold floating-name text-center">
                                            Anderson Freitas
                                        </p>
                                        <figcaption class="overlay d-flex">
                                            <div class="row">
                                                <div class="col-12">
                                                    <p class="m-0">
                                                    <ul>
                                                        <li>Coordenador do Serviço de Endoscopia do Hospital Vivalle;
                                                        </li>
                                                        <li>Coordenador do Serviço de Endoscopia do Hospital Regional do
                                                            Vale do Paraíba, Hospital Regional São José dos Campos e
                                                            Hospital Regional do Litoral Norte;</li>
                                                    </ul>
                                                    </p>
                                                </div>
                                                <div class="col-12 align-self-end">
                                                    <p class="m-0 golden fs-5 fw-bold">
                                                        Anderson Freitas
                                                    </p>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="p-3 rounded-3 bg-box hover-effect participants">
                                    <figure class="mb-0">
                                        <img src="../assets/img/participantes/paula_poletti.webp" alt="foto do palestrante" class="w-100">
                                        <p class="bg-secondary bg-opacity-50 text-white mb-0 py-3 fs-5 fw-bold floating-name text-center">
                                            Paula Poletti
                                        </p>
                                        <figcaption class="overlay d-flex">
                                            <div class="row">
                                                <div class="col-12">
                                                    <p class="m-0">
                                                    <ul>
                                                        <li>Diretora do Serviço de Gastroenterologia e Hepatologia do
                                                            Hospital do Servidor Público Estadual de São Paulo;</li>
                                                        <li>Membro da Comissão Científica da SOBED SP – Gestão
                                                            2023/2024;</li>
                                                    </ul>
                                                    </p>
                                                </div>
                                                <div class="col-12 align-self-end">
                                                    <p class="m-0 golden fs-5 fw-bold">
                                                        Paula Poletti
                                                    </p>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="p-3 rounded-3 bg-box hover-effect participants">
                                    <figure class="mb-0">
                                        <img src="../assets/img/participantes/leonardo_vedolin.webp" alt="foto do palestrante" class="w-100">
                                        <p class="bg-secondary bg-opacity-50 text-white mb-0 py-3 fs-5 fw-bold floating-name text-center">
                                            Leonardo Vedolin
                                        </p>
                                        <figcaption class="overlay d-flex">
                                            <div class="row">
                                                <div class="col-12">
                                                    <p class="m-0">
                                                    <ul>
                                                        <li>Médico, professor e pesquisador;</li>
                                                        <li>Doutor em Medicina, UFRGS;</li>
                                                        <li>Vice-Presidente Médico da Dasa;</li>
                                                    </ul>
                                                    </p>
                                                </div>
                                                <div class="col-12 align-self-end">
                                                    <p class="m-0 golden fs-5 fw-bold">
                                                        Leonardo Vedolin
                                                    </p>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="p-3 rounded-3 bg-box hover-effect participants">
                                    <figure class="mb-0">
                                        <img src="../assets/img/participantes/julia_lazaro.webp" alt="foto do palestrante" class="w-100">
                                        <p class="bg-secondary bg-opacity-50 text-white mb-0 py-3 fs-5 fw-bold floating-name text-center">
                                            Júlia de Castilho Lázaro
                                        </p>
                                        <figcaption class="overlay d-flex">
                                            <div class="row">
                                                <div class="col-12">
                                                    <p class="m-0">
                                                    <ul>
                                                        <li>Formada em Administração pela UNESP</li>
                                                        <li>Especialista em Economia pela FGV;</li>
                                                        <li>MBA Pleno pela Universidade de Ohio/FGV</li>
                                                    </ul>
                                                    </p>
                                                </div>
                                                <div class="col-12 align-self-end">
                                                    <p class="m-0 golden fs-5 fw-bold">
                                                        Júlia de Castilho Lázaro
                                                    </p>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="p-3 rounded-3 bg-box hover-effect participants">
                                    <figure class="mb-0">
                                        <img src="../assets/img/participantes/ricardo_tedeschi.webp" alt="foto do palestrante" class="w-100">
                                        <p class="bg-secondary bg-opacity-50 text-white mb-0 py-3 fs-5 fw-bold floating-name text-center">
                                            Ricardo Tedeschi Matos
                                        </p>
                                        <figcaption class="overlay d-flex">
                                            <div class="row">
                                                <div class="col-12">
                                                    <p class="m-0">
                                                    <ul>
                                                        <li>Especialista em Cirurgia Geral e Endoscopia Digestiva;</li>
                                                        <li>Mestre em Gastroenterologia pela FMUSP;</li>
                                                        <li>MBA Executivo em Gestão de Cooperativas Financeiras pela
                                                            FGV;</li>
                                                        <li>Diretor 14 Distrital da APM;</li>
                                                    </ul>
                                                    </p>
                                                </div>
                                                <div class="col-12 align-self-end">
                                                    <p class="m-0 golden fs-5 fw-bold">
                                                        Ricardo Tedeschi Matos
                                                    </p>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="p-3 rounded-3 bg-box hover-effect participants">
                                    <figure class="mb-0">
                                        <img src="../assets/img/participantes/gerson_cesar.webp" alt="foto do palestrante" class="w-100">
                                        <p class="bg-secondary bg-opacity-50 text-white mb-0 py-3 fs-5 fw-bold floating-name text-center">
                                            Gérson Cesar Brasil Júnior
                                        </p>
                                        <figcaption class="overlay d-flex">
                                            <div class="row">
                                                <div class="col-12">
                                                    <p class="m-0">
                                                    <ul>
                                                        <li>Médico Assistente do Serviço de Endoscopia do Hospital
                                                            Universitário Oswaldo Cruz da Universidade de Pernambuco
                                                        </li>
                                                        <li>Sócio diretor da MultiGastro – Serviço de Endoscopia dos
                                                            Hospitais Memorial São José e Esperança Olinda;</li>
                                                        <li>Coordenador do Serviço de Endoscopia do Hospital Memorial
                                                            Star;</li>
                                                    </ul>
                                                    </p>
                                                </div>
                                                <div class="col-12 align-self-end">
                                                    <p class="m-0 golden fs-5 fw-bold">
                                                        Gérson Cesar Brasil Júnior
                                                    </p>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- programação -->
        <section class="py-5" id="schedule">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <h3 class="text-principal text-center fw-bold pt-5">
                            PROGRAMAÇÃO
                        </h3>
                        <div class="row">
                            <div class="col-12 rounded-5 shadow py-1">
                                <div class="px-md-5">
                                    <h4 class="fw-bold">
                                        Organização:
                                    </h4>
                                    <p class="fs-5 lh-1">
                                        Tomazo Franzini
                                        <br>
                                        <span class="fs-6">Presidente SOBED-SP</span>
                                    </p>
                                    <p class="fs-5 lh-1">
                                        Rodrigo Azevedo de Oliveira
                                        <br>
                                        <span class="fs-6">Coordenador médico do Serviço de Endoscopia do Hospital
                                            Regional de Piracicaba / Unicamp</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 rounded-5 shadow py-1">
                                <div class="px-md-5 pt-3">
                                    <h4 class="fw-bold">
                                        Moderação:
                                    </h4>
                                    <p class="fs-5 lh-1">
                                        Marcelo Amade
                                        <br>
                                        <span class="fs-6">Vice-Presidente da Sociedade de Medicina e Cirurgia de
                                            Campinas</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 rounded-5 shadow py-1">
                                <div class="px-md-5 pt-3">
                                    <h4 class="fw-bold">
                                        Debatedores:
                                    </h4>
                                    <p class="fs-5 lh-1">
                                        Bruno Falascina
                                        <br>
                                        <span class="fs-6">Membro Titular Especialista da Sobed</span>
                                    </p>
                                    <p class="fs-5 lh-1">
                                        Anderson Freitas Silva
                                        <br>
                                        <span class="fs-6">Coordenador do Serviço de Endoscopia do Hospital
                                            Vivalle</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 rounded-5 shadow py-1">
                                <div class="row px-md-5 pt-3">
                                    <div class="col-2 col-md-1">
                                        <h5 class="fw-bold">08h00</h5>
                                    </div>
                                    <div class="col">
                                        <h5 class="">
                                            Abertura
                                        </h5>
                                    </div>
                                </div>
                                <div class="row px-md-5 pt-3">
                                    <div class="col-2 col-md-1">
                                        <h5 class="fw-bold">08h10</h5>
                                    </div>
                                    <div class="col">
                                        <h5 class="">Legislação em Endoscopia Digestiva: o que o médico
                                            endoscopista precisa saber?</h5>
                                    </div>
                                </div>
                                <div class="row px-md-5">
                                    <div class="col-2 col-md-1">

                                    </div>
                                    <div class="col">
                                        <p class="fs-5 lh-1">
                                            Paula Poletti
                                            <br>
                                            <span class="fs-6">Diretora do Serviço de Gastroenterologia e Hepatologia do Hospital do Servidor Público Estadual de São Paulo</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="row px-md-5 pt-3">
                                    <div class="col-2 col-md-1">
                                        <h5 class="fw-bold">08h40</h5>
                                    </div>
                                    <div class="col">
                                        <h5 class="">Fusões, aquisições e verticalização: como as movimentações do
                                            mercado da saúde afetam as perspectivas do médico endoscopista</h5>
                                    </div>
                                </div>
                                <div class="row px-md-5">
                                    <div class="col-2 col-md-1">

                                    </div>
                                    <div class="col">
                                        <p class="fs-5 lh-1">
                                            Leonardo Vedolin
                                            <br>
                                            <span class="fs-6">Vice-Presidente Médico da Dasa</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="row px-md-5 pt-3">
                                    <div class="col-2 col-md-1">
                                        <h5 class="fw-bold">09h10</h5>
                                    </div>
                                    <div class="col">
                                        <h5 class="">Debate</h5>
                                    </div>
                                </div>
                                <div class="row px-md-5 pt-3">
                                    <div class="col-2 col-md-1">
                                        <h5 class="fw-bold">09h30</h5>
                                    </div>
                                    <div class="col">
                                        <h5 class="">Intervalo</h5>
                                    </div>
                                </div>
                                <div class="row px-md-5 pt-3">
                                    <div class="col-2 col-md-1">
                                        <h5 class="fw-bold">09h50</h5>
                                    </div>
                                    <div class="col">
                                        <h5 class="">Planejamento tributário para médicos</h5>
                                    </div>
                                </div>
                                <div class="row px-md-5">
                                    <div class="col-2 col-md-1">

                                    </div>
                                    <div class="col">
                                        <p class="fs-5 lh-1">
                                            Júlia de Castilho Lázaro
                                            <br>
                                            <span class="fs-6">CEO da Mitfokus</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="row px-md-5 pt-3">
                                    <div class="col-2 col-md-1">
                                        <h5 class="fw-bold">10h20</h5>
                                    </div>
                                    <div class="col">
                                        <h5 class="">Cooperativas médicas de endoscopistas: umas solução possível?</h5>
                                    </div>
                                </div>
                                <div class="row px-md-5">
                                    <div class="col-2 col-md-1">

                                    </div>
                                    <div class="col">
                                        <p class="fs-5 lh-1">
                                            Ricardo Tedeschi Matos
                                            <br>
                                            <span class="fs-6">Diretor 14 Distrital da APM</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="row px-md-5 pt-3">
                                    <div class="col-2 col-md-1">
                                        <h5 class="fw-bold">10h40</h5>
                                    </div>
                                    <div class="col">
                                        <h5 class="">Os desafios econômicos para o médico endoscopista em 2024: da
                                            otimização dos honorários médicos aos desafios do empreendedorismo</h5>
                                    </div>
                                </div>
                                <div class="row px-md-5">
                                    <div class="col-2 col-md-1">

                                    </div>
                                    <div class="col">
                                        <p class="fs-5 lh-1">
                                            Gérson Brasil
                                            <br>
                                            <span class="fs-6">Coordenador do Serviço de Endoscopia do Hospital Memorial Star</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="row px-md-5 py-3">
                                    <div class="col-2 col-md-1">
                                        <h5 class="fw-bold">11h20</h5>
                                    </div>
                                    <div class="col">
                                        <h5 class="">Debate</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
        <!-- organização e apoio -->
        <section class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <h3 class="text-principal text-center fw-bold pt-5">
                            REALIZAÇÃO
                        </h3>
                        <div class="row my-5 justify-content-center gap-5">
                            <div class="col-4 col-lg-2 align-self-center">
                                <img src="../assets/img/logo.png" alt="" class="w-100">
                            </div>
                            <div class="col-4 col-lg-2 align-self-center">
                                <img src="../assets/img/smcc.png" alt="" class="w-100">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center pt-3">
                    <div class="col-lg-9">
                        <h3 class="text-principal text-center fw-bold">
                            APOIO
                        </h3>
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