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
	    	Pare o mouse sobre mim e veja a dica interligada dinamicamente!
	  	</span>

	  	<h1>{{ message2 }}</h1>
	  	<h4 v-text="message2"></h4>

	  	<input type="text" v-model="name">
	  	<p>Texto ingresado: {{ name }}</p>
	</div>

	<script>
		var app2 = new Vue({
		  el: '#app-2',
		  data: {
		    message: 'Você carregou esta página em ' + new Date().toLocaleString(),
		    message2: 'Utilizando binding vue',
		    name: ''
		  }
		});
	</script>
</body>
</html>