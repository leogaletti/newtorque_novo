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
    <div class="newt-layout-cell layout-item-2" style="width: 75%; background-attachment: scroll;	 background-image: url(imagens/fundo_conteudo.gif); background-repeat: no-repeat;  background-position: top; height:600px;" >
    <div>
<p>
	<span style="color: rgb(201, 29, 32); font-size: 24px; font-weight: bold; line-height: 24px; -webkit-border-horizontal-spacing: 2px; -webkit-border-vertical-spacing: 2px;">Servi&ccedil;os</span>
</p>
    </div>
    <div>
<p>
		<span style="color: rgb(201, 29, 32); font-size: 24px; font-weight: bold; line-height: 24px; -webkit-border-horizontal-spacing: 2px; -webkit-border-vertical-spacing: 2px;"></span>        
<?
		$id_query_serv = mysql_query("Select * from servicos where cd_servico = '{$_GET['cd']}' and bl_publicars ='1'");
		$arr_serv = mysql_fetch_assoc($id_query_serv);
?>
        <h4><? echo($arr_serv['tit_servico'])?></h4>
</p>
    	<div class="newt-layout-cell layout-item-2" style="width: 50%;">
        <table class="newt-article" border="0" cellspacing="0" cellpadding="0" style="width: 100%;">
            <tbody>
                <tr>
                    <td class="" style="padding-top: 8px; padding-right: 8px; padding-bottom: 8px; padding-left: 8px;">Descri&ccedil;&atilde;o completa</td>
                </tr>
        
                <tr>
                    <td class="" style="padding-top: 8px; padding-right: 8px; padding-bottom: 8px; padding-left: 8px;"><h3><? echo($arr_serv['ds_servico']) ?></h3></td>
                </tr>
            </tbody>
        </table>
    	</div>
		<div class="newt-layout-cell layout-item-2" style="width: 50%; min-height:200px;">
        <table border="0" align="center" cellpadding="0" cellspacing="0" class="newt-article" style="width: 100%;">
            <tbody>
                <tr>
                    <td class="" style="text-align: center; padding-top: 8px; padding-right: 8px; padding-bottom: 8px; padding-left: 8px;">Fotos</td>
                </tr>
        
                <tr>
                    <td class="" style="text-align: center; padding-top: 8px; padding-right: 8px; padding-bottom: 8px; padding-left: 8px;">
<?
				$id_query = mysql_query("Select * from fotos_servicos where cd_servico = '{$_GET['cd']}' and bl_publicarfs ='1' ORDER BY cd_ordemfs");
				if (mysql_num_rows($id_query)){ 
					$conta_fotos = 1;
					while($arr = mysql_fetch_assoc($id_query)){
						if($conta_fotos > 2){
							$conta_fotos = 1;
				            echo("<br>");
						}
?>
                        <a href="fotos_servicos/foto_<? echo($arr['cd_foto_servico']) ?>.JPG" rel="lightbox[roadtrip]" title="<? echo($arr['ds_legenda']) ?>"><img src="fotos_servicos/mini_foto_<? echo($arr['cd_foto_servico']) ?>.JPG" title="<? echo($arr['ds_legenda']) ?>" border="1" class="thumb"></a>
<?
						$conta_fotos += 1;
					}
				}
?>
</td>
                </tr>
            </tbody>
        </table>
   	 	</div>
<p><h3>
	<a href="javascript:history.go(-1)"><img src="imagens/botao_voltar.jpg" width="31" height="31"  style="border:none" /><? echo(" Voltar para a página anterior") ?></a>
</h3></p>
    	</div>
    	</div>
    	<div class="newt-layout-cell layout-item-2" style="width: 200px;">
        <p style="text-align: center;"><img width="180" height="578" alt="" style="border:none" src="./images/banner_direita_interno.jpg" /></p>
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
            <footer class="footer">
                <div class="container">
                    <h4 class="text-muted text-center">Rua Cento e Trinta e Um nº 276<br/>
                    Bairro Santa Maria - Timóteo Cep: 35180-142<br />
                    Email: contato@newtorque.com.br<br /></h4>
                </div>
            </footer>
</div>
        </main>
    </body>
</html>
