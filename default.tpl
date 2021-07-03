<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Home | Boards for Africa</title>
		<meta name="description" content="Market for wood board distributor as well as Gypsum boards, drywall systems and suspended ceilings. We Offer A Cutting And Edging Service. Importers and Distributors of all MDF Products - wood your floor">                
		<meta name="keywords" content="Chipboard, Melamine faced Chipboard, Medium Density Fibreboard, Standard and tempered Hardboard, Coasted Hardboard, Plastic Laminate, Veneered Chipboard, Marine Plywood, Pine interior and exterior Plywood, Blockboard, Shutterboard, Mouldings and timber, Drawrunners, Hinges, Laminated click and glue flooring">
		<meta name="robots" content="index, follow">
		<meta name="revisit-after" content="21 days">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta property="og:title" content="Boards for Africa"> 
		<meta property="og:image" content="http://www.boardsforafrica.co.za/images/boards_for_africa.jpg"> 
		<meta property="og:url" content="http://www.boardsforafrica.co.za">
		<meta property="og:site_name" content="Boards for Africa">
		<meta property="og:type" content="website">
		<meta property="og:description" content="Market for wood board distributor as well as Gypsum boards, drywall systems and suspended ceilings. We Offer A Cutting And Edging Service. Importers and Distributors of all MDF Products - wood your floor">
		{include_php file="includes/css.php"}	
		<!-- Attach our CSS -->
	  	<link rel="stylesheet" href="/library/javascript/jquery-slideshow-carousel/css/slideshow.css">
		{literal}
		<style type="text/css">	
		.imagelink {
			text-decoration: none;
			border: none;
		}
		.imagelink img {
			border-style: none;
		}
		.slides-next, .slides-prev {display: none !important;}
		</style>
		{/literal}		
	</head>
	<body>
		<div id="wrapper">		
			{include_php file="includes/header.php"}		
			<div id="content">
				<div class="slideshow" data-visible="0"  data-transition="crossfade" data-loop="true" data-pagination="false" data-skip="true" data-auto="3000" data-autostop="false" >
					<ul class="carousel">
						<li class="slide">
							<img src="/images/slide/boards_for_africa_slide_1.jpg" width="984" height="495" alt="boards for africa - We make kitchens, tell us what you want" title="boards for africa - We make kitchens, tell us what you want" />
						</li>
						<li class="slide">
							<img src="/images/slide/boards_for_africa_slide_2.jpg" width="984" height="495" alt="boards for africa - the boards value your idea" title="boards for africa - the boards value your idea" />
						</li>
						<li class="slide">
							<img src="/images/slide/boards_for_africa_slide_3.jpg" width="984" height="495" alt="boards for africa - wood your floor, ever go this far?" title="boards for africa - wood your floor, ever go this far?"  />
						</li>							
					</ul>
				</div>
			</div>
			{include_php file="includes/footer.php"}	
		</div>
		<!-- Attach necessary JS -->
		<script type="text/javascript" src="/library/javascript/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="/library/javascript/jquery-slideshow-carousel/dist/slideshow.js"></script>
		{literal}
		<script>
			$(function()
			{
				// Create slideshow instances
				var $s = $('.slideshow').slides();

				// Access an instance API
				var api = $s.eq(0).data('slides');

				// Transition select
				$('select[name=transition]').on('change', function()
				{
					api.redraw( this.value );
				});
			});
		</script>	
		{/literal}		
	</body>
</html>