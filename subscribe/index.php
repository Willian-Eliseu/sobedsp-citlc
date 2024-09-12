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
                        CADASTRO
                    </h1>
                    <p class="text-center">
                        Para participar do evento, preencha o formulário abaixo
                    </p>
                </div>
            </section>
            <section class="mb-3">
                <!-- form -->
                <div class="container">
                    <form id="form-subscribe">
                        <div class="row">
                            <div class="col-lg-9 mx-auto">
                                <p class="small">
                                    Campos marcados com (*) são obrigatórios.
                                </p>
                                <div class="row mb-3">
                                    <div class="col-md-6 col-lg-3">
                                        <label for="subscribe_training_center">* Formato da Inscrição:</label>
                                        <select name="subscribe_training_center" id="subscribe_training_center"
                                            class="form-select" required>
                                            <option value="" disabled selected>Selecione</option>
                                            <option value="1010">Participação Online</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <div class="form-group">
                                            <label for="subscribe_specialty">* Categoria: </label>
                                            <select name="subscribe_specialty" id="subscribe_specialty"
                                                class="form-select input" required>
                                                <option value="" disabled selected> Selecione </option>
                                                <option value="ENFERMAGEM">ENFERMAGEM</option>
                                                <option value="ESTUDANTE">ESTUDANTE</option>
                                                <option value="INDÚSTRIA">INDÚSTRIA</option>
                                                <option value="MÉDICO">MÉDICO</option>
                                                <option value="OUTROS">OUTROS</option>
                                                <option value="RESIDENTE">RESIDENTE</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="form-group">
                                            <label for="subscribe_treatment">
                                                * Tratamento:
                                            </label>
                                            <select name="subscribe_treatment" id="subscribe_treatment"
                                                class="form-select input" required>
                                                <option value="" disabled selected>Selecione</option>
                                                <option value="Dr.">Dr.</option>
                                                <option value="Dra.">Dra.</option>
                                                <option value="Prof.">Prof.</option>
                                                <option value="Profa.">Profa.</option>
                                                <option value="Sr.">Sr.</option>
                                                <option value="Sra.">Sra.</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="form-group">
                                            <label for="partial_cellphone">
                                                * Celular:
                                            </label>
                                            <input type="tel" class="form-control input" name="partial_cellphone"
                                                id="partial_cellphone" onblur="verificaNumero($('#formLanguage').val())"
                                                maxlength="20" class="form-control" required>
                                            <input type="hidden" name="subscribe_cellphone" id="subscribe_cellphone"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="form-group">
                                            <label for="subscribe_name">
                                                * Nome completo:
                                            </label>
                                            <input type="text" class="form-control input" name="subscribe_name"
                                                id="subscribe_name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="subscribe_email">
                                                * Email:
                                            </label>
                                            <input type="email" class="form-control input" name="subscribe_email"
                                                id="subscribe_email" readonly="readonly"
                                                onfocus="this.removeAttribute('readonly')" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="subscribe_confirmemail">
                                                * Confirme seu email:
                                            </label>
                                            <input type="email" class="form-control input" name="subscribe_confirmemail"
                                                id="subscribe_confirmemail" readonly="readonly"
                                                onfocus="this.removeAttribute('readonly')" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="subscribe_password">
                                                * Senha:
                                            </label>
                                            <input type="password" name="subscribe_password" id="subscribe_password"
                                                class="form-control input" readonly="readonly"
                                                onfocus="this.removeAttribute('readonly')" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="subscribe_confirmpassword">
                                                * Confirme sua senha:
                                            </label>
                                            <input type="password" name="subscribe_confirmpassword"
                                                id="subscribe_confirmpassword" class="form-control input"
                                                readonly="readonly" onfocus="this.removeAttribute('readonly')" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="form-group">
                                            <label for="subscribe_city">
                                                * Cidade:
                                            </label>
                                            <input type="text" name="subscribe_city" id="subscribe_city"
                                                class="form-control input" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="form-group">
                                            <label for="subscribe_state">
                                                * Estado:
                                            </label>
                                            <input type="text" name="subscribe_state" id="subscribe_state"
                                                class="form-control input" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="form-group">
                                            <label for="subscribe_country">
                                                * País:
                                            </label>
                                            <input type="text" name="subscribe_country" id="subscribe_country"
                                                class="form-control input" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label>
                                            * Ao se cadastrar você confirma a veracidade das informações preenchidas.
                                        </label>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="checkbox" name="subscribe_contact_organization"
                                            id="subscribe_contact_organization" class="form-check-input" value="S">
                                        <label for="subscribe_contact_organization">
                                            Aceito receber notificações de eventos médicos transmitidos pela TBR
                                            Produções
                                        </label>
                                    </div>
                                    <div class="col-12">
                                        <p class="small">
                                            Um email de confirmação será enviado após a confirmação da sua inscrição
                                        </p>
                                    </div>
                                </div>

                                <!-- control fields -->
                                <input type="hidden" name="evento" id="evento" value="<?= $_SESSION[NOME_SESSAO]['id'] ?>">
                                <input type="hidden" name="subscribe_enable" id="subscribe_enable" value="1">
                                <input type="hidden" name="formLanguage" id="formLanguage" value="pt">
                                <input type="hidden" name="loginPage" id="loginPage" value="<?= date("Y-m-d") < date("2024-09-28") ? "posinscricao" : "login" ?>">
                                <input type="hidden" name="subscribe_accept_terms" id="subscribe_accept_terms" value="S">
                                <input type="hidden" name="subscribe_notifications_email" id="subscribe_notifications_email" value="S">
                                <input type="hidden" name="subscribe_notifications_sms" id="subscribe_notifications_sms" value="S">
                                <!-- fim cf -->

                                <div class="row pt-3">
                                    <div class="col-auto mx-auto">
                                        <button id="btn-submit" type="submit"
                                            class="btn btn-principal px-5 bg-gradient">Enviar</button>
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
    <script src="subscribe.js"></script>
</body>

</html>