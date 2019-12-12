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
	<div id="app">
		<input type="text" v-model="nuevaFruta" @keyup.enter="agregarFruta" placeholder="Nome">
		<button @click="agregarFruta">Agregar</button>

		<ul>
			<li v-for="fruta in frutas">
				<input type="number" v-model.number="fruta.cantidad">
				{{fruta.name}}
				<button @click="fruta.cantidad++">+</button>
				<span v-if="fruta.cantidad == 0">- Sem stock</span>
			</li>
		</ul>
		<h4>Total: {{sumarFrutas}}</h4>
	</div>

	<script>
		var app = new Vue({
		  	el: '#app',
		  	data: {
		    	frutas: [
					{name: 'Manga', cantidad: 20},
					{name: 'Limon', cantidad: 0},
				],
				nuevaFruta: '',
				total: 0
			  },
			  methods: {
				  	agregarFruta () {
						this.frutas.push({
							name: this.nuevaFruta, cantidad: 20
						}),
						this.nuevaFruta = ''
				  	}
			  },
			  computed: {
				  sumarFrutas() {
					this.total = 0;
					for(fruta of this.frutas){
						this.total = this.total + fruta.cantidad
					}

					return this.total
				  }
			  },
		});
	</script>
</body>
</html>