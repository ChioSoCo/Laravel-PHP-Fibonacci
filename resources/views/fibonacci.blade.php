<!DOCTYPE html>
<html>
<head>
	<title>Sucesión de Fibonacci</title>
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<script type="text/javascript" src="js/all.js"></script>
</head>
<body>

	<div id="el" class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-primary" style="height: 100%;">
					<div class="panel-heading">
					    <h1 class="panel-title">Sucesión de Fibonacci</h1>
					</div>
					<div class="panel-body">
				    	<div class="row">
				    		<div class="col-md-12">
				    			<h4>Seleccione el número para calcular la serie entre 0 - 100</h4>
				    		</div>
				    		<div class="col-md-6">
				    			<div class="form-group">
				    				<input class="form-control" type="number" min="0" max="100">
				    			</div>
				    		</div>
				    	</div>
				  	</div>
				  	<div class="panel-footer">Leonel Adame for Accenture 2017</div>
				</div>	
			</div>
		</div>
	</div>

</body>
<script type="text/javascript">

	new Vue({
		el: "#el",
		mounted: function(){
			//alert("lol");
		}
	});

</script>
</html>