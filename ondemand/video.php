<?php 

require_once "sql.php";
require_once "../assets/php/session.php";
require "../../global/config/fullTbread.class.php";
require "../../global/config/videos.class.php";
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);

$id = $_GET['id'];
$newid = $_GET['key'];
$tbreadid = $_GET['course'];
$order = $_GET['order'];

$consulta = Videos::getConsulta($id, $newid);
$buscaAnexo = Videos::getAnexo($tbreadid, $id);

if ($order == 1) {
    $videos = Videos::getVideosPrimeiro($tbreadid, $order);
} else {
    $videos = Videos::getVideosPrimeiro($tbreadid, $order);
    $videospos = Videos::getVideosPos($tbreadid, $order);
}

$ondemand = new Tbread($_SESSION[NOME_SESSAO]['id']);
$ondemand->setParamtbread($tbreadid);
$videoOndemand = $ondemand->ondemandVideoGenerator($newid);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOBED-SP</title>
    <meta name="description" content="<?= $_SESSION[NOME_SESSAO]['description'] ?>">
    <meta name="keywords" content="<?= $_SESSION[NOME_SESSAO]['keywords'] ?>">
    <meta name="author" content="TBR Produções">
    <link rel="shortcut icon" href="../assets/img/icone.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/main.css">
</head>

<body class="bg-image">
    <?php include_once "../resources/header.php"; ?>

    <main id="main">
        <section id="video-page">
            <div class="container">
                <input type="hidden" name="id" id="id" value="<?= $id ?>">
                <input type="hidden" name="key" id="key" value="<?= $newid ?>">
                <input type="hidden" name="course" id="course" value="<?= $tbreadid ?>">
                <input type="hidden" name="order" id="order" value="<?= $order ?>">
            </div>
            <div class="container py-3">
                
                <div class="row">
                    <div class="col-lg-9 pb-3">
                        <div class="row">
                            <div class="col ratio ratio-16x9 p-0">
                                <iframe src="<?= $videoOndemand ?>" id="activeVideo" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="row p-0">
                            <div class="col-12 py-3">
                                <!-- título do vídeo -->
                                <h4><?= $consulta['titulo'] ?></h4>
                                <p id="textIni"><?= nl2br(substr($consulta['sinopse'], 0, 62)) ?>... <a href="javascript:showFullText()" class="text-dark text-bolder fw-bold">mostrar mais</a></p>
                                <p id="textPos" class="d-none"><?= nl2br($consulta['sinopse']) ?>... <a href="javascript:ocultFullText()" class="text-dark text-bolder fw-bold">mostrar menos</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-11">
                                <!-- btn listar cursos -->
                                <div class="row pb-3">
                                    <div class="col-12 p-0 d-grid">
                                        <a href="./?tbreadid=<?= $tbreadid ?>" class="btn btn-principal">Listar Todos os Vídeos</a>
                                    </div>
                                </div>
                                <!-- lista de vídeos -->
                                <div class="row">
                                    <div class="col-12" id="miniaturas_videos">
                                        <div class="row">
                                            <div class="col-12">
                                                <?php if ($order == 1) { ?>
                                                    <?php foreach ($videos as $k => $v) { ?>
                                                        <div class="p-1">
                                                            <div class="row bg-white card_jump rounded border" onclick="window.location.href='./video.php?id=<?= $v['id'] ?>&key=<?= $v['new_id'] ?>&course=<?= $tbreadid ?>&order=<?= $v['ordem'] ?>'">
                                                                <!-- imagem -->
                                                                <div class="col-5 p-0 align-self-center">
                                                                    <img src="//tbr-legacy-thumbnails.s3.sa-east-1.amazonaws.com/<?= $v['new_id'] ?>.jpg?<?= date("H:i:s") ?>" alt="Miniatura do vídeo" class="w-100" onerror="this.src = '<?php echo 'https:\/\/video.tbr.com.br/' . $v['new_id'] . '/poster/' . $v['new_id'] . '.0000001.jpg'; ?>'">
                                                                </div>
                                                                <!-- título -->
                                                                <div class="col-7">
                                                                    <p class="text_miniatura_title">
                                                                        <?php
                                                                        if (strlen($v['titulo']) > 50) {
                                                                            echo substr($v['titulo'], 0, 50) . "...";
                                                                        } else {
                                                                            echo $v['titulo'];
                                                                        }
                                                                        ?>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                <?php } else { ?>
                                                    <?php if ($videos != null) { ?>
                                                        <?php foreach ($videos as $k => $v) { ?>
                                                            <div class="p-1">
                                                                <div class="row bg-white card_jump rounded border" onclick="window.location.href='./video.php?id=<?= $v['id'] ?>&key=<?= $v['new_id'] ?>&course=<?= $tbreadid ?>&order=<?= $v['ordem'] ?>'">
                                                                    <!-- imagem -->
                                                                    <div class="col-5 p-0 align-self-center">
                                                                        <img src="//tbr-legacy-thumbnails.s3.sa-east-1.amazonaws.com/<?= $v['new_id'] ?>.jpg?<?= date("H:i:s") ?>" alt="Miniatura do vídeo" class="w-100" onerror="this.src = '<?php echo 'https:\/\/video.tbr.com.br/' . $v['new_id'] . '/poster/' . $v['new_id'] . '.0000001.jpg'; ?>'">
                                                                    </div>
                                                                    <!-- título -->
                                                                    <div class="col-7">
                                                                        <p class="text_miniatura_title">
                                                                            <?php
                                                                            if (strlen($v['titulo']) > 50) {
                                                                                echo substr($v['titulo'], 0, 50) . "...";
                                                                            } else {
                                                                                echo $v['titulo'];
                                                                            }
                                                                            ?>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php } ?>
                                                        <div class="p-1">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <hr class="py-0 my-0">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php foreach ($videospos as $k => $v) { ?>
                                                            <div class="p-1">
                                                                <div class="row bg-white card_jump rounded border" onclick="window.location.href='./video.php?id=<?= $v['id'] ?>&key=<?= $v['new_id'] ?>&course=<?= $tbreadid ?>&order=<?= $v['ordem'] ?>'">
                                                                    <!-- imagem -->
                                                                    <div class="col-5 p-0 align-self-center">
                                                                        <img src="//tbr-legacy-thumbnails.s3.sa-east-1.amazonaws.com/<?= $v['new_id'] ?>.jpg?<?= date("H:i:s") ?>" alt="Miniatura do vídeo" class="w-100" onerror="this.src = '<?php echo 'https:\/\/video.tbr.com.br/' . $v['new_id'] . '/poster/' . $v['new_id'] . '.0000001.jpg'; ?>'">
                                                                    </div>
                                                                    <!-- título -->
                                                                    <div class="col-7">
                                                                        <p class="text_miniatura_title">
                                                                            <?php
                                                                            if (strlen($v['titulo']) > 50) {
                                                                                echo substr($v['titulo'], 0, 50) . "...";
                                                                            } else {
                                                                                echo $v['titulo'];
                                                                            }
                                                                            ?>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php } ?>
                                                    <?php } ?>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
    <script src="<?= $_SESSION[NOME_SESSAO]['sweetalertjs'] ?>"></script>
    <script src="<?= $_SESSION[NOME_SESSAO]['jquery'] ?>"></script>
    <script src="../assets/js/header.js"></script>
    <script src="video.js"></script>
</body>

</html>