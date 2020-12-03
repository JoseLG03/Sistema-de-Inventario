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
			<h2>Actualizar datos</h2>
			<form id="ContactForm" action="">
				<div>
					<div class="wrapper">
						<div class="bg"><input type="text" class="input" /></div>
						Numero de serie:<br />
					</div>
					<div class="wrapper">
						<div class="bg"><input type="text" class="input" /></div>
						Equipo:<br />
					</div>
                     			<div class="wrapper">
						<div class="bg"><input type="text" class="input" /></div>
						Marca:<br />
					</div>
					<div class="wrapper">
						<div class="bg"><input type="text" class="input" /></div>
						Modelo:<br />
					</div>        
                     			<div class="wrapper">
						<div class="bg"><input type="text" class="input" /></div>
						Nombre del equipo:<br />
					</div>
                       			<div class="wrapper">
						<div class="bg"><input type="text" class="input" /></div>
						Capacidad:<br />
					</div>
					<div class="wrapper">
						<div class="bg">
                                                    <select name="status" class="sel">
                                                        <option>Baja</option>
                                                        <option>Asignacion</option>
                                                    </select>
                                                </div>
						Status:<br />
					</div>                                    
					<div class="wrapper">
						<div class="bg"><input type="text" class="input" /></div>
						Fecha de Compra:<br />
					</div>                 
					<div class="wrapper">
						<div class="bg">
							<textarea name="textarea" cols="1" rows="1"></textarea>
						</div>
                                                Comentarios:<br />
					</div>    
 					<div class="wrapper">
						<div class="bg">
                                                    <select name="ubicacion" class="sel">
                                                        <option>Oficinas</option>
                                                        <option>Sucursales</option>
                                                    </select>
                                                </div>
						Ubicación:<br />
					</div> 
					<div class="wrapper">
						<div class="bg">
                                                    <select name="sucursal" class="sel">
                                                        <option>Torreon nuevo</option>
                                                        <option>Prados verdes</option>
                                                        <option>Madero</option>
                                                        <option>Catedral</option>
                                                    </select>
                                                </div>
						Nombre de la sucursal:<br />
					</div>                                      
					<a href="#" class="button1" onClick="document.getElementById('ContactForm').submit()">Cancelar</a>

					<a href="#" class="button1" onClick="document.getElementById('ContactForm').reset()">Confirmar</a>
                                       
				</div>
			</form>
		</article>
          </section>
        <?php include('footer.php'); ?>
    </div>
</body>
</html> 
