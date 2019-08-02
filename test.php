<!<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script type="text/javascript" src="test.js"></script>
</head>
<body>

<table>
	<th>producto</th>
	<th>precio</th>
	<th>cantidad</th>
	<th>valor</th>
</table>
<form id="miFormulario" >
<div class="field_wrapper">
    <div>
    	Nombre: <input type="text" id="id" name="field_name[]"  />
        Cantidad: <input type="text" id="id" name="field_cant[]"   />
        Precio: <input type="text" id="id" name="field_precio[]"  />
        <a href="javascript:void(0);" class="add_button" title="Add field"><img src="add.jpg" style="width: 20px;height: 20px" /></a>
    </div>
    
</div>

<input class="alert alert-success"  onclick="myFunction()"  name="subir"value="guardar" style="width: 100px;height: 20px">
</form>

<button onclick="processData()">Hacer Boleta</button>

<section id="contenedor">Aquí va la respuesta: </section>


<script type="text/javascript">
 
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
   var contador=0;
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div>Nombre: <input type="text" id="id" name="field_name[]"  /> Cantidad: <input type="text" id="id" name="field_cant[]" /> Precio: <input type="text" id="id" name="field_precio[]"  /><a href="javascript:void(0);" class="remove_button" title="Remove field"><img src="quitar.png" style="width: 20px;height: 20px"/></a></div>'; //New input field html 
    
    var x = 1; //Initial field counter is 1

    $(addButton).click(function(){ //Once add button is clicked
        if(x < maxField){ //Check maximum number of input fields
            contador=x++; //Increment field counter
            $(wrapper).append(fieldHTML); // Add field html
        }
    });
    $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});

</script>


</body>
</html>