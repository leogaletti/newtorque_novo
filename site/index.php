<?
    //include "conectar.php";
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
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <meta charset="utf-8">
    </head>
    <body>  
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
                    <a class="navbar-brand" href="index.html">New Torque - Encel�ncia em torque</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="menu-collapsed">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="index.php">Principal</a>
                        </li>
                        <li>
                            <a href="aempresa.php">A Empresa</a>
                        </li>
                        <li>
                            <a href="servicos.php">Servi�os</a>
                        </li>
                        <li>
                            <a href="linha-equipamentos.php">Linha Equipamentos</a>
                        </li>
                        <li>
                            <a href="clientes.php">Clientes</a>
                        </li>
                        <li>
                            <a href="videos.php">V�deos</a>
                        </li>
                        <li>
                            <a href="localizacao.php">Localiza��o</a>
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
        <!-- Header Carousel -->
        <header id="bannerTopo" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#bannerTopo" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?
                    $id_query_cli = mysql_query("Select * from destaques where bl_publicar = '1' order by cd_ordem");
                    while($arr = mysql_fetch_assoc($id_query_cli)){
                ?>
                        <div class="item active">
                            <a href="<? echo($arr[ds_link]); ?>">
                                <div class="fill" style="<? echo 'background-image:url(fotos_destaque/foto_' . ($arr[cd_destaque]) . '.JPG);'; ?>"></div>
                                <div class="carousel-caption">
                                    <h2><? echo($arr[ds_legenda]); ?></h2>
                                </div>
                            </a>
                        </div>
                <?
                    }
                ?>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#bannerTopo" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#bannerTopo" data-slide="next">
                <span class="icon-next"></span>
            </a>
        </header>
        <!-- Page Content -->
        <div class="container">

            <!-- Marketing Icons Section -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Bem-vindo a New Torque - Excel�ncia em torque!
                    </h1>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><i class="fa fa-fw fa-check"></i> Bootstrap v3.2.0</h4>
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                            <a href="#" class="btn btn-default">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><i class="fa fa-fw fa-gift"></i> Free &amp; Open Source</h4>
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                            <a href="#" class="btn btn-default">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><i class="fa fa-fw fa-compass"></i> Easy to Use</h4>
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                            <a href="#" class="btn btn-default">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><i class="fa fa-fw fa-compass"></i> Easy to Use</h4>
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                            <a href="#" class="btn btn-default">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </body>
</html>