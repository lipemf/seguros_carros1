  <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <src href="_img"> </src>
    <title>Suellen Seguros</title>
    <!--CSS INTERNO-->
    <!--JS INTERNO-->
    <style>
      
    /*COR DE FUNDO*/
                body {
                  background-color: rgb(162, 226, 184);
                }
    /*CSS DO NAV*/
          
                /* Adiciona uma cor de fundo para o topo da barra de navegação */
                .topnav {
                  background-color: #5b9749;  
                  overflow: hidden;
                }
                
                /* Estiliza os links da barra de navegação */
                .topnav a {
                  float: left;
                  color: rgba(19, 143, 137, 0.733);
                  text-align: center;
                  padding: 14px 16px;
                  text-decoration: none;
                  font-size: 17px;
                }
                
                /* Muda as cores dos links */
                .topnav a:hover {
                  background-color: #43b34d;
                  color: black;
                }
                
                /* Adiciona uma cor de fundo para os links ativos */
                .topnav a.active {
                  background-color: rgba(19, 143, 137, 0.733);
                  color: rgb(85, 167, 69);
                }

                /* Container da Navbar  */
                .navbar {
                  overflow: hidden;
                  background-color: rgb(14, 133, 40);
                  font-family: Arial;
                }

                /* Links dentro da navbar */
                .navbar a {
                  float: left;
                  font-size: 16px;
                  color: white;
                  text-align: center;
                  padding: 14px 16px;
                  text-decoration: none;
                  font-family: Arial
                }

    /*CSS DROPDOWN*/

                /* Container do Dropdown  */
                .dropdown {
                  float: left;
                  overflow: hidden;
                }

                /* Botão Dropdown */
                .dropdown .dropbtn {
                  font-size: 16px; 
                  border: none;
                  outline: none;
                  color: white;
                  padding: 14px 16px;
                  background-color: inherit;
                  font-family: inherit;
                  margin: 0;
                }

                /* Adiciona uma cor de fundo para os links da navbar */
                .navbar a:hover, .dropdown:hover .dropbtn {
                  background-color: #39a85b;
                }

                /* Dropdown conteúdo (escondidos por padrão) */
                .dropdown-content {
                  display: none;
                  position: absolute;
                  background-color: #f9f9f9;
                  min-width: 160px;
                  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                  z-index: 1;
                }

                /* Links dentro do dropdown */
                .dropdown-content a {
                  float: none;
                  color: black;
                  padding: 12px 16px;
                  text-decoration: none;
                  display: block;
                  text-align: left;
                }

                /* Adiciona uma cor de plano de fundo aos links dropdown no hover */
                .dropdown-content a:hover {
                  background-color: rgb(67, 175, 57);
                }

                /* Mostrar o menu dropdown em foco */
                .dropdown:hover .dropdown-content {
                  display: block;
                }

    /*CSS FOOTER*/

                .footer {
                position: initial; 
                left: 0;
                bottom: 0;
                width: 100%;
                background-color: rgb(14, 133, 40)  ;
                color: white;
                text-align: center;             
                word-spacing: 50 px;
                font-family: Arial;
                float: left;
                font-size: 16px;
                padding: 14px 16px;
                font-family: Arial
                }

    /*CSS SLIDESHOW*/

                /* Slideshow container */
                .slideshow-container {
                  max-width: 1000px;
                  position: relative;
                  margin: auto;
                }

                /* Ocultar as imagens por padrão */
                .Slides {
                  display: none;
                }

                /* Botões de próximo e anterior */
                .prev, .next {
                  cursor: pointer;
                  position: absolute;
                  top: 50%;
                  width: auto;
                  margin-top: -22px;
                  padding: 16px;
                  color: white;
                  font-weight: bold;
                  font-size: 18px;
                  transition: 0.6s ease;
                  border-radius: 0 3px 3px 0;
                  user-select: none;
                }

                /* Posiciona o botão de "próximo" à direita */
                .next {
                  right: 0;
                  border-radius: 3px 0 0 3px;
                }

                /* Ao passar o mouse, adicione uma cor de fundo preta com um pouco de transparência */
                .prev:hover, .next:hover {
                  background-color: rgba(0,0,0,0.8);
                }

                /* Texto da legenda */
                .text {
                  color: #000000;
                  background-attachment: fixed;
                  background-color: white;
                  background-position: bottom;
                  background-repeat: no-repeat;
                  font-size: 20px;
                  padding: 8px 12px;
                  position: absolute;
                  bottom: 8px;
                  width: 100%;
                  text-align: center;
                  font-family: Arial
                }

                
                /* Ação dos marcadores */
                .dot {
                  cursor: pointer;
                  height: 15px;
                  width: 15px;
                  margin: 0 2px;
                  background-color: #bbb;
                  border-radius: 50%;
                  display: inline-block;
                  transition: background-color 0.6s ease;
                }

                .active, .dot:hover {
                  background-color: #000000;
                }

                /* Animação de desbotamento */
                .fade {
                  -webkit-animation-name: fade;
                  -webkit-animation-duration: 1.5s;
                  animation-name: fade;
                  animation-duration: 1.5s;
                }

                @-webkit-keyframes fade {
                  from {opacity: .4} 
                  to {opacity: 1}
                }

                @keyframes fade {
                  from {opacity: .4} 
                  to {opacity: 1}
                }
                
    </style>
    <script>

    /*JS SLIDESHOW*/
                var slideIndex = 1;
                showSlides(slideIndex);

                // Controles de "próximo" e "anterior".
                function plusSlides(n) {
                showSlides(slideIndex += n);
                }

                // Controles de imagem em miniatura
                function currentSlide(n) {
                showSlides(slideIndex = n);
                }

                function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("Slides");
                var dots = document.getElementsByClassName("dot");
                if (n > slides.length) {slideIndex = 1} 
                if (n < 1) {slideIndex = slides.length}
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none"; 
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block"; 
                dots[slideIndex-1].className += " active";
                }
    </script>
</head>
</head>
<body>

    <nav>
         
        <div class="navbar">
          <!--INSERIR LINK PARA PÁGINA INICIAL EM "#"-->
          <a href="index.php">Suellen Seguros</a>
          <!--INSERIR LINK PARA CADASTRO EM "#"-->
          <a href="login.php">Cadastro</a>
          <!--INSERIR LINK PARA FOLHA DE PAGAMENTO EM "#"-->
          <a href="folhaDePags.php">Folha de Pagamento</a>

          <div class="dropdown">
            <button class="dropbtn">Redes Sociais
              <i class="fa fa-caret-down"></i>
            </button>

            <div class="dropdown-content">
               
              <!--INSERIR LINK PARA PÁGINA DO FACEBOOK EM "#"-->
              <a href="#">Facebook</a>
              <!--INSERIR LINK PARA PÁGINA DO TWITTER EM "#"-->
              <a href="#">Twitter</a>
              <!--INSERIR LINK PARA PÁGINA DO INSTAGRAM EM "#"-->
              <a href="#">Instagram</a>

            </div>

          </div> 

        </div>

      </nav>

<br></br>
    <!-- Slideshow container -->
      <div class="slideshow-container">

          <!-- Define imagens de largura total com texto de número e legenda -->
          <div class="Slides fade">
            <img src="onix.jpg" style="width:100%">
            <div class="text"> Seguros para <b>todos</b> os bolsos! </div>
          </div>
          
          <div class="Slides fade">
            <img src="opala.jpeg" style="width:100%">
            <div class="text"> Confiablidade e <b>segurança!</b> </div>
          </div>
          
          <div class="Slides fade">
            <img src="família.jpg" style="width:100%">
            <div class="text"> Aqui na Suellen Seguros temos <b>planos econômicos</b>! </div>
          </div>
        

          <!-- Botões de próximo e anterior -->
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
          </div>
    

          <!-- Pontos de indexação -->
          <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
          </div>
          <br></br> 

          <div class="footer">
              <div class ="footer-item">

                <!--INSERIR LINK PARA PÁGINA DE SUPORTE EM "#"-->
                <a href="#">Suporte</a>
              </div>
              <a></a>
              <div class ="footer-item">
                <!--INSERIR LINK PARA PÁGINA "SOBRE" EM "#"-->
                <a href="#">Sobre</a>
              </div>
              <a></a>
              <div class ="footer-item">
                <!--INSERIR LINK PARA PÁGINA DE CONTRATAÇÃO EM "#"-->
                <a href="#">Contrate já seu seguro!</a>
                
              </div>
      </div>
</body>
</html>