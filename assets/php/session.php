<?php

ini_set('session.gc_maxlifetime', 5400);
session_set_cookie_params(5400);
define("NOME_SESSAO", "session359");
session_start();

$_SESSION[NOME_SESSAO]['id'] = 359;
$_SESSION[NOME_SESSAO]['tbread'] = 991;
$_SESSION[NOME_SESSAO]['dataevento'] = "2024-09-28";
$_SESSION[NOME_SESSAO]['pagina'] = 'sobedsp-citlc';
$_SESSION[NOME_SESSAO]['siteoficial'] = '//sobedsp.org.br';
$_SESSION[NOME_SESSAO]['css'] = "eventos.tbr.com.br/sobedsp-citlc/assets/css/chat.css";

//HEADER
$_SESSION[NOME_SESSAO]['description'] = 'SOBED-SP: Caracterização e Indicação Terapêutica de Lesões Colorretais';
$_SESSION[NOME_SESSAO]['keywords'] = 'TBR, PRODUTORA, PRODUÇÃO, VÍDEOS SOB DEMANDA, TRANSMISSÕES';

//CSS
$_SESSION[NOME_SESSAO]['sweetalertcss'] = 'https://eventos.tbr.com.br/global/assets/sweetalert2/dist/sweetalert2.min.css';
$_SESSION[NOME_SESSAO]['intltelinputcss'] = 'https://eventos.tbr.com.br/global/assets/intltelinput/build/css/intlTelInput.css';

//JS
$_SESSION[NOME_SESSAO]['sweetalertjs'] = 'https://eventos.tbr.com.br/global/assets/sweetalert2/dist/sweetalert2.min.js';
$_SESSION[NOME_SESSAO]['jquery'] = 'https://eventos.tbr.com.br/global/assets/jquery/jquery361.js';
$_SESSION[NOME_SESSAO]['mask'] = 'https://eventos.tbr.com.br/global/assets/mask/mask.min.js';
$_SESSION[NOME_SESSAO]['intltelinputjs'] = 'https://eventos.tbr.com.br/global/assets/intltelinput/build/js/intlTelInput.min.js';