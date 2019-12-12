<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- versão de desenvolvimento, inclui avisos úteis no console  -->
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>
	<div id="example-2">
	  	<!-- `greet` é o nome de um método definido abaixo -->
		<button v-on:click="greet">Cumprimentar</button>

		<h3>Example two</h3>
		<button v-on:click="saludar('hola')">Enviar hola</button> <br>
		<button v-on:click="saludar2('Cahu')">Enviamos chau</button>

	</div>

	

	<script>
		var example1 = new Vue({
			el: '#example-2',
			data: {
				name: 'Vue JS'
			},
			methods: {
				greet: function(event) {
					// `this` dentro de métodos aponta para a instância Vue
					alert('Olá ' + this.name + '!')
					// `event` é o evento DOM nativo
					if (event) {
						alert(event.target.tagName)
					}
				},
				saludar: function(msj) {
					alert(msj + ' Meus amigos')
				},
				saludar2: function(msj) {
					alert(msj + ' Meus amigos')
				}
			},
		})

	</script>
</body>
</html>