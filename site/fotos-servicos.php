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
            <div class="container">
                <div class="col-md-8 col-md-offset-2">
                    <?
                		$id_query_serv = mysql_query("Select * from servicos where cd_servico = '{$_GET['cd']}' and bl_publicars ='1'");
                		$arr_serv = mysql_fetch_assoc($id_query_serv);
                    ?>
                    <h3 class="text-center"><? echo($arr_serv['tit_servico'])?></h3>
        	
                        <h4>Descri&ccedil;&atilde;o completa</h4>
            
                        <p><? echo($arr_serv['ds_servico']) ?></p>
                                <div id="carousel-id" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                    <?
    				    $id_query = mysql_query("Select * from fotos_servicos where cd_servico = '{$_GET['cd']}' and bl_publicarfs ='1' ORDER BY cd_ordemfs");
    				    if (mysql_num_rows($id_query)){
                            for ($i = 0; $i < mysql_num_rows($id_query); $i++) {
                    ?> 
                                        <li data-target="#carousel-id" data-slide-to="<?= $i ?>" class=""></li>    
                    <?php
                            }
                            $numeroFoto = 1;
                    ?>
                                    </ol>
                                    <div class="carousel-inner">
                    <?php
                            while($arr = mysql_fetch_assoc($id_query)) : 
                    ?>
                                        <div class="item <?php if ($numeroFoto == 1) { echo 'active'; } ?>">
                                            <img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="fotos_servicos/foto_<? echo($arr['cd_foto_servico']) ?>.JPG">
                                            <div class="carousel-caption">
                                                <h1><?php echo($arr['ds_legenda']) ?></h1>
                                            </div>
                                        </div>      
                    <?php
                                $numeroFoto++;
                            endwhile;
                        }
                    ?>                                  
                                    </div>
                                <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                            </div>

                    

<br>
<br>
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
        </main>

        <script type="text/javascript">
            $('.carousel').carousel({
                interval: 5000
            });
        </script>
    </body>
</html>
