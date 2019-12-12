<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- versão de desenvolvimento, inclui avisos úteis no console  -->
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>
	<div id="app" class="container pt-5">
		<h2>{{message}}</h2>
		<h3>invertido: {{invertido}}</h3>

		<input type="text" class="form-control" v-model="message">
		<hr>

		<button class="btn btn-info" @click="contador++">+</button>
		<button class="btn btn-danger" @click="contador--">-</button>
		<h3>{{contador}}</h3>
		<div class="progress">
			<div class="progress-bar" role="progressbar" :style="{'width': contador + '%'}" :aria-valuenow="contador" aria-valuemin="0" aria-valuemax="100" :class="color">{{contador}}%</div>
		</div>


	</div>

	<script>
		var app = new Vue({
		  	el: '#app',
		  	data: {
				message: "Propiedades Computadas (computed)",
				contador: 0
			},
			computed: {
				invertido() {
					return this.message.split('').reverse().join('');
				},
				color() {
					return {
						'bg-danger' : this.contador <= 10,
						'bg-warning' : this.contador > 10 && this.contador < 50,
						'bg-success' : this.contador >= 50
					}
				}
				
			},
		});
	</script>
</body>
</html>