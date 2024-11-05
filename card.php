<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<header>
        <img src="img/tangirina.png" alt="Icone Tangerina">

        <h1>EMPÓRIO DOM BOSCO</h1>

        <nav class="navbar">

            <!--Criamos nossas Listas quando tiver em formato Desktop-->
            <ul class="nav-links">

                <li class="item-menu-header">
                    <a href="index.html">HOME</a>
                </li>

                <li class="item-menu-header">
                    <a href="#featured-products">PRODUTOS</a>
                </li>

                <li class="item-menu-header">
                    <a href="#contatos">CONTATO</a>
                </li>

                <li class="item-menu-header">
                    <a href="#sobre-nos">SOBRE NÓS</a>
                </li>


            </ul>





            <!--Criamos nossa caixa (DIV) para guardar os elementos do hamburguer quando estiver aberto-->
            <div class="mobile-menu" id="mobileMenu">

                <!--Botão para ser utilizado para fechamento da  lista-->
                <button id="closeButton" class="close">
                    <i class="fas fa-times"></i>
                </button>

                <!--Essa lista é do Menu Hamburguer quando estiver aberto.-->
                <ul class="nav-links-mobile">

                    <li>
                        <a href="">TESTE</a>
                    </li>

                    <li>
                        <a href="">TESTE</a>
                    </li>

                    <li>
                        <a href="">TESTE</a>
                    </li>
                </ul>
    
                <div id="btn-mobile" class="cad-mobile">
                    <button>
                        <a href="form.html" target="_blank">

                        <!-- <img src="img/user.png" alt="">-->
                         <p>Cadastre-se</p>
                        </a>
                    </button>
                </div>
                <!--Fim da caixa do Menu Hamburguer (Quando estiver aberto)-->
            </div>
            


            <!--Botão de Hamburguer, ele está fora da Div justamente por ser um elemento singular-->
            <button class="hamburger" id="hamburguerButton">
                <i class="fas fa-bars"></i>
            </button>

            <!--fim do Menu de Navegação-->
        </nav>




        <div id="btn-header">
            <button>
                <a href="form.html" target="_blank">

                    <img src="imagem/user.png" alt="">

                    <p>Cadastre-se</p>
                </a>
            </button>
        </div>

    </header>
   
   <main class="text">
        <?php
           $nome = $_GET["nome"];
           $sobrenome = $_GET["sobrenome"];
           $telefone = $_GET["telefone"];

               
           echo "<p>É um prazer te conhecer, a Empório Padaria agradece $nome $sobrenome! Entraremos em contato com você!</p>";
        ?>

        <button class="text-js">
        <a href="javascript:history.go(-1)">Voltar para página anterior</a>
        </button>
        
   </main>
  
</body>
</html>