<?php
$url = "http://bookstore.trajettoria.com";
?>

<!DOCTYPE html> 
<html> 
<head> 
	<title>Trajettoria Book Store</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />

	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
	
	<meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
	
	<script>
	$(function(){
		var menuStatus;
		var menuWidth = "250px";
	 
		$("a.showMenu").click(function(){
			if(menuStatus != true){
			$(".ui-page-active #mainArea").animate({
				marginLeft: menuWidth,
				marginRight: -menuWidth,
			  }, 300, function(){menuStatus = true});
			  return false;
			  } else {
				$(".ui-page-active #mainArea").animate({
				marginLeft: "0px",
				marginRight: "0px",
			  }, 300, function(){menuStatus = false});
				return false;
			  }
		});
	 
		$('.pages').live("swipeleft", function(){
			if (menuStatus){
			$(".ui-page-active #mainArea").animate({
				marginLeft: "0px",
				marginRight: "0px",
			  }, 300, function(){menuStatus = false});
			  }
		});
	 
		$('.pages').live("swiperight", function(){
			if (!menuStatus){
			$(".ui-page-active #mainArea").animate({
				marginLeft: menuWidth,
				marginRight: -menuWidth,
			  }, 300, function(){menuStatus = true});
			  }
		});
	 
		$("#sidebar li a").click(function(){
			var p = $(this).parent();
			if($(p).hasClass('active')){
				$("#sidebar li").removeClass('active');
			} else {
				$("#sidebar li").removeClass('active');
				$(p).addClass('active');
			}
		});
	 
	});
	</script>
	
</head> 
<body> 



<div data-role="page" id="spash" data-title="Trajettoria BookStore" style="background: transparent">

	<!-- ======================== HEADER ================================= -->
	<div data-role="header" data-position="fixed">
	
		<a href="" data-rel="back" data-icon="arrow-l" data-theme="b" />Voltar</a>
	
		<h1>Trajettoria Book Store</h1>

		<a href="#popupLogin" data-rel="popup" data-theme="b" data-position-to="window" data-transition="slideup"/>Login ou Cadastro</a>
		<div data-role="popup" id="popupLogin" class="ui-content" data-theme="a" data-overlay-theme="a" style="width: 300px;">
			<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Fechar</a>
			<h3>Login ou Cadastro</h3>
			<form action="form.php" method="post">
				<div data-role="fieldcontain" class="ui-hide-label" data-theme="c">
					<label for="email">E-mail</label>
					<input type="text" name="email" id="email" value="" placeholder="E-mail" data-theme="c"/>
				</div>
				<div data-role="fieldcontain" class="ui-hide-label">
					<label for="senha">Senha</label>
					<input type="password" name="senha" id="senha" value="" placeholder="Senha" data-theme="c"/>
				</div>
				<input type="submit" value="OK" data-theme="b"/>
			</form>
		</div>		
	

	</div><!-- /header -->
	<!-- ======================== END HEADER ================================= -->
	
	<!-- ======================== MAIN AREA  ================================= -->

	<div style="width: 100%; background: #eee; border-left: 1px solid #333; position: relative; top: 0; left: 0; z-index: 100" id="mainArea">
		<!-- MAIN CONTENT -->
		<div class="ui-grid-c">
			<div class="ui-block-a" style="width: 35%; padding: 20px;">
				<img src="<?php echo $url; ?>/images/upload/ed5_2.gif" width="100%"/>
			</div>
			<div class="ui-block-b" style="width: 45%; padding: 0 0 20px 0;">
				<a href="" data-rel="" data-icon="grid" data-theme="b" data-iconpos="notext" class="showMenu"/>Menu</a>
				<h2>Emergências Clínicas - Abordagem Prática</h2>
				<p>Herlon Saraiva Martins, Rodrigo Antonio Brandão Neto, Augusto Scalabrini Neto, Irineu Tadeu Velasco</p>
				<p>5ª edição, 2010</p>
				<p>Editora Manole</p>
				<p>240 páginas</p>
				<a href="#popupInfo" data-inline="true" data-role="button" data-mini="true" data-theme="c" data-icon="plus" data-rel="popup" data-position-to="window" data-transition="slideup"/>Mais informações</a>
				<div data-role="popup" id="popupInfo" class="ui-content" data-theme="c" data-overlay-theme="a" style="margin-left: 30px; margin-right: 30px;">
					<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Fechar</a>
					<h3>Mais informações</h3>
					<p>Montes augue nec! Velit ac dignissim, tincidunt dapibus dolor adipiscing cursus nunc, urna vut platea auctor ridiculus pulvinar elit sit. Placerat, pulvinar risus porta augue, scelerisque. Parturient. Nascetur odio sagittis ridiculus parturient urna tortor ultricies mid porttitor dignissim integer aenean augue, aenean urna a porttitor, pulvinar lacus <br>
					etiam arcu nunc aenean augue amet parturient? Dictumst sit quis magna magna. Mauris? Sociis urna et diam nec vut. Tristique eros parturient vel magna turpis, tortor augue? Pellentesque magna dolor nec augue dapibus, velit ac risus nunc. Lundium nisi magnis? Elementum tincidunt ultrices! Turpis, phasellus habitasse! </p>
				</div>					

			</div>
			
			<div class="ui-block-c" style="width: 20%; padding: 0 20px 20px 20px;">
				<p style="font-size: 30px; font-weight: bold; text-align: center;"><span style="font-size: 18px">R$ </span>55,80</p>
				<a href="index.html" data-role="button" data-icon="check" data-theme="e">Comprar</a>
				<a href="index.html" data-role="button" data-theme="c" class="ui-disabled">Ler</a>
				<h3>Ambiente seguro</h3>
			</div>
		</div>
		
		<!-- COMEÇO GALERIA DE LIVROS MENORES -->

		<div class="ui-grid-b">
			<div class="ui-block-a" style="width: 33%;">
			
				<div class="ui-grid-a">
					<div class="ui-block-a" style="width: 50%; padding: 0 20px 20px 20px;">
						<img src="<?php echo $url; ?>/images/upload/ed5_2.gif" width="100%"/>
					</div>
					<div class="ui-block-b" style="width: 50%; padding: 0 20px 20px 0px;">
						<h4>Emergências Clínicas - Abordagem Prática</h4>
						<p>Herlon Saraiva Martins, Rodrigo Antonio Brandão Neto, Augusto Scalabrini Neto, Irineu Tadeu Velasco</p>
						<p>5ª edição, 2010</p>
						<p>Editora Manole</p>
						<p>240 páginas</p>
						<a href="#teste" data-inline="true" data-role="button" data-mini="true" data-theme="c" data-icon="plus">Abrir</a>
					</div>
				</div><!-- /grid-a -->

			</div>
			<div class="ui-block-b" style="width: 33%;">
			
				<div class="ui-grid-a">
					<div class="ui-block-a" style="width: 50%; padding: 0 20px 20px 20px;">
						<img src="<?php echo $url; ?>/images/upload/ed5_2.gif" width="100%"/>
					</div>
					<div class="ui-block-b" style="width: 50%; padding: 0 20px 20px 0px;">
						<h4>Emergências Clínicas - Abordagem Prática</h4>
						<p>Herlon Saraiva Martins, Rodrigo Antonio Brandão Neto, Augusto Scalabrini Neto, Irineu Tadeu Velasco</p>
						<p>5ª edição, 2010</p>
						<p>Editora Manole</p>
						<p>240 páginas</p>
					</div>
				</div><!-- /grid-a -->
			
			</div>
			<div class="ui-block-c" style="width: 33%;">
				
				<div class="ui-grid-a">
					<div class="ui-block-a" style="width: 50%; padding: 0 20px 20px 20px;">
						<img src="<?php echo $url; ?>/images/upload/ed5_2.gif" width="100%"/>
					</div>
					<div class="ui-block-b" style="width: 50%; padding: 0 20px 20px 0px;">
						<h4>Emergências Clínicas - Abordagem Prática</h4>
						<p>Herlon Saraiva Martins, Rodrigo Antonio Brandão Neto, Augusto Scalabrini Neto, Irineu Tadeu Velasco</p>
						<p>5ª edição, 2010</p>
						<p>Editora Manole</p>
						<p>240 páginas</p>
					</div>
				</div><!-- /grid-a -->
			
			</div>
		</div><!-- /grid-b -->
		
		<!-- COMEÇO GALERIA DE LIVROS MENORES, SEGUNDA LINHA -->
		
		<div class="ui-grid-b">
			<div class="ui-block-a" style="width: 33%;">
			
				<div class="ui-grid-a">
					<div class="ui-block-a" style="width: 50%; padding: 0 20px 20px 20px;">
						<img src="<?php echo $url; ?>/images/upload/ed5_2.gif" width="100%"/>
					</div>
					<div class="ui-block-b" style="width: 50%; padding: 0 20px 20px 0px;">
						<h4>Emergências Clínicas - Abordagem Prática</h4>
						<p>Herlon Saraiva Martins, Rodrigo Antonio Brandão Neto, Augusto Scalabrini Neto, Irineu Tadeu Velasco</p>
						<p>5ª edição, 2010</p>
						<p>Editora Manole</p>
						<p>240 páginas</p>
					</div>
				</div><!-- /grid-a -->

			</div>
			<div class="ui-block-b" style="width: 33%;">
			
				<div class="ui-grid-a">
					<div class="ui-block-a" style="width: 50%; padding: 0 20px 20px 20px;">
						<img src="<?php echo $url; ?>/images/upload/ed5_2.gif" width="100%"/>
					</div>
					<div class="ui-block-b" style="width: 50%; padding: 0 20px 20px 0px;">
						<h4>Emergências Clínicas - Abordagem Prática</h4>
						<p>Herlon Saraiva Martins, Rodrigo Antonio Brandão Neto, Augusto Scalabrini Neto, Irineu Tadeu Velasco</p>
						<p>5ª edição, 2010</p>
						<p>Editora Manole</p>
						<p>240 páginas</p>
					</div>
				</div><!-- /grid-a -->
			
			</div>
			<div class="ui-block-c" style="width: 33%;">
				
				<div class="ui-grid-a">
					<div class="ui-block-a" style="width: 50%; padding: 0 20px 20px 20px;">
						<img src="<?php echo $url; ?>/images/upload/ed5_2.gif" width="100%"/>
					</div>
					<div class="ui-block-b" style="width: 50%; padding: 0 20px 20px 0px;">
						<h4>Emergências Clínicas - Abordagem Prática</h4>
						<p>Herlon Saraiva Martins, Rodrigo Antonio Brandão Neto, Augusto Scalabrini Neto, Irineu Tadeu Velasco</p>
						<p>5ª edição, 2010</p>
						<p>Editora Manole</p>
						<p>240 páginas</p>
					</div>
				</div><!-- /grid-a -->
			
			</div>
		</div><!-- /grid-b -->
	</div>
	<!-- ======================== END MAIN AREA ================================= -->
	
	<!-- ======================== FOOTER ================================= -->
	<div data-role="footer" data-position="fixed">
		<div data-role="navbar" data-iconpos="top">
			<ul>
				<li><a href="#" data-icon="home">Home</a></li>
				<li><a href="#" data-icon="grid">Comprados</a></li>
				<li><a href="#" data-icon="gear">Configurações</a></li>
			</ul>
		</div><!-- /navbar -->
	</div> 
	<!-- ======================== END FOOTER	 ================================= -->

	<!-- ======================== SIDEBAR ================================= -->
	<div id="sidebar" style="-webkit-overflow-scrolling: touch; width: 250px; z-index: -100; position: absolute; top: 44px; left: 0; background: #333;" data-theme="b">
		<ul data-role="listview" data-inset="false" data-theme="a">
			<li><a href="#">Ficção</a><span class="ui-li-count">201</span></li>
			<li><a href="#">Auto-ajuda</a><span class="ui-li-count">2</span></li>
			<li><a href="#">Revistas</a><span class="ui-li-count">17</span></li>
			<li><a href="#">Informática</a><span class="ui-li-count">158</span></li>
			<li><a href="#">Internacional</a><span class="ui-li-count">3</span></li>
			<li><a href="#">Ficção</a><span class="ui-li-count">201</span></li>
			<li><a href="#">Auto-ajuda</a><span class="ui-li-count">2</span></li>
			<li><a href="#">Revistas</a><span class="ui-li-count">17</span></li>
			<li><a href="#">Informática</a><span class="ui-li-count">158</span></li>
			<li><a href="#">Internacional</a><span class="ui-li-count">3</span></li>
		</ul>
	</div>
	<!-- ======================== END SIDEBAR ================================= -->
	
</div><!-- /page -->









<div data-role="page" data-theme="a" id="start">

	<div data-role="header">
		<h1>Trajettoria BookStore</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<ul data-role="listview" data-inset="true" data-filter="true">
			<li><a href="#">Acura</a></li>
			<li><a href="#">Audi</a></li>
			<li><a href="#">BMW</a></li>
			<li><a href="#">Cadillac</a></li>
			<li><a href="#">Ferrari</a></li>
		</ul>
	
	
	<a href="#" data-role="button" data-icon="star">Star button</a>
	
		<p>Hello world</p>		
	</div><!-- /content -->

</div><!-- /page -->


<div data-role="page" data-theme="b" id="detail"> 
	<div data-role="header"><h1>Details</h1></div> 
	<div data-role="content">
		<p>testandio</a>
		
	</div> 
	<div data-role="footer">
		<h4>Page Footer</h4>
	</div> 
</div> 


</body>
</html>