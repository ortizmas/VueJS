<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- versão de desenvolvimento, inclui avisos úteis no console  -->
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body onclick="capturar(event)">
	<h1>Eventos con javascript</h1>

	<p>Haga click en cualquer elementi para saber que elemento desencadeno el evento onclick</p>

	<label for="">Prueba</label>
	<button>Bóton 1</button>

	<p id="demo">Etiqueta p con id demo</p>

	<script>
		function capturar(event){
			var x = event.target;
			//console.log(x);
			document.getElementById("demo").innerHTML = "Desencadena por elemento: " + x.tagName;
		}

	</script>
</body>
</html>