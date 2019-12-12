<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- versão de desenvolvimento, inclui avisos úteis no console  -->
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>
	<div id="app-2">
	  	<span v-bind:title="message">
	    	Condiconales v-if
	  	</span>

	  	<h1 v-if="status">{{ message2 }}</h1>
	  	<h4 v-if="status" v-text="message2"></h4>

	  	<!--Two example v-if and v-else-->
	  	<h1 v-if="valor2">Valor 2 es verdadero</h1>
	  	<h1 v-else>Valor 2 é falso</h1>

	  	<!--Three example v-else-if-->
	  	<div v-if="valor3 === 'A'">
	  		Valor es igual a: <strong>A</strong>
	  	</div>
	  	<div v-else-if="valor3 === 'B'">
	  		Valor es igual a: <strong>B</strong>
	  	</div>
	  	<div v-else-if="valor3 === 'C'">
	  		Valor es igual a: <strong>C</strong>
	  	</div>
	  	<div v-else>
	  		Nõ é: <strong>A ne B ne C</strong>
	  	</div>


	</div>

	<h2 id="encabezado">Fora de vue js SOLO COM JAVASCRIPT</h2>

	<script>
		var app2 = new Vue({
		  el: '#app-2',
		  data: {
		  	status: true,
		    message: 'Condicionales if ' + new Date().toLocaleString(),
		    message2: 'Mostrando se status é = true',
		    name: '',
		    valor2: false,
		    valor3: 'A'

		  }
		});


		var x = document.getElementById("encabezado").innerHTML;
		console.log(x);
		console.log(x.length);

		if (x.length == 14) {
			console.log("São 14 carateres");
		} else {
			console.log("Não são 14 carateres");
		}
	</script>
</body>
</html>