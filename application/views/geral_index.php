<?php
$url_img = "http://bookstore.trajettoria.com";
//$url_img = "http://localhost/bookstore";

define("DS", ",");
define("TS", ".");
?>

<!DOCTYPE html> 
<html> 
<head> 
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	
	<title><?php echo $page_title; ?></title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />

	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
	
	<meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
	
	<script>
	
	$(function(){
		var w = window.document.width;
		var widthItem = (w - 80)/3 + "px";

		$('.quadroItem').width(widthItem);
		$('.quadroImagem').width(((w-80)/6 - 20) + "px");
		$('.quadroImagem img').width(((w-80)/6 - 20) + "px");
		
	/*
		var menuStatus;
		var menuWidth = "250px";
	 
		$("a.showMenu").click(function(){
			if(menuStatus != true){
			$(".ui-page-active #mainArea").animate({
				marginLeft: menuWidth,
				marginTop: "250px",
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
	*/ 
	});
	
	
	
	</script>
	<style>
	.p-price { font-weight: bold; color: green; }
	</style>
</head> 
<body> 



<?php
if($cont_categories > 1) :
	$cat2 = $categories;
	foreach($categories as $i => $cat1):
		RenderPage($cat1, $i, $page_title, $url_img, $cat2, $cont_categories);
	endforeach;
endif;

function RenderPage($cat1, $i, $page_title, $url_img, $cat2, $cont_categories){

?>


<div data-role="page" id="splash" data-title="<?php echo $page_title; ?>">

	<!-- ======================== HEADER ================================= -->
	<div data-role="header" data-position="fixed">
	
		<a href="#popupCategories-<?php echo $i; ?>" data-rel="popup" data-icon="grid" data-theme="b" data-position-to="origin"/>Categorias</a>
	
		<h1><?php echo $page_title; ?></h1>

		<a href="#popupLogin-<?php echo $i; ?>" data-rel="popup" data-theme="b" data-position-to="window" data-transition="slideup"/>Login ou Cadastro</a>
		<div data-role="popup" id="popupLogin-<?php echo $i; ?>" class="ui-content" data-theme="a" data-overlay-theme="a" style="width: 300px;">
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

	<?php
	$f = new Item();
	if($cat1->featured != "")
	{
		$f->get_by_id($cat1->featured);
	}
	else
	{
		$f->order_by('id', 'random')->limit(1)->get();
	}

	?>
	<div style="width: 100%; background: #eee; border-left: 1px solid #333; position: relative; top: 0; left: 0; z-index: 200" id="mainArea">
		<!-- MAIN CONTENT -->
		<div class="ui-grid-c">
			<div class="ui-block-a" style="width: 25%; padding: 20px;">
				<img src="<?php echo $url_img; ?>/images/upload/<?php echo $f->image; ?>" width="100%"/>
			</div>
			<div class="ui-block-b" style="width: 40%; padding: 0 0 20px 0;">
				<h2><?php echo $f->title; ?></h2>
				<p><?php echo $f->authors; ?></p>
				<p><?php echo $f->edition; ?></p>
				<p>ISBN <?php echo $f->isbn; ?></p>
				<p><?php echo $f->pages; ?> pág.</p>
				<a href="#popupInfo" data-inline="true" data-role="button" data-mini="true" data-theme="c" data-icon="plus" data-rel="popup" data-position-to="window" data-transition="slideup"/>Mais informações</a>
				<div data-role="popup" id="popupInfo" class="ui-content" data-theme="c" data-overlay-theme="a" style="margin-left: 30px; margin-right: 30px;">
					<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Fechar</a>
					<h3>Mais informações</h3>
					<?php echo $f->notes; ?>
				</div>					

			</div>
			
			<div class="ui-block-c" style="width: 35%; padding: 0 20px 20px 20px;">
				<p style="font-size: 30px; font-weight: bold; text-align: center;"><span style="font-size: 18px">R$ </span><?php echo number_format($f->price, 2, DS, TS); ?></p>
				<a href="index.html" data-role="button" data-icon="check" data-theme="e">Comprar</a>
				<a href="index.html" data-role="button" data-theme="c" class="ui-disabled">Ler</a>
				<h3>Ambiente seguro</h3>
			</div>
		</div>
		
		<!-- COMEÇO GALERIA DE LIVROS MENORES -->
		<?php $cat1->item->get(); ?>
		<?php $c = 1; ?>
		<?php foreach($cat1->item as $it) : ?>
			<?php if ($f->id != $it->id) : ?>
				<div class="quadroItem" style="float: left; margin: 0 0 20px 20px;">
					<div class="quadroImagem" style="float: left; padding: 0 20px 0 0">
						<img src="<?php echo $url_img; ?>/images/upload/<?php echo $it->image; ?>" width="10" />
					</div>
					<div style="width: 50%; float: left;">
							<h4 style="margin-top: 0"><?php echo $it->title; ?></h4>
							<p><?php echo $it->authors; ?></p>
							<p><?php echo $it->edition; ?></p>
							<p>ISBN <?php echo $it->isbn; ?></p>
							<p><?php echo $it->pages; ?> pág.</p>
							<p class="p-price">R$ <?php echo number_format($it->price, 2, DS, TS); ?></p>
							<a href="#teste" data-inline="true" data-role="button" data-mini="true" data-theme="c" data-icon="plus">Abrir</a>
					</div>
				</div>
				<?php if ($c%3 == 0) : ?>
				<div style="clear: both;"></div>
				<?php endif; ?>
				<?php $c++; ?>
			<?php endif; ?>
		<?php endforeach; ?>

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
	<div id="popupCategories-<?php echo $i; ?>" data-role="popup" data-transition="slidedown" style="width: 250px; top: 11px; left: -14px;" data-theme="b">
		<ul data-role="listview" data-inset="true" data-theme="a">
			<?php 
			if($cont_categories > 1):
				foreach($cat2 as $categ):
			?>
				<li><a href="#"><?php echo $categ->title; ?></a><span class="ui-li-count"><?php echo $categ->item->count() ;?></span></li>	

				<?php endforeach; ?>
			<?php else: // 1 category only?>
			
			<?php endif; ?>
		</ul>
	</div>
	<!-- ======================== END SIDEBAR ================================= -->
	
</div><!-- /page -->
<?php
} // end function RenderPage
?>

</body>
</html>