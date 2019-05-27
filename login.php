<!DOCTYPE html>
<html>
<head>
<title>Faça seu login!</title>
<!--<script src="SpryValidationTextField.js" type="text/javascript"></script>*-->
<link href="LOGIN.css" type="text/css" rel="sylesheet"/>
<!--<link href="SpryValidationTextField.css" rel="stylesheet" type="text/css"/>-->
<link href="https://fonts.googleapis.com/css?family=Poiret+One|Unica+One&display=swap" type="text/css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet" type="text/css"/>
<style>
    html{
    background-color: rgb(255, 173, 195);
}
form{
    margin-top: 4.5cm;
}
label{
    font-weight: bold;
    font-size: 1cm;
    -webkit-text-stroke-color: black;
    -webkit-text-stroke-width: 0.8px;
    color: white;
}
/*
font-family: 'Poiret One', cursive;
font-family: 'Unica One', cursive;
*/
::selection{
    background-color: rgb(255, 71, 110);
}
input[type=reset], input[type=submit]{
    width: 150px;
    height: 25px;
    font-size: 16px;
    border-top: 1px solid;
    background-color: rgb(255, 204, 223);
    border-bottom: 1px solid;
    border-right: 1px solid;
    border-left: 1px solid;
    box-shadow: 5px 10px 8px #888888;
    padding: 3px;
    outline-color: black;
}
input[type=text], input[type=password]{
    border-top: none;
    border-left: none;
    border-bottom-color: black;;
    border-right:none;
    background-color: rgb(255, 173, 195);
    font-size: 0.4cm;
    -webkit-text-stroke-color: none;
    -webkit-text-stroke-width: 0px;
    font-family: 'Source Sans Pro', sans-serif;
    outline: none;
}
img{
    max-width:400px;
    max-height:400px;
    width: auto;
    height: auto;
}
#eu2{
    float: right;
    margin-top: -3.2cm;
}
#eu{
    float: left;
    margin-top: -3.2cm;
}
.erro{
   color: red;
   font-size: 16px;
}


body {
                  
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


<center><form name="cadastro" method="GET" action="index.php">
    <label for="ilogin" style="font-family: 'Poiret One', cursive;" >Login:</label>
        <input type="text" id="ilogin" name="Login" required/><p></p>
    <label for="isenha" style="font-family: 'Poiret One', cursive;">Senha:</label>
        <input type="password" id="isenha" name="senha" required/><p></p>
    <!--<span id="sprytextfield1">-->
    <label for="cpf" style="font-family: 'Poiret One', cursive;">CPF:
        <input type="text" name="cpf" id="cpf" required placeholder="xxx.xxx.xxx-xx" maxlength="14"/>
    </label><p>
    <!--</span>-->
  <!--<span class="textfieldInvalidFormatMsg"></span></span><p>-->
        <input type="reset" id="blimpar" value="limpar" name="limpar" class="btn btn-danger" style="font-family: 'Unica One', cursive;"/>
        <input type="submit" id="benviar" value="enviar" name="enviar" class="btn btn-success" style="font-family: 'Unica One', cursive;"/>
</form></center>
<img src="eu.png" id="eu">
<img src="eu2.png" id="eu2">
<!--<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "custom", {pattern:"000.000.000-00", validateOn:["blur"]});
</script>-->
<?php
     function validacao() {
        $cpf = $_GET["cpf"];
        // Extrai somente os números
        $cpf = preg_replace( "/[^0-9]/is", "", $cpf );
         
        // Verifica se foi informado todos os digitos corretamente
        if (strlen($cpf) != 11) {
            echo  "<center><label class='erro'>CPF inválido. O CPF precisar ter 11 caracteres</label></center>";
            return false;            
        }
        
        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        else if ($cpf == '00000000000' || 
		$cpf == '11111111111' || 
		$cpf == '22222222222' || 
		$cpf == '33333333333' || 
		$cpf == '44444444444' || 
		$cpf == '55555555555' || 
		$cpf == '66666666666' || 
		$cpf == '77777777777' || 
		$cpf == '88888888888' || 
		$cpf == '99999999999') {
        echo  "<center><label class='erro'>CPF inválido. O CPF não pode ter números repetidos.</label></center>";
        return false;
        }

        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                echo  "<center><label class='erro'>CPF inválido.</label></center>";
                return false;
               
            }
        }
        header ('Location: index33.php');
        return true;
 }
 if(isset($_GET['enviar']))
{
   validacao();
} 
 ?>