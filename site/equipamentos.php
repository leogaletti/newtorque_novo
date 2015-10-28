<?
    include "conectar.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="pt-BR" xml:lang="pt-BR">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <title> New Torque - Excelência em Torque </title>
        <meta name="author" content="www.msideias.com.br">
        <meta name="classification" content="industries">
        <META NAME="Keywords" Content="new torque servicos prestacao equipamentos torquimetro valvulas medidores venda">
        <META NAME="Description"  Content="New Torque - Excelência em Torque">
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
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <meta charset="utf-8">

          <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>  
        <main>
            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html">New Torque - Excelência em torque</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="menu-collapsed">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active">
                                <a href="index.php">Principal</a>
                            </li>
                            <li>
                                <a href="a-empresa.php">A Empresa</a>
                            </li>
                            <li>
                                <a href="servicos.php">Serviços</a>
                            </li>
                            <li>
                                <a href="linha-equipamentos.php">Linha Equipamentos</a>
                            </li>
                            <li>
                                <a href="clientes.php">Clientes</a>
                            </li>
                            <li>
                                <a href="videos.php">Vídeos</a>
                            </li>
                            <li>
                                <a href="localizacao.php">Localização</a>
                            </li>
                            <li>
                                <a href="fale-conosco.php">Fale Conosco</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>
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
    <div class="newt-layout-cell layout-item-2" style="width: 75%; background-attachment: scroll;	 background-image: url(imagens/fundo_conteudo.gif); background-repeat: no-repeat;  background-position: top; height:600px;">
        <p><span style="color: rgb(201, 29, 32); font-size: 24px; font-weight: bold; line-height: 24px; -webkit-border-horizontal-spacing: 2px; -webkit-border-vertical-spacing: 2px;">Equipamentos</span></p>
        
<div class="top_menu">
<p>
<ul>
<?
	$id_query_linha = mysql_query("Select * from linhas where cd_linha = '{$_GET['cd']}' and bl_publicar ='1' order by cd_ordem");
	$arr_linha = mysql_fetch_assoc($id_query_linha);
?>
<h4><a href="" onmouseover="javascript:subMenu(true);" onmouseout="javascript:subMenu(false);"><? echo($arr_linha['tit_linha']) ?></a></h4>
<div style="display:none" id="sub_menu" onmouseover="javascript:subMenu(true);" onmouseout="javascript:subMenu(false);">
<?
				$id_query = mysql_query("Select * from equipamentos where cd_linha = '{$_GET['cd']}' and bl_publicare ='1' ORDER BY cd_equipamento ASC");
				if (mysql_num_rows($id_query)){ 
					while($arr = mysql_fetch_assoc($id_query)){
?>
                        <li>
                        <a href="detalhes-equipamento.php?cd=<? echo($arr['cd_linha']) ?>&cd_equip=<? echo($arr['cd_equipamento']) ?>"><? echo($arr['ds_equipamento]) ?></a>
					    </li>
						<br />
<?
					}
}
?>
</div>
</ul>
</p>
</div>

<div class="top_menu">
<a href="index.html">Home</a>&nbsp;&nbsp; |&nbsp;&nbsp; 
<a href="link.html" onmouseover="javascript:subMenu(true);" onmouseout="javascript:subMenu(false);">SubmenuLink</a>&nbsp;&nbsp; |&nbsp;&nbsp; 
<a href="link.html">other Link 1</a>&nbsp;&nbsp; |&nbsp;&nbsp; 
<a href="link.html">other link 2</a>&nbsp;&nbsp; |&nbsp;&nbsp; 
</div>
<div style="display:none" id="sub_menu" onmouseover="javascript:subMenu(true);" onmouseout="javascript:subMenu(false);">
<a href="link.html">sub 1</a>&nbsp;&nbsp; |&nbsp;&nbsp; 
<a href="link.html">sub2</a>&nbsp;&nbsp; |&nbsp;&nbsp; 
</div>


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
                <h3>Rua Cento e Trinta e Um nº 276<br />
                Bairro Santa Maria -&nbsp;Tim&oacute;teo &nbsp;Cep: 35180-142<br />
                Email: contato@newtorque.com.br<br /></h3>
            </td>

            <td style="text-align: center; width: 10%;" class=""><a href="http://www.msideias.com.br" target="_blank" title="Soluções para suas ideias!"><img width="33" height="25" alt="" src="./images/logo_para_sites.png" style="margin-right: 1px; margin-left: 1px; cursor: text;" /></a><a href="adm" target="_blank" title="Acesso ao gerenciador de conteúdo do site"><img width="32" height="32" alt="" src="./images/gerenciador.png" style="margin-right: 1px; margin-left: 1px;" /></a></td>
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
