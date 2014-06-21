<!DOCTYPE html>
<html>

	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no" />

	<head>
		<link rel="stylesheet" type="text/css" href="styles.css">
		
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
		
		<script>
			// Wait until the DOM has loaded before querying the document
			$(document).ready(function(){
				$('ul.tabs').each(function(){
					// For each set of tabs, we want to keep track of
					// which tab is active and it's associated content
					var $active, $content, $links = $(this).find('a');

					// If the location.hash matches one of the links, use that as the active tab.
					// If no match is found, use the first link as the initial active tab.
					$active = $($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);
					$active.addClass('active');

					$content = $($active[0].hash);

					// Hide the remaining content
					$links.not($active).each(function () {
						$(this.hash).hide();
					});

					// Bind the click event handler
					$(this).on('click', 'a', function(e){
						// Make the old tab inactive.
						$active.removeClass('active');
						$content.hide();

						// Update the variables with the new link and content
						$active = $(this);
						$content = $(this.hash);

						// Make the tab active.
						$active.addClass('active');
						$content.show();

						// Prevent the anchor's default click action
						e.preventDefault();
					});
				});
			});
			
		jQuery(function ($) {
			$(".more").hide();
			$('.button-read-more').click(function () {
				$(this).closest('.less').addClass('active');
				$(this).closest(".less").next().stop(true).slideDown("500");
			});
			$('.button-read-less').click(function () {
				$(this).closest('.less').removeClass('active');
				$(this).closest(".less").next().stop(true).slideUp("500");
			});
		});
		</script>
	</head>

<body>
<div class="back">
	<div data-role="panel" id="leftpanel3" data-position="left" data-display="overlay" data-theme="b" class="ui-panel ui-panel-position-left ui-panel-display-overlay ui-body-a ui-panel-animate ui-panel-closed">
	<ul data-role="listview">
		<li><a href="#" data-rel="close">Cafe AA</a></li>
		<li><a href="#" data-rel="close">Cafe Q</a></li>
		<li><a href="#" data-rel="close">Cafe R</a></li>
		<li><a href="#" data-rel="close">Cafe S</a></li>
		<li><a href="#" data-rel="close">Cafe WT</a></li>
	</ul>
	</div>
	
	<div class="wrapper">
		
		<div class="header">
			<img src="./logo.png" alt="Logo here" />
		</div>
		
		<div class="main">
		
			<div data-role="navbar" data-grid="d" style="width:99%">
				<ul>
					<li><a href="#" class="ui-btn-active">Mon</a></li>
					<li><a href="#">Tue</a></li>
					<li><a href="#">Wed</a></li>
					<li><a href="#">Thu</a></li>
					<li><a href="#" style="border-right-width: 1px;">Fri</a></li>
				</ul>
			</div><!-- /navbar -->

			<center style="font-size:10px; font-family:Tahoma; color: gray;">Developed by Team BradyRocks</span>
			<div class="push"></div>
		</div>
		<div class="footer">
			<p>Copyright (c) 2014</p>
		</div>
	</div>
</div>
</body>

</html>
