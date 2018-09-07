<!DOCTYPE html>
<html>
<head>
	<title>Belajar jQuery</title>

	<script type="text/javascript" src="jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<script type="text/javascript" src="bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#modal').hide();
			$('#oke').click(function(event) {
				$('#modal').toggle();
			});
		});
	</script>

</head>
<body>
	<button id="oke">Show Hide</button>
	<div id=modal" class="modal fade">
		<h1>Ini Modal Aawal Belajar Jquery</h1>
	</div>

</body>
</html>