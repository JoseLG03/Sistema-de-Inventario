<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script> 
<script type="text/javascript" src="js/Myriad_Pro_italic_600.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_italic_400.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>

<script type="text/javascript" src="js/validacion.js"></script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<body id="page1">
    <div class="main">
        <!-- content -->
        <section id="content">
        <?php include('encabezado.php'); ?>
        <?php include('menu.php'); ?>
<article class="col2 pad_left1">
			<h2>Reasignacion</h2>
                        <form id="ContactForm" action="reasignacion_proceso.php" name="frm_reasignacion" method="get">

				<div>
					<div class="wrapper">
						<div class="bg"><input type="text" class="input" name="num_serie" id="num_serie" /></div>
						Numero de serie:<br />
					</div>                               
                                    <a href="#" class="button1" onclick="return valida_reasignacion()">Reasignar</a>
				</div>
			</form>
		</article>
          </section>
        <?php include('footer.php'); ?>
    </div>
</body>
</html> 

