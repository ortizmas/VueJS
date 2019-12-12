<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- versão de desenvolvimento, inclui avisos úteis no console  -->
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>
	<div id="app-8">
		<h1>{{texto}}</h1>
		
		<!--Mostra o alert quando faço click dentro do input-->
		<input v-model="texto" @click="ingresarTexto">

		<!--Mostra o alert fora do input quando faço click-->
		<input v-model="texto2" @change="ingresarTextoOut">

		<!-- <input v-model="texto2" v-on:click.self="ingresarTextoOut"> -->
		<input v-model="texto3" v-on:click.once="ingresarTexto3">


	</div>

	

	<script>
		var app8 = new Vue({
			el: '#app-8',
			data: function() {
				return {
					texto: 'Texto de prueba',
					texto2: 'Texto2 de prueba',
					texto3: 'Texto3 solo executa 1 vez'

				}
			},
			methods: {
				ingresarTexto: function() {
					alert('El texto es: ' + this.texto)
				},
				ingresarTextoOut: function() {
					alert('El texto es: ' + this.texto2)
				},
				ingresarTexto3: function() {
					alert('El texto es: ' + this.texto3)
				}
			},
		})

	</script>
</body>
</html>