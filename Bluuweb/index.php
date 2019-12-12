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
	  {{ message }}
	  <hr>
	  {{ message2 }}
	</div>

	<script>
		var app = new Vue({
		  	el: '#app',
		  	data: {
		    	message: 'Olá mundo do vue!',
		    	message2: 'Outro message 2'
		  	}
		});
	</script>
</body>
</html>