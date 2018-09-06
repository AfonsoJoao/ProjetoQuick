<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <meta charset="UTF-8">
        <title> Quick</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- font-awesome icons -->
        <link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
        <!-- //font-awesome icons -->
        <!-- js -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <!-- //js -->
        <link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                });
            });
        </script>

    </head>
    <body>

        <div class="agileits_header">
            <div class="w3l_offers">
                <a href="products.html">Ofertas do dia!</a>
            </div>
            <div class="w3l_search">
                <form action="#" method="post">
                    <input type="text" name="Product" value="Buscar produtos..." onfocus="this.value = '';" onblur="if (this.value == '') {
                                this.value = 'Search a product...';
                            }" required="">
                    <input type="submit" value="">
                </form>
            </div>
            <div class="product_list_header">  
                <form action="#" method="post" class="last">
                    <fieldset>
                        <input type="hidden" name="cmd" value="_cart" />
                        <input type="hidden" name="display" value="1" />
                        <input type="submit" name="submit" value="Seu carrinho  " class="button" />
                    </fieldset>
                </form>
            </div>
            <div class="w3l_header_right">
                <ul>
                    <li class="dropdown profile_details_drop">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
                        <div class="mega-dropdown-menu">
                            <div class="w3ls_vegetables">
                                <ul class="dropdown-menu drp-mnu">
                                    <li><a href="login.php">Entrar</a></li> 
                                    <li><a href="cadastroclientes.php">Cadastrar</a></li>
                                    <li><a href="short-codes.html">Atalho</a></li>
                                </ul>
                            </div>                  
                        </div>	
                    </li>
                </ul>
            </div>
            <div class="w3l_header_right1">
                <h2><a href="mail.html">Contatos</a></h2>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!-- script-for sticky-nav -->
        <script>
            $(document).ready(function () {
                var navoffeset = $(".agileits_header").offset().top;
                $(window).scroll(function () {
                    var scrollpos = $(window).scrollTop();
                    if (scrollpos >= navoffeset) {
                        $(".agileits_header").addClass("fixed");
                    } else {
                        $(".agileits_header").removeClass("fixed");
                    }
                });
            });
        </script>
        <!-- //script-for sticky-nav -->
        <div class="logo_products">
            <div class="container">
                <div class="w3ls_logo_products_left">
                    <h1><a href="index.html"><img src="images/Logo-Quick2.jpg" width="130" height="100"></a></h1>
                </div>
                <div class="w3ls_logo_products_left1">
                    <ul class="special_items">
                        <li><i class="fa fa-phone" aria-hidden="true"></i>(XX) XXXX-XXXX</li>
                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i>TESTE@TESTE.COM</li>
                    </ul>
                </div>
                <div class="w3ls_logo_products_left1">
                    <ul class="phone_email">
                        <li> </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- //header -->
        <!-- products-breadcrumb -->
        <div class="products-breadcrumb">
            <div class="container">
                <ul>
                    <li><img src="Images/home.png" width="25" height="20"><a href="index.html">Inicio</a><span>|</span></li>
                    <li>Entrar ou cadastrar</li>
                </ul>
            </div>
        </div>
        <!-- //products-breadcrumb -->
        <!-- banner -->
        <div class="banner">
            <div class="w3l_banner_nav_left">
                <nav class="navbar nav_bottom">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header nav_2">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div> 
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav nav_1">
                            <li class="dropdown mega-dropdown active">
                                <a class="dropdown-toggle" data-toggle="dropdown">Alimentação<span class="caret"></span></a>
                                <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                                    <div class="w3ls_vegetables">
                                        <ul>	
                                            <li><a href="#">Arroz</a></li>
                                            <li><a href="#">Feijão</a></li>
                                            <li><a href="#">Sal</a></li>
                                            <li><a href="#">Açucar</a></li>
                                            <li><a href="#">Massas</a></li>
                                            <li><a href="#">Oléos</a></li>
                                            <li><a href="laticinios.html">Laticíneos</a></li>
                                            <li><a href="padaria.html">Pães</a></li>
                                        </ul>
                                    </div>                  
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown">Frios<span class="caret"></span></a>
                                <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                                    <div class="w3ls_vegetables">
                                        <ul>
                                            <li><a href="carnes.html">Carnes</a></li>
                                            <li><a href="#">Aves</a></li>
                                            <li><a href="#">Peixes</a></li>
                                        </ul>
                                    </div>                  
                                </div>	
                            </li>
                            <li class="dropdown mega-dropdown active">
                                <a class="dropdown-toggle" data-toggle="dropdown">Hortifruti<span class="caret"></span></a>				
                                <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                                    <div class="w3ls_vegetables">
                                        <ul>	
                                            <li><a href="vegetais.html">Vegetais</a></li>
                                            <li><a href="frutas.html">Frutas</a></li>
                                        </ul>
                                    </div>                  
                                </div>				
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown">Bebidas<span class="caret"></span></a>
                                <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                                    <div class="w3ls_vegetables">
                                        <ul>
                                            <li><a href="alcoolicas.html">Alcoólicas</a></li>
                                            <li><a href="naoalcoolicas.html">Não alcoólicas</a></li>
                                        </ul>
                                    </div>                  
                                </div>	
                            </li>
                            <li><a href="limpeza.html">Produtos de limpeza</a></li>
                            <li><a href="higiene.html">Higiene</a></li>
                            <li><a href="pet.html">Pet</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </div>
            <div class="w3l_banner_nav_right">

                <div class="w3_login">
                    <h3>Entre ou Cadastre-se</h3>
                    <div class="w3_login_module">
                        <div class="module form-module">
                            <div class="toggle"><i class="fa fa-times fa-pencil"></i>
                                <div class="tooltip">Login</div>
                            </div>

                            <div class="form">
                                <h2>Criar uma conta</h2>
                                <form action="salvarcliente.php" method="post">
                                    <input type="text" name="nome" placeholder="Nome completo" required=" ">
                                    <input class="form-control" type="date" name="dataNascimento" required=" "><br>
                                    <select class="form-control" id="sexo" name="sexo" required placeholder="sexo">
                                        <option value="">Sexo</option>
                                        <option value="masc">Masculino</option>
                                        <option value="femi">Feminino</option>
                                        <option value="femi">Outros</option>
                                    </select><br>

                                    <input type="email" name="email" placeholder="Email" required=" ">
                                    <input type="password" name="senhaCliente" placeholder="Senha" required=" ">
                                    <input type="text" name="cpf" placeholder="CPF" required="">


                                    <input type="text" name="rg" placeholder="RG" required=" ">
                                    <input type="text" name="telefone" placeholder="Telefone" required=" "><br><br>

                                    <input type="submit" value="Cadastrar">
                                </form>
                            </div>
                            <div class="form">
                                <h2>Faça login em sua conta</h2>
                                <form action="#" method="post">
                                    <input type="text" name="email" placeholder="Email" required=" ">
                                    <input type="password" name="senha" placeholder="Senha" required=" ">
                                    <input type="submit" value="Entrar">
                                </form>
                            </div>
                            <div class="cta"><a href="#">Esqueceu sua senha?</a></div>
                            
                        </div>
                    </div>


                    <script>
                        $('.toggle').click(function () {
                            // Switches the Icon
                            $(this).children('i').toggleClass('fa-pencil');
                            // Switches the forms  
                            $('.form').animate({
                                height: "toggle",
                                'padding-top': 'toggle',
                                'padding-bottom': 'toggle',
                                opacity: "toggle"
                            }, "slow");
                        });
                    </script>
                </div>
                <!-- //login -->
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- //banner -->
        <!-- newsletter-top-serv-btm -->
        <div class="newsletter-top-serv-btm">
            <div class="container">
                <div class="col-md-4 wthree_news_top_serv_btm_grid">
                    <div class="wthree_news_top_serv_btm_grid_icon">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </div>
                    <h3>Nam libero tempore</h3>
                    <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus 
                        saepe eveniet ut et voluptates repudiandae sint et.</p>
                </div>
                <div class="col-md-4 wthree_news_top_serv_btm_grid">
                    <div class="wthree_news_top_serv_btm_grid_icon">
                        <i class="fa fa-bar-chart" aria-hidden="true"></i>
                    </div>
                    <h3>officiis debitis aut rerum</h3>
                    <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus 
                        saepe eveniet ut et voluptates repudiandae sint et.</p>
                </div>
                <div class="col-md-4 wthree_news_top_serv_btm_grid">
                    <div class="wthree_news_top_serv_btm_grid_icon">
                        <i class="fa fa-truck" aria-hidden="true"></i>
                    </div>
                    <h3>eveniet ut et voluptates</h3>
                    <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus 
                        saepe eveniet ut et voluptates repudiandae sint et.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- //newsletter-top-serv-btm -->
        <!-- footer -->
        <div class="footer">
            <div class="container">

                <div class="col-md-3 w3_footer_grid">
                    <h3>Informações</h3>
                    <ul class="w3_footer_grid_list">
                        <li><a href="faqs.html">FAQ</a></li>
                        <li><a href="privacy.html">Políticas de provacidade</a></li>
                        <li><a href="privacy.html">Termos de uso</a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
                <div class="agile_footer_grids">
                    <div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
                        <div class="w3_footer_grid_bottom">
                            <h5>conecte-se conosco</h5>
                            <ul class="agileits_social_icons">
                                <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="wthree_footer_copy">
                    <p>© 2016 Grocery Store. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
                </div>
            </div>
        </div>
        <!-- //footer -->
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <script>
                        $(document).ready(function () {
                            $(".dropdown").hover(
                                    function () {
                                        $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                                        $(this).toggleClass('open');
                                    },
                                    function () {
                                        $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                                        $(this).toggleClass('open');
                                    }
                            );
                        });
        </script>
        <!-- here stars scrolling icon -->
        <script type="text/javascript">
            $(document).ready(function () {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear' 
                 };
                 */

                $().UItoTop({easingType: 'easeOutQuart'});
            });
        </script>
        <!-- //here ends scrolling icon -->
        <script src="js/minicart.js"></script>
        <script>
            paypal.minicart.render();
            paypal.minicart.cart.on('checkout', function (evt) {
                var items = this.items(),
                        len = items.length,
                        total = 0,
                        i;
                // Count the number of each item in the cart
                for (i = 0; i < len; i++) {
                    total += items[i].get('quantity');
                }

                if (total < 3) {
                    alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
                    evt.preventDefault();
                }
            });

        </script>

        <?php
        // put your code here
        ?>
    </body>
</html>
