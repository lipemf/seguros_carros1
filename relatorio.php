<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relatório</title>
    <style>
             body{
           /*font-family: fantasy;*/
           font-display: 12px;
           background-color: rgb(211, 235, 222);
         }

         h1{
            font-family: fantasy;
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
    </style>
    <script type="text/javascript">
  </script>
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
        <!--<td><label>Valor Líquido</label> <input type="text" name="nVL" id="iVL" placeholder="Não Insira nada aqui..."></td>
        <td><label>Valor Descontado</label> <input type textarea name="nVS" id="iVS" placeholder="Não Insira nada aqui..."></td>
        <td><input type="button" onclick="queryString()"/></td>-->
</body>
</html>
<?php
$valorLiq = $_GET['nVL'];
$nome = $_GET['nFUNC'];
$nomeCargo = $_GET['nCargo'];
$salBruto = $_GET['iSAL'];
$inns = $_GET['nINSS'];
$irrf = $_GET['nIRRF'];
$vT = $_GET['nVT'];
$valorDesc = $_GET['nVS'];

echo "<center><h1>Bem Vindo ao Relatório da folha de pagamento.</h1></center> <br>";
echo "<center>O seu nome é: <b>$nome</b></center> <br>";
echo "<center>O seu cargo atual é: <b>$nomeCargo</b></center> <br>";
echo "<center>O seu salário bruto é de: <b>R$$salBruto</b></center> <br>";
echo "<center>O desconto do IRRF será de: <b>$inns</b></center> <br>";
echo "<center>O desconto do INNS será de: <b>$irrf</b></center> <br>";
echo "<center>O desconto do vale transporte será de: <b>$vT</b></center> <br>";
echo "<center>O valor descontado total será: <b>$valorDesc</b></center> <br>";
echo "<br><center><h2>O seu salário liquido então será: <b>$valorLiq</b></center> <br>";
?>