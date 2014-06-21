<!DOCTYPE html>
<html>
<head>
	<title>Page Title</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
	<script type='text/javascript' src='https://cdn.firebase.com/js/client/1.0.15/firebase.js'></script>
	<script type='text/javascript' src='https://cdn.firebase.com/js/simple-login/1.6.0/firebase-simple-login.js'></script>
	
	<script>
		 $(document).ready(function() 
		 {
			// executes when HTML-Document is loaded and DOM is ready
			var dataRef = new Firebase('https://qbyte.firebaseio.com');
			dataRef.on('value', function(snapshot) {
			  alert('fred’s first name is ' + JSON.stringify(snapshot.val()));
			});
		 });  
	</script>
	
</head>
<body>

<div data-role="page">
	<p id="demo"></p>

    <div data-role="panel" data-display="push" data-theme="b" id="nav-panel">
        <ul data-role="listview">
            <li data-icon="delete"><a href="#" data-rel="close">Close menu</a></li>
                <li><a href="#panel-responsive-page2">Café AA</a></li>
                <li><a href="#panel-responsive-page2">Café Q</a></li>
				<li><a href="#panel-responsive-page2">Café R</a></li>
				<li><a href="#panel-responsive-page2">Café S</a></li>
				<li><a href="#panel-responsive-page2">Café WT</a></li>
        </ul>
    </div><!-- /panel -->

	<div data-role="header">
		<!--<a href="#nav-panel" data-role="button" data-inline="true" data-icon="bars" class="ui-link ui-btn-left ui-btn ui-icon-bars ui-btn-icon-top ui-btn-inline" style="position: absolute;top: 20%;" role="button">Select Cafe</a>-->
		<h1><img src="./logo.png" alt="Logo here" /></h1>
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<ul data-role="listview" data-inset="true" data-divider-theme="a">
			<li data-role="list-divider">Mail</li>
			<li><a href="#">Inbox</a></li>
			<li><a href="#">Outbox</a></li>
			<li data-role="list-divider">Contacts</li>
			<li><a href="#">Friends</a></li>
			<li><a href="#">Work</a></li>
			</ul>
	</div><!-- /content -->

	<div data-role="footer">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page -->

</body>
</html>