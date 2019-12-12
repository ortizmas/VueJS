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
		<button @click="message = 'Saludo cambiado'">Cambiar</button>
		<button @click="destruir">Desctruir</button>


	</div>

	<script>
		var app = new Vue({
		  	el: '#app',
		  	data: {
				message: "Ciclo de vida de Vue (Lifecycle) "
			},
			beforeCreate() {
				console.log('beforeCreate');
			},
			created() {
				console.log('created');
			},
			beforeMount() {
				console.log('beforeMount');
			},
			mounted() {
				console.log('mounted');
			},
			beforeUpdate() {
				console.log('beforeUpdate');
			},
			updated() {
				console.log('updated')
			},
			beforeDestroy() {
				console.log('beforeDestroy');
			},
			destroyed() {
				console.log('Destroyed');
			},
			methods: {
				destruir () {
					this.$destroy();
				}
			},
		});
	</script>
</body>
</html>