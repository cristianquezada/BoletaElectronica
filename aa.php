<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Variable de JavaScript a PHP</title>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<!-- si no cargas la libreria de jquery, nunca te va a funcionar el AJAX -->
	
	
</head>
<body>

<input type="button" value="Imprime la variable PHP" onclick="imprime_variable_con_ajax()">

<br><br>

<section id="contenedor">Aquí va la respuesta: </section>

<br>

<script >

	function imprime_variable_con_ajax() {

		var mensaje_javascript = "Hola, vengo de JavaScript"; //se crea la variable en javascript

		$("#contenedor").load("result.php",{variable_pasada_javascript:mensaje_javascript});
		//este ajax es el más sencillo que hay, llama a respuesta_ajax.php y le pasa el contenido de la variable
	}
	
	</script>
</body>
</html>