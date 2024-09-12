<?php
include_once "sql.php";
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$consulta = sql([
    'statement'=>'SELECT    (106 - COUNT(*)) AS vagas
                    FROM    tbrevent.registration r
                    WHERE   r.event = ?
                    AND     r.subscribe_training_center = ?',
    'types'=>'ii',
    'parameters'=>[
        356,
        1003
    ],
    'only_first_row'=>'1'
]);

$vagaspresenciaisdisponiveis = $consulta['vagas'];

// echo $consulta['qtd'];
