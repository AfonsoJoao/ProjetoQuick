<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php
        include_once './conexao.php';
        $sql = "SELECT * FROM cliente";
        $query = mysqli_query($con, $sql);
        ?>

        <meta charset="UTF-8">
        <title></title>
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
        <?php
        // put your code here
        ?>
        <!-- header -->
        <div class="agileits_header">
            <div class="w3l_offers">
                <a href="products.html">Ofertas do dia!</a>
            </div>
            <div class="w3l_search">
                <form action="#" method="post">
                    <input type="text" name="Product" value="Buscar produtos..." onfocus="this.value = '';" onblur="if (this.value == '') {
                                this.value = 'Search a product...';
                            }" required="">
                    <input type="submit" value=" ">
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
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- //header -->

        <!-- products-breadcrumb -->
        <div class="products-breadcrumb">
            <div class="container">
                <ul>
                    <li><img src="Images/home.png" width="25" height="20"><a href="index.html">Inicio</a><span>|</span></li>
                    <li>Administrador<span>|</span></li>
                    <li>Cadastrar produtos</li>
                </ul>
            </div>
        </div>
        <!-- //products-breadcrumb -->
        <div class="container-fluid">  
            <div class="bs-docs-example">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Data Nascimento</th>
                            <th>Sexo</th>
                            <th>E-mail</th>
                            <th>Senha do Cliente</th>
                            <th>CPF</th>
                            <th>RG</th>
                            <th>Telefone</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php while ($cliente = $query->fetch_array()) { ?>
                            <tr>
                                <td><?php echo $cliente["idCliente"]; ?></td>
                                <td><?php echo $cliente["nome"]; ?></td>
                                <td><?php echo $cliente["dataNascimento"]; ?></td>
                                <td><?php echo $cliente["sexo"]; ?></td>
                                <td><?php echo $cliente["email"]; ?></td>
                                <td><?php echo $cliente["senhaCliente"]; ?></td>
                                <td><?php echo $cliente["cpf"]; ?></td>
                                <td><?php echo $cliente["rg"]; ?></td>
                                <td><?php echo $cliente["telefone"]; ?></td>
                                <td> <a href="formalterarcliente.php?idCliente=<?php echo $cliente ['idCliente']; ?>"> <img src="images/edit-Icon.png"></td>
                                <td><img src="images/close_1.png"></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
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
</body>
</html>
