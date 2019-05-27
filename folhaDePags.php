<!doctype html>
    <html>
     <head>
       <style>
         body{
           font-family: fantasy;
           font-display: 12px;
           background-color: rgb(211, 235, 222);
         }
        table{
          border:double 7px #f8f8f8f3;
          -moz-border-radius: 5px;
          -webkit-border-radius: 5px;
           border-radius: 5px;
           width: 200px;
           height: 260px;
           box-shadow: 10px 10px 10px 5px black;
           
        }
          
        label{
          color :rgb(55, 62, 105);
        }

        form{
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translateY(-50%) translateX(-50%)
        }

        p{
          font-family: 'Courier New', Courier, monospace;
        }
        
        header{
          font-size: 1cm;
        }



          
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
   <script type="text/javascript">

var salario;
var desinss;
var salMenosInss;
var desirrf;
var valtrans;
var valorliq;
var valordesc;

   function calcular(){
    
    inss();
    irrf();
    vt();
    valorliq();
    valordesc();
}

function inss(){

    salario = document.getElementById("iSAL").value;

    if(salario <= 1693.72){
        desinss = salario*0.08;     
    }
    else if(salario >= 1693.73 && salario <=2822.90){
        desinss = salario*0.09;   
    }
    else if(salario >= 2822.91 && salario <= 5645.80){
        desinss = salario*0.11;   
    }
    else{
        desinss = 621.04; 
    }  
    
    document.getElementById('iINSS').value = "R$"+desinss.toFixed(2);
    
}
    function irrf(){
        salMenosInss = salario - desinss;

        
        if (salMenosInss< 1903.99){
            desirrf = 0
        }

        else if(salMenosInss >= 1903.99 && salMenosInss <= 2826,65){
            desirrf = salMenosInss*7.5/100+142.80;
        }
        else if(salMenosInss >= 2826,66 && salMenosInss <= 3751.05){
            desirrf = salMenosInss*15/100+354.80;
        }
        else if (salMenosInss >= 3751.06 && salMenosInss <= 4664,68){
            defiff = salMenosInss*22.5/100+636.13
        }
       else(salMenosInss > 4664.68)
       defiff = salMenosInss*27.5/100+869.36
    
        document.getElementById('iIRRF').value = "R$"+desirrf.toFixed(2);
}

function vt(){

    if(salario < 220.00){
 valtrans = 6/100*salario
    }
    else(salario > 220.00)
        valtrans = 220.00
    
    
    
document.getElementById('iVT').value = "R$"+valtrans.toFixed(2);
}


function valordesc(){
{
    valordesc = desinss+desirrf+valtrans
}
document.getElementById('iVS').value = "R$"+valordesc.toFixed(2);
}

function valorliq(){
{
valorliq = salario-desinss-desirrf-valtrans
}
document.getElementById('iVL').value = "R$"+valorliq.toFixed(2);
}
   </script>
   <!--<script type="text/css" src="../Descontos/descontos .css"></script>-->
   <META charset="UTF-8">
  </head>
   <body>


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
   
     <center>
       <br>
              <h1>Folha de Pagamento</h1>
       <form action="relatorio.php" method="GET">
     <table>
         <tr>
               <td><label>Funcionario</label> <input type="textarea" name="nFUNC" id="iFUNC" placeholder="Insira o seu nome"></td>
               <td><label>Nome do Cargo</label> <input type="textarea" name="nCargo" id="iNome" placeholder="Insira o seu cargo"></td>
         </tr>
         <tr>
                <td><label>Sálario</label> <input type="text" name="iSAL" id="iSAL" placeholder="Insira o seu salario"></td>
         </tr>
         <tr>
                 <td><label>INSS</label> <input type="text" name="nINSS" id="iINSS" placeholder="Não Insira nada aqui..."></td>
                 <td><label>IRRF</label> <input type="text" name="nIRRF" id="iIRRF" placeholder="Não Insira nada aqui..."></td>
         </tr>
         <tr>
           <td><label>Vale Transporte</label> <input type="text" name="nVT" id="iVT" placeholder="Não Insira nada aqui..."></td>
         </tr>
         <tr>
         <td><input TYPE="button" ID="nLIMPAR" VALUE= "Calcular a folha"  onclick="calcular()"></td>
         <td><input TYPE="submit" ID="nCALCULAR" VALUE= "Ir para o relatório"></td>
         </tr>
         <tr>
          <td><label>Valor Líquido</label> <input type="text" name="nVL" id="iVL" placeholder="Não Insira nada aqui..."></td>
          <td><label>Valor Descontado</label> <input type="textarea" name="nVS" id="iVS" placeholder="Não Insira nada aqui..."></td>
         </tr>
         
      </table>
      <br>
      <p>Por motivos de segurança, é necessário reiniciar a página antes de iniciar o próximo cálculo. </p>
      <p>OBS: É necessario realizar o cálculo antes de prosseguir para o relatório</p>
      </center>

    </form>
      </body>
  </body>
  </html>
<?php
?>