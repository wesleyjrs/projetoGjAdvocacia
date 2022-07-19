<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">

    <title>GJ | Advocacia e consultoria jurídica</title>

    <meta name="description" content="Description">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">

    <link rel="icon" href="assets/img/favicon/icone.ico" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/libs.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preload" href="assets/fonts/istok-web-v15-latin/istok-web-v15-latin-regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="assets/fonts/istok-web-v15-latin/istok-web-v15-latin-700.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="assets/fonts/montserrat-v15-latin/montserrat-v15-latin-700.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="assets/fonts/montserrat-v15-latin/montserrat-v15-latin-600.woff2" as="font" type="font/woff2" crossorigin>

    <link rel="preload" href="assets/fonts/material-icons/material-icons.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="assets/fonts/material-icons/material-icons-outlined.woff2" as="font" type="font/woff2" crossorigin>

</head>

<body>

    <main class="main">

        <!-- Begin header -->
        <header class="header">
            <?php
            require_once('nav_bar.php');
            ?>

        </header><!-- End header -->

        <!-- Begin bread crumbs -->
        <nav class="bread-crumbs">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="bread-crumbs-list">
                            <li>
                                <a href="index.php">Início</a>
                                <i class="material-icons md-18">chevron_right</i>
                            </li>
                            <li><a href="#!">O Escritório</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav><!-- End bread crumbs -->

        <!-- Begin advantages -->
        <section class="section section-bgc" style="margin: 100px 0;background-color: #e9e9e9;">
            <div class="container">
                <div class="row items">
                    <div class="col-12">
                        <div class="section-heading heading-center" style="margin-bottom: 1.25rem;">
                            <div class="section-subheading" style="color: #772b28">um pouco sobre</div>
                            <h2>O Escritório</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 item">
                        <div class="ini">
                            <div class="ini-info">
                                <p style="text-align: justify;" class="desc"><br><br><br><br>Prezamos por atender nossos clientes com
                                    celeridade, responsabilidade, ética e comprometimento,
                                    direcionando o caso concreto a uma de nossas áreas de especialidade, priorizando
                                    sempre o diálogo
                                    entre as partes para solucionar os conflitos. Nossa equipe está totalmente preparada
                                    para encontrar
                                    soluções jurídicas inovadoras e eficazes, no intuito de obter o resultado útil da
                                    ação e resguardando
                                    os interesses dos nossos clientes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 item">
                        <div class="ini">
                            <div class="ini-info" style="margin: auto;">
                                <img src="assets/img/officeFundoVinhoCinza.png" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- End advantages -->




        <!-- Begin footer -->
        <?php require_once('footer.php'); ?>
        <!-- End footer -->

    </main><!-- End main -->

    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/lozad/lozad.min.js"></script>
    <script src="assets/libs/device/device.js"></script>
    <script src="assets/libs/ScrollToFixed/jquery-scrolltofixed-min.js"></script>
    <script src="assets/libs/spincrement/jquery.spincrement.min.js"></script>
    <script src="assets/libs/jquery-validation-1.19.3/jquery.validate.min.js"></script>
    <script src="assets/js/custom.js"></script>

</body>

</html>