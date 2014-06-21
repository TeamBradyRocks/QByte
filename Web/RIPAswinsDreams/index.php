<!DOCTYPE html>
<html>

	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no" />

	<head>
		<link rel="stylesheet" type="text/css" href="styles.css">
		
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		
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
			$('body').on('click touchstart', '.button-read-more', function() {
				$(this).closest('.less').addClass('active');
				$(this).closest(".less").next().stop(true).slideDown("500");
			});
			$('body').on('click touchstart', '.button-read-less', function() {
				$(this).closest('.less').removeClass('active');
				$(this).closest(".less").next().stop(true).slideUp("500");
			});
		});
	</script>	
	
	<script type='text/javascript' src='https://cdn.firebase.com/js/client/1.0.15/firebase.js'></script>
	<script type='text/javascript' src='https://cdn.firebase.com/js/simple-login/1.6.0/firebase-simple-login.js'></script>
	</head>

<body>
<div class="back">
	<!--
	<div data-role="panel" id="leftpanel3" data-position="left" data-display="overlay" data-theme="b" class="ui-panel ui-panel-position-left ui-panel-display-overlay ui-body-a ui-panel-animate ui-panel-closed">
	<ul data-role="listview">
		<li><a href="#" data-rel="close">Cafe AA</a></li>
		<li><a href="#" data-rel="close">Cafe Q</a></li>
		<li><a href="#" data-rel="close">Cafe R</a></li>
		<li><a href="#" data-rel="close">Cafe S</a></li>
		<li><a href="#" data-rel="close">Cafe WT</a></li>
	</ul>
	</div>
	-->
	<div class="wrapper">
		<div class="header">
			<img src="./logo.png" alt="Logo here" />
		</div>
		<div class="main">
<!--		  
		<ul class='tabs'>
			<li><a href='#tab1'>Mon</a></li>
			<li><a href='#tab2'>Tue</a></li>
			<li><a href='#tab3'>Wed</a></li>
			<li><a href='#tab4'>Thu</a></li>
			<li><a href='#tab5'>Fri</a></li>
		</ul>
-->
		<p id="day1"></p>
		<div id="toggle">
			<div id="magic"></div>
		<!-- Pull from Firebase and dynamically generate menu -->
		<script>
		 $(document).ready(function() 
		 {
			// get the current weekday
			var d = new Date();
			var weekday = new Array(7);
			weekday[0]=  "Friday";
			weekday[1] = "Monday";
			weekday[2] = "Tuesday";
			weekday[3] = "Wednesday";
			weekday[4] = "Thursday";
			weekday[5] = "Friday";
			weekday[6] = "Monday";
			
			var day = weekday[d.getDay()];
			document.getElementById('day1').innerHTML = "<p><center>The menu for " + day + ":</center></p>";
			// executes when HTML-Document is loaded and DOM is ready
			var dataRef = new Firebase('https://qbyte.firebaseio.com');
			dataRef.on('value', function(snapshot) {
			  var handle = snapshot.val();
			  var handle_Cafes = Object.keys(handle);
			  
			  for (i=0; i<handle_Cafes.length; i++){
				var key = handle_Cafes[i];
				var val = handle[key];
				var sub_key = day;
				var sub_val = val[sub_key];
				var myid = 'menu' + String(i);
				var iDiv = document.createElement("div");
				iDiv.id = myid;
				iDiv.className = myid;
				document.getElementById('magic').appendChild(iDiv);

				var myHTML = '<div class="less"><img src="./ic_population.png" /><h1 class="button-read-more button-read" href="#read">Caf&eacute; ' + key + '</h1><h1 class="button-read-less button-read" href="#read">Caf&eacute; ' + key + '</h1></div><div class="more" id="menu-1" style="display:none"><table width="100%" border="0">';
				
				
				for (j=1; j<sub_val.length; j++) {
					var test = sub_val[j];
					//alert(test)
					myHTML = myHTML + '<tr><td width="20%"><b>' + test['Cafe'] + '</b></td><td width="70%">' + test['Food'] + '</td><td width="10%" style="text-align:right;">$' + test['Price'] + '</td></tr>';
					}
					
				myHTML = myHTML + '</table></div>';
				iDiv.innerHTML = myHTML;
			  }
			});
		});  
		</script>

			<center style="font-size:10px; font-family:Tahoma; color: gray;">Developed by Team BradyRocks</span>
			<div class="push"></div>
		</div>
	</div>
</div>
</body>

</html>
