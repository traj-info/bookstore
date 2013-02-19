<!DOCTYPE html> 
<html> 
<head> 
	<title>Trajettoria BookStore</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head> 
<body> 

<div data-role="page" data-theme="a" id="spash" data-title="Trajettoria BookStore">

	<div data-role="header">
		<a href="" data-rel="back"/>Back</a>
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
	
	
	<a href="#detail" data-role="button" data-icon="star">Star button</a>
	
		<p>Hello world</p>		
	</div><!-- /content -->

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