<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- versão de desenvolvimento, inclui avisos úteis no console  -->
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>
	<div id="app">
		<input type="text" v-model="nuevaFruta" placeholder="Nome">
		<button @click="agregarFruta">Agregar</button>

		<ul>
			<li v-for="fruta in frutas">{{fruta.name}} - {{fruta.cantidad}}</fruta></li>
		</ul>
	</div>

	<script>
		var app = new Vue({
		  	el: '#app',
		  	data: {
		    	frutas: [
					{name: 'Manga', cantidad: 20},
					{name: 'Limon', cantidad: 10},
				],
				nuevaFruta: ''
			  },
			  methods: {
				  	agregarFruta () {
						this.frutas.push({
							name: this.nuevaFruta, cantidad: 20
						}),
						this.nuevaFruta = ''
				  	}
			  },
		});
	</script>
</body>
</html>