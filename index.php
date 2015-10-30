<!DOCTYPE html>

<html>

    <head>
        <meta name="viewport" content="width=devide-width">
        
        <title>Mirror Fashion</title>
        <meta charset="utf-8">
        
        <link rel="stylesheet" href="css/reset.css" >
        <link rel="stylesheet" href="css/index.css" >
        <link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
    </head>
    
    <body>
        
        <?php include "header.php" ; ?>
        
        <section class="container destaque">
            
            <section class="busca">    
                <h2>Busca</h2>
                <form action="http://www.google.com.br/search" id="form-busca">             
                    <input type="search" name="q" id="q"/>
                    <input type="image" src="img/busca.png"/>
                </form>
                
                <button id="play-button">Play</button>
                <button id="pause-button">Pause</button>
            </section>
            
            
            <section class="menu-departamentos">
                <h2>Departamentos</h2>
                
                <nav> 
                    <ul>
                        <li><a href="#">Blusas e Camisas</a></li>
                        <li><a href="#">Calças</a></li>
                        <li><a href="#">Saias</a></li>
                        <li><a href="#">Vestidos</a></li>
                        <li><a href="#">Sapatos</a></li>
                        <li><a href="#">Bolsas e Carteiras</a></li>
                        <li><a href="#">Acessórios</a></li>
                    </ul> 
                </nav>                
            </section>
            
            <img src="img/destaque-home.png" id="banner" alt="Promoção: Big City Night" />

        </section>
        
        <div class="container paineis">
            <section class="painel novidades">
                <h2>Novidades</h2>
                <ol>
                    <li>
                        <a href="html/produto.html">
                            <figure>
                                <img src="img/produtos/miniatura1.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    
                    <li>
                        <a href="html/produto.html">
                            <figure>
                                <img src="img/produtos/miniatura2.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    
                    <li>
                        <a href="html/produto.html">
                            <figure>
                                <img src="img/produtos/miniatura3.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    
                    <li>
                        <a href="html/produto.html">
                            <figure>
                                <img src="img/produtos/miniatura4.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    
                    <li>
                        <a href="html/produto.html">
                            <figure>
                                <img src="img/produtos/miniatura5.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    
                    <li>
                        <a href="html/produto.html">
                            <figure>
                                <img src="img/produtos/miniatura6.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    
                </ol>
            </section>
            
            <section class="painel mais-vendidos">
                <h2>mais vendidos</h2>
                <ol>
                    <li>
                        <a href="html/produto.html">
                            <figure>
                                <img src="img/produtos/miniatura7.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="html/produto.html">
                            <figure>
                                <img src="img/produtos/miniatura8.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="html/produto.html">
                            <figure>
                                <img src="img/produtos/miniatura9.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="html/produto.html">
                            <figure>
                                <img src="img/produtos/miniatura10.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="html/produto.html">
                            <figure>
                                <img src="img/produtos/miniatura11.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="html/produto.html">
                            <figure>
                                <img src="img/produtos/miniatura12.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                </ol>
            </section>
        </div>
        
        <?php include "footer.php";  ?>
        
    </body>
    
    <script src="js/index.js"></script>
</html>
