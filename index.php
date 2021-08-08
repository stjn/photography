<?php header('Content-type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Stijn Out Photography</title>
		<?php include('architecture/php/load-externals.php'); ?>
	</head>
	<body class="catalog-page">
		<!-- Loading screen -->
		<aside id="loading">
			<i id="loading-spinner" class="fa fa-spin fa-circle-o-notch fa-2x spinner"></i>
		</aside>
		
		<header>
			<hgroup>
				<h1 id="title">Stijn Out</h1>
				<h2 id="subtitle">People & Places</h2>
			</hgroup>
		</header>
		
		<main id="catalog">
			<?php include('architecture/php/events.php'); ?>
		</main>
		
		<footer>
			<?php include('architecture/php/copyright.php'); ?>
		</footer>
		
		<script type="text/javascript">
			$(document).ready(function(){
				$(".event-info").each(function(){
					var eventHeight = $(this).height();
					var eventMargin = eventHeight * -0.5;
					$(this).css("margin-top", eventMargin + "px");
				});
				
				$(window).load(function(){
					$(".tile-location").each(function(){
						var locationWidth = $(this).find("a").width();
						$(this).css("width", locationWidth+"px");
					});
				
					$('#loading-spinner').fadeOut(500);
			        $('#loading').delay(500).fadeOut(750);
				});
				
				var monkey = "@";
				var extension = ".com";
				var brief = "hello" + monkey + "stijnout" + extension;
				var stuur = "ailt"
				$("#brievenbus").text(brief).attr("href", "m"+stuur+"o:"+brief);
				
			});
		</script>
	</body>
</html>