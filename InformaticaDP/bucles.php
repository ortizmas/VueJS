<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- versão de desenvolvimento, inclui avisos úteis no console  -->
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>
	<div id="app-4">
	  	<span>
	    	BUCLES E ARREGLOS
	  	</span>

	  	<ul>
	  		<li v-for="item in items">{{ item }}</li>
	  	</ul>

	  	<div v-for="color in colors">{{ color.name }}</div>

		<h2>Lista não ordenada segundo exemplo</h2>
		<ul>
			<li v-for="(country, index) in countries">{{ index }} - {{ country.name }}</li>
		</ul>

		<h2>Objetos</h2>
		<ul>
			<li v-for="value in objeto">{{ value }}</li>
		</ul>

		<h2>Objetos e uso de value and key</h2>
		<ul>
			<li v-for="(value, key) in objeto">{{key}} : {{ value }}</li>
		</ul>

		<h2>Objetos e uso de indice, value and key</h2>
		<ul>
			<li v-for="(value, key, index) in objeto">{{index}} : {{key}} - {{ value }}</li>
		</ul>

		<h2>Rango de enteros</h2>
		<div>
			<span v-for="n in 10">{{n}} <br></span>
		</div>

	</div>

	

	<script>
		var app4 = new Vue({
		  	el: '#app-4',
		  	data: {
		  		items: [1,2,3,4,5,6],
		  		colors: [
		  			{name: 'Azul'},
		  			{name: 'Preto'},
		  			{name: 'Branco'},
		  			{name: 'Lilaz'},
		  		],
		  		countries: [
		  			{name: 'Peru'},
		  			{name: 'Brasil'},
		  			{name: 'Colombia'},
		  			{name: 'Argentina'},
		  		],
				objeto: {
					name: 'Eber',
					lastname: 'Ortiz',
					year: 2020
				}

		  	}
		});

	</script>
</body>
</html>