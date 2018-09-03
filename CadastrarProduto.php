<html>
    <head>
        <title>Quick - Cadastrar produtos</title>
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
        <!-- start-smoth-scrolling -->
    </head>

    <body>
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
                                    <li><a href="login.html">Entrar</a></li> 
                                    <li><a href="login.html">Cadastrar</a></li>
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
        <div class="container">
            
            <div class="w3_login">
                <div class="w3_login_module"><h3 class="w3l_fruit">Cadastrar produtos</h3>
                    <div class="module form-module">
                        <div class="form">
                        </div>
                        <div class="form">
                            <form action="salvarProduto.php" method="post" enctype="multipart/form-data">
                                <input class="form-control" type="text" name="nomeProduto" placeholder="Nome do produto" required=" ">
                                <input class="form-control" type="number" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any" name="valorUnitario" placeholder="Valor unitario do produto" required=" ">
                                <br>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" name="descricaoProduto" placeholder="Descrição do produto"></textarea>
                                </div>
                                <input class="form-control" type="number" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any" name="peso" placeholder="Peso do produto em kg ou litro" required=" ">
                                <br>
                                <input class="form-control" type="text" name="marca" placeholder="Marca" required=" ">
                                <select class="form-control" id="categoria" name="categoria">
                                    <option value="#">< Selecione uma categoria ></option>
                                    <optgroup label="Alimentação">
                                        <option value="arroz">Arroz</option>
                                        <option value="feijao">Feijão</option>
                                        <option value="sal">Sal</option>
                                        <option value="acucar">Açucar</option>
                                        <option value="massas">Massas</option>
                                        <option value="oleo">Oléo</option>
                                        <option value="laticinios">Laticínios</option>
                                        <option value="paes">Pães</option>
                                    <optgroup label="Frios">
                                        <option value="carnes">Carnes</option>
                                        <option value="aves">Aves</option>
                                        <option value="peixes">Peixes</option>
                                    <optgroup label="Hortifruti">
                                        <option value="vegetais">Vegetais</option>
                                        <option value="frutas">Frutas</option>
                                    <optgroup label="Bebidas">
                                        <option value="alcoolicas">Alcoólicas</option>
                                        <option value="naoalcoolicas">Não alcoólicas</option>
                                    <optgroup label="Outras">
                                        <option value="limpeza">Produtos de limpeza</option>
                                        <option value="higiene">Higiene</option>
                                        <option value="pet">Pet</option>
                                </select>
                                <br>
                                <input class="form-control" type="file" required name="imagem">
                                <br>
                                <input type="submit" value="Cadastrar">
                            </form>
                        </div>
                    </div>
                </div>
            </div></div>
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

