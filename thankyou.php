<?php
    $tratamento = $_POST["taskoption"];
    $nome = $_POST["nome"];
    $endereco = $_POST["c_subject"];
    $sexo = "";
    
    if($tratamento == "Masculino")
    {
        $sexo = "Sr.";
    }
    else if($tratamento == "Feminino")
    {
        $sexo = "Sr. ª";
    }
    else
    {
        $sexo = "";
    }
?>

<!DOCTYPE html>
<html lang="en">
<html lang="en">
<head>
    <title>Bakery &mdash; Sua casa de pães!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="site-wrap">
    <header class="site-navbar" role="banner">
        <div class="site-navbar-top">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
                    </div>

                    <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
                        <div class="site-logo">
                            <a href="index.html" class="js-logo-clone"><img src="images/donut.svg" width="100px" height="100px"/></a>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 order-3 order-md-3 text-right">
                        <div class="site-top-icons">
                            <ul>
                                <li>
                                    <a href="cart.html" class="site-cart">
                                        <span class="icon icon-shopping_cart"></span>
                                        <span class="count">0</span>
                                    </a>
                                </li>
                                <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <nav class="site-navigation text-right text-md-center" role="navigation">
            <div class="container">
                <ul class="site-menu js-clone-nav d-none d-md-block">
                    <li class="has-children active">
                        <a href="index.html">Pagina Inicial</a>
                    </li>
                    <li class="has-children">
                        <a href="about.html">Sobre Nós</a>
                    </li>
                    <li><a href="#">Catalogo</a></li>
                    <li><a href="contact.php">Encomendas</a></li>
                </ul>
            </div>
        </nav>
    </header>


    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <span class="icon-check_circle display-3 text-success"></span>
                    <h2 class="display-3 text-black">Obrigado <?php echo $sexo?> <?php echo " " .$nome ." "?>por comprar conosco!</h2>
                    <p class="lead mb-5">Seu pedido foi feito com sucesso !<br>
                    Ele será entregue no endereço <?php echo $endereco. " "?> em breve.</p>
                    <p><a href="index.html" class="btn btn-sm btn-primary">Voltar para pagina inicial.</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>

<script src="js/main.js"></script>

</body>
</html>

