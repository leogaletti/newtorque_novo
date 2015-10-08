


#
# CriaÃ§Ã£o da Tabela : clientes
#
CREATE TABLE `clientes` (
  `cd_cliente` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `cd_ordem` int(2) unsigned zerofill DEFAULT '99',
  `ds_link` mediumtext COLLATE latin1_general_ci,
  `ds_target` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `ds_legenda` longtext COLLATE latin1_general_ci,
  `bl_publicar` enum('0','1') COLLATE latin1_general_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`cd_cliente`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=DYNAMIC ;

#
# Dados a serem incluÃ­dos na tabela
#

INSERT INTO clientes VALUES ( '0024', '02', 'http://www.aperam.com.br', '_blank', '', '1');
INSERT INTO clientes VALUES ( '0040', '08', 'http://www.usiminasmecanica.com.br', '_blank', '', '1');
INSERT INTO clientes VALUES ( '0038', '12', '', '_self', '', '1');
INSERT INTO clientes VALUES ( '0036', '04', 'www.arcelormittal.com.br', '_self', '', '1');
INSERT INTO clientes VALUES ( '0037', '13', 'http://www.thermon.ind.br', '_blank', '', '1');
INSERT INTO clientes VALUES ( '0041', '06', 'http://www.cenibra.com.br', '_blank', '', '1');
INSERT INTO clientes VALUES ( '0042', '10', 'http://www.emalto.com.br', '_blank', '', '1');
INSERT INTO clientes VALUES ( '0043', '14', 'http://www.weg.net/br', '_blank', '', '1');
INSERT INTO clientes VALUES ( '0044', '09', 'http://www.utc.com.br', '_blank', '', '1');
INSERT INTO clientes VALUES ( '0045', '01', 'www.usiminas.com.br', '_self', '', '1');
INSERT INTO clientes VALUES ( '0046', '15', '', '_self', '', '0');
INSERT INTO clientes VALUES ( '0047', '16', '', '_self', '', '1');
INSERT INTO clientes VALUES ( '0048', '17', '', '_self', '', '1');
INSERT INTO clientes VALUES ( '0049', '18', '', '_self', '', '1');
INSERT INTO clientes VALUES ( '0050', '19', '', '_self', '', '0');
INSERT INTO clientes VALUES ( '0051', '20', '', '_self', '', '1');
INSERT INTO clientes VALUES ( '0052', '99', 'www.ge.com/br/', '_self', '', '1');
INSERT INTO clientes VALUES ( '0053', '99', 'www.vale.com', '_self', '', '1');



#
# CriaÃ§Ã£o da Tabela : destaques
#
CREATE TABLE `destaques` (
  `cd_destaque` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `cd_ordem` int(2) unsigned zerofill NOT NULL DEFAULT '99',
  `ds_legenda` mediumtext,
  `ds_link` mediumtext,
  `ds_target` varchar(20) DEFAULT '',
  `bl_publicar` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`cd_destaque`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC ;

#
# Dados a serem incluÃ­dos na tabela
#

INSERT INTO destaques VALUES ( '0004', '06', '', '', '_self', '1');
INSERT INTO destaques VALUES ( '0005', '03', '', '', '_self', '1');
INSERT INTO destaques VALUES ( '0007', '05', '', '', '_self', '1');
INSERT INTO destaques VALUES ( '0008', '02', '', '', '_self', '1');
INSERT INTO destaques VALUES ( '0009', '01', '', '', '_self', '1');
INSERT INTO destaques VALUES ( '0011', '07', '', '', '_self', '1');
INSERT INTO destaques VALUES ( '0012', '04', '', '', '_self', '1');
INSERT INTO destaques VALUES ( '0015', '00', '', 'http://www.newtorque.com.br/site/fale-conosco.php', '_self', '0');



#
# CriaÃ§Ã£o da Tabela : equipamentos
#
CREATE TABLE `equipamentos` (
  `cd_equipamento` int(2) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `cd_linha` int(2) unsigned zerofill NOT NULL DEFAULT '99',
  `cd_ordeme` int(3) unsigned zerofill NOT NULL DEFAULT '099',
  `ds_codequipamento` varchar(10) DEFAULT NULL,
  `ds_equipamento` varchar(120) DEFAULT '',
  `ds_descricao` longtext,
  `bl_publicare` enum('0','1') NOT NULL DEFAULT '1',
  `bl_tem_foto` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`cd_equipamento`)
) ENGINE=MyISAM AUTO_INCREMENT=1213 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC ;

#
# Dados a serem incluÃ­dos na tabela
#

INSERT INTO equipamentos VALUES ( '1194', '12', '099', '', 'FERRAMENTAS DE ENCAIXE QUADRADO', '<p>Sistema de catraca unidirecional.</p>
<p>Precis&atilde;o certificada de 3% Gera&ccedil;&atilde;o de r&aacute;pido e duplo efeito.</p>
<p>Bra&ccedil;o de rea&ccedil;&atilde;o ajust&aacute;vel de 360&deg;.</p>
<p>Carca&ccedil;a de alum&iacute;nio Ultra-Light AQR51.</p>
<p>Swivel mult-eixo 360&deg; x 360&deg;.</p>
<p>Opera&ccedil;&atilde;o de m&atilde;os livres.</p>
<p>Alavancas de desacoplamento.</p>
<p>Sistema de carga anti-side.</p>
<p>Carca&ccedil;a com sistema de absor&ccedil;&atilde;o de energia.</p>
<p>Sistema de drive flex&iacute;vel.</p>
<p>Raio m&iacute;nimo. Housing.</p>
<p>Reaction Arm Assembly.</p>
<p>Opera&ccedil;&atilde;o de m&atilde;os livres.</p>
<p>Alavancas de Desacoplamentos.</p>
<p>Sistema de carga anti-side Carca&ccedil;a com sistema especial de absor&ccedil;&atilde;o de energia.</p>
<p>Sistema Drive Flexivel.</p>
<p>Liga de Tit&acirc;nio &ndash; Especial desenvolvido pela NASA.</p>', '1', '1');
INSERT INTO equipamentos VALUES ( '1195', '12', '099', '', 'FERRAMENTAS DE ENCAIXE HEXAGONAL', '<p>Perfil baixo X - Treme para &aacute;reas confinadas.</p>
<p>Links de catraca hexagonal de at&eacute; 6 1/2&quot;.</p>
<p>Alavanca drive anti-travamento.</p>
<p>Maxi-torque para cada catraca.</p>
<p>Cabe&ccedil;ote de alum&iacute;nio Ultr-Light AQR51.</p>
<p>Sisteme de catraca unidirecional.</p>
<p>Opera&ccedil;&atilde;o de m&atilde;os livres.</p>
<p>Cabe&ccedil;ote de for&ccedil;a de duplo eveito.</p>
<p>Precis&atilde;o certificada de 3%.</p>
<p>Swivel de 360&ordm; X 180&ordm;.</p>
<p>Luva de bronze. Sistema de rea&ccedil;&atilde;o em linha.</p>
<p>Engate RL totalmente autom&aacute;tico.</p>', '1', '1');
INSERT INTO equipamentos VALUES ( '1196', '13', '099', '', 'ELÉTRICAS', '<p>Dispon&iacute;vel em 110v ou 220v;</p>
<p>Intervalo de press&atilde;o: de 1500 a 10.000 psi;</p>
<p>Press&atilde;o de retorno ajust&aacute;vel permite 10.000 psi no avan&ccedil;o e retorno, se necess&aacute;rio;</p>
<p>Ajuste da v&aacute;lvula de press&atilde;o; Maior fluxo de &oacute;leo;</p>
<p>Fechamento autom&aacute;tico de despejo de &oacute;leo;</p>
<p>Dist&acirc;ncia de seguran&ccedil;a de aproximadamente 4,5m atrav&eacute;s de acionamento por controle remoto;</p>
<p>Sistema de desligamento autom&aacute;tico;</p>
<p>Mangueiras duplas hidr&aacute;ulicas com fator de seguran&ccedil;a 4 x 1;</p>
<p>Man&ocirc;metro calibrado, com certifica&ccedil;&atilde;o; Manifold com 1 ou 4 sa&iacute;das (uso simult&acirc;neo de at&eacute; 4 ferramentas) .</p>', '1', '1');
INSERT INTO equipamentos VALUES ( '1197', '13', '099', '', 'PNEUMÁTICAS', '<p>Bombas pneum&aacute;ticas: 7 bar / 100 psi;</p>
<p>Intervalo de press&atilde;o: de 1500 a 10.000 psi;</p>
<p>Press&atilde;o de retorno ajust&aacute;vel permite 10.000 psi no avan&ccedil;o e retorno, se necess&aacute;rio;</p>
<p>Ajuste da v&aacute;lvula de press&atilde;o;</p>
<p>Maior fluxo de &oacute;leo;</p>
<p>Fechamento autom&aacute;tico de despejo de &oacute;leo;</p>
<p>Dist&acirc;ncia de seguran&ccedil;a de aproximadamente 4,5m atrav&eacute;s de acionamento por controle remoto;</p>
<p>Sistema de desligamento autom&aacute;tico;</p>
<p>Mangueiras duplas hidr&aacute;ulicas com fator de seguran&ccedil;a 4 x 1;</p>
<p>Man&ocirc;metro calibrado, com certifica&ccedil;&atilde;o;</p>
<p>Manifold com 1 ou 4 sa&iacute;das (uso simult&acirc;neo de at&eacute; 4 ferramentas) .</p>', '1', '1');
INSERT INTO equipamentos VALUES ( '1198', '14', '099', '', 'ELÉTRICA', '<p>&Eacute;&nbsp;uma nova gera&ccedil;&atilde;o de ferramentas (dispon&iacute;vel em 110V ou 220V) para a instala&ccedil;&atilde;o ou remo&ccedil;&atilde;o de parafusos, que exige precis&atilde;o, pot&ecirc;ncia e seguran&ccedil;a. Esta s&eacute;rie vem pronto para o trabalho sem a necessidade de mangueiras especiais ou linhas operadas. Basta ligar a qualquer tomada el&eacute;trica.</p>
<p>Oferece uma aplica&ccedil;&atilde;o controlada de torque&nbsp;e ajust&aacute;vel atrav&eacute;s das configura&ccedil;&otilde;es de discagem.</p>
<ul>
    <li><strong>R&aacute;pida e de f&aacute;cil configura&ccedil;&atilde;o</strong><br />
    Sele&ccedil;&atilde;o de torque r&aacute;pida para a m&aacute;xima flexibilidade e efici&ecirc;ncia.</li>
    <li><strong>Drive Soft</strong><br />
    Permite a&nbsp;opera&ccedil;&atilde;o f&aacute;cil e seguro, pode definir o bra&ccedil;o antes de aplicar o torque.</li>
    <li><strong>Same Power Forward e Reverse </strong><br />
    Comodidade e economia na qual a mesma ferramenta pode ser usada para soltar e aplica&ccedil;&atilde;o de torque final.</li>
    <li><strong>Motor el&eacute;trico com um ultra-confi&aacute;vel</strong><br />
    Projetado para manuten&ccedil;&atilde;o pesada para reduzir custos e aumentar a confiabilidade.</li>
</ul>
<p>&nbsp;</p>', '1', '1');
INSERT INTO equipamentos VALUES ( '1199', '14', '099', '', 'PNEUMÁTICA', '<p>Incompar&aacute;vel por seu desempenho, tamanho, peso e performance de torque, as ferramentas da s&eacute;rie cl&aacute;ssica s&atilde;o os modelos mais econ&ocirc;micos e populares.</p>
<p>Com modelos de faixa de torque dispon&iacute;vel de 50 a 5000 ft-lbs, qualidade, desempenho e durabilidade est&atilde;o ao seu alcance. Por que se contentar com menos?</p>
<p>Todas as ferramentas incluem uma gaiola de alum&iacute;nio para o armazenamento da ferramenta, o calibre de press&atilde;o de 0 a 100 PSI, filtro regulador, lubrificador autom&aacute;tico 12-p&eacute; de mangueira, bra&ccedil;o de torque, manual de instru&ccedil;&otilde;es em espanhol, CD de treinamento Espanhol e seguran&ccedil;a, e tabela de calibra&ccedil;&atilde;o para converter a press&atilde;o de ar (PSI) / Torque (libra-ft)<strong>.</strong></p>', '1', '1');
INSERT INTO equipamentos VALUES ( '1200', '14', '099', '', 'BATERIA', '<p>Ideal para aplica&ccedil;&otilde;es onde n&atilde;o h&aacute; fonte de energia como a electricidade ou ar comprimido.&nbsp;</p>
<p>Todos os modelos s&atilde;o&nbsp;de rota&ccedil;&atilde;o cont&iacute;nua e controla com precis&atilde;o o torque com uma precis&atilde;o de + / - 5%. Cada ferramenta inclui duas baterias e cada uma das quais permite ao usu&aacute;rio trabalhar at&eacute; 200 pinos por carga.</p>', '1', '1');
INSERT INTO equipamentos VALUES ( '1201', '16', '006', '', 'MANÔMETROS', '<p>Dispomos de todas as linhas de man&ocirc;metros para as unidades de bombeio hidr&aacute;ulicas e com certicado de aferi&ccedil;&atilde;o.</p>
<p>&nbsp;</p>', '1', '1');
INSERT INTO equipamentos VALUES ( '1203', '16', '004', '', 'ADAPTADORES ', '<p>A NEW TORQUE conta com uma completa linha de adaptadores para&nbsp; ferramentas de torque.</p>', '1', '1');
INSERT INTO equipamentos VALUES ( '1204', '16', '006', '', 'MANGUEIRAS HIDRÁULICAS', '<p>Mangueiras hidr&aacute;ulicas g&ecirc;meas.</p>
<ul>
    <li>Press&atilde;o de trabalho 700bar / 10.000 PSI;</li>
    <li>Press&atilde;o de proca 1400 bar / 20.000 PSI&nbsp;- fator de seguran&ccedil;a 4:1;</li>
    <li>Equipadas com engates r&aacute;pidos e Pioneer s&eacute;rie 3000 padr&atilde;o;</li>
    <li>Fornecido em 5 mts, 15 mts, 30 mts de comprimento.</li>
</ul>', '1', '1');
INSERT INTO equipamentos VALUES ( '1205', '14', '099', '', 'ELETRÔNICA', '<h1><strong><font size=\"+0\"><font size=\"+0\">E-RAD ELETR&Ocirc;NICA</font></font></strong></h1>
<p><font size=\"+0\"><font size=\"+0\">As ferramentas E-RAD s&atilde;o projetadas para fornecer um alto grau de precis&atilde;o (+ / - 3%) e repetibilidade (+ / - 2%), utilizando o projeto da caixa de engrenagem e a precis&atilde;o de um motor el&eacute;trico AC Servo.</font></font></p>
<p>&nbsp;</p>
<p><strong><font size=\"+0\"><font size=\"+0\">A coleta de dados</font></font></strong></p>
<div class=\"entry\">
<p><font size=\"+0\"><font size=\"+0\">Vem de f&aacute;brica com software de coleta de dados, torque /&nbsp;&acirc;ngulo de medi&ccedil;&atilde;o&nbsp;e rastreabilidade de cada seq&uuml;&ecirc;ncia de torque realizado.</font></font></p>
<p>&nbsp;</p>
<p>&nbsp;<strong><font size=\"+0\"><font size=\"+0\">Luzes indicadoras do LED ( Aprovado / Reprovado )</font></font></strong></p>
<p><font size=\"+0\"><font size=\"+0\">Localizado em ambos os lados, estes sinais visuais indica o estado do processo de&nbsp;torque&nbsp;para a m&aacute;xima precis&atilde;o.</font></font></p>
<p>&nbsp;</p>
<p>&nbsp;<strong><font size=\"+0\"><font size=\"+0\">Bot&atilde;o de sele&ccedil;&atilde;o de torque</font></font></strong></p>
<p><font size=\"+0\"><font size=\"+0\">Convenientes, r&aacute;pidas, livres de erros assim &eacute; o ajuste de torque.</font></font></p>
<p>&nbsp;</p>
<p><strong><font size=\"+0\"><font size=\"+0\">N&iacute;vel de ru&iacute;do extremamente baixo - apenas 75 db</font></font></strong></p>
<p><font size=\"+0\"><font size=\"+0\">Ferramenta muito&nbsp;silenciosa, ideal para ambientes sens&iacute;veis e padr&otilde;es.</font></font></p>
</div>', '1', '1');
INSERT INTO equipamentos VALUES ( '1206', '17', '099', '', 'SEPARADOR DE FLANGE', '<p>Propocionam abertura paralela e m&iacute;nimo esfor&ccedil;o do operador com toda seguran&ccedil;a.</p>', '1', '1');
INSERT INTO equipamentos VALUES ( '1207', '18', '099', '', 'CORTADOR DE PORCAS HIDRÁULICOS', '<p>Os cortadores de porca hidr&aacute;ulicos&nbsp;constitui um m&eacute;todo r&aacute;pido, infal&iacute;vel e seguro de retirar porcas corro&iacute;das ou emperradas sem precisar cortar a quente, usar talhadeiras ou retificar, pois, utiliza um cilindro hidr&aacute;ulico potente e leve para direcionar uma l&acirc;mina de corte de precis&atilde;o em dire&ccedil;&atilde;o &agrave; parte plana da porca. A l&acirc;mina, com tr&ecirc;s arestas de corte, foi desenhada para ter uma vida m&aacute;xima e tempo de instala&ccedil;&atilde;o m&iacute;nimo, podendo ser trocada em segundos, se necess&aacute;rio.</p>
<p>Com uma variedade de cilindros e cabe&ccedil;otes intercambi&aacute;veis, as ferramentas foram desenhadas para servir em todos os flanges ANSI at&eacute; 36&quot;.</p>
<p>Caracter&iacute;sticas incluem:</p>
<div>
<ul>
    <li>Cilindros com mola de retorno para uso na superf&iacute;cie</li>
    <li>Um cilindro hidr&aacute;ulico opcional de a&ccedil;&atilde;o dupla dispon&iacute;vel para uso submarino</li>
    <li>A l&acirc;mina de corte pode ser facilmente regulada para evitar danificar as roscas dos parafusos</li>
    <li>Escala visual de di&acirc;metros dos parafusos para ajudar a regular a l&acirc;mina de corte</li>
    <li>V&aacute;lvula de al&iacute;vio de press&atilde;o integrada para evitar press&atilde;o excessiva</li>
</ul>
</div>', '1', '1');
INSERT INTO equipamentos VALUES ( '1208', '16', '002', '', 'SOQUETES', '<p>LINHAS DE SOQUETES DE IMPACTO</p>
<ul>
    <li>Adaptadores de encaixe quadrado Step-Down;</li>
    <li>Soquetes de impacto hexagonais machos;</li>
    <li>Bits de inser&ccedil;&atilde;o para suportes;</li>
    <li>Adaptares de inser&ccedil;&atilde;o de encaixe quadrado;</li>
    <li>Soquetes de impacto 6 pontos;</li>
    <li>Soquetes de impacto 12 pontos.</li>
</ul>', '1', '1');
INSERT INTO equipamentos VALUES ( '1209', '19', '001', '', 'PERFURATRIZ MANUAL', '<p>&nbsp;<span style=\"font-size:13.5pt;line-height:115%;
font-family:&quot;web-font2&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-bidi-font-family:&quot;Times New Roman&quot;;color:#5F5F5F;mso-ansi-language:PT-BR;
mso-fareast-language:PT-BR;mso-bidi-language:AR-SA\">A vantagem desse sistema &eacute; permitir a execu&ccedil;&atilde;o das perfura&ccedil;&otilde;es e concreto sem qualquer vibra&ccedil;&atilde;o, sem fissuras, sem p&oacute; e com precis&atilde;o. Conservando dessa forma a integridade estrutural de vigas, lajes e bases de concreto, custo baixo a medida do aumento da quantidade de furos a executar</span></p>', '1', '1');
INSERT INTO equipamentos VALUES ( '1210', '19', '002', '', 'CHUMBADORES QUÍMICOS', '<p>&nbsp;<span style=\"color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 11.5pt; line-height: 16.5pt;\">Uma das aplica&ccedil;&otilde;es mais comuns para chumbadores qu&iacute;micos &eacute; no travamento de barras rosqueadas e vergalh&otilde;es a uma base de concreto. Outros usos s&atilde;o a fixa&ccedil;&atilde;o de equipamentos pesados e de elementos como guarda-corpos, grades etc.</span></p>
<p style=\"margin-top:7.5pt;margin-right:0cm;margin-bottom:2.25pt;margin-left:
0cm;line-height:16.5pt;vertical-align:baseline\"><span style=\"font-size:11.5pt;
font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;color:#333333\">Os produtos podem ser empregados em variados substratos: concreto, alvenaria de concreto, alvenaria cer&acirc;mica etc. Tamb&eacute;m podem ser utilizados para fixa&ccedil;&atilde;o de pe&ccedil;as diversas. Podem ser usados para pe&ccedil;as que exigem pouca capacidade de sustenta&ccedil;&atilde;o ou para pe&ccedil;as que demandem resist&ecirc;ncia a cargas elevadas e din&acirc;micas.<o:p></o:p></span></p>', '1', '1');
INSERT INTO equipamentos VALUES ( '1211', '19', '003', '', 'PERFURAÇÃO EM CONCRETO ARMADO COM SISTEMA DIAMANTADO', '<p><span style=\"color: rgb(84, 141, 212); font-family: web-font2, serif; font-size: 18px;\">Perfura&ccedil;&atilde;o em Concreto</span></p>
<p><span style=\"color: rgb(95, 95, 95); font-family: web-font2, serif; font-size: 18px;\">Perfura&ccedil;&atilde;o em concreto &eacute; um m&eacute;todo no qual s&atilde;o empregadas perfuratrizes rotativas com coroas segmentadas a diamante, comum em obras da constru&ccedil;&atilde;o civil.</span></p>
<p><span style=\"color: rgb(95, 95, 95); font-family: web-font2, serif; font-size: 18px;\">A utiliza&ccedil;&atilde;o de perfuratrizes-extratoras &eacute; a mais conhecida das atividades que utilizam ferramentas diamantadas hoje em dia no mercado da constru&ccedil;&atilde;o civil brasileira. Pois permite a execu&ccedil;&atilde;o de furos em concreto armado. Sendo poss&iacute;vel a execu&ccedil;&atilde;o de furos em outros tipos de materiais como a&ccedil;o e refrat&aacute;rio, utitilizando as mesmas m&aacute;quinas e ferramentas na perfura&ccedil;&atilde;o do concreto sem gerar poeira e impacto sobre a estrutura.</span></p>
<p><span style=\"color: rgb(84, 141, 212); font-family: web-font2, serif; font-size: 18px;\">Aplica&ccedil;&otilde;es da Perfura&ccedil;&atilde;o em Concreto</span></p>
<p><span style=\"color: rgb(95, 95, 95); font-family: web-font2, serif; font-size: 18px;\">S&atilde;o utilizadas para a passagem de tubula&ccedil;&otilde;es el&eacute;tricas, hidr&aacute;ulicas, g&aacute;s, combust&iacute;veis e outros. Atrav&eacute;s de lajes, paredes, vigas, pilares e blocos de funda&ccedil;&atilde;o de concreto armado.</span></p>
<p><span style=\"color: rgb(95, 95, 95); font-family: web-font2, serif; font-size: 18px;\">N&atilde;o existe limite conhecido para a profundidade de execu&ccedil;&atilde;o de furos com coroas diamantadas, permitindo perfurar di&acirc;metros de &#511; 3/4&rdquo; at&eacute; 20&rdquo; conforme a profundidade e &acirc;ngulo de inclina&ccedil;&atilde;o especificado em projeto.</span></p>
<p><span style=\"color: rgb(95, 95, 95); font-family: web-font2, serif; font-size: 18px;\">Os furos com coroas diamantadas tamb&eacute;m podem em alguns casos ser utilizados na execu&ccedil;&atilde;o de aberturas retangulares ou de formatos variados atrav&eacute;s do que chamamos de cortina de furos.</span></p>
<p><span style=\"color: rgb(84, 141, 212); font-family: web-font2, serif; font-size: 18px;\">Vantagens do Processo Perfura&ccedil;&atilde;o em Concreto</span></p>
<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt;\">&nbsp;</p>
<p><span style=\"color: rgb(95, 95, 95); font-family: web-font2, serif; font-size: 18px;\">A vantagem desse sistema &eacute; permitir a execu&ccedil;&atilde;o das perfura&ccedil;&otilde;es e concreto sem qualquer vibra&ccedil;&atilde;o, sem fissuras, sem p&oacute; e com precis&atilde;o. Conservando dessa forma a integridade estrutural de vigas, lajes e bases de concreto, custo baixo a medida do aumento da quantidade de furos a executar.</span></p>
<p><span style=\"color: rgb(95, 95, 95); font-family: web-font2, serif; font-size: 18px;\">Outra vantagem bastante significativa &eacute; a elimina&ccedil;&atilde;o de passagens pr&eacute; existentes, as famosas &quot;caixinhas&quot;. Pois com esse sistema, al&eacute;m de eliminar gastos, a precis&atilde;o dos furos &eacute; extrema, dispensando retrabalhos e gastos com materiais corretivos.</span></p>
<p><span style=\"color: rgb(95, 95, 95); font-family: web-font2, serif; font-size: 18px;\">Devido a utiliza&ccedil;&atilde;o de brocas diamantadas n&atilde;o gera poeira e vibra&ccedil;&atilde;o a estrutura a ser perfurada.</span></p>
<p>&nbsp;</p>', '1', '1');
INSERT INTO equipamentos VALUES ( '1212', '19', '004', '', 'CORTE EM CONCRETO ARMADO', '<p><span style=\"color: rgb(0, 176, 80); font-family: web-font2, serif; font-size: 18px;\">Corte em Concreto</span></p>
<p><span style=\"color: rgb(95, 95, 95); font-family: web-font2, serif; font-size: 18px;\">O sistema de corte diamantado utiliza equipamentos e processos, agregando flexibilidade, menor emiss&atilde;o de ru&iacute;dos e alta precis&atilde;o. Permitindo um acabamento final que dispensa reparos posteriores. Os sistemas wall saw (serras diamantadas) e wire saw (fio diamantado) executam cortes em alguns casos, com controle remoto eletr&ocirc;nico.</span></p>
<p><span style=\"color: rgb(95, 95, 95); font-family: web-font2, serif; font-size: 18px;\">&Eacute; poss&iacute;vel executar praticamente todo tipo de corte em estruturas de concreto. Desde a retirada de bases de todos os tamanhos, demoli&ccedil;&atilde;o parcial ou total de grandes estruturas, aberturas de janelas ou portas em estruturas pr&eacute;-moldadas, aberturas de passagem em parede-diafragma, substitui&ccedil;&atilde;o de pilares de concreto por pilares met&aacute;licos, canaletas para fia&ccedil;&atilde;o ou drenagem, entre outras.</span></p>
<p><span style=\"color: rgb(95, 95, 95); font-family: web-font2, serif; font-size: 18px;\">O sistema de corte em concreto &eacute; indicado para locais em que a estrutura a ser cortada n&atilde;o pode sofrer impactos ou vibra&ccedil;&otilde;es. Por exemplo, em estruturas muito antigas ou deterioradas, locais onde haja monitoramento de vibra&ccedil;&otilde;es, &aacute;reas onde haja restri&ccedil;&atilde;o de ru&iacute;do ou de propaga&ccedil;&atilde;o de poeira devido aos processos produtivos, ou restri&ccedil;&otilde;es da legisla&ccedil;&atilde;o local.</span></p>
<p>&nbsp;</p>', '1', '1');



#
# CriaÃ§Ã£o da Tabela : fotos_equipamentos
#
CREATE TABLE `fotos_equipamentos` (
  `cd_foto_equipamento` int(2) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `cd_equipamento` int(2) unsigned zerofill NOT NULL DEFAULT '999',
  `cd_ordemfe` int(3) unsigned zerofill NOT NULL DEFAULT '999',
  `ds_legenda` mediumtext,
  `bl_destaque` enum('0','1') NOT NULL DEFAULT '0',
  `bl_publicarfe` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`cd_foto_equipamento`)
) ENGINE=MyISAM AUTO_INCREMENT=988 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC ;

#
# Dados a serem incluÃ­dos na tabela
#

INSERT INTO fotos_equipamentos VALUES ( '898', '1201', '999', '', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '959', '1194', '004', '', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '899', '1203', '003', '', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '960', '1194', '003', '', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '900', '1196', '999', 'UNIDADE DE BOMBEIO ELÉTRICA', '1', '1');
INSERT INTO fotos_equipamentos VALUES ( '901', '1204', '999', 'Mangueira hidráulica', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '903', '1197', '999', 'UNIDADE DE BOMBEIO PNEUMÁTICA', '1', '1');
INSERT INTO fotos_equipamentos VALUES ( '905', '1203', '001', '', '1', '1');
INSERT INTO fotos_equipamentos VALUES ( '907', '1207', '999', '', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '908', '1207', '999', '', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '909', '1199', '999', '', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '910', '1199', '999', '', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '955', '1194', '005', '', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '912', '1198', '999', '', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '913', '1198', '999', '', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '914', '1198', '999', '', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '915', '1199', '999', '', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '916', '1199', '999', '', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '966', '1195', '999', '', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '918', '1200', '999', '', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '919', '1200', '999', '', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '920', '1205', '999', '', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '952', '1203', '004', '', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '922', '1205', '999', '', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '925', '1208', '999', '', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '963', '1195', '999', '', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '927', '1208', '999', '', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '928', '1208', '999', '', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '929', '1208', '999', '', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '964', '1195', '999', '', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '953', '1194', '006', '', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '943', '1206', '999', '', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '944', '1207', '999', '', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '945', '1207', '999', '', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '951', '1203', '002', '', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '965', '1195', '999', '', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '949', '1201', '999', '', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '967', '1209', '001', 'PERFURATRIZ MANUAL', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '968', '1209', '002', 'EXECUÇÃO PERFURATRIZ MANUAL', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '969', '1209', '003', 'PERFURATRIZ ', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '970', '1209', '004', 'PERFURATRIZ ', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '971', '1210', '001', 'CHUMBADOR', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '972', '1210', '002', 'CHUMBADOR QUÍMICO', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '973', '1210', '003', 'CHUMBADOR QUÍMICO', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '974', '1211', '001', 'DD20 PERFURATRIZ DIAMANTADA', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '980', '1211', '002', 'PERFURAÇÃO', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '979', '1211', '003', 'PERFURATRIZ', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '977', '1211', '004', 'EXECUÇÃO DO FURO', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '978', '1211', '005', 'PERFURATRIZ  / FURO', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '981', '1212', '001', 'EQUIPAMENTO DE CORTE COM FIO', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '982', '1212', '002', 'MAQUINA DE CORTE', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '983', '1212', '003', 'CORTE EM CONCRETO', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '984', '1212', '004', 'CORTE COM DISCO', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '985', '1212', '005', 'MAQUINA DE CORTE COM DISCO', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '986', '1211', '006', 'PERFURAÇÃO', '0', '1');
INSERT INTO fotos_equipamentos VALUES ( '987', '1211', '007', 'HDI Anclajes tipo taco', '0', '1');



#
# CriaÃ§Ã£o da Tabela : fotos_servicos
#
CREATE TABLE `fotos_servicos` (
  `cd_foto_servico` int(3) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `cd_servico` int(3) unsigned zerofill NOT NULL DEFAULT '000',
  `cd_ordemfs` int(2) unsigned zerofill NOT NULL DEFAULT '99',
  `ds_legenda` longtext,
  `bl_publicarfs` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`cd_foto_servico`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC ;

#
# Dados a serem incluÃ­dos na tabela
#

INSERT INTO fotos_servicos VALUES ( '070', '011', '99', '', '1');
INSERT INTO fotos_servicos VALUES ( '063', '010', '99', '', '1');
INSERT INTO fotos_servicos VALUES ( '030', '016', '99', 'TREINAMENTO E QUALICAÇÃO DE PESSOAL.', '1');
INSERT INTO fotos_servicos VALUES ( '031', '000', '99', '', '1');
INSERT INTO fotos_servicos VALUES ( '032', '000', '99', '', '1');
INSERT INTO fotos_servicos VALUES ( '033', '011', '01', '', '1');
INSERT INTO fotos_servicos VALUES ( '034', '011', '02', '', '1');
INSERT INTO fotos_servicos VALUES ( '035', '011', '03', '', '1');
INSERT INTO fotos_servicos VALUES ( '036', '014', '99', '', '0');
INSERT INTO fotos_servicos VALUES ( '037', '014', '99', '', '0');
INSERT INTO fotos_servicos VALUES ( '062', '010', '04', '', '1');
INSERT INTO fotos_servicos VALUES ( '066', '012', '99', '', '1');
INSERT INTO fotos_servicos VALUES ( '067', '017', '99', '', '1');
INSERT INTO fotos_servicos VALUES ( '065', '012', '99', '', '1');
INSERT INTO fotos_servicos VALUES ( '043', '014', '99', '', '1');
INSERT INTO fotos_servicos VALUES ( '044', '015', '99', '', '1');
INSERT INTO fotos_servicos VALUES ( '045', '015', '99', '', '1');
INSERT INTO fotos_servicos VALUES ( '068', '013', '99', '', '1');
INSERT INTO fotos_servicos VALUES ( '069', '012', '99', '', '1');
INSERT INTO fotos_servicos VALUES ( '052', '000', '99', '', '1');
INSERT INTO fotos_servicos VALUES ( '061', '010', '03', '', '1');
INSERT INTO fotos_servicos VALUES ( '060', '010', '02', '', '1');
INSERT INTO fotos_servicos VALUES ( '059', '010', '01', '', '1');
INSERT INTO fotos_servicos VALUES ( '078', '012', '99', '', '1');
INSERT INTO fotos_servicos VALUES ( '077', '012', '99', '', '1');
INSERT INTO fotos_servicos VALUES ( '076', '019', '99', '', '1');
INSERT INTO fotos_servicos VALUES ( '075', '019', '99', '', '1');



#
# CriaÃ§Ã£o da Tabela : fotos_servicos_executados
#
CREATE TABLE `fotos_servicos_executados` (
  `cd_foto_servico_executado` int(3) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `cd_servico_executado` int(3) unsigned zerofill NOT NULL DEFAULT '000',
  `cd_ordemfs` int(2) unsigned zerofill NOT NULL DEFAULT '99',
  `ds_legenda` longtext,
  `bl_publicarfs` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`cd_foto_servico_executado`)
) ENGINE=MyISAM AUTO_INCREMENT=107 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC ;

#
# Dados a serem incluÃ­dos na tabela
#

INSERT INTO fotos_servicos_executados VALUES ( '042', '000', '99', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '041', '000', '99', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '031', '000', '99', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '032', '000', '99', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '045', '000', '99', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '044', '000', '99', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '043', '000', '99', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '046', '000', '99', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '040', '000', '99', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '047', '000', '99', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '048', '000', '99', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '049', '000', '99', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '050', '000', '99', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '051', '000', '99', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '052', '000', '99', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '053', '000', '99', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '054', '000', '99', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '055', '000', '99', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '056', '000', '99', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '057', '000', '99', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '058', '010', '01', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '059', '010', '02', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '060', '010', '03', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '061', '011', '99', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '062', '011', '99', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '063', '011', '99', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '064', '011', '99', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '073', '011', '99', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '067', '000', '99', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '068', '000', '99', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '069', '010', '04', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '072', '011', '99', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '074', '017', '01', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '075', '017', '14', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '076', '017', '13', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '077', '017', '02', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '078', '017', '05', '', '0');
INSERT INTO fotos_servicos_executados VALUES ( '079', '017', '07', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '080', '017', '10', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '081', '017', '09', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '082', '017', '08', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '083', '017', '12', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '089', '017', '11', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '085', '017', '06', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '086', '017', '05', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '087', '017', '04', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '088', '017', '03', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '090', '018', '01', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '091', '018', '02', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '092', '018', '03', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '093', '018', '06', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '094', '018', '07', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '095', '018', '08', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '096', '018', '05', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '097', '018', '04', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '098', '018', '99', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '099', '018', '99', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '100', '018', '99', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '101', '019', '99', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '105', '010', '99', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '104', '019', '99', '', '1');
INSERT INTO fotos_servicos_executados VALUES ( '106', '010', '99', '', '1');



#
# CriaÃ§Ã£o da Tabela : linhas
#
CREATE TABLE `linhas` (
  `cd_linha` int(2) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `cd_ordem` int(2) unsigned zerofill NOT NULL DEFAULT '99',
  `ds_linha` longtext,
  `tit_linha` varchar(100) DEFAULT NULL,
  `bl_publicar` enum('0','1') DEFAULT '0',
  `bl_tem_foto` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`cd_linha`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC ;

#
# Dados a serem incluÃ­dos na tabela
#

INSERT INTO linhas VALUES ( '12', '01', 'FERRAMENTAS DE ENCAIXE QUADRADO
FERRAMENTAS DE ENCAIXE HEXAGONAL', 'TORQUÍMETROS HIDRÁULICOS', '1', '1');
INSERT INTO linhas VALUES ( '13', '02', 'ELÉTRICAS
PNEUMÁTICAS', 'BOMBAS HIDRÁULICAS', '1', '1');
INSERT INTO linhas VALUES ( '14', '03', 'ELÉTRICA
ELETRONICA
PNEUMÁTICA
BATERIA', 'PARAFUSADEIRAS COM CONTROLE DE TORQUE', '1', '1');
INSERT INTO linhas VALUES ( '16', '06', 'Manômetros
Completa linha de braços de reações para torquímetros hidraúlicos
Nipples, acoplamentos e adaptadores
Mangueiras hidráulicas gêmeas para torquímetros hidráulicos', 'ACESSÓRIOS', '1', '1');
INSERT INTO linhas VALUES ( '17', '04', 'Proporcionam abertura paralela e mínimo esforço de operador, com toda seguraça.', 'SEPARADORES DE FLANGE', '1', '0');
INSERT INTO linhas VALUES ( '18', '05', 'Elimina o maçarico para desmontar porcas que estão corruídas e desgastadas.', 'CORTADORES DE PORCA HIDRÁULICOS', '1', '0');
INSERT INTO linhas VALUES ( '19', '07', 'Agilidade, qualidade no acabamento e facilidade de acesso a locais com pouco espaço físico. Sua ação precisa faz com que esses equipamentos sejam indicados especialmente para casos em que a estrutura do lugar não pode sofrer nenhum tipo de dano, impactos ou vibrações;
Produtividade é uma das principais características relacionadas a esse serviço. Com o uso d o equipamento consegue cortar ou perfurar o concreto e a armação em seu interior no mesmo procedimento, economizando tempo;
Eliminação da poeira gerada, já que o sistema de corte trabalha com água para o resfriamento do disco diamantado;
Como não oferece riscos às estruturas do local, a ferramenta de corte diamantado colabora para aumentar a segurança no canteiro de obras. Os equipamentos são fabricados com a mais alta tecnologia, com certificação e dentro de normas internacionais de qualidade, não causando dano a estrutura a ser cortada ou perfurada', 'PERFURAÇÃO E CORTE EM CONCRETO ARMADO COM SISTEMA DIAMANTADO', '1', '0');



#
# CriaÃ§Ã£o da Tabela : noticias
#
CREATE TABLE `noticias` (
  `cd_noticia` bigint(3) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `cd_ordem` int(2) unsigned zerofill NOT NULL DEFAULT '99',
  `tit_noticia` varchar(100) DEFAULT NULL,
  `ds_noticia` longtext,
  `ds_fonte` varchar(255) DEFAULT NULL,
  `bl_publicar` enum('0','1') DEFAULT '0',
  `bl_destaque` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`cd_noticia`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC ;

#
# Dados a serem incluÃ­dos na tabela
#

INSERT INTO noticias VALUES ( '004', '02', 'COMO FUNCIONA UM TORQUÍMETRO PNEUMÁTICO', '<p><img title=\"Como funciona um torqu&iacute;metro pneum&aacute;tico\" alt=\"Como funciona um torqu&iacute;metro pneum&aacute;tico\" align=\"left\" width=\"90\" height=\"90\" src=\"http://www.manutencaoesuprimentos.com.br/imagens/como-funciona-um-torquimetro-pneumatico.jpg\" />Um <strong>torqu&iacute;metro pneum&aacute;tico </strong>&eacute; uma <strong>ferramenta acionada a ar</strong>, sendo projetada para aplicar um montante espec&iacute;fico e pr&eacute;-definido de torque ou tens&atilde;o a um fixador, normalmente uma porca ou parafuso. Este preciso tensionamento &eacute; importante em muitas aplica&ccedil;&otilde;es, em que toler&acirc;ncias muito restritas devem ser mantidas. Ao contr&aacute;rio de outras formas de chaves de torque, os <strong>tipos de torqu&iacute;metros pneum&aacute;ticos </strong>oferecem uma ampla gama de configura&ccedil;&otilde;es de torque. Tamb&eacute;m s&atilde;o ferramentas menores, potentes e mais baratas do que as vers&otilde;es de <strong>torqu&iacute;metro el&eacute;trico ou manual</strong>.</p>
<p>O torqu&iacute;metro pneum&aacute;tico faz uso de uma <strong>fonte de ar comprimido </strong>para rapidamente rodar uma turbina de rotor, que por sua vez aciona um eixo por meio de uma caixa planet&aacute;ria de redu&ccedil;&atilde;o velocidades. Este eixo &eacute; equipado com uma embreagem ajust&aacute;vel projetada para liberar de uma tens&atilde;o pr&eacute;-definida. A ponta de eixo do torqu&iacute;metro pneum&aacute;tico &eacute; equipada com um acess&oacute;rio, permitindo que v&aacute;rias ferramentas sejam anexadas &agrave; chave de torque, dependendo da aplica&ccedil;&atilde;o. Quando o modelo de torqu&iacute;metro pneum&aacute;tico &eacute; aplicado a um conjunto de porca e parafuso, por exemplo, a ferramenta de torque aperta a porca at&eacute; que a tens&atilde;o pr&eacute;-definida seja atingida.</p>
<p><img title=\"torqu&iacute;metro pneum&aacute;tico\" alt=\"torqu&iacute;metro pneum&aacute;tico\" align=\"right\" width=\"220\" height=\"207\" src=\"http://www.manutencaoesuprimentos.com.br/imagens/torquimetro-pneumatico.jpg\" />Muitas <strong>aplica&ccedil;&otilde;es de engenharia </strong>requerem que os fixadores sejam tensionados at&eacute; uma configura&ccedil;&atilde;o de torque espec&iacute;fico. Isto &eacute; particularmente primordial para aplica&ccedil;&otilde;es onde v&aacute;rios prendedores s&atilde;o usados de modo a garantir a uni&atilde;o de dois componentes. A cabe&ccedil;a do cilindro de um motor de carro, por exemplo, normalmente &eacute; montado com seis a oito parafusos e porcas.</p>
<p>Por v&aacute;rias raz&otilde;es, o <strong>uso de ar comprimido para acionar uma chave de torque pneum&aacute;tico </strong>&eacute; uma pr&aacute;tica comum nas ind&uacute;strias em que essas <a rel=\"follow\" href=\"http://www.manutencaoesuprimentos.com.br/maquinas-e-equipamentos/\">m&aacute;quinas</a> s&atilde;o usadas com frequ&ecirc;ncia. Uma <strong>chave de torque pneum&aacute;tico </strong>&eacute; menor e mais manej&aacute;vel do que um modelo de torqu&iacute;metro de acionamento el&eacute;trico de capacidade similar. Por esta raz&atilde;o, os <strong>modelos de ferramentas pneum&aacute;ticas </strong>tendem a ser muito mais potentes do que os <strong>modelos de ferramentas el&eacute;tricas</strong>, tais como a chave de torque el&eacute;trica.</p>', 'MANUTENÇÃO E SUPRIMENTOS', '1', '0');
INSERT INTO noticias VALUES ( '005', '04', 'TORQUEAMENTO PARA GARANTIA DA INTEGRIDADE NO SISTEMA INDUSTRIAL', '<p><em>Wilson Antunes Junior (1)<br />
Eli Lu&iacute;s Dallalibera (2)<br />
(1) Engenheiro Mec&acirc;nico, Empresa Petrobras, cargo de Engenheiro de Equipamentos.<br />
(2) T&eacute;cnico Mec&acirc;nico, Empresa Petrobras, cargo de T&eacute;cnico de Manuten&ccedil;&atilde;o.</em></p>
<p>&nbsp;</p>
<p><span style=\"font-size: 10pt; font-family: Verdana,Arial,Helvetica,sans-serif;\">No  in&iacute;cio da ind&uacute;stria e at&eacute; os dias atuais, todo tipo de aperto em  parafusos era efetuado sem controle de torque, mas com a necessidade de  aumento da confiabilidade e garantia do &ldquo;vazamento zero&rdquo;, houve uma  evolu&ccedil;&atilde;o no ferramental com controle de torque. A busca continua  acentuada pois al&eacute;m da garantia do n&atilde;o vazamento outro crit&eacute;rio a se  adotar &eacute; que a ferramenta apresente seguran&ccedil;a, ou seja, n&atilde;o cause  acidentes aos operadores. </span></p>
<p><span style=\"font-size: 10pt; font-family: Verdana,Arial,Helvetica,sans-serif;\">Surgem  ent&atilde;o alguns tipos de ferramentas para torqueamento como: Torqueadeira  Manual; Torqueadeira El&eacute;trica; Torqueadeira Pneum&aacute;tica; Torqueadeira  Eletro-hidr&aacute;ulico. </span></p>
<p><span style=\"font-size: 10pt; font-family: Verdana,Arial,Helvetica,sans-serif;\">Por&eacute;m  existem alguns cuidados que devem ser tomados na escolha dos  equipamentos. Deve-se haver a preocupa&ccedil;&atilde;o com a ergonomia e risco de  acidente ao operador, al&eacute;m de outros crit&eacute;rios que devem ser atentados  conforme a &aacute;rea de utiliza&ccedil;&atilde;o. </span></p>
<p><span style=\"font-size: 10pt; font-family: Verdana,Arial,Helvetica,sans-serif;\">Deve-se  ainda ter um controle escrito (planilha), de forma a tornar o  executante comprometido com o processo. Para isso &eacute; importante que o  mesmo tenha subs&iacute;dios para a execu&ccedil;&atilde;o correta do aperto (torque a ser  aplicado). </span></p>
<p><span style=\"font-size: 10pt; font-family: Verdana,Arial,Helvetica,sans-serif;\">A  planilha calculada para o executante ter&aacute; o valor do torque recomendado  considerando tipo de junta, quantidade, tipo e bitola de parafuso,  temperatura e press&atilde;o do fluido e m&eacute;todo de aperto. </span></p>
<span style=\"font-size: 10pt; font-family: Verdana,Arial,Helvetica,sans-serif;\">Para  isso foi criado um software pela Petrobras baseado no ASME para efetuar  o c&aacute;lculo do torque, o qual faz todas as considera&ccedil;&otilde;es de vari&aacute;veis </span><span style=\"font-size: 10pt; font-family: Verdana,Arial,Helvetica,sans-serif;\">.</span>', 'ABRAMAN -ASSOCIAÇÃO BRASILEIRA DE MANUTENÇÃO', '1', '0');
INSERT INTO noticias VALUES ( '006', '99', 'A NEW TORQUE conta com uma nova filial em Ouro Branco / MG', '<p>Com a fideliza&ccedil;&atilde;o de novos clientes atrav&eacute;s da alta &nbsp;qualidade nos servi&ccedil;os prestados fez da &nbsp;empresa NEW TORQUE em Ouro Branco &nbsp;um grande diferencial no&nbsp;fornecimento&nbsp;de m&aacute;quinas e equipamentos de torque.</p>
<p>A NEW TORQUE &eacute; especialista em torques de alta precis&atilde;o e tem destacado-se na regi&atilde;o &nbsp;pela grande perf&oacute;rmance de seu grupo &nbsp;e equipamentos sofisticados. Confira nossos produtos e servi&ccedil;os, estamos certo que temos o melhor para poder atend&ecirc;-lo.</p>
<p>&nbsp;</p>', '', '1', '1');



#
# CriaÃ§Ã£o da Tabela : paginas
#
CREATE TABLE `paginas` (
  `ds_pag_aempresa` longtext,
  `ds_pag_inicial` longtext,
  `ds_pag_clientes` longtext,
  `ds_pag_videos` longtext,
  `ds_pag_servicos` longtext,
  `ds_pag_servexec` longtext,
  `ds_pag_equipam` longtext,
  `ds_pag_faleconosco` longtext,
  `ds_pag_trabconosco` longtext,
  `ds_pag_localizacao` longtext
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC ;

#
# Dados a serem incluÃ­dos na tabela
#

INSERT INTO paginas VALUES ( '<p>&nbsp;</p>
<p>A New Torque &eacute; especializada em solu&ccedil;&otilde;es de torques, fura&ccedil;&otilde;es e cortes com precis&otilde;es.<br />
Fundada por profissionais altamente capacitados a empresa possui uma vasta experi&ecirc;ncia em presta&ccedil;&atilde;o de servi&ccedil;os de torque e fura&ccedil;&otilde;es em concreto armado nas modalidades de loca&ccedil;&atilde;o, manuten&ccedil;&atilde;o e vendas, atendendo assim as mais diversas demandas e exig&ecirc;ncias do mercado. Solidez, efici&ecirc;ncia e inova&ccedil;&atilde;o t&eacute;cnica, baseada nesses tr&ecirc;s pilares &eacute; que a New Torque diferencia-se como l&iacute;der no mercado nacional.<br />
A empresa conta com uma completa estrutura organizacional que garantem os melhores resultados e uma &oacute;tima rela&ccedil;&atilde;o custo/benef&iacute;cio.</p>
<h2>NEW TORQUE:&nbsp;</h2>
<h2>Excel&ecirc;ncia em torque.</h2>
<p>&nbsp;</p>', '', '<p>Conquistar clientes n&atilde;o &eacute; uma tarefa f&aacute;cil para nenhuma empresa, exige seriedade, compet&ecirc;ncia, dinamismo, capacidade t&eacute;cnica e confian&ccedil;a. &Eacute; com estes aspectos que a NEW TORQUE vem conquistando seus clientes.</p>
<p>Conhe&ccedil;a alguns de&nbsp;nossos clientes:</p>', '', '<p>Comprometida com a seguran&ccedil;a e com meio ambiente com foco na qualidade a New Torque executa e supervisiona com excel&ecirc;ncia todos servi&ccedil;os de torque e fura&ccedil;&otilde;es com precis&atilde;o nas intala&ccedil;&otilde;es de seus clientes com diferencial excepcional.</p>', '<p>Conhe&ccedil;a a seguir alguns servi&ccedil;os realizados em diversas empresas atendidas.</p>', '<p>Tecnologia de ponta, essa &eacute; a melhor express&atilde;o para os equipamentos que a New Torque comercializa. Dispon&iacute;veis para venda e loca&ccedil;&atilde;o, a empresa oferece um completo portf&oacute;lio de m&aacute;quinas e acess&oacute;rios para os trabalhos de torqueamento e fura&ccedil;&otilde;es.</p>', '', '', '');



#
# CriaÃ§Ã£o da Tabela : servicos
#
CREATE TABLE `servicos` (
  `cd_servico` int(2) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `cd_ordems` int(2) unsigned zerofill NOT NULL DEFAULT '99',
  `tit_servico` varchar(100) DEFAULT NULL,
  `ds_servico` longtext,
  `bl_publicars` enum('0','1') DEFAULT '0',
  `bl_tem_foto` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`cd_servico`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC ;

#
# Dados a serem incluÃ­dos na tabela
#

INSERT INTO servicos VALUES ( '10', '01', 'PRESTAÇÃO DE SERVIÇOS DE TORQUEAMENTO', '<p>A NEW TORQUE possui equipes t&eacute;cnicas treinadas, qualificadas&nbsp;para atender a todo e qualquer servi&ccedil;o que dependem de torqueamento hidr&aacute;ulico.</p>', '1', '1');
INSERT INTO servicos VALUES ( '11', '02', 'PRESTAÇÃO DE SERVIÇOS DE TENSIONAMENTO', 'A NEW TORQUE ofereçe uma linha completa de tensionadores com design especial, que vão solucionar os problemas de montagens e manutençaõ de equipamentos de sua empresa.', '1', '0');
INSERT INTO servicos VALUES ( '12', '03', 'LOCAÇÃO E VENDAS DE EQUIPAMENTOS', '<p>A NEW TORQUE possui os seguintes produtos para loca&ccedil;&atilde;o e venda:</p>
<ul>
    <li>Torqu&iacute;metros hidr&aacute;ulicos;</li>
    <li>Bombas hidr&aacute;ulicas;</li>
    <li>Mangueiras de alta press&atilde;o;</li>
    <li>Tencionadores;</li>
    <li>Parafusadeiras com controle de torque (el&eacute;trica, eletr&ocirc;nica, bateria e pneum&aacute;tica);</li>
    <li>Separadores de flanges;</li>
    <li>Cortadores de porca;</li>
    <li>Completa linha&nbsp;de soquetes;</li>
    <li>Adaptadores e acess&oacute;rios em geral para torqueamento.</li>
</ul>', '1', '0');
INSERT INTO servicos VALUES ( '13', '04', 'ASSISTÊNCIA TÉCNICA E REPARO', 'A NEW TORQUE presta a seus clientes todos os serviços inerentes a manutenção  e reparo em equipamentos de torque hidráulico e pneumático. O corpo técnico da NEW TORQUE dispõe de profissionais capazes de realizar manutenção, detectando defeitos, removendo, testando, reparando, configurando, parametrizando e calibrando, utilizando equipamentos de teste conforme procedimentos e instruções de trabalho.                                                                  ', '1', '0');
INSERT INTO servicos VALUES ( '14', '05', 'ULTRASONOGRAFIA DE PARAFUSOS', 'A ultra sonografia de parafusos mostra um correto alongamento em todos os tipos de parafusos e a verificação de eventual trinca.', '1', '0');
INSERT INTO servicos VALUES ( '15', '06', 'CALIBRAÇÃO E AFERIÇÃO DE EQUIPAMENTOS', 'A NEW TORQUE recomenda, para maior qualidade e segurança, uma calibração caso a ferramenta tenha passado por reparos e uma por ano de rotina de prevenção. Todas as ferramentas calibradas seguem os padrões: ISO 1010; ISO 6789.', '1', '0');
INSERT INTO servicos VALUES ( '16', '08', 'TREINAMENTO E QUALIFICAÇÃO DE PESSOAL.', 'A NEW TORQUE oferece cursos com certificação para sua equipe de funcionários operar com precisão as ferramentas de torque.', '1', '0');
INSERT INTO servicos VALUES ( '17', '07', 'SERVIÇO DE ALINHAMENTO ÓPTICO', '<h1>Alinhamento &Oacute;ptico</h1>
<p>Todos os&nbsp;servi&ccedil;os de alinhamento &oacute;ptico s&atilde;o&nbsp;realizados por&nbsp;profissionais altamente capacitados dispondo de equipamentos de &uacute;ltima gera&ccedil;&atilde;o que&nbsp;garantem maior custo x benef&iacute;cio para&nbsp;a empresa&nbsp;e maior confiabilidade para os equipamentos. &nbsp;</p>', '1', '0');
INSERT INTO servicos VALUES ( '19', '99', 'SERVIÇOS DE FURAÇÕES E CORTE EM CONCRETO ARMADO - SISTEMA DIAMANTADO', '<p>Servi&ccedil;os de furos e cortes em concreto armado em: barragens, veadutos, sider&uacute;rgicas, ind&uacute;strias, edif&iacute;cios etc...</p>', '1', '0');



#
# CriaÃ§Ã£o da Tabela : servicos_executados
#
CREATE TABLE `servicos_executados` (
  `cd_servico_executado` int(2) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `cd_ordems` int(2) unsigned zerofill NOT NULL DEFAULT '99',
  `tit_servico_executado` varchar(100) DEFAULT NULL,
  `ds_servico_executado` longtext,
  `bl_publicars` enum('0','1') DEFAULT '0',
  `bl_tem_foto` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`cd_servico_executado`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC ;

#
# Dados a serem incluÃ­dos na tabela
#

INSERT INTO servicos_executados VALUES ( '10', '02', 'APERAM SOUTH AMERICA', '<p>Servi&ccedil;o executado na LAMINA&Ccedil;&Atilde;O DE TIRAS A QUENTE.</p>', '1', '1');
INSERT INTO servicos_executados VALUES ( '11', '08', 'LM ENGENHARIA', '<p>Servi&ccedil;o de torqueamento dos parafusos da mesa de giro do guindaste.</p>', '1', '0');
INSERT INTO servicos_executados VALUES ( '17', '04', 'RCO DA LAMINAÇÃO DE TIRAS A QUENTE APERM SOUTH AMERICA SA.', '<p>Servi&ccedil;os de quebra de torque e torqueamento dos elementos de fixa&ccedil;&atilde;o dos equipamentos da linha de&nbsp;lamina&ccedil;&atilde;o de tiras a quente &quot;LTQ&quot; da APERAM SOUTH AMERICA SA ( RCO da LTQ -&nbsp;2012).</p>
<p>Equipamentos:</p>
<p>* Edger</p>
<p>* Rougher</p>
<p>* Steckel</p>
<p>* Bobinadeira Final</p>', '1', '0');
INSERT INTO servicos_executados VALUES ( '18', '06', 'CELULOSE NIPO-BRASILEIRA S.A - CENIBRA', '<p>* Torqueamento dos parafusos do flange do eixo do aquecedor de ar a g&aacute;s.</p>
<p>* Torqueamento dos parafuasos do munh&atilde;o e ponta de eixo do filtro 121FL20.</p>
<p>&nbsp;</p>', '1', '0');
INSERT INTO servicos_executados VALUES ( '19', '99', 'WHITE MARTINS', '<p>&nbsp;SERVI&Ccedil;OS DE TORQUE NOS PARAF. DO FLANGE DO STRIPPER E-06</p>', '1', '0');



#
# CriaÃ§Ã£o da Tabela : usuario
#
CREATE TABLE `usuario` (
  `iUsuario` int(1) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `vUsuario` varchar(35) DEFAULT NULL,
  `vSenha` varchar(50) DEFAULT NULL,
  `vNome` varchar(35) DEFAULT NULL,
  `vEmail` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`iUsuario`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC ;

#
# Dados a serem incluÃ­dos na tabela
#

INSERT INTO usuario VALUES ( '4', 'adm', 'adm', '', '');



#
# CriaÃ§Ã£o da Tabela : videos
#
CREATE TABLE `videos` (
  `cd_video` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `cd_ordem` int(2) unsigned zerofill NOT NULL DEFAULT '99',
  `ds_data` varchar(15) DEFAULT NULL,
  `ds_titulo` longtext,
  `ds_local` longtext,
  `ds_link` longtext,
  `ds_info` longtext,
  `bl_publicar` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`cd_video`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC ;

#
# Dados a serem incluÃ­dos na tabela
#

INSERT INTO videos VALUES ( '0028', '02', '', 'RAD-50 PNEUMÁTICA', '', 'http://www.youtube.com/v/yGBDorRAzXM', 'RAD-50 PNEUMÁTICA ', '1');
INSERT INTO videos VALUES ( '0031', '08', '', 'Demo 1', '', 'http://www.youtube.com/v/hPzn0Dn4gMQ&feature=relmfu', 'Demo 1', '0');
INSERT INTO videos VALUES ( '0030', '06', '', 'DEMOSTRAÇÃO', '', 'http://www.youtube.com/v/T7RrRDJOys4&feature=channel&list=UL', 'DEMOSTRAÇÃO', '0');
INSERT INTO videos VALUES ( '0032', '04', '', 'Demo 2', '', 'http://www.youtube.com/v/wd7_6niC1Gs&feature=related', 'Demo 2', '0');
INSERT INTO videos VALUES ( '0033', '99', '', 'Demo 3', '', 'http://www.youtube.com/v/wd7_6niC1Gs&feature=related', 'Demo 3', '0');
INSERT INTO videos VALUES ( '0034', '99', '', 'Chave de torque IBT', '', 'http://www.youtube.com/v/wd7_6niC1Gs', 'Chave de torque IBT', '1');
INSERT INTO videos VALUES ( '0035', '99', '', 'Rad Demo', '', 'http://www.youtube.com/v/pvDMhh5RuXw&feature=BFa&list=UL-vYshpl3Ac0', 'Rad Demo', '1');
INSERT INTO videos VALUES ( '0036', '99', '', 'Rad Eletrônica', '', 'http://www.youtube.com/v/pvDMhh5RuXw&feature=BFa&list=ULpvDMhh5RuXw', 'Rad Eletrônica', '0');
INSERT INTO videos VALUES ( '0037', '99', '', 'CAMINHÃO FORA ESTRADA', '', 'http://www.youtube.com/v/LMFccHr0dAU', '', '0');
INSERT INTO videos VALUES ( '0038', '99', '2013-10-08', 'LLAVES CORTA ESPIGAS - NOVO TORQUE PARA ESTRUTURAS METÁLICAS', 'CHILE', 'http://www.youtube.com/v/3QRA9KLEJPw', '', '1');
INSERT INTO videos VALUES ( '0039', '99', '2013-10-08', 'LLAVES CORTA ESPIGAS', 'CHILE - CONTINUAÇÃO', 'http://www.youtube.com/v/XlzKol-94Ns', '', '1');
