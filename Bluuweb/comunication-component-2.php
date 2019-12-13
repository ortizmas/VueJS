<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- versão de desenvolvimento, inclui avisos úteis no console  -->
	<!--https://www.youtube.com/watch?v=Hcpegt05kI8&list=PLPl81lqbj-4J-gfAERGDCdOQtVgRhSvIT&index=12-->
	
</head>
<body>
	<div id="app" class="container pt-5">
		<div class="jumbotron jumbotron-fluid p-4">
			<h1 class="display-4">{{message}}</h1>
			<p class="lead">{{tema}}</p>
			<hr class="my-4">
			<parent_component></parent_component>
		</div>

		
	</div>

	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script src="components/parent.js"></script>
	<script src="components/child.js"></script>


	<script>
		
		new Vue({
		  	el: '#app',
		  	data: {
				message: "Comunicación entre componentes enviando informacion del componente child a parent",
				tema: "Uso de props"
			}
		});
	</script>
</body>
</html>