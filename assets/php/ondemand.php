<?php
require "sql.php";
require "session.php";
require "../../../global/config/videos.class.php";

$dataagora = date("Y-m-d H:i:s");

if($_POST['controle'] == "fechaacesso"){
    Videos::accessClose($dataagora, $_POST['evento'], $_POST['usuario']);
    echo "dado computado";
}