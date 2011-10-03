<!DOCTYPE HTML>
<html>
<head>
<title>Paathshaala</title>
<?php
	include 'source.php';
	echo $header;
?>
</head>
<body>
<div id='topbar'></div>
<div id='container'>
	<?php	echo $topNotLoggedIn;
			echo $feedback; ?>
	<div id="indexMesssage">
	Developer Meetup was a huge success. Thanks to all who attended the event. <a href="https://github.com/nitcalicut/Paathshaala/wiki/Paathshaala-Developer-Meetup"> More info</a> <span id="cross" class="news">X</span>
	</div>
</div><!-- /container -->
<?php	echo $bottomBar; ?>
<div id="bottombar"></div>
<script type="text/javascript">
$(document).ready(function() {
	updateStoryBox('Featured')
	updateStoryBox('Popular')
	updateStoryBox('TopRated')
});
</script>
<script src='js/ui.js' type='text/javascript'></script>
</body>
</html>

