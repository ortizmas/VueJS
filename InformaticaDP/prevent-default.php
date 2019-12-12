<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- versão de desenvolvimento, inclui avisos úteis no console  -->
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>
	<!-- <div>
		<h4>Ejemplo con event preventDefault() en javascrip</h4>

		<a id="enlace" href="https:google.com">Ir a google</a>

		Marque el checkbook: <input id="myChk" type="checkbox">	
	</div> -->

	<div id="form">
		<form id="myForm" action="procesa.php">
			Nome: <input type="text" name="" id="">
			Sobrenome: <input type="text" name="" id="">
			<input type="button" onclick="myFunction()" value="Enviar">
		</form>
	</div>

	

	<script>

		// document.getElementById("enlace").addEventListener("click", 
		// 	function(event){
		// 			event.preventDefault();
		// 	}
		// )
	
		// document.getElementById("myChk").addEventListener("click", 
		// 	function(event){
		// 		event.preventDefault();
		// 	}
		// )

		function myFunction(event) {
			event.preventDefault();
			document.getElementById("myForm").submit();
		}
	</script>
</body>
</html>