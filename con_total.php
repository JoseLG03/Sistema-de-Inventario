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

</head>
<body id="page1">
    <div class="main">
        <!-- content -->
        <section id="content">
        <?php include('encabezado.php'); ?>
        <?php include('menu.php'); ?>
		<article class="col2 pad_left1">
			<h2>Consulta por todas las Sucursales</h2>
			<form id="ContactForm" action="">
                                <div class="wrapper">
                                        Resultado de la busqueda<br />
                                        <a href="actualizar.php" class="button1" onClick="document.getElementById('ContactForm').submit()">Exportar a Excell</a>
				</div>
			</form>
		</article>
          </section>
        <?php include('footer.php'); ?>
    </div>
</body>
</html> 
