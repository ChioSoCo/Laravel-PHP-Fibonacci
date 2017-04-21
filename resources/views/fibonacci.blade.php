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
					    <h1 class="panel-title">Fibonacci Number</h1>
					</div>
					<div class="panel-body">
				    	<div class="row">
				    		<div class="col-md-12">
				    			<h4>Select a number between 0 - 100</h4>
				    		</div>
				    		<div class="col-md-6">
				    			<div class="form-inline">
				    				<label>n = </label>
				    				<input class="form-control" type="text" min="0" max="100" v-model="number">
				    				<button class="btn btn-primary" @click="calculate">CALCULATE</button>
				    			</div>
				    		</div>
				    	</div>
				    	<br>
				    	<div class="row">
				    		<div class="col-md-6" style="height: 100%; overflow: auto;">
				    			<table class="table table-responsive table-hover">
				    				<thead>
				    					<th>F(n)</th>
				    					<th>Value</th>				    					
				    				</thead>
				    				<tbody>
				    					<template v-for="row in listResults">
					    					<tr>
					    						<td>F(${row.n})</td>
					    						<td><strong>${row.value}</strong></td>				    						
					    					</tr>				    						
				    					</template>				    					
				    				</tbody>				    				
				    			</table>
				    		</div>
				    	</div>
				  	</div>
				  	<br>
				  	<br>
				  	<div class="panel-footer">Leonel Adame for Accenture 2017</div>
				</div>	
			</div>
		</div>
	</div>

</body>
<script type="text/javascript">

	var PATH = "{!! url('/') !!}";

	new Vue({
		el: "#el",
		data: {
			number : 0,
			listResults : []
		},	
		methods: {
			calculate : function() {			
				$.get( PATH + '/fibonacci/' +  this.number )
				.done(function(response){
					this.listResults = response;
				}.bind(this));
			}
		},
		delimiters: ['${', '}']
	});

</script>
</html>