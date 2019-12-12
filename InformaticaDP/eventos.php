<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- versão de desenvolvimento, inclui avisos úteis no console  -->
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>
	<div id="example-1">
	  	<button v-on:click="counter += 1">Adiciona 1</button>
	  	<p>Quantas vezes o botão acima foi clicado: {{ counter }}</p>

	  	<button v-on:click="counter2 -= 1">Restar - 1</button>
	  	<p>Quantas vezes o botão acima foi clicado: {{ counter2 }}</p>
	</div>

	

	<script>
		var example1 = new Vue({
			el: '#example-1',
			data: {
				counter: 0,
				counter2:50
			}
		})

	</script>
</body>
</html>