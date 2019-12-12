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

	<div id="app2">
		{{ message3 }}
	</div>

	<script>
		var app = new Vue({
		  	el: '#app',
		  	data: {
		    	message: 'Olá mundo do vue!',
		    	message2: 'Outro message 2'
		  	}
		});

		var app2 = new Vue({
		  	el: '#app2',
		  	data: {
		    	message3: 'Olá mundo do vue mesage 3!'
		  	}
		});
	</script>
</body>
</html>