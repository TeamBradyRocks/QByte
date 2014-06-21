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
	<div data-role="panel" id="leftpanel3" data-position="left" data-swipe-close="true" data-display="overlay" data-theme="a" class="ui-panel ui-panel-position-left ui-panel-display-overlay ui-body-a ui-panel-animate ui-panel-closed">
		<li data-icon="delete"><a href="#" data-rel="close">Close</a></li>
        <div class="ui-panel-inner"><h3>Left Panel: Overlay</h3><p>This panel is positioned on the left with the overlay display mode. The panel markup is <em>after</em> the header, content and footer in the source order.</p><p>To close, click off the panel, swipe left or right, hit the Esc key, or use the button below:</p>
		<a href="#demo-links" data-rel="close" class="ui-btn ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left ui-btn-inline">Close panel</a></div>
        
        
        

	</div>
	
	<div class="wrapper">
		<div class="header">
			<img src="./logo.png" alt="Logo here" />
		</div>
		<div class="main">
		<a href="#leftpanel3" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-btn-mini">Overlay</a>
			<div class="toggle">
				<div class="less">
					<h1 class="button-read-more button-read" href="#read">Cafe AA</h1>
					<h1 class="button-read-less button-read" href="#read">Cafe AA</h1>
				</div>
				<div class="more" id="menu-1" style="display:none">
					  <ul class='tabs'>
						<li><a href='#menu1-tab1'>Mon</a></li>
						<li><a href='#menu1-tab2'>Tue</a></li>
						<li><a href='#menu1-tab3'>Wed</a></li>
						<li><a href='#menu1-tab4'>Thu</a></li>
						<li><a href='#menu1-tab5'>Fri</a></li>
					  </ul>
					  <div id='menu1-tab1'>
						<table width="100%" border="0">
							<tr>
							<td width="20%">Grill'd logo</td>
							<td width="70%">Menu Item</td>
							<td width="10%">$1.00</td>
							</tr>
							<tr>
							<td width="20%">Grill'd logo</td>
							<td width="70%">Menu Item</td>
							<td width="10%">$1.00</td>
							</tr>
							<tr>
							<td width="20%">Grill'd logo</td>
							<td width="70%">Menu Item</td>
							<td width="10%">$1.00</td>
							</tr>
							<tr>
							<td width="20%">Grill'd logo</td>
							<td width="70%">Menu Item</td>
							<td width="10%">$1.00</td>
							</tr>
							
						</table>
					  </div>
					  <div id='menu1-tab2'>
						<p>This is the 2nd tab.</p>
					  </div>
					  <div id='menu1-tab3'>
						<p>And this is the 3rd tab.</p>
					  </div>
					  <div id='menu1-tab4'>
						<p>Menu 4.</p>
					  </div>
					  <div id='menu1-tab5'>
						<p>Testing 123.</p>
					  </div>
				</div>
			</div>
			<h1>Cafe Q</h1>
			<h1>Cafe R</h1>
			<h1>Cafe S</h1>
			<h1>Cafe WT</h1>
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
