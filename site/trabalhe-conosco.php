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
<script type="text/javascript" src="fckeditor/fckeditor.js"></script>

<SCRIPT LANGUAGE="JavaScript" SRC="validadores.js"></SCRIPT>
<SCRIPT LANGUAGE="JavaScript">

function valida(theForm){
	if (isBlank(theForm.nome)) {
		alert("O campo Nome est� em branco!");
		document.contato.nome.focus(); 
	    return false;
	}else if (isBlank(theForm.endereco)) {
    	alert("O campo Endere�o  est� em Branco!");
		document.contato.endereco.focus(); 
    	return false;
  	}else if (isBlank(theForm.bairro)) {
	    alert("O campo Bairro est� em Branco!");
		document.contato.bairro.focus(); 
	    return false;
	}else if (isBlank(theForm.cidade)) {
	    alert("O campo Cidade est� em Branco!");
		document.contato.cidade.focus(); 
	    return false;
	}else if (isBlank(theForm.telefone)) {
	    alert("O campo Telefone est� em Branco!");
		document.contato.telefone.focus(); 
	    return false;
	}else if (isNumber(theForm.telefone)) {
	    alert("O campo Telefone deve conter apenas n�meros!");
		document.contato.telefone.focus(); 
	    return false;
	}else if (isBlank(theForm.cpf)) {
	    alert("O campo CPF est� em Branco!");
		document.contato.cpf.focus(); 
	    return false;
	}else if (isCPF(theForm.cpf)) {
	    alert("Digite um numero de CPF v�lido!");
		document.contato.cpf.focus(); 
	    return false;
	}else if (isBlank(theForm.email)) {
	    alert("O campo E-mail est� em Branco!");
		document.contato.email.focus(); 
	    return false;
	}else if (!isMail(theForm.email)) {
	    alert("O E-mail digitado e inv�lido!");
		document.contato.email.focus(); 
	    return false;
	}else
		return true;
}

</script>

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
<p>
<?
	$id_query = mysql_query("SELECT * FROM paginas");
	$arr1 = mysql_fetch_assoc($id_query);
	echo($arr1[ds_pag_trabconosco]);
?>
</p>
<p>
<table width="100%" border="0" align="center" cellpadding="4" cellspacing="6" >
                    <form action="resp_trabalhe.php" method="post" name="contato" enctype="multipart/form-data" ONSUBMIT="javascript:return valida(this)">
                      <tr height="20">
                        <td colspan="3"></td>
                      </tr>
                      <tr>
                        <td align="right"> Nome Completo:</td>
                        <td width="20">&nbsp;</td>
                        <td><input name="nome" type="text" size="39"></td>
                      </tr>
                      <tr>
                        <td align="right">CPF:</td>
                        <td>&nbsp;</td>
                        <td><input name="cpf" type="text" size="11" ></td>
                      </tr>
					  <tr>
        				<td align="right"> (DDD) Telefone:</td>
                        <td>&nbsp;</td>
        				<td><input name="ddd" type="text" size="3" />
          				<input name="telefone" type="text" size="12" />
         				</td>
				      </tr>
                      <tr>
                        <td align="right">Endere&ccedil;o:</td>
                        <td>&nbsp;</td>
                        <td><input name="endereco" type="text" size="39" ></td>
                      </tr>
                      <tr>
                        <td align="right">Bairro:</td>
                        <td>&nbsp;</td>
                        <td><input name="bairro" type="text" size="39" ></td>
                      </tr>
                      <tr>
                        <td align="right">Cidade:</td>
                        <td>&nbsp;</td>
                        <td>
                          <input name="cidade" type="text" size="24" >
          UF:
          <select name="estado" size="1" >
            <option value="AC">AC</option>
            <option value="AL">AL</option>
            <option value="AM">AM</option>
            <option value="AP">AP</option>
            <option value="BA">BA</option>
            <option value="CE">CE</option>
            <option value="DF">DF</option>
            <option value="ES">ES</option>
            <option value="GO">GO</option>
            <option value="MA">MA</option>
            <option value="MG" selected>MG</option>
            <option value="MS">MS</option>
            <option value="MT">MT</option>
            <option value="PA">PA</option>
            <option value="PB">PB</option>
            <option value="PE">PE</option>
            <option value="PI">PI</option>
            <option value="PR">PR</option>
            <option value="RJ">RJ</option>
            <option value="RN">RN</option>
            <option value="RO">RO</option>
            <option value="RR">RR</option>
            <option value="RS">RS</option>
            <option value="SC">SC</option>
            <option value="SE">SE</option>
            <option value="SP">SP</option>
            <option value="TO">TO</option>
          </select>
                        </td>
                      </tr>
                      <tr>
                        <td align="right">E-mail:</td>
                        <td>&nbsp;</td>
                        <td><input name="email" type="text" size="39" ></td>
                      </tr>
                      <tr>
                        <td align="right">Caracteristicas:</td>
                        <td>&nbsp;</td>
                        <td>
                          <textarea name="mensagem" cols="35" rows="7" ></textarea></td>
                      </tr>
                      <tr>
                        <td align="right">Enviar Curriculo:</td>
                        <td>&nbsp;</td>
                        <td><input type="file" name="arq" /></td>
                      </tr>
						<tr>
      					<td colspan="3" align="center">Envie mais informa��es para <a href="mailto:contato@newtorque.com.br">contato@newtorque.com.br</a></td>
					<tr>
      				<td align="right">Digite os caracteres ao lado</td>
                <td>&nbsp;</td>
      				<td><img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" /><br><input type="text" name="captcha_code" size="10" maxlength="6" /><a href="#" onClick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false">[outra imagem]</a></td>
      				</tr>
                      <tr>
                        <td colspan="3" align="right">&nbsp;</td>
                      </tr>
	  					</tr>
                      <tr align="center">
                        <td colspan="3"><input name="B1" type="submit" class="submit" value="Enviar">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input name="B2" type="reset" class="submit" value="Limpar"></td>
                      </tr>
                    </form>
                </table>
</p>
    </div><div class="newt-layout-cell layout-item-2" style="width: 200px;">
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
