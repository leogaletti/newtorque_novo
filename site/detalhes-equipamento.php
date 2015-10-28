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
        <link rel="stylesheet" href="css/gallery.css">

        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="js/gallery.js"></script>
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
            <!-- 
                Topo da página
            -->
            <div class="container">
                <h2 class="text-danger">Equipamentos</h2>    

                <?
                    $id_query_linha = mysql_query("Select * from linhas where cd_linha = '{$_GET['cd']}' and bl_publicar ='1'");
                    $arr_linha = mysql_fetch_assoc($id_query_linha);
                    $id_query = mysql_query("Select * from equipamentos where cd_linha = '{$_GET['cd']}' and cd_equipamento = '{$_GET['cd_equip']}' and bl_publicare ='1'");
                    $arr = mysql_fetch_assoc($id_query);
                ?>
                <br>
                <h4><? echo($arr_linha['tit_linha']) ?> - <? echo($arr['ds_equipamento']) ?></h4>

                <div class="carousel slide article-slide" id="article-photo-carousel">

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner cont-slider">

                    <div class="item active">
                      <img alt="" title="" src="http://placehold.it/600x400">
                    </div>
                    <div class="item">
                      <img alt="" title="" src="http://placehold.it/600x400">
                    </div>
                    <div class="item">
                      <img alt="" title="" src="http://placehold.it/600x400">
                    </div>
                    <div class="item">
                      <img alt="" title="" src="http://placehold.it/600x400">
                    </div>
                  </div>
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li class="active" data-slide-to="0" data-target="#article-photo-carousel">
                      <img alt="" src="http://placehold.it/250x180">
                    </li>
                    <li class="" data-slide-to="1" data-target="#article-photo-carousel">
                      <img alt="" src="http://placehold.it/250x180">
                    </li>
                    <li class="" data-slide-to="2" data-target="#article-photo-carousel">
                      <img alt="" src="http://placehold.it/250x180">
                    </li>
                    <li class="" data-slide-to="3" data-target="#article-photo-carousel">
                      <img alt="" src="http://placehold.it/250x180">
                    </li>
                  </ol>
                </div>


                <br>
                <h6>Descrição Técnica</h6>
                <p>
                    <? echo($arr['ds_descricao']) ?>
                </p>
            </div>
            
    <div class="newt-layout-cell layout-item-2" style="width: 50%;">
        <table class="newt-article" border="0" cellspacing="0" cellpadding="0" style="width: 100%;">
            <tbody>
                <tr>
                    <td class="" style="text-align: center; padding-top: 8px; padding-right: 8px; padding-bottom: 8px; padding-left: 8px;">Fotos</td>
                </tr>
        
                <tr>
                    <td class="" style="text-align: center; padding-top: 8px; padding-right: 8px; padding-bottom: 8px; padding-left: 8px;">
<?
				$id_query = mysql_query("Select * from fotos_equipamentos where cd_equipamento = '{$_GET['cd_equip']}' and bl_publicarfe ='1' ORDER BY cd_ordemfe");
					$conta_fotos = 1;
					while($arr = mysql_fetch_assoc($id_query)){
						if($conta_fotos > 2){
							$conta_fotos = 1;
				            echo("<br>");
						}
?>
						  <a href="fotos_equipamentos/foto_<? echo($arr['cd_foto_equipamento']) ?>.JPG" rel="lightbox[roadtrip]" title="<? echo($arr['ds_legenda']) ?>"><img src="fotos_equipamentos/mini_foto_<? echo($arr['cd_foto_equipamento']) ?>.JPG" title="<? echo($arr['ds_legenda']) ?>" border="1" class="thumb"></a>
<?
						$conta_fotos += 1;
					}
?>
</td>
                </tr>
            </tbody>
        </table>
	</div>
    <button class="btn btn-primary"> 
            <span class="glyphicon glyphicon-arrow-left" aria-hidden="true">
                <a style="text-decoration:none; color: #fff;" href="javascript:history.go(-1)"> Voltar para página anterior</a>
            </span>
        </button>
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
    </body>
</html>
