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
            <!-- 
                Topo da página
            -->
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
                        <h1>Equipamentos</h1>
                        <?
                            $id_query = mysql_query("SELECT * FROM paginas");
                            $arr1 = mysql_fetch_assoc($id_query);
                            echo($arr1['ds_pag_equipam']);
                        ?>

                        <ul class="list-unstyled">
                            
                        
                        <?
                            $id_query_linha = mysql_query("SELECT * FROM linhas where bl_publicar='1' ORDER BY cd_ordem");
                            $contador = 1;
                            while($arr_linha = mysql_fetch_assoc($id_query_linha)){
                        ?>
                            <li class="dropdown">
                                <a class="btn btn-default" role="button" data-toggle="collapse" href="#menu<?= $contador ?>" aria-expanded="false" aria-controls="collapseExample">
                                    <?= $arr_linha['tit_linha'] ?><span class="caret"></span>
                                </a>

                                <style type="text/css">
                                    .menu-collapse {
                                        margin-left: 20px;
                                    }

                                    .menu-collapse li a {
                                        text-decoration: none;
                                    }                        
                                </style>    

                                <ul id="menu<?= $contador ?>" class="list-unstyled collapse menu-collapse">
                                    <?
                                        $id_query = mysql_query("Select * from equipamentos where cd_linha = '{$arr_linha['cd_linha']}' and bl_publicare ='1' ORDER BY cd_ordeme");
                                        if (mysql_num_rows($id_query)){ 
                                            while($arr = mysql_fetch_assoc($id_query)){
                                    ?>       
                                    <li class="btn btn-default">
                                        <a href="detalhes-equipamento.php?cd=<?= $arr_linha['cd_linha'] ?>&cd_equip=<?= $arr['cd_equipamento'] ?>"><?= $arr['ds_equipamento'] ?></a>
                                    </li>
                                    <br>
                                    <?
                                            }
                                    ?>
                                </ul>
                            </li>
                            <br>



                            

                            <?
                                        }
                                        $contador++;
                                    }
                            ?>

                        </ul>
                    </div>
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
    </body>
</html>
