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
			<parent></parent>
		</div>

		
	</div>

	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script src="https://unpkg.com/vuex@3.1.2/dist/vuex.js"></script>
	<script src="/vuex/componentes_map_state/parent.js"></script>
	<script src="/vuex/componentes_map_state/child.js"></script>


	<script>
		const store = new Vuex.Store({
			state: {
				count: 0
			},
			mutations: {
				increment (state) {
					state.count++
				}
			}
		});

		new Vue({
			el: '#app',
			store,
		  	data: {
				message: "Usando vuex",
				tema: "Uso vuex para comunicação entre componentes"
			}
		});
	</script>
</body>
</html>