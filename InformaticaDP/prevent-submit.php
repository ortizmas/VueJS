<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- versão de desenvolvimento, inclui avisos úteis no console  -->
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>
	
	<h4>Submit with vue JS</h4>

	<div id="app-10">
		{{ message }}

		<form v-on:submit="enviar" action="procesa.php" method="post">
			<input v-model="name" placeholder="Nome">
			<input v-model="lastname" placeholder="Sobrenome">
			<button type="submit">Enviar</button>
		</form>
	</div>

	<script>
		var app10 = new Vue({
			el: "#app-10",
			data: {
				name: "",
				lastname: "",
				message: ""
			},
			methods: {
				enviar: function (event) {
					if (this.name == "" || this.lastname == "") {
						this.message = "Complete o formulario";
						event.preventDefault();
					} else {
						this.message = "Ok"
					}
				}
			}
		});
		
	</script>
</body>
</html>