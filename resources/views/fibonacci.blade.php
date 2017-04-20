<!DOCTYPE html>
<html>
<head>
	<title>LOL</title>
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<script type="text/javascript" src="js/all.js"></script>
</head>
<body>
	<div id="el" class="container">
		<div class="row">
			<div class="col-md-12">
				<button class="btn btn-primary">HECHAME LA MANO</button>
			</div>		
		</div>
	</div>

</body>
<script type="text/javascript">
	new Vue({
		el: "#el",
		mounted: function(){
			alert("lol");
		}
	});
</script>
</html>