<?
	include "conectar.php";
	session_start(); 
	include_once $_SERVER['DOCUMENT_ROOT'] . '/securimage/securimage.php';
	$securimage = new Securimage();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="pt-BR" xml:lang="pt-BR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title> New Torque - Excel�ncia em Torque </title>
<meta name="author" content="www.msideias.com.br">
<meta name="classification" content="industries">
<META NAME="Keywords" Content="new torque servicos prestacao equipamentos torquimetro valvulas medidores venda">
<META NAME="Description"  Content="New Torque - Excel�ncia em Torque">
<META NAME="organization name"  Content="New Torque">
<meta name="audience" content="ALL">
<meta name="expires" content="NEVER">
<meta name="page-type" content="Commercial">
<meta name="robots" content="INDEX,FOLLOW">
<meta name="Language" content="Portuguese">
<meta name="language" content="pt-br">
<meta name="Revisit" content="2">
<meta name="revisit-after" content="2 days">
<meta name="distribution" content="Global">
<meta name="rating" content="industria">
<meta name="resource-type" content="document">
<meta name="doc-class" content="Completed">
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="script.js"></script>

<style type="text/css">
.newt-post .layout-item-0 { margin-bottom: 10px; }
.newt-post .layout-item-1 { border-spacing: 10px 0px; border-collapse: separate; }
.newt-post .layout-item-2 { border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-top-width:1px;border-right-width:1px;border-bottom-width:1px;border-left-width:1px;border-top-color:#3F97A6;border-right-color:#3F97A6;border-bottom-color:#3F97A6;border-left-color:#3F97A6; padding-right: 5px;padding-left: 5px; }
.ie7 .newt-post .newt-layout-cell {border:none !important; padding:0 !important; }
.ie6 .newt-post .newt-layout-cell {border:none !important; padding:0 !important; }
</style>

</head>
<body>
<div id="newt-main">
    <div class="cleared reset-box"></div>
    <div class="newt-header">
        <div class="newt-header-position">
            <div class="newt-header-wrapper">
                <div class="cleared reset-box"></div>
                <div class="newt-header-inner">
                <div class="newt-headerobject"></div>
                <script type="text/javascript" src="swfobject.js"></script>
                <script type="text/javascript">
                jQuery((function (swf) {
                    return function () {
                        swf.switchOffAutoHideShow();
                        swf.registerObject("newt-flash-object", "9.0.0", "expressInstall.swf");
                    }
                })(swfobject));
                </script>
                <div id="newt-flash-area">
                <div id="newt-flash-container">
                <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1881" height="470" id="newt-flash-object">
                    <param name="movie" value="images/flash.swf" />
                    <param name="quality" value="high" />
                	<param name="scale" value="default" />
                	<param name="wmode" value="transparent" />
                	<param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.45&amp;framerate1=12&amp;loop=true&amp;wmode=transparent" />
                    <param name="swfliveconnect" value="true" />
                    <!--[if !IE]>-->
                    <object type="application/x-shockwave-flash" data="images/flash.swf" width="1881" height="470">
                        <param name="quality" value="high" />
                	    <param name="scale" value="default" />
                	    <param name="wmode" value="transparent" />
                	    <param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.45&amp;framerate1=12&amp;loop=true&amp;wmode=transparent" />
                        <param name="swfliveconnect" value="true" />
                    <!--<![endif]-->
                      	<div class="newt-flash-alt"><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></div>
                    <!--[if !IE]>-->
                    </object>
                    <!--<![endif]-->
                </object>
                </div>
                </div>
                <div class="newt-logo">
                                                </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="cleared reset-box"></div>
<div class="newt-bar newt-nav">
<div class="newt-nav-outer">
<div class="newt-nav-wrapper">
<div class="newt-nav-inner">
	<div class="newt-nav-center">
	<ul class="newt-hmenu">
		<li>
			<a href="./index.php">Principal</a>
		</li>	
		<li>
			<a href="./a-empresa.php">A Empresa</a>
		</li>	
		<li>
			<a href="./servicos.php">Servi&ccedil;os</a>
		</li>	
		<li>
			<a href="./linha-equipamentos.php">Linha Equipamentos</a>
		</li>	
		<li>
			<a href="./clientes.php">Clientes</a>
		</li>	
		<li>
			<a href="./videos.php">V&iacute;deos</a>
		</li>	
		<li>
			<a href="./localizacao.php">Localiza&ccedil;&atilde;o</a>
		</li>	
		<li>
			<a href="./fale-conosco.php">Fale Conosco</a>
		</li>	
	</ul>
	</div>
</div>
</div>
</div>
</div>
<div class="cleared reset-box"></div>
<div class="newt-box newt-sheet">
        <div class="newt-box-body newt-sheet-body">
            <div class="newt-layout-wrapper">
                <div class="newt-content-layout">
                    <div class="newt-content-layout-row">
                        <div class="newt-layout-cell newt-content">
<div class="newt-box newt-post">
    <div class="newt-box-body newt-post-body">
<div class="newt-post-inner newt-article">
                                <div class="newt-postcontent">
<div class="newt-content-layout-wrapper layout-item-0">
<div class="newt-content-layout layout-item-1">
    <div class="newt-content-layout-row">
    <div class="newt-layout-cell layout-item-2" style="width: 75%; background-attachment: scroll; background-image: url(imagens/fundo_conteudo.gif); background-repeat: no-repeat;  background-position: top; height:600px; ">
        <p><span style="color: rgb(201, 29, 32); font-size: 24px; font-weight: bold; line-height: 24px; -webkit-border-horizontal-spacing: 2px; -webkit-border-vertical-spacing: 2px;">Trabalhe Conosco</span></p>
<p align="center" style="vertical-align:middle">                
<? 
$captcha_code = $_POST[captcha_code];
if ($securimage->check($captcha_code) == false) {
  // the code was incorrect
  // you should handle the error so that the form processor doesn't continue
  // or you can use the following code if there is no validation or you do not know how
  echo "O C�digo est� incorreto, digite novamente.<br /><br />";
  echo "<a href='javascript:history.go(-1)'>Volte</a> e tente de novo.";
  exit;
}

$dataatual = date("Y-m-d");
$horaatual = date("G:i:s");
$novadata = substr($dataatual,8,2) ."/". substr($dataatual,5,2) ."/". substr($dataatual,0,4); 
$ip = $_SERVER["REMOTE_ADDR"];

$nome = $_POST[nome];
$cpf = $_POST[cpf];
$endereco = $_POST[endereco];
$bairro = $_POST[bairro];
$cidade = $_POST[cidade];
$estado = $_POST[estado];
$ddd = $_POST[ddd];
$telefone = $_POST[telefone];
$email = $_POST[email];
$mensagem = $_POST[mensagem];
$boundary = "XYZ-" . date("dmYis") . "-ZYX";
$arquivo = isset($_FILES['arq']) ? $_FILES['arq'] : FALSE;


/* message */
$message = "
<html>
<body bgcolor=\"#CCCCCC\" text=\"black\">
<p align=\"center\"><font size=\"3\" face=\"Verdana,Arial\">Contato Trabalhe Conosco do Site</font></p>
<p align=\"center\"><font size=\"2\" face=\"Verdana,Arial\"><b>www.NEWTORQUE.com.br</b></font></p>
<p align=\"center\"><font size=\"2\" face=\"Verdana,Arial\"><b>NEW TORQUE</b></font></p>
<font size=\"2\" face=\"Verdana,Arial\">
<br><br>
<br><br><b>Nome: </b>"." $nome
<br><br><b>CPF: </b>"." $cpf
<br><br><b>Endere&ccedil;o: </b>"." $endereco 
<br><br><b>Bairro: </b>"." $bairro 
<br><br><b>Cidade: </b>"." $cidade / $estado 
<br><br><b>Telefone: </b>"." ($ddd) $telefone 
<br><br><b>Email: </b>"." $email 
<br><br><b>Caracter�sticas: </b>"." $mensagem 
<br><br>
<br><b>Data e Hor&aacute;rio da Consulta: </b>"." $novadata &agrave;s $horaatual
<br><b>IP do visitante:</b>"." $ip
<br><a href=\"mailto:$email\"><b>Clique aqui para responder para o visitante: </b></a>
<br><br>
<font size=\"1\" face=\"Verdana,Arial\">
______________________________________________________________________________________<br>
BUSKAQUI - Uma busca, v�rios neg�cios !<br>
Busque ou anuncie: <a href=\"http://www.buskaqui.com.br\">www.buskaqui.com.br</a><br>

</body>
</html>
";

$to  = "NEW TORQUE <contato@newtorque.com.br>";
$subject = "Contato de Visitantes do Site - NEW TORQUE";
$headers = "MIME-Version: 1.0\n";
$headers .= "X-Priority: 3\n";
$headers .= "From: Formul�rio do site <form@newtorque.com.br>\n";
$headers .= "X-Sender: <form@newtorque.com.br>\n";
$headers .= "X-Mailer: PHP v".phpversion()."\n";
$headers .= "X-IP: ".$_SERVER['REMOTE_ADDR']."\n";
$headers .= "Return-Path: ".$email."\n";
$headers .= "Bcc: <portalnec@gmail.com>\n";

if(is_uploaded_file($_FILES['arq']['tmp_name'])){
    $headers.= "Content-type: multipart/mixed; boundary=\"$boundary\"\r\n";
    $headers.= "$boundary\n"; 
    $fp = fopen($_FILES['arq']['tmp_name'],"rb");
    $anexo = fread($fp,filesize($_FILES['arq']['tmp_name']));
    $anexo = base64_encode($anexo);
    fclose($fp);
    $anexo = chunk_split($anexo);
    $mens = "--$boundary\n"; 
    $mens.= "Content-Transfer-Encoding: 8bits\n"; 
    $mens.= "Content-Type: text/html; charset=\"ISO-8859-1\"\n\n";
    $mens.= "$message\n"; 
    $mens.= "--$boundary\n"; 
    $mens.= "Content-Type: ".$arquivo['type']."\n";  
    $mens.= "Content-Disposition: attachment; filename=\"".$arquivo['name']."\"\n";  
    $mens.= "Content-Transfer-Encoding: base64\n\n";  
    $mens.= "$anexo\n";  
    $mens.= "--$boundary--\r\n"; 
}else{
    $headers .= "Content-Type: text/html; charset=\"ISO-8859-1\"\n\n";
    $mens = "$message\n";
 }       
$formsent = mail($to, $subject, $mens, $headers);
if($formsent ==1){
	print("<b>$nome</b>, Seus dados foi enviados com sucesso!");
}else{
	print("<b>$nome</b>, Houve um problema, tente enviar a mensagem novamente!");
}

?>
</p>
    </div>
    <div class="newt-layout-cell layout-item-2" style="width: 200px;">
        <p style="text-align: center;"><img width="180" height="578" alt="" style="border:none" src="./images/banner_direita_interno.jpg" /><br /></p>
    </div>
    </div>
</div>
</div>

                </div>
                <div class="cleared"></div>
                </div>

		<div class="cleared"></div>
    </div>
</div>

                          <div class="cleared"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cleared"></div>
            
    		<div class="cleared"></div>
        </div>
    </div>
    <div class="newt-footer">
        <div class="newt-footer-body">
            <div class="newt-footer-center">
                <div class="newt-footer-wrapper">
                    <div class="newt-footer-text">
                        <a href="#" class="newt-rss-tag-icon" title="RSS"></a>
                        <table class="newt-article" border="0" cellspacing="0" cellpadding="0" style="margin-right: auto; margin-left: auto; width: 100%;">
    <tbody>
        <tr>
            <td style="text-align: center; width: 90%;" class="">
                <h3>Rua Cento e Trinta e Um n� 276<br />
                Bairro Santa Maria -&nbsp;Tim&oacute;teo &nbsp;Cep: 35180-142<br />
                Email: contato@newtorque.com.br<br /></h3>
            </td>

            <td style="text-align: center; width: 10%;" class=""><a href="http://www.msideias.com.br" target="_blank" title="Solu��es para suas ideias!"><img width="33" height="25" alt="" src="./images/logo_para_sites.png" style="margin-right: 1px; margin-left: 1px; cursor: text;" /></a><a href="adm" target="_blank" title="Acesso ao gerenciador de conte�do do site"><img width="32" height="32" alt="" src="./images/gerenciador.png" style="margin-right: 1px; margin-left: 1px;" /></a></td>
        </tr>
    </tbody>
</table>
                        <div class="cleared"></div>
                        <p class="newt-page-footer"></p>
                    </div>
                </div>
            </div>
            <div class="cleared"></div>
        </div>
    </div>
    <div class="cleared"></div>
</div>

</body>
</html>
